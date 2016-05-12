<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
			if(!$this->session->userdata('loginAdmin'))
			{
				redirect('home/login');
			}
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('m_kategori');
			$this->load->helper('url');
	}
	
	
	public function index()
	{
		$data['title'] = "Kategori | AstutiButik";
		$data['titlepage'] = "Master Kategori";
		$data['view'] = "admin/kategori/vwKategori";
		
		$this->load->view('admin/vwIndex',$data);
	}
	
	public function create()
	{
		$this->load->library('form_validation');
		
		$nama = strtoupper(trim(mysql_real_escape_string($_POST['svNama'])));
		$status = trim(mysql_real_escape_string($_POST['svStatus']));
		$keterangan = trim(mysql_real_escape_string($_POST['svKeterangan']));
		$url = str_replace(' ', '-',strtolower($nama));
		
		
		
		$data = array(
			'NAMA_KTGR' => $nama,
			'STATUS' => $status,
			'KETERANGAN' => $keterangan,
			'URL' => $url
		);
	
		$qry = $this->m_kategori->getInsert($data);
		
		if(!$qry)
		{
			$dt = array(
				'st' => 1
			);
		}else
		{
			$dt = array(
				'st' => 2,
				'msg' => 'Periksa kembali inputan anda'
			);
		}

		echo json_encode($dt);
	}
	
	public function read($pg=1)
	{
		
		$limit 		= $_POST['limit'];
		$status 	= $_POST['status'];
		$key 		= $_POST['key'];
		$offset 	= ($limit*$pg)-$limit;

		$page = array();
		
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->m_kategori->getSelectCount($status,$key);
		$page['current'] 	= $pg;
		$page['list'] 		= gen_paging($page);
		
		$data['paging'] 	= $page;
		$data['list'] 		= $this->m_kategori->getSelect($status, $key, $limit, $offset);
		
		$this->load->view('admin/kategori/vwList', $data);
		
	}
	
	public function update()
	{
		$id = trim(mysql_real_escape_string($_POST['edId']));
		$nama = strtoupper(trim(mysql_real_escape_string($_POST['edNama'])));
		$status = trim(mysql_real_escape_string($_POST['edStatus']));
		$keterangan = trim(mysql_real_escape_string($_POST['edKeterangan']));
		$url = str_replace(' ', '-',strtolower($nama));
		$dt = array();
		
		$data = array(
			'NAMA_KTGR' => $nama,
			'STATUS' => $status,
			'KETERANGAN' => $keterangan,
			'URL' => $url
		);
		
		$qry = $this->m_kategori->getUpate($data,$id);
		
		if(!$qry)
		{
			$dt = array(
				'st' => 1
			);
		}else
		{
			$dt = array(
				'st' => 2,
				'msg' => 'Periksa kembali inputan anda'
			);
		}
		
		echo json_encode($dt);
	}
	
	public function delete()
	{
		$id = trim(mysql_real_escape_string($_POST['i']));
		
		$this->m_kategori->getDelete($id);
		
		$dt = array(
			'rs' => 1
		);
		
		echo json_encode($dt);
	}
	
	
	//Fungsi Fungsi Tambahan
	
	function readCheckName($nm)
	{
		$nama = str_replace('%20', '-',strtolower(trim(mysql_real_escape_string($nm))));
		$dt = array();
		
		$qry = $this->m_kategori->getDbName($nama);
		
		if($qry->num_rows() > 0)
		{
			$dt = array("result"=>1);
		}else{
			$dt = array("result"=>0);
		}
		
		echo json_encode($dt);
		
	}
}