<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

	private $table = "tbl_anggota";
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