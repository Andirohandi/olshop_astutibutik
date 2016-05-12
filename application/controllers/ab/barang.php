<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
			if(!$this->session->userdata('loginAdmin'))
			{
				redirect('home/login');
			}
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('m_barang');
			$this->load->model('m_kategori');
			$this->load->helper('url');
	}
	
	
	public function index()
	{
		$data['title'] 	= "Barang | AstutiButik";
		$data['view'] 	= "admin/barang/vwBarang";
		$data['ktgr']	= $this->m_kategori->getSelectOption();
		
		
		$this->load->view('admin/vwIndex',$data);
	}
	
	public function input($id = '', $msg = ''){
		
		if($id)
			$id = decode($id);
		else
			$id = 0;
		
		$data['ktgr']	= $this->m_kategori->getSelectOption();
		
		$data['kode']	= $this->m_barang->getCode();
		$data['produk'] = $this->m_barang->getDetail(array('a.ID' => $id));
		$data['title'] 	= "Input Master Barang | AstutiButik";
		$data['view'] 	= "admin/barang/vwInput";
		$data['msg'] 	= $msg;
		
		$this->load->view('admin/vwIndex',$data);
	}
	
	public function create(){
		$this->load->helper('file');
		$id = decode($_POST['id_produk']);
		$KODE_BRG 	= trim(mysql_real_escape_string($_POST['kode_brg']));
		$NAMA_BRG	= trim(mysql_real_escape_string($_POST['nama_brg']));
		$HARGA_BELI = trim(mysql_real_escape_string($_POST['harga_beli']));
		$HARGA_JUAL = trim(mysql_real_escape_string($_POST['harga_jual']));
		$DISCOUNT 	= trim(mysql_real_escape_string($_POST['discount']));
		$DESKRIPSI 	= trim($_POST['deskripsi']);
		$KATEGORI 	= trim(mysql_real_escape_string($_POST['kategori_brg']));
		$STATUS 	= trim(mysql_real_escape_string($_POST['status_brg']));
		$TANGGAL_INPUT = date('Y-m-d');
		$URL		= preg_replace('/-+/','-',str_replace(array(' ',',','.','!','?','+','%','*','\'','\"','#','$'), '-',strtolower(trim($NAMA_BRG))));
		$psn 		= '';
		$url		= '';
		
		if($_POST['id_produk']) $ID = $id;
		else $ID = 0;
		
		$config['upload_path'] = './uploads/images/';
		$config['allowed_types'] =  'gif|jpg|png';
		$config['max_size'] = '5120';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		
		$THUMBNAIL = '';
		$IMAGE = '';
		
		if($this->upload->do_upload('upload-image'))
		{
			$file = $this->upload->data();
			
			$IMAGE = 'uploads/images/'.$file['file_name'];
			
			$config['image_library'] = 'gd2';
			$config['source_image'] = $file['full_path'];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 100;
			$config['height'] = 100;
			$config['new_image'] = './uploads/thumbnails/';

			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			
			$THUMBNAIL = 'uploads/thumbnails/'.$file['raw_name'].'_thumb'.$file['file_ext'];
			
			$this->image_lib->clear();
		} else {
			$type = get_mime_by_extension($_FILES['upload-image']['name']);
			
			if(($type != 'image/jpeg' || $type != 'image/png' || $type != 'image/gif') && $_FILES['upload-image']['size'] > $config['max_size']) {
				$error = $this->upload->display_errors();
				$error = encode('<div class="alert alert-danger" role="alert"><h4><i class="glyphicon glyphicon-remove"></i>' . $error . '</h4></div>');
				redirect(base_url().'ab/barang/input/'.encode(0).'/'.$error);
			}
		}
		
		$data = array(
			'ID' 		=> $ID,
			'KODE_BRG' 	=> $KODE_BRG,
			'NAMA_BRG' 	=> $NAMA_BRG,
			'HARGA_BELI'=> $HARGA_BELI,
			'HARGA_JUAL'=> $HARGA_JUAL,
			'DISCOUNT' 	=> $DISCOUNT,
			'DESKRIPSI_BRG' => $DESKRIPSI,
			'KATEGORI' 	=> $KATEGORI,
			'STATUS' 	=> $STATUS,
			'TANGGAL_INPUT' => $TANGGAL_INPUT,
			'IMAGE' 	=> $IMAGE,
			'THUMBNAIL' => $THUMBNAIL,
			'URL' => $URL
		);
		
		$data2 = array(
			'ID' 		=> $ID,
			'KODE_BRG' 	=> $KODE_BRG,
			'NAMA_BRG' 	=> $NAMA_BRG,
			'HARGA_BELI'=> $HARGA_BELI,
			'HARGA_JUAL'=> $HARGA_JUAL,
			'DISCOUNT' 	=> $DISCOUNT,
			'DESKRIPSI_BRG' => $DESKRIPSI,
			'KATEGORI' 	=> $KATEGORI,
			'STATUS' 	=> $STATUS,
			'TANGGAL_INPUT' => $TANGGAL_INPUT,
			'URL' => $URL
		);
		
		$inpstok = array(
			'ID_STOK'	=> '',
			'KODE_BRG' 	=> $KODE_BRG
		);
		
		$this->db->trans_begin();
		
		
		if($data['ID'])
		{
			if($IMAGE) {
				$this->m_barang->getUpdate($data, $ID);
			}else {
				$this->m_barang->getUpdate($data2, $ID);
			}
			
			$url = $_POST['id_produk'];
			$psn = "Diubah";
		}
		else
		{
			$this->m_barang->getInsert($data);
			$this->db->insert('tbl_stok',$inpstok);
			$url = encode(0);
			$psn = "Disimpan";
		}
		if($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			$msg = encode('<div class="alert alert-danger" role="alert"><h4><i class="glyphicon glyphicon-remove"></i> Data Gagal Disimpan</h4></div>');
			redirect(base_url().'ab/barang/input/'.$url.'/'.$msg);
		} else {
			$this->db->trans_commit();
			$msg = encode('<div class="alert alert-success" role="alert"><h4><i class="fa fa-check"></i> Data Berhasil '.$psn.'</h4></div>');
			redirect(base_url().'ab/barang/input/'.$url.'/'.$msg);
		}
		
	}
	
	public function read($pg=1)
	{
		$limit 		= $_POST['limit'];
		$status 	= $_POST['status'];
		$harga 		= $_POST['harga'];
		$kategori 	= $_POST['kategori'];
		$key 		= trim($_POST['key']);
		$offset 	= ($limit*$pg)-$limit;

		$page = array();
		
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->m_barang->getSelectCount($status,$key,$kategori);
		$page['current'] 	= $pg;
		$page['list'] 		= gen_paging($page);
		
		$data['paging'] 	= $page;
		$data['list'] 		= $this->m_barang->getSelect($status, $key, $kategori, $harga, $limit, $offset);
		
		$this->load->view('admin/barang/vwList', $data);
		
	}
	
	public function caribarang($pg=1)
	{
		$status		= '';
		$kategori	= '';
		$limit		= 5;
		$key 		= trim($_POST['key']);
		$offset 	= ($limit*$pg)-$limit;
		$harga		= '';

		$page = array();
		
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->m_barang->getSelectCount($status,$key,$kategori);
		$page['current'] 	= $pg;
		$page['list'] 		= gen_paging($page);
		
		$data['paging'] 	= $page;
		$data['list'] 		= $this->m_barang->getSelect($status, $key, $kategori, $harga, $limit, $offset);
		
		$this->load->view('admin/barang/vwListCari', $data);
		
	}
	
	public function update()
	{
		
	}
	
	public function delete()
	{
		$id  = decode(trim(mysql_real_escape_string($_POST['i'])));
		$img = decode(trim(mysql_real_escape_string($_POST['j'])));
		$thm = decode(trim(mysql_real_escape_string($_POST['k'])));
		
		if($img) {
			unlink(FCPATH.$img);
			unlink(FCPATH.$thm);
		}
		
		$this->m_barang->getDelete($id);
		
		$dt = array(
			'rs' => 1
		);
		
		echo json_encode($dt);
	}
	
	
	//Fungsi Fungsi Tambahan
	
	public function detail($id='',$nm='') {
		
		$nama			= explode(".",$nm);
		$URL			= $nama[0];
		$data['title'] 	= "Detail Barang | AstutiButik";
		$data['view'] 	= "admin/barang/vwDetail";
		$data['ktgr']	= $this->m_kategori->getSelectOption();
		$data['produk'] = $this->m_barang->getDetail(array('a.ID' => decode($id)));
		
		$this->load->view('admin/vwIndex',$data);
	}
	
	//untuk detail pembelian
	public function detailCari() {
		
		$id	= trim($_POST['i']);
		$data = $this->m_barang->getDetail(array('a.ID' => decode($id)));
		
		$dt = array(
			'id_brg' 	=> $data['ID'],
			'kode_brg' 	=> $data['KODE_BRG'],
			'nama_brg' 	=> $data['NAMA_BRG'],
			'kategori' => $data['NAMA_KATEGORI'],
			'harga_beli'=> $data['HARGA_BELI'],
			'harga_jual'=> $data['HARGA_JUAL']
		);
		
		echo json_encode($dt);
	}

}