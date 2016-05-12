<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('MY_date_helper');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->model('m_kategori','m_user');
	}
	
	function index($cat=''){
		
	}
	
	function login(){
		echo "makan";
	}
}