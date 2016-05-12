<h4>Semua Produk </h4>
<ul class="thumbnails">
	<?php $no = ($paging['limit']*$paging['current'])-$paging['limit'];
		$no++;
		$url = '';
		$noo = 1;
		if($prod->num_rows() > 0) { 
			foreach($prod->result() as $row) {
				if($noo%3==0){
					echo "<div class='row'>";
				} ?>
				<li class="span3">
					<div class="thumbnail">
						<a  href="<?php echo site_url('home/produk_detail/'.$row->ID.'/'.$row->URL_BRG.'.html')?>"><img src="<?php echo base_url($row->THUMBNAIL);?>" alt=""/></a>
						<div class="caption">
							<h5><?php echo $row->NAMA_BRG?></h5>
							<p> 
								<?php echo substr(strip_tags($row->DESKRIPSI_BRG), 0, 50)?>
							</p>
							
							<h4 style="text-align:center"><a class="btn" href="<?php echo site_url('home/produk_detail/'.$row->ID.'/'.$row->URL_BRG.'.html')?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo site_url('cart/add/'.$row->ID.'/'.$url) ?>">Beli <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#"><?php echo number_format($row->HARGA_JUAL - ($row->HARGA_JUAL * $row->DISCOUNT / 100))?></a></h4>
						</div>
					</div>
				</li>
			<?php 
				if($noo%3==0){
					echo "</div>";
				} 
				$no++;
				$noo++;
			}
		}
	?>
	<input type='hidden' id='current' name='current' value='<?php echo $paging['current'] ?>'>
</ul>
<?php echo $paging['list'] ?>