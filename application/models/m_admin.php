<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_admin extends CI_Model {

	private $table = "tbl_admin";
	private $id = "ID";
	
	public function login($data)
	{
		$this->db->where($data);
		$query = $this->db->get($this->table);
		
		if($query->num_rows()==1)
		{
			return $query->result();
		}else
		{
			return false;
		}
	}

}