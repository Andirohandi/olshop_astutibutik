<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_kategori','m_barang','m_stok'));
		$this->load->helper(array('form'));
	}
	
	function index(){
		$where				= "a.DISCOUNT != 0";
		$data['title'] 		= "Astuti Butik | AB";
		$data['view'] 		= "vwKeranjang";
		$data['kategori']	= $this->m_kategori->getSelect();
		$data['disc_prod']	= $this->m_barang->getSelect($status='', $key='', $kategori='', $harga='', $limit='12', $offset='', $where, $order='1');
		$this->load->view('vwHome',$data);
	}
	
	function add($id='',$url='',$qty=''){
		$url = decode($url);
		if($qty){
			$qty = $qty;
		}else{
			$qty = 1;
		}

		$where	= "a.ID = $id";
		$barang = $this->m_barang->getSelectById($where);
		$disc	= $barang['DISCOUNT'] * $barang['HARGA_JUAL'] / 100;
		$harga_ok = $barang['HARGA_JUAL'] - $disc;
		
		$data = array(
               'id'      => $id,
               'qty'     => $qty,
               'price'   => $harga_ok,
               'name'    => $barang['NAMA_BRG'],
               'options' => array('Harga' => 'Rp. '.number_format($barang['HARGA_JUAL']),'Discount' => 'Rp. '.number_format($disc), 'Image' => "<img src='".base_url()."$barang[THUMBNAIL]' />")
            );
		
		$this->cart->insert($data);
		
		redirect($url,'refresh');
	}
	
	function add_post(){
		$id 	= $this->input->post('id',true);
		$url 	= $this->input->post('url',true);
		$qty 	= $this->input->post('qty',true);

		$where	= "a.ID = $id";
		$barang = $this->m_barang->getSelectById($where);
		$disc	= $barang['DISCOUNT'] * $barang['HARGA_JUAL'] / 100;
		$harga_ok = $barang['HARGA_JUAL'] - $disc;
		
		$data = array(
               'id'      => $id,
               'qty'     => $qty,
               'price'   => $harga_ok,
               'name'    => $barang['NAMA_BRG'],
               'options' => array('Harga' => 'Rp. '.number_format($barang['HARGA_JUAL']),'Discount' => 'Rp. '.$disc, 'Image' => "<img src='".base_url()."$barang[THUMBNAIL]' />")
            );
		
		$this->cart->insert($data);
		
		redirect($url,'refresh');
	}
	
	function show(){
		$car = $this->cart->contents();
		print_r($car);
	}
	
	function update(){
		$this->cart->update($_POST);
		redirect('cart');
	}
	
	function delete(){
		$this->cart->destroy();
		redirect('cart');
	}
}