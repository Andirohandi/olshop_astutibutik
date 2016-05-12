<style>
table tr{
	height:30px;
}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><h1 style='font-family:callibri'><?php echo $produk['NAMA_BRG'] ?><a href="<?php echo site_url('ab/barang')?>" class='btn btn-success btn-circle pull-right' data-toggle='tooltip' data-placement='top' title='Kembali'><i class='fa fa-mail-reply'></i></a></h1>
	</div>
</div>
<br/>
<div class="row">
	<div class="col-md-3">
		<img src="<?php echo $produk['IMAGE'] ? site_url($produk['IMAGE']) : base_url('assets/image/no_image.jpg')?>" class='img-responsive img-thumbnail' >
	</div>
	<div class="col-md-6">
		<table class='table-responsive  col-md-12' >
			<tr>
				<td style='min-width:250px'>KODE BARANG</td><td> : </td><td><?php echo $produk['KODE_BRG']?></td>
			</tr>
			<tr>
				<td>NAMA BARANG</td><td> : </td><td><?php echo $produk['NAMA_BRG']?></td>
			</tr>
			<tr>
				<td>KATEGORI BARANG</td><td> : </td><td><?php echo $produk['NAMA_KATEGORI']?></td>
			</tr>
			<tr>
				<td>HARGA BELI</td><td> : </td><td>Rp <?php echo number_format($produk['HARGA_BELI'],2,',','.')?></td>
			</tr>
			<tr>
				<td>HARGA JUAL</td><td> : </td><td>Rp <?php echo number_format($produk['HARGA_JUAL'],2,',','.')?></td>
			</tr>
			<tr>
				<td>DISKON</td><td> : </td><td><?php echo $produk['DISCOUNT']." % &nbsp;&nbsp;&nbsp;Rp ".number_format($produk['HARGA_JUAL']/$produk['DISCOUNT'],2,',','.')?></td>
			</tr>
			<tr>
				<td>HARGA JUAL SETELAH DISCOUNT</td><td> : </td><td>Rp <?php echo number_format($produk['HARGA_JUAL']-($produk['HARGA_JUAL']/$produk['DISCOUNT']),2,',','.')?></td>
			</tr>
			<tr>
				<td valign='top'>DESKRIPSI BARANG</td><td valign='top'> : </td><td valign='top'><?php echo $produk['DESKRIPSI_BRG']?></td>
			</tr>
			
		</table>
	</div>
</div>