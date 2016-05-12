<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/back/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/back/css/mystyle.css" rel="stylesheet">
	
	<!-- Alertiffy --!-->
	
	<link href="<?php echo base_url();?>assets/alertify/css/alertify.core.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/alertify/css/alertify.default.css" rel="stylesheet">
	
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/back/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>assets/back/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/back/dist/css/sb-admin-2.css" rel="stylesheet">
    

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/back/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/back/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom Table -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/back/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/back/bower_components/datatables-responsive/css/dataTables.responsive.css">

	<!-- jQuery -->
    <script src="<?php echo base_url();?>assets/back/bower_components/jquery/dist/jquery.min.js"></script>
	
	<!-- JQUEY Validate !-->
	<script src="<?php echo base_url() ?>assets/js/jquey_validate.js"></script>
</head>

<body style='padding-top:50px'>

    <div id="wrapper" style="background-color:">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top navbar-fixed-top" role="navigation" style="margin-bottom: 0;background-color:;" >
            <?php $this->load->view('admin/layout/vwHeader')?>
            <?php $this->load->view('admin/layout/vwSidebar')?>
        </nav>

        <div id="page-wrapper">
            <?php $this->load->view($view)?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/back/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/alertify/js/alertify.min.js"></script>

	
	
	
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/back/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!--script src="<?php echo base_url();?>assets/back/bower_components/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url();?>assets/back/bower_components/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/morris-data.js"></script--!-->

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/back/dist/js/sb-admin-2.js"></script>

	 <script>
		$('.tooltip-demo').tooltip({
			selector: "[data-toggle=tooltip]",
			container: "body"
		})
		$('.tooltip-dm').tooltip({
			selector: "[data-toggle=tooltip]",
			container: "body"
		})
	</script>
 
</body>

</html>
