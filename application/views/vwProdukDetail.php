<?php $url = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$ktgr1.'/'.$ktgr2;?>
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('')?>">Home</a> <span class="divider">/</span></li>
		<li><a href="<?php echo site_url('home/kategori/'.$prod['ID_KAT'].'-'.$prod['URL_KATEGORI'])?>"><?php echo ucwords(strtolower($prod['NAMA_KATEGORI']))?></a> <span class="divider">/</span></li>
		<li class="active">Detail Produk</li>
    </ul>	
	<div class="row">	  
		<div id="gallery" class="span3">
			<a href="<?php echo base_url($prod['IMAGE'])?>" title="<?php echo ucwords($prod['NAMA_BRG'])?>">
				<img src="<?php echo base_url($prod['IMAGE'])?>" style="width:100%" alt="<?php echo ucwords($prod['NAMA_BRG'])?>"/>
			</a>
		</div>
		<div class="span6">
			<h3><?php echo $prod['KODE_BRG']." | ".ucwords($prod['NAMA_BRG'])?></h3>
			<small>Kategori : <?php echo ucwords(strtolower($prod['NAMA_KATEGORI']))?></small><br/>
			<br/>
			<?php if($prod['DISCOUNT'] != 0){?>
			<b>Discount : <?php echo $prod['DISCOUNT']?> %</b><br/>
			<del>Rp. <?php echo number_format($prod['HARGA_JUAL'])?>,-</del>
			<?php } ?>
			<form class="form-horizontal qtyFrm" method='post' action='<?php echo base_url()?>cart/add_post'>
				<input type='hidden' name='id' id='id' value="<?php echo $prod['ID'] ?>">
				<input type='hidden' name='url' id='url' value="<?php echo $url ?>">
				<div class="control-group">
					<?php if($prod['DISCOUNT'] != 0){?>
						<label class="control-label"><span>Rp. <?php echo number_format($prod['HARGA_JUAL']-($prod['HARGA_JUAL']*$prod['DISCOUNT']/100))?>,-</span></label>
					<?php } else {?>
						<label class="control-label"><span>Rp. <?php echo number_format($prod['HARGA_JUAL'])?>,-</span></label>
					<?php } ?>
					<div class="controls">
						<input type="number" class="span1" placeholder="Qty." id='qty' name='qty' required />
						<button type="submit" class="btn btn-large btn-primary pull-right"> Beli <i class=" icon-shopping-cart"></i></button>
					</div>
				</div>
			</form>
			
			<hr class="soft"/>
			<h4 style="color:<?php echo $stok['STOK_FREE'] == 0 ? 'red' : ''?>"><?php echo $stok['STOK_FREE']?> Barang dalam stok</h4>
			
			<hr class="soft clr"/>
				<?php echo $prod['DESKRIPSI_BRG']?>
			<hr class="soft"/>
		</div>
			
		<div class="span9">
			<ul id="productDetail" class="nav nav-tabs">
			  <li class="active"><a href="#home" data-toggle="tab">Produk Terkait</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="home">
					<?php $this->load->view('vwProduk') ?>
					<br class="clr">
				</div>

			</div>
		</div>
	</div>
</div>
