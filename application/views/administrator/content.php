<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<body>
<h2><center>Selamat Datang Di Halaman Administrator </center></h2>
<br>
<br>
<div class="row top-summary">
				<div class="col-lg-4 col-md-6">
					<div class="widget green-1 animated fadeInDown">
						<div class="widget-content padding">
							<div class="widget-icon">
								<i class="icon-globe"></i>
							</div>
							<div class="text-box">
							<p class="maindata"><b>OPD</b></p>
							<?php  $skpd = $this->db->query('SELECT * FROM tbl_web WHERE id_kategori=1')->num_rows(); ?>
							 <a href="<?php echo base_url('Xxdmin/list_portal') ?>">
								 <h2><span class="animate-number" data-value="<?php echo $skpd ?>" data-duration="1000">0</span></h2>
							 </a>
								 <div class="clearfix"></div>
							</div>
						</div>
						<div class="widget-footer">
							<div class="row">
								<div class="col-sm-12">
									<i class="fa fa-caret-up rel-change"></i> Total Website SKPD 
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widget darkblue-2 animated fadeInDown">
						<div class="widget-content padding">
							<div class="widget-icon">
								<i class="icon-globe"></i>
							</div>
							<div class="text-box">
								<p class="maindata"><b>WEBSITE DESA</b></p>
								<?php $desa = $this->db->query('SELECT * FROM tbl_web WHERE id_kategori=4')->num_rows(); ?>
								 <a href="<?php echo base_url('Xxdmin/list_portal') ?>">
								<h2><span class="animate-number" data-value="<?php echo $desa ?>" data-duration="1000">0</span></h2>
								</a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="widget-footer">
							<div class="row">
								<div class="col-sm-12">
									<i class="fa fa-caret-up rel-change"></i>  Total Website Desa
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widget pink-1 animated fadeInDown">
						<div class="widget-content padding">
							<div class="widget-icon">
								<i class="fa fa-globe"></i>
							</div>
							<div class="text-box">
								<p class="maindata"><b>WEBSITE PARIWISATA</b></p>
								<?php $wisata = $this->db->query('SELECT * FROM tbl_web WHERE id_kategori=3')->num_rows() ?>
								<a href="<?php echo base_url('Xxdmin/list_portal') ?>">
								<h2><span class="animate-number" data-value="<?php echo $wisata ?>" data-duration="1000">0</span></h2>
								</a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="widget-footer">
							<div class="row">
								<div class="col-sm-12">
									<i class="fa fa-caret-up rel-change"></i> Total Website Pariwisata
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widget blue-2 animated fadeInDown">
						<div class="widget-content padding">
							<div class="widget-icon">
								<i class="icon-globe"></i>
							</div>
							<div class="text-box">
								<p class="maindata"><b>WEBSITE KELURAHAN</b></p>
								<?php $desa = $this->db->query('SELECT * FROM tbl_web WHERE id_kategori=9')->num_rows(); ?>
								 <a href="<?php echo base_url('Xxdmin/list_portal') ?>">
								<h2><span class="animate-number" data-value="<?php echo $desa ?>" data-duration="1000">0</span></h2>
								</a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="widget-footer">
							<div class="row">
								<div class="col-sm-12">
									<i class="fa fa-caret-up rel-change"></i>  Total Website Kelurahan
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-6">
					<div class="widget orange-1 animated fadeInDown">
						<div class="widget-content padding">
							<div class="widget-icon">
								<i class="icon-globe"></i>
							</div>
							<div class="text-box">
								<p class="maindata"><b>WEBSITE KECAMATAN</b></p>
								<?php $desa = $this->db->query('SELECT * FROM tbl_web WHERE id_kategori=10')->num_rows(); ?>
								 <a href="<?php echo base_url('Xxdmin/list_portal') ?>">
								<h2><span class="animate-number" data-value="<?php echo $desa ?>" data-duration="1000">0</span></h2>
								</a>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="widget-footer">
							<div class="row">
								<div class="col-sm-12">
									<i class="fa fa-caret-up rel-change"></i>  Total Website Kecamatan
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
			<br>
		
</body>
</html>