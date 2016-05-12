

<br/>
<div class="col-md-12 col-xs-12">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr style='background-color:#5bc0de'>
					<th style="text-align:center;width:5%">No</th>
					<th style="text-align:center;width:15%">NAMA KATEGORI</th>
					<th style="text-align:center;width:40%">KETERANGAN</th>
					<th style="text-align:center;width:10%">STATUS</th>
					<th style="text-align:center;width:15%">AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = ($paging['limit']*$paging['current'])-$paging['limit'];
				$no++;
				if($list->num_rows() > 0) { 
					foreach($list->result() as $row) { ?>
					 <tr>
						<td><?php echo $no ?></td>
						<td><?php echo $row->NAMA_KTGR ?></td>
						<td><?php echo $row->KETERANGAN ?></td>
						<?php if($row->STATUS==1){
							?>
							<td style='text-align:center'><a href='javascript:void(0)' class='btn btn-default btn-xs btn-circle' data-toggle='tooltip' data-placement='top' title='AKTIF'	><i class='fa fa-check'></i></a></td>
						<?php }else
						{ ?>
							<td style='text-align:center' ><a href='javascript:void(0)' class='btn btn-default btn-xs btn-circle' data-toggle='tooltip' data-placement='top' title='TIDAK AKTIF'	><i class='fa fa-remove'></i></a></td>
						<?php }  ?>
						<td style='text-align:center'><a href='javascript:void(0)' class='btn btn-primary btn-xs btn-circle' onclick='getEditKategori("<?php echo $row->ID;?>","<?php echo $row->NAMA_KTGR;?>","<?php echo $row->STATUS;?>","<?php echo $row->KETERANGAN;?>")'  data-toggle='tooltip'  data-placement='top' title='EDIT : <?php echo $row->NAMA_KTGR ?>' ><i class='fa fa-edit' data-toggle='modal' data-target='#editKategori'></i></a> <a href='javascript:void(0)' class='btn btn-danger btn-xs btn-circle' onclick='hapusKategori("<?php echo $row->ID;?>")' data-toggle='tooltip' data-placement='top' title='Hapus : <?php echo $row->NAMA_KTGR ?>'><i class='fa fa-trash'></i></a></td>
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