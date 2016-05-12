<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
			if(!$this->session->userdata('loginAdmin'))
			{
				redirect('home/login');
			}
			$this->load->helper('MY_date_helper');
	}
	
	
	public function index()
	{

		$data['title'] = "Dashboard | AstutiButik";
		$data['titlepage'] = "Panel Admin";
		$data['view'] = "admin/vwDashboard";
		$this->load->view('admin/vwIndex',$data);
	}
	
	public function makan()
	{
		echo "makan";
	}
	
}