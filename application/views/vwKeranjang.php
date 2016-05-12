
<div class="span9">
    <ul class="breadcrumb">
		<li><a href="<?php echo site_url('')?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Keranjang Belanja</li>
    </ul>	
	<h3>  KERANJANG BELANJA [ <small><?php echo $this->cart->total_items()?> Barang </small>]<a href="<?php echo site_url('')?>" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Lanjutkan Belanja </a></h3>	
	<hr class="soft"/>
	<?php if(!$this->session->userdata('loginUser')){?>
	<table class="table table-bordered">
		<tr><th> SUDAH PUNYA AKUN  </th></tr>
		<tr> 
			<td>
				<form class="form-horizontal" method='POST' action="<?php echo site_url('auth/doLoginUser')?>">
					<div class="control-group">
						<label class="control-label" for="username">Username</label>
						<div class="controls">
							<input type="email" id="username" name='username' placeholder="Email..." required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password" >Password</label>
						<div class="controls">
							<input type="password" id="password" placeholder="Password..." name='password' required>
							<input type="hidden" id="url" value='<?php echo base_url().$this->uri->segment(1)?>' name='url' required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<button type="submit" class="btn btn-primary" name='login'>Login</button> ATAU <a href="<?php echo site_url('register')?>" class="btn">Registrasi Sekarang!</a>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<a href="forgetpass.html" style="text-decoration:underline">Lupa password ?</a>
						</div>
					</div>
				</form>
			</td>
		</tr>
	</table>		
	<?php } ?>
	<?php echo form_open('cart/update/'); ?>

		<table class='table table-bordered'>
		<thead>
			<tr>
				<th style="text-align:center">Barang</th>
				<th style="text-align:center">Jumlah</th>
				<th style="text-align:center">Harga</th>
				<th style="text-align:center">Diskon</th>
				<th style="text-align:center">Gambar</th>
				<th style="text-align:center">Total</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($this->cart->contents() as $items): ?>
				<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
				<tr>
					<td><?php echo $items['name']; ?></td>
					<td>
						<input class="span1" id="<?php echo $i.'[qty]'?>" name="<?php echo $i.'[qty]'?>" size="16" type="number" value='<?php echo $items['qty']?>'>
					</td>
						<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
							<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
								<td style='text-align:center'></strong> <?php echo $option_value; ?></td>
							<?php endforeach; ?>
						<?php endif; ?>
					<td style="text-align:right">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
				</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
		<tr>
		  <td colspan="4"> </td>
		  <td style="text-align:right"><strong>Total : </strong></td>
		  <td style="text-align:right;background-color:" ><b>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></b></td>
		</tr>

		</table>

		<button type='submit' class='btn btn-info pull-right'><i class='icon-edit'></i> Edit Keranjang</button> <a href='<?php echo site_url('cart/delete')?>' class='btn btn-danger'><i class='icon-trash'></i> Hapus Keranjang</a><br/><br/><br/>
	<?php echo form_close()?>

	<?php if($this->cart->contents()){?>
		<a href="<?php echo site_url('user/login')?>" class="btn btn-large pull-right">Lanjutkan <i class="icon-arrow-right"></i></a>
	<?php } ?>
</div>
