<div class="navbar-default sidebar" role="navigation" style="background-color:">
	<div class="sidebar-nav navbar-collapse">
		<ul class="nav" id="side-menu">
			<li class="sidebar-search">
				<img src="<?php echo base_url()?>assets/image/<?php echo $this->session->userdata('image');?>" class="img-circle" width="20%"/><?php echo " Hi, ".$this->session->userdata('nama');?>
				<!-- /input-group -->
			</li>
			<li>
				<a href="<?php echo site_url('ab/admin')?>"><i class="fa fa-dashboard fa-fw"></i> Panel Admin</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-folder-open fa-fw"></i> Master<span class="fa arrow"></span></a>
				<ul class="nav nav-second-level">
					<li>
						<a href="<?php echo site_url('ab/kategori')?>">Master Kategori</a>
					</li>
					<li>
						<a href="<?php echo site_url('ab/barang')?>">Master Barang</a>
					</li>
				</ul>
				<!-- /.nav-second-level -->
			</li>
			<li>
				<a href="<?php echo site_url('ab/pembelian')?>"><i class="fa fa-leaf fa-fw"></i> Pembelian Barang</a>
			</li>
			<li>
				<a href="<?php echo site_url('ab/order')?>"><i class="fa fa-leaf fa-fw"></i> Order Barang</a>
			</li>
			<li>
				<a href="<?php echo site_url('ab/penjualan')?>"><i class="fa fa-leaf fa-fw"></i> Penjualan Barang</a>
			</li>
			<li>
				<a href="<?php echo site_url('ab/stok'); ?>"><i class="fa fa-random fa-fw"></i> Arus Stok Barang</a>
			</li>
		</ul>
	</div>
	<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->