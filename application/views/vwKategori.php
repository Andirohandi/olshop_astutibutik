
<div class="span9">
	<ul class="breadcrumb">
		<li><a href="<?php echo site_url('')?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Kategori</li>
	</ul>
	<h3><?php echo $nama_kategori;?><small class="pull-right hide"> Some products are available </small></h3>	
	<hr class="soft"/>
	<?php $this->load->view('vwProduk') ?>
</div>


