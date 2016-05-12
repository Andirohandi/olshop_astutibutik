<div id="myTab" class="pull-right">
	<a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
	<a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
		<?php $url = base_url().$this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$ktgr1.'/'.$ktgr2;?>
		<?php foreach($produk->result() as $row){ ?>
		<div class="row">	  
			<div class="span2">
				<img src="<?php echo base_url($row->THUMBNAIL)?>" alt=""/>
			</div>
			<div class="span4">
				<h3>New | Available</h3>				
				<hr class="soft"/>
				<h5><?php echo $row->NAMA_BRG?></h5>
				<p>
					<?php echo substr(strip_tags($row->DESKRIPSI_BRG), 0, 100)?>
				</p>
				<a class="btn btn-small pull-right" href="<?php echo site_url('home/produk_detail/'.$row->ID.'/'.$row->URL_BRG.'.html')?>">Lihat Detail</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
			<h3>Rp. <?php echo number_format($row->HARGA_JUAL - ($row->HARGA_JUAL * $row->DISCOUNT / 100));?></h3>
			
			  <a href="<?php echo site_url('cart/add/'.$row->ID.'/'.encode($url)) ?>" class="btn btn-large btn-primary"> Beli <i class=" icon-shopping-cart"></i></a>
			  <a href="<?php echo site_url('home/produk_detail/'.$row->ID.'/'.$row->URL_BRG.'.html')?>" class="btn btn-large"><i class="icon-zoom-in"></i></a>
			
				</form>
			</div>
		</div>
		<hr class="soft"/>
		<?php } ?>
	</div>
	<div class="tab-pane  active" id="blockView">
		<br/>
		<ul class="thumbnails">
			<?php foreach($produk->result() as $r){ ?>
				<li class="span3">
				  <div class="thumbnail">
					<a href="<?php echo site_url('home/produk_detail/'.$r->ID.'/'.$r->URL_BRG.".html")?>"><img src="<?php echo base_url($r->THUMBNAIL)?>" alt=""/></a>
					<div class="caption">
					  <h5>Manicure &amp; Pedicure</h5>
					  <p>
						<?php echo substr(strip_tags($r->DESKRIPSI_BRG), 0, 30)?>
					  </p>
					   <h4 style="text-align:center"><a class="btn" href="<?php echo site_url('home/produk_detail/'.$r->ID.'/'.$r->URL_BRG.".html")?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo site_url('cart/add/'.$r->ID.'/'.encode($url)) ?>">Beli <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp. <?php echo number_format($r->HARGA_JUAL - ($r->HARGA_JUAL * $r->DISCOUNT / 100));?></a></h4>
					</div>
				  </div>
				</li>
			<?php } ?>
		  </ul>
		<hr class="soft"/>
	</div>
</div>
