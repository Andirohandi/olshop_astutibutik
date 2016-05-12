
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('')?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Akun Saya</li>
    </ul>	
	<h3>History Pembelian</h3>	
	<hr class="soft"/>
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th style="text-align:center">No</th>
				<th style="text-align:center">No Invoice</th>
				<th style="text-align:center">Tanggal</th>
				<th style="text-align:center">Kode Barang</th>
				<th style="text-align:center">Nama Barang</th>
				<th style="text-align:center">Jumlah</th>
				<th style="text-align:center">Harga Sat</th>
				<th style="text-align:center">Discount</th>
				<th style="text-align:center">Total Bayar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no	= 1;
				
				foreach($pmb->result() as $row){ 
				?>
				
				<tr>
					<td style="text-align:center" ><?php echo $no; ?></td>
					<td><?php echo $row->NO_INVOICE; ?></td>
					<td style="text-align:center" ><?php echo date("d-M-y",strtotime($row->TGL_ORDER)); ?></td>
					<td><?php echo $row->KODE_BRG; ?></td>
					<td><?php echo $row->NAMA_BRG; ?></td>
					<td  style="text-align:center" ><?php echo $row->JUMLAH; ?></td>
					<td>Rp. <?php echo number_format($row->HARGA_SAT); ?></td>
					<td>Rp. <?php echo number_format(($row->HARGA_SAT * $row->JUMLAH ) * $row->DISCOUNT / 100); ?></td>
					<td>Rp. <?php echo number_format(($row->HARGA_SAT * $row->JUMLAH) - (($row->HARGA_SAT * $row->JUMLAH ) * $row->DISCOUNT / 100)); ?></td>
				</tr>
				
			<?php $no++; } ?>
		</tbody>
	</table>
</div>
<script>

</script>
