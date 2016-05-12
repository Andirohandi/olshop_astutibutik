<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_kategori extends CI_Model {

	private $table = "tbl_kategori";
	private $id = "ID";
	
	
	// Create
	public function getInsert($dt)
	{
		$this->db->set($dt);
		$this->db->insert($this->table);
	}
	
	// Read
	function getSelect($status='', $key='', $limit='', $offset='', $where='') {
		
		if($key!='')
		{
			$this->db->like("NAMA_KTGR",$key);
		}else{}
		
		if($status!='')
		{
			$this->db->where('STATUS',$status);
		}else{}
		
		if($where){
			$this->db->where($where);
		}
		
		if(!$limit && !$offset) $query = $this->db->get('tbl_kategori');
		else $query = $this->db->get($this->table, $limit, $offset);
		
		return $query;
		$query->free_result();
	}
	
	// Update
	public function getUpate($dt,$id)
	{
		$this->db->set($dt)
			->where('ID',$id)
			->update($this->table);
	}
	
	// Delete
	public function getDelete($id)
	{
		$this->db->where('ID',$id)
			->delete($this->table);
	}

	// Fungsi - Fungsi Tambahan -------------------------
	
	// Menghitung Jumlah Kategori
	function getSelectCount($status='',$key='') {
		
		if($key!='')
		{
			$this->db->like("NAMA_KTGR",$key);
		}else{}
		
		if($status!='')
		{
			$this->db->where('STATUS',$status);
		}else{}
		
		$query = $this->db->get($this->table);
		
		return $query->num_rows();
		$query->free_result();
	}
	
	// Cek nama kategori yang masih availabe
	function getDbName($url)
	{
		return $this->db->where("URL",$url)
			->get($this->table);
	}
	
	//membuat select option
	function getSelectOption($where=''){
		if($where) $this->db->where($where);
		
		$query = $this->db->get($this->table);
		$result = $query->result();
		return $result;
	}
}