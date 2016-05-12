<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pembelian extends CI_Model {

	private $table = "tbl_pembelian";
	
	// Create
	public function getInsert($dt)
	{
		$this->db->set($dt);
		$this->db->insert($this->table);
	}
	
	// Read
	function getSelect($key='', $kategori='', $limit='', $offset='') {
		
		$this->db->select("a.*, b.*, c.*", FALSE)
			->select("a.KODE_BRG AS KODE_BRG, b.NAMA_BRG AS NAMA_BRG, c.NAMA_KTGR AS NAMA_KATEGORI, a.HARGA_BELI AS HARGA_BELI, b.HARGA_JUAL AS HARGA_JUAL", FALSE)
			->join('tbl_barang b','a.KODE_BRG=b.KODE_BRG','LEFT' )
			->join('tbl_kategori c','b.KATEGORI=c.ID','LEFT' );
		
		if($key!='')
		{
			$this->db->like("a.KODE_BRG",$key);
			$this->db->or_like("a.KODE_PMB",$key);
			$this->db->or_like("b.NAMA_BRG",$key);
		}else{}
		
		if($kategori!='')
		{
			$this->db->where('b.KATEGORI',$kategori);
		}
		
		if(!$limit && !$offset) 
			$query = $this->db->get('tbl_pembelian a');
		else 
			$query = $this->db->get('tbl_pembelian a', $limit, $offset);
		
		return $query;
		$query->free_result();
	}
	
	//getcode pmb
	function getCode(){
		$query = $this->db->order_by('ID_PMB DESC LIMIT 1')
					->get($this->table);
		return $query->row_array();
	}
	
	
	//update
	function getUpdate($data,$id){
		$this->db->set($data)
			->where('KODE_PMB',$id)
			->update($this->table);
	}
	
	//count data pembelian
	function getSelectCount($key='', $kategori) {
		
		$this->db->select('a.*,b.*', FALSE)
			->join('tbl_barang b','a.KODE_BRG=b.KODE_BRG','LEFT');
			
		if($key!='')
		{
			$this->db->like("a.KODE_BRG",$key);
			$this->db->or_like("a.KODE_PMB",$key);
			$this->db->or_like("b.NAMA_BRG",$key);
		}
		
		if($kategori!='')
		{
			$this->db->where('b.KATEGORI',$kategori);
		}else{}
		
		$query = $this->db->get('tbl_pembelian a');
		return $query->num_rows();
		$query->free_result();
	}
	
	function getDetail($id) {
		
		$this->db->select('a.*,b.*', FALSE)
			->select('c.NAMA_KTGR AS NAMA_KATEGORI',FALSE)
			->join('tbl_barang b','a.KODE_BRG=b.KODE_BRG','LEFT')
			->join('tbl_kategori c','b.KATEGORI=c.ID','LEFT')
			->where($id);
	
		$query = $this->db->get('tbl_pembelian a');
		return $query->row_array();
		$query->free_result();
	}
	
	function getDelete($id_pmb=''){
		return $this->db->where("ID_PMB",$id_pmb)->delete($this->table);
	}
}