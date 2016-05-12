

<br/>
<div class="col-md-12 col-xs-12">
	<div class="table-responsive" style='font-size:13px'>
		<table class="table table-bordered table-hovered">
			<thead style='background-color:#5bc0de;'>
				<th style="text-align:center;width:5%">No</th>
				<th style="text-align:center;width:10%">KODE BRG</th>
				<th style="text-align:center;width:25%">NAMA BARANG</th>
				<th style="text-align:center;width:15%">KATEGORI</th>
				<th style="text-align:center;width:8%">MASUK</th>
				<th style="text-align:center;width:8%">KELUAR</th>
				<th style="text-align:center;width:10%">STOK REAL</th>
				<th style="text-align:center;width:8%">BOOKING</th>
				<th style="text-align:center;width:10%">STOK FREE</th>
			</thead>
			<tbody>
				<?php $no = ($paging['limit']*$paging['current'])-$paging['limit'];
				$no++;
				if($list->num_rows() > 0) { 
					foreach($list->result() as $row) { ?>
					 <tr>
						<td style="text-align:center;"><?php echo $no ?></td>
						<td><?php echo $row->KODE_BRG ?></td>
						<td><?php echo $row->NAMA_BRG ?></td>
						<td><?php echo $row->NAMA_KTGR ?></td>
						<td align='center' ><?php echo $row->MASUK ?></td>
						<td align='center'  ><?php echo $row->KELUAR ?></td>
						<td align='center'  ><?php echo $row->STOK_AKHIR ?></td>
						<td align='center'  ><?php echo $row->BOOKING ?></td>
						<td style='background-color:#5bc0de;' align='center'  ><b><?php echo $row->STOK_FREE ?></b></td>
					 </tr>
				<?php 	$no++;
					}
				} ?>
				<input type='hidden' id='current' name='current' value='<?php echo $paging['current'] ?>'>
			
			
			</tody>
		</table>
	</div>
	
		<?php echo $paging['list'] ?>
	
</div>

<script>
	$(function () {
		$('[data-toggle=\"tooltip\"]').tooltip()
	})
</script>