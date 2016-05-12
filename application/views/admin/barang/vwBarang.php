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
		<h1 class="page-header">Master Barang</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-1 col-xs-12" style="margin-top:5px;">
		<span data-toggle="tooltip" data-placement='top' title='Tambah Barang'><a href="<?php echo site_url('ab/barang/input')?>" class="btn btn-success btn-sm btn-circle" ><i class="fa fa-plus"></i></a></span>
	</div>
	
	<div class="col-md-2 col-xs-12" style="margin-top:5px;">
		<select class="form-control col-md-6 col-xs-12" name='limit' id='limit' onchange='readPage(1)'>
			<option value="5">5 rows</option>
			<option value="10">10 rows</option>
			<option value="25">25 rows</option>
			<option value="50">50 rows</option>
			<option value="100">100 rows</option>
		</select>
	</div>
	<div class="col-md-2 col-xs-12" style="margin-top:5px;">
		<select class="form-control col-md-6 col-xs-12" name='harga' id='harga' onchange='readPage(1)'>
			<option value="0">HARGA</option>
			<option value="1">TERMURAH</option>
			<option value="2">TERMAHAL</option>
		</select>
	</div>
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
	<div class="col-md-2 col-xs-12" style="margin-top:5px;">
		<select class="form-control col-md-6 col-xs-12" name='status' id='status' onchange='readPage(1)'>
			<option value="">STATUS</option>
			<option value="1">AKTIF</option>
			<option value="0">TIDAK AKTIF</option>
		</select>
	</div>
	<div class="col-md-3 col-xs-12" style="margin-top:5px;">
		<div class="input-group custom-search-form">
			<input class="form-control" type="text" placeholder="Search..." name='key' id='key' onchange='readPage(1)'>
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">
				<i class="fa fa-search"></i>
				</button>
			</span>
		</div>
	</div>
	
	<!-- MODAL TAMBAH KATEGORI !-->
	<div class="modal fade" id="addKategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" >
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel"><i class="fa fa-plus"></i> Tambah Kategori</h4>
				</div>
				<div class="modal-body">
					
					<form id="formTambahKtgr" methode="Post">
						<div class="form-group">
							<label for="">Nama Kategori</label>
							<input type="text" class="form-control" id="svNama" name="svNama" onchange="cekNamaKategori()">
							<div class="alert alert-danger" id="err" style="display:none;margin-top:5px;">
					
							</div>
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select class="form-control" id="svStatus" name="svStatus">
								<option value="1">AKTIF</option>
								<option value="0">TIDAK AKTIF</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Keterangan</label>
							<textarea class="form-control" id="svKeterangan" name="svKeterangan"></textarea>
						</div>
						<br/>
						<div class="modal-footer">
							<button type="button" id="kembali" class="btn btn-default" data-dismiss="modal">Kembali</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL TAMBAH KATEGORI !-->
	
	<!-- MODAL EDIT KATEGORI !-->
	<div class="modal fade" id="editKategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" >
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="gridSystemModalLabel"><i class="fa fa-edit"></i> Edit Kategori</h4>
				</div>
				<div class="modal-body">
					
					<form id="formEditKtgr" methode="Post">
						<div class="form-group">
							<input type="hidden" class="form-control" id="edId" name="edId">
							<label for="">Nama Kategori</label>
							<input type="text" class="form-control" id="edNama" name="edNama">
							<div class="alert alert-danger" id="err2" style="display:none;margin-top:5px;">
					
							</div>
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select class="form-control" id="edStatus" name="edStatus">
								<option value="1">AKTIF</option>
								<option value="0">TIDAK AKTIF</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Keterangan</label>
							<textarea class="form-control" id="edKeterangan" name="edKeterangan"></textarea>
						</div>
						<br/>
						<div class="modal-footer">
							<button type="button" id="kembali2" class="btn btn-default" data-dismiss="modal">Kembali</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END MODAL EDIT KATEGORI !-->
</div>

<div class="row" id="dtBarang">
	
</div>


<script>
$(document).ready(function()
{
	
	readPage(1);

	$('#kembali').click(function(){
		$('#svNama').val('');
		$('#svKeterangan').val();
	});
	
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	
	
	alertify.set({ buttonReverse: true });
	
	alertify.set({ labels: {
		ok     : "Ya",
		cancel : "Tidak"
		 
		} 
	});
	
	
	(function($,W,D)
	{
		var JQUERY4U = {};
	 
		JQUERY4U.UTIL =
		{
			setupFormValidation: function()
			{

				$("#formTambahKtgr").validate({
					rules: {
						svNama 	: "required"
						
					},
					messages: {
						svNama	: "Nama Kategori Harus Diiisi"
						
					},
					submitHandler: function(form) {
						//form.submit();
						//$().submit(function(){
							
							$.ajax({
								url : "barang/create",
								type : "POST",
								dataType : "json",
								data : $('#formTambahKtgr').serialize(),
								beforeSend : function(){
						
								},
								success : function(result){
									
									if(result.st == '1') {
										document.getElementById("formTambahKtgr").reset();
										$('#kembali').click();
										readPage(1);
										alertify.success("<i class='glyphicon glyphicon-ok' ></i> Data berhasil disimpan");
									}
									else
									{
										$('#err').html(result.msg).slideDown('slow');
										$('#err').delay(3000).fadeOut('slow');
									}
								}
							});
						//});
					}
				});
				
			}
		}
	 
		//when the dom has loaded setup form validation rules
		$(D).ready(function($) {
			JQUERY4U.UTIL.setupFormValidation();
		});
	 
	})(jQuery, window, document);
	
	
	(function($,W,D)
	{
		var JQUERY4U = {};
	 
		JQUERY4U.UTIL =
		{
			setupFormValidation: function()
			{
				//form validation rules
				$("#formEditKtgr").validate({
					rules: {
						edNama 	: "required"
						
					},
					messages: {
						edNama	: "Nama Kategori Harus Diiisi"
						
					},
					submitHandler: function(form) {
						//form.submit();
						//$().submit(function(){
							
							$.ajax({
								url : "barang/update",
								type : "POST",
								dataType : "json",
								data : $('#formEditKtgr').serialize(),
								beforeSend : function(){
						
								},
								success : function(result){
									
									if(result.st == '1') {
										document.getElementById("formEditKtgr").reset();
										$('#kembali2').click();
										readPage(1);
										alertify.success("<i class='glyphicon glyphicon-ok' ></i> Data berhasil disimpan");
									}
									else
									{
										$('#err2').html(result.msg).slideDown('slow');
										$('#err2').delay(3000).fadeOut('slow');
									}
								}
							});
						//});
					}
				});
				
			}
		}
	 
		//when the dom has loaded setup form validation rules
		$(D).ready(function($) {
			JQUERY4U.UTIL.setupFormValidation();
		});
	 
	})(jQuery, window, document);
});

function readPage(page)
{
	
	var harga 	= $('#harga').val();
	var kategori= $('#kategori').val();
	var limit 	= $('#limit').val();
	var key 	= $('#key').val();
	var status 	= $('#status').val();
	
	$.ajax({
		url		: 'barang/read/'+page,
		type	: 'POST',
		dataType: 'html',
		data	: {limit:limit,key:key,status:status,harga:harga,kategori:kategori},
		success : function(result)
		{
			$('#dtBarang').empty().append(result);
		}
	});
}

function getEditKategori(i,j,k,l)
{
	var id = i;
	var nama = j;
	var status = k;
	var keterangan = l;
	
	$('#edId').val(id);
	$('#edNama').val(nama);
	$('#edStatus').val(status);
	$('#edKeterangan').val(keterangan);
}

function hapusBarang(i,j,k)
{
	alertify.confirm("Apakah Anda Yakin Akan Menghapus Data ini ?", function (e) {
		if (e) {
			$.ajax({
				url		: "barang/delete",
				type	: 'POST',
				dataType: 'json',
				data	: {i:i,j:j,k:k},
				
				beforeSend : function()
				{
				   
				},
				success : function(result){
					if(result.rs == '1') {
						readPage($('#current').val());
						alertify.success("<i class='glyphicon glyphicon-ok' ></i> Data berhasil dihapus");
					}
					else
					{
						$.sticky('Data gagal dihapus');
					}
				} 
			});
		}else{
		
		}
	});
}


</script>

