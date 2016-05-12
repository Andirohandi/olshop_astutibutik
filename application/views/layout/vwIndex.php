
<div class="well well-small">
	<h4>Discount Products<small class="pull-right"></small></h4>
	<div class="row-fluid">
		<div id="featured" class="carousel slide">
			<div class="carousel-inner">
				<?php $no = 1; 
					foreach($disc_prod->result() as $r){
					
					if($no==1 OR $no%4 ==1) {  ?>
						<div class="item <?php echo $no==1 ? 'active' : ''?>">
							<ul class="thumbnails"> 
							<?php } ?>
								<li class="span3">
									<div class="thumbnail">
										<i class="tag"></i>
										<a href="<?php echo site_url('home/produk_detail/'.$r->ID.'/'.$r->URL_BRG.'.html') ?>"><img src="<?php echo site_url($r->THUMBNAIL) ?>" alt=""></a>
										<div class="caption">
											<h5><?php echo $r->NAMA_BRG?></h5>
											<h4><a class="btn" href="<?php echo site_url('home/produk_detail/'.$r->ID.'/'.$r->URL_BRG.'.html') ?>">VIEW</a> <span class="pull-right">Rp.<?php echo $r->HARGA_JUAL?></span></h4>
										</div>
									</div>
								</li>
					<?php if($no%4 ==0){ ?>
							</ul>
						</div>
				<?php	}		
				 $no++; } ?>
			</div>
			<a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#featured" data-slide="next">›</a>
		</div>
	</div>
</div>

<div id='getDtPeoduk'></div>
<script>
$(document).ready(function(){
	readPage(1);
})

function readPage(page)
{
	var limit 	= 9;
	var status 	= 1;
	
	$.ajax({
		url		: 'home/read/'+page,
		type	: 'POST',
		dataType: 'html',
		data	: {limit:limit,status:status},
		success : function(result)
		{
			$('#getDtPeoduk').empty().append(result);
		}
	});
}

</script>


