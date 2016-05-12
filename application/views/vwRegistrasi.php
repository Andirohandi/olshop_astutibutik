
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('')?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Registrasi</li>
    </ul>	
	<h3> Registrasi</h3>	
	<hr class="soft"/>
	<?php echo form_open('register/simpan')?>
		<div class='form-horizontal'>
			<?php  echo "<span style='color:red'><b>".validation_errors()."</b></span>" ?>
			<?php if($this->session->flashdata('result') == 2){ ?>
				<div class="alert <?php echo $this->session->flashdata('icon'); ?>" >
					<?php  echo validation_errors()."<br/>".$this->session->flashdata('msg'); ?>
				</div>
			<?php } ?>
			<h4>Informasi Pribadi</h4>
			<div class="control-group">
				<label class="control-label">Title <sup>*</sup></label>
				<div class="controls">
					<select class="span1" name="title" id='title' value="<?php echo set_value('title'); ?>" >
						<option value="">-</option>
						<option value="Ibu">Ibu</option>
						<option value="Bpk">Bpk</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_depan">Nama depan <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="nama_depan" name='nama_depan' placeholder="Nama depan" required value="<?php echo set_value('nama_depan'); ?>" >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="nama_belakang">Nama belakang <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="nama_belakang" name='nama_belakang' placeholder="Nama belakang" required value="<?php echo set_value('nama_belakang'); ?>" >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">Email (Username) <sup>*</sup></label>
				<div class="controls">
					<input type="email" id="email" name='email' placeholder="Email" required value="<?php echo set_value('email'); ?>" >
				</div>
			</div>	  
			<div class="control-group">
				<label class="control-label" for="password">Password <sup>*</sup></label>
				<div class="controls">
					<input type="password" id="password" name='password' placeholder="Password" required >
				</div>
			</div>	  
			<div class="control-group">
				<label class="control-label">Tanggal Lahir <sup>*</sup></label>
				<div class="controls">
					<select class="span1" name="tgl" id='tgl'  required value="<?php echo set_value('tgl'); ?>" >
						<option value="">Tgl</option>
						<?php 
							for($x=1; $x<=31; $x++){
								
								if(strlen($x) == 1) $x = '0'.$x;
									else $x = $x;
								
								?><option value="<?php echo $x; ?>"><?php echo $x; ?></option><?php
							}
						?>
					</select>
					<select class="span1" name="bln" id='bln'  required value="<?php echo set_value('bln'); ?>" >
						<option value="">Bln</option>
						<?php 
							for($x=1; $x<=12; $x++){
								
								if(strlen($x) == 1) $x = '0'.$x;
									else $x = $x;
								
								?><option value="<?php echo $x; ?>"><?php echo $x; ?></option><?php
							}
						?>
					</select>
					<select class="span1" name="thn" id='thn'  required value="<?php echo set_value('thn'); ?>" >
						<option value="">Thn</option>
						<?php $thn	= date('Y');
							for($x=$thn; $x>=1980; $x--){
								?><option value="<?php echo $x; ?>"><?php echo $x; ?></option><?php
							}
						?>
					</select>
				</div>
			</div>

			<h4>Detail Alamat</h4>
			
			<div class="control-group">
				<label class="control-label" for="perusahaan" >Perusahaan</label>
				<div class="controls">
					<input type="text" id="perusahaan" name="perusahaan" placeholder="Perusahaan" value="<?php echo set_value('perusahaan'); ?>" />
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="alamat_1">Alamat 1 <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="alamat_1" name='alamat_1' placeholder="Alamat 1"  required value="<?php echo set_value('alamat_1'); ?>" />
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="alamat_2">Alamat 2 <sup>*</sup></label>
				<div class="controls">
					<input type="text" id="alamat_2" name='alamat_2' placeholder="Alamat 2"  required value="<?php echo set_value('alamat_2'); ?>" /> 
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
					<input type="text" id="kode_pos" name="kode_pos" placeholder="Kode pos"  required value="<?php echo set_value('kode_pos'); ?>" /> 
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inf_tambahan">Informasi Tambahan</label>
				<div class="controls">
					<textarea name="inf_tambahan" id="inf_tambahan" cols="26" rows="3" placeholder="Informasi tambahan" ><?php echo set_value('inf_tambahan'); ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="no_telp">No Telpon </label>
				<div class="controls">
					<input type="text"  name="no_telp" id="no_telp" placeholder="No Telp" value="<?php echo set_value('no_telp'); ?>"/> 
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="no_hp">No HP <sup>*</sup></label>
				<div class="controls">
					<input type="text"  name="no_hp" id="no_hp" placeholder="No HP"   value="<?php echo set_value('no_hp'); ?>" /> 
				</div>
			</div>
			
			<p><sup>*</sup> Harus diisi</p>
		
			<div class="control-group">
				<div class="controls">
					<input class="btn btn-large btn-success" type="submit" value="Register" name='simpan' />
				</div>
			</div>		
		</div>		
	<?php echo form_close();?>
</div>
<script>
$(document).ready(function(){
	getProvinsi();
});

function getProvinsi($id=''){
	
	$.ajax({
		url		: '<?php echo site_url()?>home/getProvinsi',
		dataType: 'html',
		type	: 'POST',
		success	: function(result){
			$('#select-provinsi').html(result);
			getKota();
		}
	});
	
}

function getKota(id=''){
	
	$.ajax({
		url		: '<?php echo site_url()?>home/getKota/'+id,
		dataType: 'html',
		type	: 'POST',
		success	: function(result){
			$('#select-kota').html(result);
		}
	});
}
</script>
