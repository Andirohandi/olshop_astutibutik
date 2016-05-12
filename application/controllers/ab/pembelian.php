<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian extends CI_Controller {

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
		$data['view'] 	= "admin/pembelian/vwPembelian";
		$data['ktgr']	= $this->m_kategori->getSelectOption();
		
		$this->load->view('admin/vwIndex',$data);
	}
	
	public function create(){

		$id = decode($_POST['id_pmb']);
		
		$KODE_BRG 	= trim(mysql_real_escape_string($_POST['kode_brg']));
		$TGL_PMB	= trim(mysql_real_escape_string($_POST['tgl_pmb']));
		$HARGA_BELI = trim(mysql_real_escape_string($_POST['harga_beli']));
		$JUMLAH		= trim(mysql_real_escape_string($_POST['jumlah']));
		$KETERANGAN = trim(mysql_real_escape_string($_POST['keterangan']));
		$KODE_PMB	= trim(mysql_real_escape_string($_POST['kode_pmb']));
		$psn 		= '';
		$url		= '';
		
		$inpstok = array(
			'ID_STOK'	=> '',
			'KODE_BRG' 	=> $KODE_BRG
		);
		
		//untuk update pembelian. ambil data masuk dari pembelian untuk diupdate
		$data_pmb	= $this->m_pembelian->getDetail(array('a.KODE_PMB'=>$KODE_PMB));
		$jumlah_pmb	= 0;
		if($id) $jumlah_pmb = $data_pmb['JUMLAH'];
		
		//kalkulasi sisa stok
		$stok 		= $this->m_stok->getDetail($KODE_BRG);
		$masuk		= $stok['MASUK'] + $JUMLAH - $jumlah_pmb;
		$stok_akhir	= $masuk - $stok['KELUAR'];
		$stok_free	= $stok_akhir - $stok['BOOKING'];
		
		$dataUpdate = array(
			'KODE_BRG'	=> $KODE_BRG,
			'TGL_PMB'	=> $TGL_PMB,
			'HARGA_BELI'=> $HARGA_BELI,
			'JUMLAH'	=> $JUMLAH,
			'KETERANGAN'=> $KETERANGAN,
		);
		
		$dataInsert = array(
			'ID_PMB'	=> '',
			'KODE_BRG'	=> $KODE_BRG,
			'KODE_PMB'	=> $KODE_PMB,
			'TGL_PMB'	=> $TGL_PMB,
			'HARGA_BELI'=> $HARGA_BELI,
			'JUMLAH'	=> $JUMLAH,
			'KETERANGAN'=> $KETERANGAN,
		);
		
		$dataUpdateStok = array(
			'MASUK' => $masuk,
			'STOK_FREE' => $stok_free,
			'STOK_AKHIR' => $stok_akhir
		);
		
		$this->db->trans_begin();
		
		if($id){
			$this->m_pembelian->getUpdate($dataUpdate,$KODE_PMB);
			$this->m_stok->getUpdate($dataUpdateStok,$KODE_BRG);
			$url = $_POST['id_pmb'];
			$psn = "Diubah";
		}else{
			$this->m_pembelian->getInsert($dataInsert);
			$this->m_stok->getUpdate($dataUpdateStok,$KODE_BRG);
			
			$url = encode(0);
			$psn = "Disimpan";
		}
		if($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			$msg = encode('<div class="alert alert-danger" role="alert"><h4><i class="glyphicon glyphicon-remove"></i> Data Gagal Disimpan</h4></div>');
			redirect(base_url().'ab/pembelian/input/'.$url.'/'.$msg);
		} else {
			$this->db->trans_commit();
			$msg = encode('<div class="alert alert-success" role="alert"><h4><i class="fa fa-check"></i> Data Berhasil '.$psn.'</h4></div>');
			redirect(base_url().'ab/pembelian/input/'.$url.'/'.$msg);
		}
		
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
	
	function delete(){
		
		$id_pmb = decode(trim(mysql_real_escape_string($_POST['x'])));
		
		$pmb	= $this->m_pembelian->getDetail(array('a.ID_PMB' => $id_pmb));
		$data   = '';
		
		//kalkulasi sisa stok
		$stok 		= $this->m_stok->getDetail($pmb['KODE_BRG']);
		
		$masuk		= $stok['MASUK'] - $pmb['JUMLAH'];
		$stok_akhir	= $masuk - $stok['KELUAR'];
		$stok_free	= $stok_akhir - $stok['BOOKING'];
		
		$dataUpdateStok = array(
			'MASUK' => $masuk,
			'STOK_FREE' => $stok_free,
			'STOK_AKHIR' => $stok_akhir
		);
		
		$this->db->trans_begin();
		$this->m_stok->getUpdate($dataUpdateStok,$pmb['KODE_BRG']);
		$this->m_pembelian->getDelete($id_pmb);
		
		if($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			$data = array("rs" => 2);
		} else {
			$this->db->trans_commit();
			$data = array("rs" => 1);
		}
		
		echo json_encode($data);
		
		
	}
}
	