<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<!-- Bootstrap style --> 
		<link id="callCss" rel="stylesheet" href="<?php echo base_url();?>assets/front/themes/bootshop/bootstrap.min.css" media="screen"/>
		<link href="<?php echo base_url();?>assets/front/themes/css/base.css" rel="stylesheet" media="screen"/>
		<!-- Bootstrap style responsive -->	
		<link href="<?php echo base_url();?>assets/front/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
		<link href="<?php echo base_url();?>assets/front/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
		<!-- Google-code-prettify -->	
		<link href="<?php echo base_url();?>assets/front/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
		<!-- fav and touch icons -->
		<link rel="shortcut icon" href="themes/images/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/front/themes/images/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/front/themes/images/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/front/themes/images/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/front/themes/images/ico/apple-touch-icon-57-precomposed.png">
		<style type="text/css" id="enject"></style>
		
		<script src="<?php echo base_url();?>assets/front/themes/js/jquery.js" type="text/javascript"></script>
		<script src="<?php echo base_url();?>assets/front/themes/js/bootstrap.min.js" type="text/javascript"></script>
	</head>
	<body>
		<?php $this->load->view('layout/vwHeader')?>
		<?php if(isset($corousal)) $this->load->view('layout/vwCarousel');?>
		<div id="mainBody">
			<div class="container">
				<div class="row">
					<?php $this->load->view('layout/vwSidebar')?>
					<div class="span9">
						<?php $this->load->view($view)?>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('layout/vwFooter.php')?>
		<!-- Placed at the end of the document so the pages load faster ============================================= -->
		<script src="<?php echo base_url();?>assets/front/themes/js/google-code-prettify/prettify.js"></script>
		<script src="<?php echo base_url();?>assets/front/themes/js/bootshop.js"></script>
		<script src="<?php echo base_url();?>assets/front/themes/js/jquery.lightbox-0.5.js"></script>
		<!-- Themes switcher section ============================================================================================= -->
	</body>
</html>