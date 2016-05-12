<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_anggota extends CI_Controller {

	private $table = "tbl_anggota";
	private $id = "ID";
	

	function getInsert($data)
	{
		return $this->db->set($data)->insert($this->table);
	}
	
	function getAnggotaByParram($data){
		return $this->db->where($data)->get($this->table)->row_array();
	}
	
	function getUpdate($data,$username){
		return $this->db->set($data)->where('USERNAME',$username)->update($this->table);
	}
	
	
	//order anggota
	function getSelectOrderAnggota($where='',$limit='',$offset=''){
		
		$this->db->select("a.*, b.*, c.*, a.KODE_BRG AS KODE_BRG, a.DISCOUNT AS DISCOUNT")
			->join("tbl_order b","a.ID_ORDER = b.ID","left")
			->join("tbl_barang c","a.KODE_BRG = c.KODE_BRG","left");
			
		if($where){
			$this->db->where($where);
		}
		
		if(!$limit && !$offset) $query = $this->db->get('tbl_order_detail a');
		else $query = $this->db->get("tbl_order_detail a", $limit, $offset);
		
		return $query;
		$query->free_result();
	}
	
}