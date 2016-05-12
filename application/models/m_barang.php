<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_barang extends CI_Model {

	private $table = "tbl_barang";
	private $id = "ID";
	
	
	// Create
	public function getInsert($dt)
	{
		$this->db->set($dt);
		$this->db->insert($this->table);
	}
	
	// Read
	function getSelect($status='', $key='', $kategori='', $harga='', $limit='', $offset='', $where='', $order='') {
		
		$this->db->select("a.*, b.*", FALSE);
		$this->db->select("b.NAMA_KTGR AS NAMA_KATEGORI, a.ID AS ID, a.STATUS AS STATUS_BARANG, a.URL as URL_BRG", FALSE);
		$this->db->join('tbl_kategori b','a.KATEGORI=b.ID','LEFT' );
		
		if($status!='')
		{
			$this->db->where('a.STATUS',$status);
		}else{}
		
		if($key!='')
		{
			$this->db->like("a.KODE_BRG",$key);
			$this->db->or_like("a.NAMA_BRG",$key);
		}else{}
		
		if($kategori!='')
		{
			$this->db->where('a.KATEGORI',$kategori);
		}else{}
		
		if($harga==1)
		{
			$this->db->order_by("a.HARGA_JUAL", 'ASC');
		}else if($harga==2)
		{
			$this->db->order_by("a.HARGA_JUAL", 'DESC');
		}
		
		if($where)
			$this->db->where($where);
		
		if($order)
			$this->db->order_by('a.ID DESC');
		
		if(!$limit && !$offset) 
			$query = $this->db->get('tbl_barang a');
		else 
			$query = $this->db->get('tbl_barang a', $limit, $offset);
		
		return $query;
		$query->free_result();
	}
	
	function getCode(){
		$query = $this->db->order_by('ID DESC LIMIT 1')
					->get($this->table);
		return $query->row_array();
	}
	
	function getSelectById($where){
		$this->db->select("a.*, b.*", FALSE);
		$this->db->select("b.NAMA_KTGR AS NAMA_KATEGORI, a.ID AS ID, b.ID AS ID_KAT, a.STATUS AS STATUS_BARANG, a.URL as URL_BRG, b.URL AS URL_KATEGORI", FALSE);
		$this->db->join('tbl_kategori b','a.KATEGORI=b.ID','LEFT' );
		
		$query = $this->db->where($where)
				->get('tbl_barang a');
		return $query->row_array();
		$query->free_result();
	}
	
	// Update
	public function getUpdate($dt,$id)
	{
		$this->db->set($dt);
		$this->db->where('ID',$id);
		$this->db->update($this->table);
	}
	
	// Delete
	public function getDelete($id)
	{
		
		$this->db->where('ID',$id)
			->delete($this->table);
	}

	// Fungsi - Fungsi Tambahan -------------------------
	
	// Menghitung Jumlah Kategori
	function getSelectCount($status='',$key='', $kategori) {
		
		if($key!='')
		{
			$this->db->like("KODE_BRG",$key);
			$this->db->or_like("NAMA_BRG",$key);
		}else{}
		
		if($status!='')
		{
			$this->db->where('STATUS',$status);
		}else{}
		
		if($kategori!='')
		{
			$this->db->where('KATEGORI',$kategori);
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
	
	function getDetail($where=''){
		$data = array();
		$this->db->select("a.*, b.*", FALSE);
		$this->db->select("b.NAMA_KTGR AS NAMA_KATEGORI, a.ID AS ID, a.STATUS AS STATUS_BARANG, a.URL as URL_BRG", FALSE);
		$this->db->join('tbl_kategori b','a.KATEGORI=b.ID','LEFT' );
		
		if($where)
			$this->db->where($where);
		
		$query = $this->db->get('tbl_barang a');
		
		$data = $query->row_array();
		$query->free_result();
		
		return $data;
	}
	
	
}