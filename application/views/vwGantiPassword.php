
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('')?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Ganti Password</li>
    </ul>	
	<h3>Ganti Password</h3>	
	<hr class="soft"/>
	<?php echo form_open('akun_saya/ubah_password')?>
		<div class='form-horizontal'>
			<?php  echo "<span style='color:red'><b>".validation_errors()."</b></span>" ?>
			<?php if($this->session->flashdata('result') == 2){ ?>
				<div class="alert <?php echo $this->session->flashdata('icon'); ?>" >
					<?php  echo validation_errors()."<br/>".$this->session->flashdata('msg'); ?>
				</div>
			<?php } ?>
			
			<div class="control-group">
				<label class="control-label" for="pass_lama">Password Lama</label>
				<div class="controls">
					<input type="text" id="pass_lama" name='pass_lama' placeholder="Password Lama.." required  >
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pass_baru">Password Baru</label>
				<div class="controls">
					<input type="text" id="pass_baru" name='pass_baru' placeholder="Password Baru.." required  >
				</div>
			</div>
			
			<div class="control-group">
				<div class="controls">
					<input class="btn btn-sm btn-success" type="submit" value="Simpan" name='simpan' />
				</div>
			</div>		
		</div>		
	<?php echo form_close();?>
</div>
<script>

</script>
