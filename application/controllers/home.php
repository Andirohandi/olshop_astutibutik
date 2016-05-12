<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
			$this->load->helper('MY_date_helper');
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->library('cart');
			$this->load->model(array('m_kategori','m_barang','m_stok'));
	}
	
	public function index()
	{
		$where				= "a.DISCOUNT != 0";
		$data['title'] 		= "Astuti Butik | AB";
		$data['view'] 		= "layout/vwIndex";
		$data['kategori']	= $this->m_kategori->getSelect();
		$data['disc_prod']	= $this->m_barang->getSelect($status='', $key='', $kategori='', $harga='', $limit='12', $offset='', $where, $order='1');
		$data['corousal']	= '1';
		$this->load->view('vwHome',$data);
	}
	
	public function read($pg=1)
	{
		$limit 		= $_POST['limit'];
		$status 	= $_POST['status'];
		$offset 	= ($limit*$pg)-$limit;
		$key		= '';
		$kategori	= '';

		$page = array();
		
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->m_barang->getSelectCount($status,$key,$kategori);
		$page['current'] 	= $pg;
		$page['list'] 		= page_front($page);
		
		$data['paging'] 	= $page;
		$data['prod'] 		= $this->m_barang->getSelect($status, $key, $kategori='', $harga='', $limit, $offset);
		
		$this->load->view('vwLatestProduk', $data);
		
	}
	
	function kategori($id='',$cat=''){
		
		if($id==''){
			echo "<center><h2>404 Page Not Found</h2></center>";
		}else{
			$where				= "a.KATEGORI = '".$id."'";
			$query				= $this->m_barang->getSelect($status='', $key='', $kategori='', $harga='', $limit='', $offset='', $where);
			if($query){
				$data['view'] 	= "vwKategori";
				$data['produk']	= $query;
			}else{
				$data['view'] 	= "vwKategoriNotFound";
				$data['kat'] 	= strtoupper($cat);
			}
			$data['ktgr1']		= $id;
			$data['ktgr2']		= $cat;
			$data['title'] 			= "AB | ".$cat;
			$data['nama_kategori'] 	= strtoupper($cat);
			$data['url_dash'] 		= "";
			$data['kategori']		= $this->m_kategori->getSelect();
			$this->load->view('vwHome',$data);
		}
	}
	
	function produk_detail($id='',$url=''){
		
		$url_ = explode('.',$url);
		
		if($id=='' OR $url==''){
			echo "<center><h2>404 Page Not Found</h2></center>";
		}else{
			$where				= "a.ID ='".$id."' AND a.URL='".$url_[0]."'";
			$query				= $this->m_barang->getSelectById($where);
			if($query){
				$where_			= "a.KATEGORI = '".$query['ID_KAT']."'";
				$data['produk'] = $this->m_barang->getSelect($status='', $key='', $kategori='', $harga='', $limit='', $offset='', $where_);
				$data['stok']	= $this->m_stok->getSelectById($query['KODE_BRG']);
				$data['view'] 	= "vwProdukDetail";
				$data['prod']	= $query;
				$data['title'] 			= "AB | ".$query['NAMA_BRG'];
				$data['kategori']		= $this->m_kategori->getSelect();
				$data['ktgr1']			= $id;
				$data['ktgr2']			= $url;
				$this->load->view('vwHome',$data);
			}else{
				echo "<center><h2>404 Page Not Found</h2></center>";
			}
		}
	}
	
	public function login()
	{
		if($this->session->userdata('loginAdmin'))
		{
			redirect('ab/admin');
		}else
		{	
			$data['title'] = "Login | AstutiButik";
			$this->load->view('admin/vwLogin',$data);
		}
	}
	
	function mail(){
		$this->load->library('email');
		$config = array();
		$config['useragent'] = "CodeIgniter";
		$config['mailpath'] = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "localhost";
		$config['smtp_port'] = "25";
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);
		

		$this->email->from('andirohandi.android@gmail.com', 'Andi Rohandi');
		$this->email->to('andicangkir@yahoo.com');
		$this->email->cc('effa.katrina@hiyoto.com');
		//$this->email->bcc('them@their-example.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();

		echo $this->email->print_debugger();
	}
	
	function getProvinsi($id=''){
		
		$query	= $this->db->get("tbl_provinsi"); ?>
			<select name='provinsi' id='provinsi' required onchange="getKota(this.value)" >
			<option value='' >-</option>
		<?php
			foreach($query->result() as $row){ ?>
				
				<option value="<?php echo $row->KD_PROVINSI; ?>" <?php echo $row->KD_PROVINSI == $id ? 'selected' : '' ?>><?php echo $row->NAMA_PROVINSI; ?></option>
				
			<?php }
		?>
			</select>
		<?php
	}
	
	function getKota($id_prov='',$id=''){
		$query	= $this->db->where("KD_PROVINSI",$id_prov)->get("tbl_kota"); ?>
			<select name='kota' id='kota' required >
			<option value='' >-</option>
		<?php
			foreach($query->result() as $row){ ?>
				
				<option value="<?php echo $row->KD_KOTA; ?>" <?php echo $row->KD_KOTA == $id ? 'selected' : '' ?> ><?php echo $row->NAMA_KOTA; ?></option>
				
			<?php }
		?>
			</select>
		<?php
	}
	
}