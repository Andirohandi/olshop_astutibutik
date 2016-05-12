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
		<h1 class="page-header"><?php echo $titlepage?></h1>
		<hr/>
	</div>
</div>

<div class="row">
	<div class="col-md-3 col-xs-12" style="margin-top:5px;">
		<a href="javascript:void(0)" data-toggle="modal" data-target="#addKategori" class="btn btn-success btn-sm col-md-6 col-xs-12"><i class="fa fa-plus"></i> Tambah</a>
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
							<input type="text" class="form-control" id="svNama" name="svNama">
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
							<input type="text" class="form-control" id="edId" name="edId">
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
	
	<div class="col-md-2 col-xs-12">
	</div>
	<div class="col-md-2 col-xs-12" style="margin-top:5px;">
		<select class="form-control col-md-6 col-xs-12">
			<option ="5">5 rows</option>
			<option ="10">10 rows</option>
			<option ="25">25 rows</option>
			<option ="50">50 rows</option>
			<option ="100">100 rows</option>
		</select>
	</div>
	<div class="col-md-2 col-xs-12" style="margin-top:5px;">
		<select class="form-control col-md-6 col-xs-12">
			<option ="">ALL</option>
			<option ="1">AKTIF</option>
			<option ="0">TIDAK AKTIF</option>
		</select>
	</div>
	<div class="col-md-3 col-xs-12" style="margin-top:5px;">
		<div class="input-group custom-search-form">
			<input class="form-control" type="text" placeholder="Search...">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">
				<i class="fa fa-search"></i>
				</button>
			</span>
		</div>
	</div>
</div>

<div class="row">
	<br/>
	<div class="col-md-12 col-xs-12">
		<!--div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<th style="text-align:center;width:5%">No</th>
					<th style="text-align:center;width:15%">NAMA KATEGORI</th>
					<th style="text-align:center;width:10%">STATUS</th>
					<th style="text-align:center;width:40%">KETERANGAN</th>
					<th style="text-align:center;width:15%">AKSI</th>
				</thead>
				<tbody id="dtKategori"></tody>
			</table>
		</div>
		<nav>
			<ul class="pagination">
				<li>
					<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li class='active'><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
					<a href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav!-->
		
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<th style="text-align:center;width:5%">No</th>
					<th style="text-align:center;width:15%">NAMA KATEGORI</th>
					<th style="text-align:center;width:10%">STATUS</th>
					<th style="text-align:center;width:40%">KETERANGAN</th>
					<th style="text-align:center;width:15%">AKSI</th>
				</thead>
				<?php
					$no=1;
					if(!empty($offset)){
						 $no = ($offset+1);
					}
					foreach( $kat as $row){
					?>
					
					<tr>
					   <td><?php echo $no;?></td>
					   <td><?php echo $row->NAMA_KTGR;?></td>
					   <td><?php echo $row->STATUS;?></td>
					   <td><?php echo $row->KETERANGAN;?></td>
					   <td>1</td>
						</tr>
					<?php
						$no++;
					}
				?>
				
			</table>
		</div>
		<p>
			<?php
				echo $halaman;
				
				?></p>
				<p>
				<?php
				echo "Total Data : ".$jumlahKat;
			?>
			</p>
		</div>

	</div>
</div>

<script>
$(document).ready(function()
{
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
	
	//loadDataKategori();
	
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
				//form validation rules
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
								url : "kategori/addKategori",
								type : "POST",
								dataType : "json",
								data : $('#formTambahKtgr').serialize(),
								beforeSend : function(){
						
								},
								success : function(result){
									
									if(result.st == '1') {
										document.getElementById("formTambahKtgr").reset();
										$('#kembali').click();
										loadDataKategori();
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
								url : "kategori/editKategori",
								type : "POST",
								dataType : "json",
								data : $('#formEditKtgr').serialize(),
								beforeSend : function(){
						
								},
								success : function(result){
									
									if(result.st == '1') {
										document.getElementById("formEditKtgr").reset();
										$('#kembali2').click();
										loadDataKategori();
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

function loadDataKategori()
{
	$.ajax({
		url		: 'kategori/getDataKategori',
		type	: 'POST',
		dataType: 'html',
		success : function(result)
		{
			$('#dtKategori').empty().append(result);
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

function hapusKategori(i)
{
	alertify.confirm("Apakah Anda Yakin Akan Menghapus Data ini ?", function (e) {
		if (e) {
			$.ajax({
				url		: "kategori/deleteKategori",
				type	: 'POST',
				dataType: 'json',
				data	: {i:i},
				
				beforeSend : function()
				{
				   
				},
				success : function(result){
					if(result.rs == '1') {
						loadDataKategori();
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

