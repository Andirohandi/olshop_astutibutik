
<?php 

	$id = encode((isset($pmb['ID_PMB'])));
	$kode_p = isset($kode_pmb['KODE_PMB']);
	$kode = '';
	if($kode_p){
		$kode = $kode_pmb['KODE_PMB'];
	}else{
		$kode	= '';
	}
?>

<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><?php echo (isset($pmb['ID_PMB'])) ? 'Ubah Pembelian Barang' : 'Input Pembelian Barang' ?><a href="<?php echo site_url('ab/pembelian')?>" class='btn btn-success btn-circle pull-right' data-toggle='tooltip' data-placement='top' title='Kembali'><i class='fa fa-mail-reply'></i></a></h1>
	</div>
</div>
<div class="row">
	<div id="msg" class='col-md-12'>
		<?php echo decode($msg)?>
	</div>
	<div class="col-sm-8">
		
		<form action='<?php echo site_url('ab/pembelian/create')?>' method='POST' class='form-horizontal' >
			
			<input type='hidden' name='id_pmb' id='id_pmb' value='<?php echo $id ? $id_ : '' ?>' />
			<input type='hidden' name='tgl_pmb' id='tgl_pmb' value='<?php echo $id ? $pmb['TGL_PMB'] : date('Y-m-d') ?>' readonly />
			<div class="form-group">
				<label for="kode_brg" class="col-sm-3 control-label">No Pembelian</label>
				<div class="col-sm-5 col-xs-12">
					<input type="text" class="form-control" id="kode_pmb" name='kode_pmb' readonly required value='<?php echo $id ? $pmb['KODE_PMB'] : kode_pmb($kode) ?>' >
				</div>
			</div>
			<div class="form-group">
				<label for="kode_brg" class="col-sm-3 control-label">Kode Barang</label>
				<div class="col-sm-5 col-xs-12">
					<div class='input-group custom-search-form'>
					<input type="text" class="form-control" id="kode_brg" name='kode_brg' readonly required value='<?php echo $id ? $pmb['KODE_BRG'] : '' ?>' >
					<span class="input-group-btn">
						<button class="btn btn-default" type="button" data-toggle="<?php echo $id ? '' : 'modal'?>" data-target='#modal-cari' >
						<i class="fa fa-search"></i>
						</button>
					</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="nama_brg" class="col-sm-3 control-label">Nama Barang</label>
				<div class="col-sm-5 col-xs-12" >
					<input type="text" class="form-control" id="nama_brg" name="nama_brg" readonly value='<?php echo $id ? $pmb['NAMA_BRG'] : '' ?>'  >
				</div>
			</div>
			<div class="form-group">
				<label for="kategori" class="col-sm-3 control-label" >Kategori Barang</label>
				<div class="col-sm-5 col-xs-12" readonly >
					<input type="text" class="form-control" id="kategori" name="kategori" readonly value='<?php echo $id ? $pmb['NAMA_KATEGORI'] : '' ?>' >
				</div>
			</div>
			<div class="form-group">
				<label for="harga_beli" class="col-sm-3 control-label">Harga Beli (Pcs)</label>
				<div class="col-sm-5 col-xs-12" readonly >
					<input type="text" class="form-control" id="harga_beli" name="harga_beli" readonly value='<?php echo $id ? $pmb['HARGA_BELI'] : '' ?>' >
				</div>
			</div>
			<div class="form-group">
				<label for="harga_jual" class="col-sm-3 control-label">Harga Jual (Pcs)</label>
				<div class="col-sm-5 col-xs-12" readonly >
					<input type="text" class="form-control" id="harga_jual" name="harga_jual" readonly value='<?php echo $id ? $pmb['HARGA_JUAL'] : '' ?>' >
				</div>
			</div>
			<div class="form-group">
				<label for="jumlah" class="col-sm-3 control-label">Jumlah</label>
				<div class="col-sm-5 col-xs-12" readonly >
					<input type="number" class="form-control" id="jumlah" name="jumlah" required value='<?php echo $id ? $pmb['JUMLAH'] : '' ?>' >
				</div>
			</div>
			<div class="form-group">
				<label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
				<div class="col-sm-5 col-xs-12" readonly >
					<textarea class="form-control" id="keterangan" name="keterangan"><?php echo $id ? $pmb['KETERANGAN'] : '' ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-10">
					<button type="submit" class="btn btn-success"><i class='fa fa-check'></i> Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>

<!-- modal Cari-->
<div id="modal-cari" class="modal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop='static'>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Cari Barang</h4>
			</div>
			<div class="modal-body">
				<div class='row'>
					<div class="col-md-12 col-xs-12" style="margin-top:5px;">
						<div class="input-group custom-search-form">
							<input class="form-control" type="text" placeholder="Cari Nama Barang" name='key' id='key' onchange='readPage(1)'>
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
								<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</div>
					<div class='col-md-12'>
						<br/>
						<div id='cariBarang'></div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal" id='kembali' ><i class='fa fa-remove'></i> Close</button>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	readPage(1);
});

function readPage(page){
	var key 	= $('#key').val();
	
	$.ajax({
		url		: '<?php echo base_url()?>ab/barang/caribarang/'+page,
		type	: 'POST',
		dataType: 'html',
		data	: {key:key},
		success : function(result)
		{
			$('#cariBarang').empty().append(result);
		}
	});
}
</script>
