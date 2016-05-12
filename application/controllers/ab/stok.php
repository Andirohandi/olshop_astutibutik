<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stok extends CI_Controller {

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
		$data['title'] 	= "Pembelian | AstutiButik";
		$data['view'] 	= "admin/stok/vwStok";
		$data['ktgr']	= $this->m_kategori->getSelectOption();
		
		$this->load->view('admin/vwIndex',$data);
	}
	
	function read($pg=1){
		$limit 		= $_POST['limit'];
		$kategori 	= $_POST['kategori'];
		$key 		= trim($_POST['key']);
		$offset 	= ($limit*$pg)-$limit;

		$page = array();
		
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->m_stok->getSelectCount($key,$kategori);
		$page['current'] 	= $pg;
		$page['list'] 		= gen_paging($page);
		
		$data['paging'] 	= $page;
		$data['list'] 		= $this->m_stok->getSelectAll($key, $kategori, $limit, $offset);
		
		$this->load->view('admin/stok/vwList', $data);
		
	}
}
	