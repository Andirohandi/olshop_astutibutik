<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('MY_date_helper');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->model('m_admin');
		$this->load->model('m_user');
		
	}
	
	public function index()
	{
		
	}
	
	public function doLoginAdmin()
	{
		$username = trim(mysql_real_escape_string($this->input->post('username')));
		$password = md5(trim(mysql_real_escape_string($this->input->post('password'))));
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		if($this->form_validation->run() == FALSE)
		{
	     //Jika validasi gagal user akan diarahkan kembali ke halaman login
		 $data['title'] = "Login | AstutiButik";
	     $this->load->view('admin/vwLogin',$data);
		}
		else
		{
	     redirect('ab/admin', 'refresh');
		}
		
		
	}
	
	function check_database()
	{
		//validasi field terhadap database
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
	 
	   
		$data = array(
			'USERNAME' => $username,
			'PASSWORD' => $password
		);
	   
		//query ke database
		$result = $this->m_admin->login($data);
	 
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->ID,
					'username' => $row->USERNAME,
					'nama' => $row->NAMA,
					'image' => $row->IMAGE,
					'loginAdmin' => true
				);
				
				$this->session->set_userdata($sess_array);
			}
			
			
			
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
	
	function doLogoutAdmin()
	{
		$this->session->unset_userdata('loginAdmin');
		session_destroy();
		redirect('home/login');
	}
	
	function doLoginUser(){
		if(!isset($_POST['login'])){
			echo "<center><h2 style='color:red'>403 Access Forbidden</center></h2>";
		}else{
			$username = trim(mysql_real_escape_string($this->input->post('username',true)));
			$url	  = trim(mysql_real_escape_string($this->input->post('url',true)));
			$password = md5(trim(mysql_real_escape_string($this->input->post('password',true))));
			
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database_user');
			
			if($this->form_validation->run() == FALSE)
			{
				$dt = array('rs'=>0);
				$this->session->set_flashdata($dt);
				redirect('', 'refresh');
			}
			else
			{
				redirect($url, 'refresh');
			}
			
		}
		
	}
	
	function check_database_user()
	{
		//validasi field terhadap database
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
	 
	   
		$data = array(
			'USERNAME' => $username,
			'PASSWORD' => $password
		);
	   
		//query ke database
		$result = $this->m_user->login($data);
	 
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->ID,
					'username' => $row->USERNAME,
					'nama' => $row->TITLE." ".$row->NAMA_DEPAN." ".$row->NAMA_BELAKANG,
					'loginUser' => true
				);
				
				$this->session->set_userdata($sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
	
	function doLogoutUser()
	{
		$this->session->unset_userdata('loginUser');
		session_destroy();
		redirect('');
	}
	
}