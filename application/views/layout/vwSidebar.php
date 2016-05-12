
<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">
	<div class="well well-small"><a id="myCart" href="<?php echo site_url('cart');?>"><img src="<?php echo base_url();?>assets/front/themes/images/ico-cart.png" alt="cart" class='hide'><?php echo $this->cart->total_items() ?> Item dalam keranjang  <span class="badge badge-warning pull-right">Rp. <?php echo number_format($this->cart->total()) ?></span></a>	
	</div>
		<?php if($this->session->userdata('loginUser')){ ?>
		<ul class="nav nav-tabs nav-stacked">
			<li><a href="<?php echo site_url('akun_saya');?>" >AKUN SAYA</a></li>
			<li><a href="<?php echo site_url('akun_saya/ganti_password');?>" >GANTI PASSWORD</a></li>
			<li><a href="<?php echo site_url('akun_saya/konf_pmb');?>" >KONFIRMASI PEMBAYARAN</a></li>
			<li><a href="<?php echo site_url('akun_saya/histori_pmb');?>" >HISTORI PEMBELIAN</a></li>
		</ul>
	<?php } ?>
	</br>
	<ul id="sideManu" class="nav nav-tabs nav-stacked">
		<?php 
			foreach($kategori->result() as $row){ ?>
				
				<li><a href="<?php echo site_url('home/kategori/'.$row->ID.'/'.$row->URL);?>" ><?php echo $row->NAMA_KTGR;?></a></li>
				
		<?php } ?>
	</ul>
	<br/>
	<div class="thumbnail">
		<img src="<?php echo base_url();?>assets/front/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
		<div class="caption">
			<h5>Payment Methods</h5>
		</div>
	</div>
</div>
<!-- Sidebar end=============================================== -->