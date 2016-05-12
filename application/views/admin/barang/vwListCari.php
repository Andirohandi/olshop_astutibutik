<div class="table-responsive" style='font-size:13px'>
	<table class="table table-bordered table-hovered">
		<thead style='background-color:#5bc0de;'>
			<th style='width:10%;text-align:ceenter'>No</th>
			<th style='width:20%;text-align:ceenter'>Kode</th>
			<th style='width:35%;text-align:ceenter'>Nama</th>
			<th style='width:20%;text-align:ceenter'>Kategori</th>
			<th style='width:15%;text-align:ceenter'>Aksi</th>
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
					<td style="text-align:center;"><?php echo $row->NAMA_KATEGORI ?></td>
					<td style='text-align:center'>
						<button onclick="getDetail('<?php echo encode($row->ID)?>')"  class='btn btn-success'   data-dismiss="modal" data-toggle='tooltip'  data-placement='top' title='<?php echo $row->KODE_BRG ?>' ><i class='fa fa-check'></i></buttton>
				 </tr>
			<?php 	$no++;
				}
			} ?>
			<input type='hidden' id='current' name='current' value='<?php echo $paging['current'] ?>'>
		</tody>
	</table>
</div>

<?php echo $paging['list'] ?>


<script>
	$(function () {
		$('[data-toggle=\"tooltip\"]').tooltip()
	})
function getDetail(i){
	$.ajax({
		url		: '<?php echo base_url()?>ab/barang/detailCari',
		type	: 'POST',
		dataType: 'json',
		data	: {i:i},
		success : function(result)
		{
			$('#kode_brg').val(result.kode_brg);
			$('#nama_brg').val(result.nama_brg);
			$('#harga_beli').val(result.harga_beli);
			$('#kategori').val(result.kategori);
			$('#harga_jual').val(result.harga_jual);
		}
	});
}
</script>