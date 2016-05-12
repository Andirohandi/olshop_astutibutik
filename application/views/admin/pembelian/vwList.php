

<br/>
<div class="col-md-12 col-xs-12">
	<div class="table-responsive" style='font-size:13px'>
		<table class="table table-bordered table-hovered">
			<thead style='background-color:#5bc0de;'>
				<th style="text-align:center;width:5%">No</th>
				<th style="text-align:center;width:8%">KODE PMB</th>
				<th style="text-align:center;width:8%">KODE BRG</th>
				<th style="text-align:center;width:20%">NAMA BARANG</th>
				<th style="text-align:center;width:5%">JUMLAH</th>
				<th style="text-align:center;width:11%">TGL INPUT</th>
				<th style="text-align:center;width:11%">HARGA BELI</th>
				<th style="text-align:center;width:11%">HARGA JUAL</th>
				<th style="text-align:center;width:10%">KATEGORI</th>
				<th style="text-align:center;width:11%">AKSI</th>
			</thead>
			<tbody>
				<?php $no = ($paging['limit']*$paging['current'])-$paging['limit'];
				$no++;
				if($list->num_rows() > 0) { 
					foreach($list->result() as $row) { ?>
					 <tr>
						<td style="text-align:center;"><?php echo $no ?></td>
						<td><?php echo $row->KODE_PMB ?></td>
						<td><?php echo $row->KODE_BRG ?></td>
						<td><?php echo $row->NAMA_BRG ?></td>
						<td style="text-align:center;"><?php echo $row->JUMLAH ?></td>
						<td style="text-align:center;"><?php echo tgl_indo($row->TGL_PMB); ?></td>
						<td style="text-align:right;"><?php echo "Rp. " .number_format($row->HARGA_BELI,0,',','.').",-" ?></td>
						<td style="text-align:right;"><?php echo "Rp. " .number_format($row->HARGA_JUAL,0,',','.').",-" ?></td>
						<td style="text-align:center;"><?php echo $row->NAMA_KATEGORI ?></td>
						<td style='text-align:center'>
							
							<a href='<?php echo site_url('ab/pembelian/input/'.encode($row->ID_PMB))?>' class='btn btn-primary btn-xs btn-circle' data-toggle='tooltip'  data-placement='top' title='EDIT : <?php echo $row->KODE_BRG ?>' ><i class='fa fa-edit'></i></a> 
							
							<a href='javascript:void(0)' class='btn btn-danger btn-xs btn-circle' onclick='hapusPembelian("<?php echo encode($row->ID_PMB);?>")' data-toggle='tooltip' data-placement='top' title='Hapus : <?php echo $row->KODE_BRG ?>'><i class='fa fa-trash'></i></a></td>
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