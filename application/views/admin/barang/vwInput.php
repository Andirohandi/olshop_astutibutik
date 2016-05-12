<style>

.form-group.success, .form-group.success input, .form-group.success select, .form-group.success textarea{color:#468847;border-color:#468847}
.form-group.error, .form-group.error input, .form-group.error select, .form-group.error textarea{color:#b94a48;border-color:#b94a48}
.drop-area{
  width:100px;
  height:45px;
  border: 1px solid #999;
  text-align: center;
  padding:10px;
  cursor:pointer;
}
#thumbnail img{
  width:155px;
  height:155px;
  margin:5px;
}
canvas{
  border:1px solid red;
}

</style>
<?php 

	$id = (isset($produk['ID']));

?>
<script src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script>
$(document).ready(function(){
	
	tinymce.init({selector: 'textarea',
			plugins: [
				"advlist autolink lists link image charmap print preview anchor",
				"searchreplace visualblocks code fullscreen",
				"insertdatetime media table contextmenu paste"
			],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			relative_urls: false
		});
	
	var fileDiv = document.getElementById("upload");
		var fileInput = document.getElementById("upload-image");
		
		console.log(fileInput);
		
		fileInput.addEventListener("change",function(e){
		  var files = this.files
		  showThumbnail(files)
		},false)

		fileDiv.addEventListener("click",function(e){
		  $(fileInput).show().focus().click().hide();
		  e.preventDefault();
		},false)

		fileDiv.addEventListener("dragenter",function(e){
		  e.stopPropagation();
		  e.preventDefault();
		},false);

		fileDiv.addEventListener("dragover",function(e){
		  e.stopPropagation();
		  e.preventDefault();
		},false);

		fileDiv.addEventListener("drop",function(e){
		  e.stopPropagation();
		  e.preventDefault();

		  var dt = e.dataTransfer;
		  var files = dt.files;

		  showThumbnail(files)
		},false);
		
	});

function showThumbnail(files){
	  for(var i=0;i<files.length;i++){
		var file = files[i]
		var imageType = /image.*/

		if(!file.type.match(imageType)){
		  console.log("Not an Image");
		  continue;
		}

		var image = document.createElement("img");
		// image.classList.add("")
		var thumbnail = document.getElementById("thumbnail");
		image.file = file;
		
		while(thumbnail.hasChildNodes()) {
			thumbnail.removeChild(thumbnail.lastChild);
		}
		
		thumbnail.appendChild(image)
		
		$('#addImage').hide();
		
		var reader = new FileReader()
		reader.onload = (function(aImg){
		  return function(e){
			aImg.src = e.target.result;
		  };
		}(image))
		var ret = reader.readAsDataURL(file);
		var canvas = document.createElement("canvas");
		ctx = canvas.getContext("2d");
		image.onload= function(){
		  ctx.drawImage(image,100,100)
		}
	  }
	}
	$(function () {
		$('[data-toggle=\"tooltip\"]').tooltip()
	})

	
</script>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"><?php echo (isset($produk['ID'])) ? 'Ubah Master Barang' : 'Input Master Barang' ?><a href="<?php echo site_url('ab/barang')?>" class='btn btn-success btn-circle pull-right' data-toggle='tooltip' data-placement='top' title='Kembali'><i class='fa fa-mail-reply'></i></a></h1>
	</div>
</div>
<div class="row">
	<form action='<?php echo site_url('ab/barang/create')?>' method='POST' enctype='multipart/form-data'>
		<div id="msg" class='col-md-12'>
			<?php echo decode($msg)?>
		</div>	
		<div class="col-md-3 col-sm-12">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<input type="hidden" name="id_produk" id="id_produk" class="form-control" value='<?php echo (isset($produk['ID']) ? encode($produk['ID']) : encode(0)) ?>'>
						<label>Kode Barang</label>
						<input type="text" class="form-control" id="kode_brg" name="kode_brg" readonly value="<?php echo $id ? $produk['KODE_BRG'] : kode_brg($kode['KODE_BRG']) ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" class="form-control" id="nama_brg" name="nama_brg" value="<?php echo $id ? $produk['NAMA_BRG'] : '' ?>" required >
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label>Kategori Barang</label>
						<select id="kategori_brg" name="kategori_brg" class='form-control' required>
							<option value=''>PILIH KATEGORI</option>
							<?php
								foreach($ktgr as $row){
									?>
										<option value="<?php echo $row->ID ?>" <?php echo $id ? ($row->ID == $produk['KATEGORI'] ? 'selected' : ''):''?>><?php echo $row->NAMA_KTGR?></option>
									<?php
								}
							?>
							
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label>Status Barang</label>
						<select id="status_brg" name="status_brg" class='form-control' required>
							<option value='1' <?php echo $id  ? ($produk['STATUS']==1 ?'selected':'') : ''?> >AKTIF</option>
							<option value='0' <?php echo $id ? ($produk['STATUS']==0 ?'selected':'') : '' ?>>TIDAK AKTIF</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label>Harga Beli</label>
						<input type="number" class="form-control" id="harga_beli" name="harga_beli" required value="<?php echo $id ? $produk['HARGA_BELI'] : ' ' ?>" >
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label>Harga Jual</label>
						<input type="number" class="form-control" id="harga_jual" name="harga_jual" value="<?php echo $id ? $produk['HARGA_JUAL'] : ' ' ?>" required >
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label>Discount Barang (%)</label>
						<input type="number" class="form-control" id="discount" name="discount" value="<?php echo $id ? $produk['DISCOUNT'] : '0' ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label>Tanggal</label>
						<input type="text" class="form-control" id="tanggal" name="tanggal" readonly value='<?php echo $id ? tgl_indo($produk['TANGGAL_INPUT']) : tgl_indo(date('Y-m-d'))?>'>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<div class="row">
							<label class="col-md-12 col-sm-12">Upload Gambar</label>
						</div>
						<input type="file" style="display:none" class="form-control" id="upload-image" name="upload-image" multiple="multiple"></input>
						
						<div id="upload" class="btn btn-default" >
							<?php
								if(isset($produk['IMAGE'])) {
									?>
										<i id='addImage' class='glyphicon glyphicon-plus hide'> Add</i>
										<div id="thumbnail"><img src='<?php echo $produk['IMAGE'] ? site_url($produk['THUMBNAIL']) : base_url('assets/image/no_image.jpg') ?>'></div>
									<?php
								} else {
									?>					
										<i id='addImage' class='glyphicon glyphicon-plus' style='width:90px'> Add</i>
										<div id="thumbnail"></div>
									<?php
								}
							?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-sm-12">
			<div class="form-group">
				<label>Deskripsi Barang</label>
				<textarea name="deskripsi" id="deskripsi" class="form-control" style='height:250px'><?php echo (isset($produk['ID']) ? $produk['DESKRIPSI_BRG'] : '') ?></textarea>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<button type="submit" name='simpan' id='simpan' class='btn btn-success pull-right'><i class='fa fa-check'></i> <?php echo $id ? 'Edit Master' : 'Simpan Master'?></button>
					<a href='<?php echo site_url('ab/barang')?>' type="button" name='kembali' id='kembali' class='btn btn-default pull-right' style='margin-right:10px'><i class='fa fa-remove'></i> Kembali</a>
				</div>
			</div>
		</div>
	</form>
	
</div>
<br/>
<br/>
<br/>
