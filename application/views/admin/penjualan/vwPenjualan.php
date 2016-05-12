<style>
.error{
	color: #FB3A3A;
    padding: 0;
    text-align: left;
}
#kanan-menu{
	float:right;

}

</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Penjualan Barang</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-2 col-xs-12" style="margin-top:5px;">
		<select class="form-control col-md-6 col-xs-12" name='kategori' id='kategori' onchange='readPage(1)'>
			<option value="">KATEGORI ALL</option>
			<?php 
				foreach($ktgr as $rows){
					?>
					<option value='<?php echo $rows->ID ?>'><?php echo $rows->NAMA_KTGR ?></option>
					<?php
				}
			?>
		</select>
	</div>
	<div class="col-md-3 col-xs-12 pull-right" style="margin-top:5px;">
		<div class="input-group custom-search-form">
			<input class="form-control" type="text" placeholder="Search..." name='key' id='key' onchange='readPage(1)'>
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">
				<i class="fa fa-search"></i>
				</button>
			</span>
		</div>
	</div>
	<div class="col-md-2 col-xs-12 pull-right" style="margin-top:5px;">
		<select class="form-control col-md-6 col-xs-12" name='limit' id='limit' onchange='readPage(1)'>
			<option value="5">5 rows</option>
			<option value="10">10 rows</option>
			<option value="25">25 rows</option>
			<option value="50">50 rows</option>
			<option value="100">100 rows</option>
		</select>
	</div>
</div>

<div class="row" id="dtPembelian">
	
</div>


<script>
$(document).ready(function()
{
	
	readPage(1);

	
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	
	
	alertify.set({ buttonReverse: true });
	
	alertify.set({ labels: {
		ok     : "Ya",
		cancel : "Tidak"
		
		} 
	});
});

function readPage(page)
{
	var kategori= $('#kategori').val();
	var limit 	= $('#limit').val();
	var key 	= $('#key').val();
	
	$.ajax({
		url		: 'penjualan/read/'+page,
		type	: 'POST',
		dataType: 'html',
		data	: {limit:limit,key:key,kategori:kategori},
		success : function(result)
		{
			$('#dtPembelian').empty().append(result);
		}
	});
}


</script>

