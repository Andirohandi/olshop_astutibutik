<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('loginUser')){
			redirect('home','refresh');
		}
		$this->load->model(array('m_kategori','m_barang','m_stok','m_anggota'));
		$this->load->helper(array('form'));
	}
	
	function index(){
		$data['title'] 		= "Registrasi Butik | AB";
		$data['view'] 		= "vwRegistrasi";
		$data['kategori']	= $this->m_kategori->getSelect();
		
		$this->load->view('vwHome',$data);
	}
	
	function simpan(){
		if(!isset($_POST['simpan'])){
			echo "<h4 style='color:red;text-align:center'>-- 503 Access Forbiden --</h4>";
		}else{
			
			$this->form_validation->set_rules('title','Title','trim');
			$this->form_validation->set_rules("nama_depan","Nama depan","trim|required");
			$this->form_validation->set_rules("nama_belakang","Nama Belakang","trim|required");
			$this->form_validation->set_rules("email","Email","trim|required");
			$this->form_validation->set_rules("password","Password","trim|required");
			$this->form_validation->set_rules("tgl","Tanggal","trim|required");
			$this->form_validation->set_rules("bln","Bulan","trim|required");
			$this->form_validation->set_rules("thn","Tahun","trim|required");
			$this->form_validation->set_rules("perusahaan","Perusahaan","trim");
			$this->form_validation->set_rules("alamat_1","Alamat 1","trim|required");
			$this->form_validation->set_rules("alamat_2","Alamat 2","trim|required");
			$this->form_validation->set_rules("provinsi","Provinsi","trim|required");
			$this->form_validation->set_rules("kota","Kota","trim|required");
			$this->form_validation->set_rules("kode_pos","Kode pos","trim|required");
			$this->form_validation->set_rules("inf_tambahan","Informasi Tambahn","trim");
			$this->form_validation->set_rules("no_telp","No Telp","trim");
			$this->form_validation->set_rules("no_hp","No HP","trim|required");
			
			
			if($this->form_validation->run() == false){
				$hasil	= array(
					'result' => 2,
					'msg'	=> '',
					'con'	=> 'alert-danger'
				);
				$this->session->set_flashdata($hasil);
				$this->index();
			}else{
				$title			= $this->input->post("title",true);
				$nama_depan		= $this->input->post("nama_depan",true);
				$nama_belakang	= $this->input->post("nama_belakang",true);
				$email			= $this->input->post("email",true);
				$password		= $this->input->post("password",true);
				$tgl			= $this->input->post("tgl",true);
				$bln			= $this->input->post("bln",true);
				$thn			= $this->input->post("thn",true);
				$perusahaan		= $this->input->post("perusahaan",true);
				$alamat_1		= $this->input->post("alamat_1",true);
				$alamat_2		= $this->input->post("alamat_2",true);
				$provinsi		= $this->input->post("provinsi",true);
				$kota			= $this->input->post("kota",true);
				$kode_pos		= $this->input->post("kode_pos",true);
				$inf_tambahan	= $this->input->post("inf_tambahan",true);
				$no_telp		= $this->input->post("no_telp",true);
				$no_hp			= $this->input->post("no_hp",true);
				
				$insert = array(
					'USERNAME'	=> $email,
					'PASSWORD'	=> md5($password),
					'TITLE'		=> $title,
					'NAMA_DEPAN'	=> $nama_depan,
					'NAMA_BELAKANG'	=> $nama_belakang,
					'TGL_LAHIR'		=> $thn."-".$bln."-".$tgl,
					'PERUSAHAAN'	=> $perusahaan,
					'ALAMAT_1'	=> $alamat_1,
					'ALAMAT_2'	=> $alamat_2,
					'PROVINSI'	=> $provinsi,
					'KOTA'		=> $kota,
					'KODE_POS'	=> $kode_pos,
					'INF_TAMBAHAN'	=> $inf_tambahan,
					'NO_TELP'		=> $no_telp,
					'NO_HP'			=> $no_hp
				);
				
				$query	= $this->m_anggota->getInsert($insert);
				
				if($query){
					$hasil	= array(
						'result' => 2,
						'msg'	=> '<i class="fa fa-check"></i> Selamat <b>'.$title." ".$nama_depan." ".$nama_belakang.",</b> proses registrasi anda berhasil dilakukan. Silahkan login untuk melanjutkan pembelian.<br/> Terimakasih",
						'con'	=> 'alert-success'
					);
					$this->session->set_flashdata($hasil);
					redirect('register','refresh');
				}else{
					$hasil	= array(
						'result' => 2,
						'msg'	=> '<i class="fa fa-remove"></i>Maaf. proses registrasi gagal dilakukan',
						'con'	=> 'alert-success'
					);
					$this->session->set_flashdata($hasil);
					redirect('register','refresh');
				}
			}
		}
	}
	
	
	
}