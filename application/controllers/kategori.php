<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('MY_date_helper');
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->model('m_kategori');
	}
	
	function kategori($cat=''){
		if($cat=''){
			echo "<h2>404 Page Not Found</h2>";
		}else{
			echo $cat;
		}
	}
}