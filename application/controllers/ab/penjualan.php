<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('loginAdmin'))
		{
			redirect('home/login');
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model(array('m_barang','m_kategori','m_pembelian','m_stok'));
		$this->load->helper('url');
	}
	
	function index(){
		$data['title'] 	= "Penjualan | AstutiButik";
		$data['view'] 	= "admin/penjualan/vwPenjualan";
		$data['ktgr']	= $this->m_kategori->getSelectOption();
		
		$this->load->view('admin/vwIndex',$data);
	}
	
	public function read($pg=1)
	{
		$limit 		= $_POST['limit'];
		$kategori 	= $_POST['kategori'];
		$key 		= trim($_POST['key']);
		$offset 	= ($limit*$pg)-$limit;

		$page = array();
		
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->m_pembelian->getSelectCount($key,$kategori);
		$page['current'] 	= $pg;
		$page['list'] 		= gen_paging($page);
		
		$data['paging'] 	= $page;
		$data['list'] 		= $this->m_pembelian->getSelect($key, $kategori, $limit, $offset);
		
		$this->load->view('admin/pembelian/vwList', $data);
		
	}
	
	function input($id='',$msg = ''){
		if($id){
			$id = decode($id);
		}else {
			$id = 0;
			
		}
		$data['id_']	= encode($id);
		$data['kode_pmb']	= $this->m_pembelian->getCode();
		$data['pmb'] 	= $this->m_pembelian->getDetail(array('a.ID_PMB' => $id));
		$data['title'] 	= "Input Master Barang | AstutiButik";
		$data['view'] 	= "admin/pembelian/vwInput";
		$data['msg'] 	= $msg;
		
		$this->load->view('admin/vwIndex',$data);
	}
}
	