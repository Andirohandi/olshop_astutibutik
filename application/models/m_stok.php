<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_stok extends CI_Model {

	private $table = "tbl_stok";

	// Create
	public function getInsert($dt)
	{
		$this->db->set($dt);
		$this->db->insert($this->table);
	}
	
	function getSelectById($id){
		$query = $this->db->where('KODE_BRG',$id)
				->get($this->table);
		return $query->row_array();
		$query->free_result();
	}
	
	function getDetail($id){
		$query = $this->db->where('KODE_BRG',$id)
				->get($this->table);
		$data = $query->row_array();
		$query->free_result();
		return $data;
	}
	
	//update stok
	function getUpdate($data,$id){
		$this->db->set($data)
			->where('KODE_BRG',$id)
			->update($this->table);
	}
	
	function getSelectAll($key='', $kategori='', $limit='', $offset=''){
		
		$this->db->select("a.*, b.*, c.*", FALSE)
			->select("a.KODE_BRG AS KODE_BRG, b.NAMA_BRG AS NAMA_BRG, c.NAMA_KTGR AS NAMA_KATEGORI", FALSE)
			->join('tbl_barang b','a.KODE_BRG=b.KODE_BRG','LEFT' )
			->join('tbl_kategori c','b.KATEGORI=c.ID','LEFT' );
		
		if($key!='')
		{
			$this->db->like("a.KODE_BRG",$key);
			$this->db->or_like("b.NAMA_BRG",$key);
		}else{}
		
		if($kategori!='')
		{
			$this->db->where('b.KATEGORI',$kategori);
		}
		
		if(!$limit && !$offset) 
			$query = $this->db->get('tbl_stok a');
		else 
			$query = $this->db->get('tbl_stok a', $limit, $offset);
		
		return $query;
		$query->free_result();
	}
	
	function getSelectCount($key='', $kategori=''){
		$this->db->select("a.*, b.*, c.*", FALSE)
			->select("a.KODE_BRG AS KODE_BRG, b.NAMA_BRG AS NAMA_BRG, c.NAMA_KTGR AS NAMA_KATEGORI", FALSE)
			->join('tbl_barang b','a.KODE_BRG=b.KODE_BRG','LEFT' )
			->join('tbl_kategori c','b.KATEGORI=c.ID','LEFT' );
		
		if($key!=''){
			$this->db->like("a.KODE_BRG",$key);
			$this->db->or_like("b.NAMA_BRG",$key);
		}else{}
		
		if($kategori!=''){
			$this->db->where('b.KATEGORI',$kategori);
		}
		
		$query = $this->db->get('tbl_stok a');
		
		return $query->num_rows();
		$query->free_result();
	}
}