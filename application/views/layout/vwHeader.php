<div id="header">
	<div class="container">
		<div id="welcomeLine" class="row">
			<div class="span6">Selamat Datang ! <strong><?php echo ($this->session->userdata('loginUser') || $this->session->userdata('loginAdmin')) ? $this->session->userdata('nama') : 'User' ?></strong>
			</div>
			<div class="span6">
				<div class="pull-right">
					<a href="<?php echo site_url('cart')?>"><span class="">Total Pembelian : </span></a>
					<a href="<?php echo site_url('cart')?>"><span class="btn btn-mini">Rp. <?php echo number_format($this->cart->total()) ?></span></a>
					<a href="<?php echo site_url('cart')?>"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $this->cart->total_items() ?> ] Item dalam keranjang </span> </a> 
				</div>
			</div>
		</div>
		
		<!-- Navbar ================================================== -->
		<div id="logoArea" class="navbar">
			<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<div class="navbar-inner">
				<a class="brand" href="<?php echo site_url('')?>"><img src="<?php echo base_url();?>assets/front/themes/image/logo.png" alt="Bootsshop"/></a>
				<ul id="topMenu" class="nav pull-right">
					<li class=""><a href="<?php echo base_url('');?>">Home</a></li>
					<li class=""><a href="<?php echo base_url();?>assets/front/contact.html">Produk</a></li>
					<li class=""><a href="<?php echo base_url();?>assets/front/normal.html">Tentang Kami</a></li>
					<li class=""><a href="<?php echo base_url();?>assets/front/contact.html">Hubungi Kami</a></li>

					<?php
						if($this->session->userdata('loginAdmin') || $this->session->userdata('loginUser'))
						{
							if($this->session->userdata('loginUser')){ ?>
								<li class="">
									<a href="<?php echo site_url('auth/doLogoutUser')?>" role="button" style="padding-right:0"><span class="btn btn-small btn-success">Logout</span></a>
								</li>
								<?php 
							}else{
								
							?>
							<li class="">
								<a href="<?php echo site_url('ab/admin')?>" role="button" style="padding-right:0"><span class="btn btn-small btn-success">Panel Admin</span></a>
							</li>
							<li class="">
								<a href="<?php echo site_url('auth/doLogoutAdmin')?>" role="button" style="padding-right:0"><span class="btn btn-small btn-success">Logout</span></a>
							</li>
							
							<?php }
						}else{
							?>
							
							<li class=""><a href="<?php echo site_url('register');?>">Registrasi</a></li>
							
							<li class=""><a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-sm btn-success">Login</span></a></li>
							<?php
						}
					?>
					
					
					<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h3>Login User</h3>
						</div>
						<div class="modal-body">
							<form class="form-horizontal loginFrm" method='POST' action="<?php echo site_url('auth/doLoginUser') ?>">
								<div class="control-group">
									<input type="hidden" id="url" value='<?php echo base_url().$this->uri->segment(1)?>' name='url' required>
									<input type="email" id="username" name='username' placeholder="Email" required>
								</div>
								<div class="control-group">
									<input type="password" id="password" name='password' placeholder="Password" required>
								</div>
								<div class="control-group">
									<label><a href='<?php echo site_url('user/register')?>'>Register Now ?</a></label>
								</div>
								<div class="control-group">
									<button type="submit" class="btn btn-success" name='login'>Sign in</button>
									<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
							</form>	
						</div>
					</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Header End====================================================================== -->