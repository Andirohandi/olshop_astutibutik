
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('')?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Akun Saya</li>
    </ul>	
	<h3> Akun Saya</h3>	
	<hr class="soft"/>
	<?php echo form_open('akun_saya/ubah')?>
		<div class='form-horizontal'>
			<?php  echo "<span style='color:red'><b>".validation_errors()."</b></span>" ?>
			<?php if($this->session->flashdata('result') == 2){ ?>
				<div class="alert <?php echo $this->session->flashdata('icon'); ?>" >
					<?php  echo validation_errors()."<br/>".$this->session->flashdata('msg'); ?>
				</div>
			<?php } ?>
			<h4>Informasi Probadi</h4>
			<div class="control-group">
				<label class="control-label">Title <sup>*</sup></label>
				<div class="controls">
					<select class="span1" name="title" id='title' >
						<option value="">-</option>
						<option value="Ibu" <?php echo $akun['TITLE'] == 'Ibu' ? 'selected' : '' ?> >Ibu</option>
						<option value="Bpk" <?php echo $akun['TITLE'] == 'Bpk' ? 'selected' : '' ?> >Bpk</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_depan">Nama depan <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="nama_depan" name='nama_depan' placeholder="Nama depan" required value="<?php echo $akun['NAMA_DEPAN']; ?>" >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_belakang">Nama belakang <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="nama_belakang" name='nama_belakang' placeholder="Nama belakang" required value="<?php echo $akun['NAMA_BELAKANG']; ?>" >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">Email (Username) <sup>*</sup></label>
				<div class="controls">
					<input type="email" id="email" name='email' placeholder="Email" required value="<?php echo $akun['USERNAME'];  ?>" readonly >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Tanggal Lahir <sup>*</sup></label>
				<div class="controls">
					<select class="span1" name="tgl" id='tgl'  required>
						<option value="">Tgl</option>
						<?php
							$tgl_lahir	= explode("-",$akun['TGL_LAHIR']);
							$thn	= $tgl_lahir[0];
							$bln	= $tgl_lahir[1];
							$tgl	= $tgl_lahir[2];
							
							
							for($x=1; $x<=31; $x++){
								
								if(strlen($x) == 1) $x = '0'.$x;
									else $x = $x;
								
								?><option value="<?php echo $x; ?>" <?php echo $x == $tgl ? 'selected' : '' ?>><?php echo $x; ?></option><?php
							}
						?>
					</select>
					<select class="span1" name="bln" id='bln'  required >
						<option value="">Bln</option>
						<?php 
							for($x=1; $x<=12; $x++){
								
								if(strlen($x) == 1) $x = '0'.$x;
									else $x = $x;
								
								?><option value="<?php echo $x; ?>" <?php echo $x == $bln ? 'selected' : '' ?> ><?php echo $x; ?></option><?php
							}
						?>
					</select>
					<select class="span1" name="thn" id='thn'  required >
						<option value="">Thn</option>
						<?php $thn	= date('Y');
							for($x=$thn; $x>=1980; $x--){
								?><option value="<?php echo $x; ?>" <?php echo $x+1 == $thn ? 'selected' : '' ?> ><?php echo $x; ?></option><?php
							}
						?>
					</select>
				</div>
			</div>

			<h4>Detail Alamat</h4>
			
			<div class="control-group">
				<label class="control-label" for="perusahaan" >Perusahaan</label>
				<div class="controls">
					<input type="text" id="perusahaan" name="perusahaan" placeholder="Perusahaan" value="<?php echo $akun['PERUSAHAAN']; ?>" />
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="alamat_1">Alamat 1 <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="alamat_1" name='alamat_1' placeholder="Alamat 1"  required value="<?php echo $akun['ALAMAT_1']; ?>" />
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="alamat_2">Alamat 2 <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="alamat_2" name='alamat_2' placeholder="Alamat 2"  required value="<?php echo $akun['ALAMAT_2']; ?>" /> 
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="negara">Negara <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="negara" name='negara' placeholder="Negara" value="Indonesia" readonly value="<?php echo set_value('negara'); ?>" /> 
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="provinsi">Provinsi <sup>*</sup></label>
				<div class="controls">
					<div id='select-provinsi'></div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="kota">Kota <sup>*</sup></label>
				<div class="controls">
					<div id='select-kota'></div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="kode_pos">Kode Pos <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="kode_pos" name="kode_pos" placeholder="Kode pos"  required value="<?php echo $akun['KODE_POS']; ?>" /> 
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inf_tambahan">Informasi Tambahan</label>
				<div class="controls">
					<textarea name="inf_tambahan" id="inf_tambahan" cols="26" rows="3" placeholder="Informasi tambahan" ><?php echo $akun['INF_TAMBAHAN']; ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="no_telp">No Telpon </label>
				<div class="controls">
					<input type="text"  name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo $akun['NO_TELP']; ?>"/> 
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="no_hp">No HP <sup>*</sup></label>
				<div class="controls">
					<input type="text"  name="no_hp" id="no_hp" placeholder="No HP"   value="<?php echo $akun['NO_HP']; ?>" /> 
				</div>
			</div>
			
			<p><sup>*</sup> Harus diisi</p>
		
			<div class="control-group">
				<div class="controls">
					<input class="btn btn-large btn-primary" type="submit" value="Ubah Informasi Akun" name='simpan' />
				</div>
			</div>		
		</div>		
	<?php echo form_close();?>
</div>
<script>
$(document).ready(function(){
	getProvinsiEdit();
	getKotaEdit();
});

function getProvinsi(){
	var id = "";
	$.ajax({
		url		: '<?php echo site_url()?>home/getProvinsi/'+id,
		dataType: 'html',
		type	: 'POST',
		success	: function(result){
			$('#select-provinsi').html(result);
			getKota();
		}
	});
	
}

function getKota(id_prov=''){
	
	$.ajax({
		url		: '<?php echo site_url()?>home/getKota/'+id_prov,
		dataType: 'html',
		type	: 'POST',
		success	: function(result){
			$('#select-kota').html(result);
		}
	});
}

function getProvinsiEdit(){
	var id = '<?php echo $akun['PROVINSI']; ?>'
	$.ajax({
		url		: '<?php echo site_url()?>home/getProvinsi/'+id,
		dataType: 'html',
		type	: 'POST',
		success	: function(result){
			$('#select-provinsi').html(result);
		}
	});
	
}

function getKotaEdit(){
	var id_prov	= '<?php echo $akun['PROVINSI']?>'
	var id_kota	= '<?php echo $akun['KOTA']?>'
	$.ajax({
		url		: '<?php echo site_url()?>home/getKota/'+id_prov+'/'+id_kota,
		dataType: 'html',
		type	: 'POST',
		success	: function(result){
			$('#select-kota').html(result);
		}
	});
}
</script>
