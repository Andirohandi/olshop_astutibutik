

<br/>
<div class="col-md-12 col-xs-12">
	<div class="table-responsive" style='font-size:13px'>
		<table class="table table-bordered table-hovered">
			<thead style='background-color:#5bc0de;'>
				<th style="text-align:center;width:5%">No</th>
				<th style="text-align:center;width:8%">KODE</th>
				<th style="text-align:center;width:25%">NAMA BARANG</th>
				<th style="text-align:center;width:11%">HARGA BELI</th>
				<th style="text-align:center;width:11%">HARGA JUAL</th>
				<th style="text-align:center;width:5%">DISCOUNT</th>
				<th style="text-align:center;width:10%">KATEGORI</th>
				<th style="text-align:center;width:10%">STATUS</th>
				<th style="text-align:center;width:15%">AKSI</th>
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
						<td style="text-align:right;"><?php echo "Rp. " .number_format($row->HARGA_BELI,0,',','.').",-" ?></td>
						<td style="text-align:right;"><?php echo "Rp. " .number_format($row->HARGA_JUAL,0,',','.').",-" ?></td>
						<td style="text-align:center;"><?php echo $row->DISCOUNT." %" ?></td>
						<td style="text-align:center;"><?php echo $row->NAMA_KATEGORI ?></td>
						<?php if($row->STATUS_BARANG==1){
							?>
							<td style='text-align:center'><a href='javascript:void(0)' class='btn btn-default btn-xs btn-circle' data-toggle='tooltip' data-placement='top' title='AKTIF'	><i class='fa fa-check'></i></a></td>
						<?php }else
						{ ?>
							<td style='text-align:center' ><a href='javascript:void(0)' class='btn btn-default btn-xs btn-circle' data-toggle='tooltip' data-placement='top' title='TIDAK AKTIF'	><i class='fa fa-remove'></i></a></td>
						<?php }  ?>
						<td style='text-align:center'>
							<a href='<?php echo site_url('ab/barang/detail/'.encode($row->ID).'/'.$row->URL_BRG.'.html')?>' class='btn btn-success btn-xs btn-circle'   data-toggle='tooltip'  data-placement='top' title='DETAIL : <?php echo $row->KODE_BRG ?>' ><i class='fa fa-eye' data-toggle='modal' data-target='#detailBarang'></i></a> 
							
							<a href='<?php echo site_url('ab/barang/input/'.encode($row->ID))?>' class='btn btn-primary btn-xs btn-circle' data-toggle='tooltip'  data-placement='top' title='EDIT : <?php echo $row->KODE_BRG ?>' ><i class='fa fa-edit'></i></a> 
							
							<a href='javascript:void(0)' class='btn btn-danger btn-xs btn-circle' onclick='hapusBarang("<?php echo encode($row->ID);?>","<?php echo encode($row->IMAGE);?>","<?php echo encode($row->THUMBNAIL);?>")' data-toggle='tooltip' data-placement='top' title='Hapus : <?php echo $row->KODE_BRG ?>'><i class='fa fa-trash'></i></a></td>
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