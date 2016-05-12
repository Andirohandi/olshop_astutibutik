<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akun_saya extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('loginUser')){
			redirect('home','refresh');
		}
		$this->load->model(array('m_kategori','m_barang','m_stok','m_anggota'));
		$this->load->helper(array('form'));
		
	}
	
	function index(){
		$data['title'] 		= "Akun Saya | AB";
		$data['view'] 		= "vwAkunSaya";
		$data['kategori']	= $this->m_kategori->getSelect();
		$data['akun']		= $this->m_anggota->getAnggotaByParram(array("ID" => $this->session->userdata('id')));
		
		$this->load->view('vwHome',$data);
	}
	
	function ganti_password(){
		$data['title'] 		= "Ganti Password | AB";
		$data['view'] 		= "vwGantiPassword";
		$data['kategori']	= $this->m_kategori->getSelect();
		
		$this->load->view('vwHome',$data);
	}
	
	function histori_pmb(){
		$data['title'] 		= "History Pembelian| AB";
		$data['view'] 		= "vwHistoryPembelian";
		$where				= array("b.ID_ANGGOTA" => $this->session->userdata('id'), "b.STATUS_ORDER" => 3);
		$data['pmb']		= $this->m_anggota->getSelectOrderAnggota($where);
		$data['kategori']	= $this->m_kategori->getSelect();
		
		
		$this->load->view('vwHome',$data);
	}
	
	function ubah(){
		if(!isset($_POST['simpan'])){
			echo "<h4 style='color:red;text-align:center'>-- 503 Access Forbiden --</h4>";
		}else{
			
			$this->form_validation->set_rules('title','Title','trim');
			$this->form_validation->set_rules("nama_depan","Nama depan","trim|required");
			$this->form_validation->set_rules("nama_belakang","Nama Belakang","trim|required");
			$this->form_validation->set_rules("email","Email","trim|required");
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
				redirect('akun_saya','refresh');
			}else{
				$title			= $this->input->post("title",true);
				$nama_depan		= $this->input->post("nama_depan",true);
				$nama_belakang	= $this->input->post("nama_belakang",true);
				$email			= $this->input->post("email",true);
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
				
				$update = array(
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
				
				$query	= $this->m_anggota->getUpdate($update,$email);
				
				if($query){
					$hasil	= array(
						'result' => 2,
						'msg'	=> '<i class="fa fa-check"></i> Data berhasil diubah',
						'con'	=> 'alert-success'
					);
					$this->session->set_flashdata($hasil);
					redirect('akun_saya','refresh');
				}else{
					$hasil	= array(
						'result' => 2,
						'msg'	=> '<i class="fa fa-remove"></i>Maaf. proses registrasi gagal dilakukan',
						'con'	=> 'alert-success'
					);
					$this->session->set_flashdata($hasil);
					redirect('akun_saya','refresh');
				}
			}
		}
	}
	
	function ubah_password(){
		if(!isset($_POST['simpan'])){
			echo "<h4 style='color:red;text-align:center'>-- 503 Access Forbiden --</h4>";
		}else{
			
			$this->form_validation->set_rules('pass_lama','Password Lama','trim|required');
			$this->form_validation->set_rules("pass_baru","Password Baru","trim|required");
			
			
			if($this->form_validation->run() == false){
				$hasil	= array(
					'result' => 2,
					'msg'	=> '',
					'con'	=> 'alert-danger'
				);
				$this->session->set_flashdata($hasil);
				redirect('akun_saya/ganti_password','refresh');
			}else{
				$pass_lama		= md5(trim($this->input->post("pass_lama",true)));
				$pass_baru		= md5(trim($this->input->post("pass_baru",true)));
				
				$cek_pass	= $this->m_anggota->getAnggotaByParram(array("ID" => $this->session->userdata('id'), "PASSWORD" => $pass_lama ));
				
				if($cek_pass){
					$update = array(
						'PASSWORD'	=> $pass_baru,
					);
					
					$query	= $this->m_anggota->getUpdate($update,$this->session->userdata('username'));
					
					if($query){
						$hasil	= array(
							'result' => 2,
							'msg'	=> '<i class="fa fa-check"></i> Password berhasil diubah',
							'con'	=> 'alert-success'
						);
						$this->session->set_flashdata($hasil);
						redirect('akun_saya/ganti_password','refresh');
					}else{
						$hasil	= array(
							'result' => 2,
							'msg'	=> '<i class="fa fa-remove"></i>Maaf. proses gagal dilakukan',
							'con'	=> 'alert-success'
						);
						$this->session->set_flashdata($hasil);
						redirect('akun_saya/ganti_password','refresh');
					}
				}else{
					$hasil	= array(
						'result' => 2,
						'msg'	=> '<i class="fa fa-remove"></i>Maaf. proses gagal dilakukan',
						'con'	=> 'alert-success'
					);
					$this->session->set_flashdata($hasil);
					redirect('akun_saya/ganti_password','refresh');
				}
			}
		}
	}
	
}