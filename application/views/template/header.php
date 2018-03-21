<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $this->config->item('page_title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<!-- css -->
	<link href="<?= base_url('/assets/vendor/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('/assets/vendor/css/fancybox/jquery.fancybox.css'); ?>" rel="stylesheet">
	<link href="<?= base_url('/assets/vendor/css/jcarousel.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('/assets/vendor/css/flexslider.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('/assets/vendor/css/style.css'); ?>" rel="stylesheet" />
	<!-- Theme skin -->
	<link href="<?= base_url('/assets/vendor/skins/default.css'); ?>" rel="stylesheet" />
</head>
<body>
	<div id="wrapper">
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
						<a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url('/assets/vendor/img/fusionTech.png'); ?>" height="40px"></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li><a href="<?= base_url(); ?>">Beranda</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Divisi <b class=" icon-angle-down"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?= base_url('/main/divisi/1'); ?>">Keuangan</a></li>
									<li><a href="<?= base_url('/main/divisi/2'); ?>">Humas</a></li>
									<li><a href="<?= base_url('/main/divisi/3'); ?>">Pemrograman Web</a></li>
									<li><a href="<?= base_url('/main/divisi/4'); ?>">Pemrograman Desktop</a></li>
									<li><a href="<?= base_url('/main/divisi/5'); ?>">Pemrograman Mobile</a></li>
								</ul>
							</li>
							<?php if ($this->session->has_userdata('u_name') AND $this->session->u_level !== '1') : ?>
							
							<?php endif;?>
							<li><a href="<?= base_url('/main/proyek'); ?>">Proyek</a></li>
							
						<?php if ($this->session->has_userdata('u_name')) : // JIKA SUDAH LOGIN?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-delay="0" data-close-others="false"><?= $this->session->u_name; ?></a>
								<ul class="dropdown-menu">
								<?php if ($this->session->u_level === '1') : ?>
									<li><a href="<?= base_url('/admin'); ?>"><i class="fa fa-users"></i> Admin Panel</a></li>
								<?php endif; ?>
									<li><a href="<?= base_url('/user'); ?>"><i class="fa fa-user"></i> Profil Karyawan</a></li>
									<li><a href="<?= base_url('/main/logout'); ?>"><i class="fa fa-sign-out"></i> Keluar</a></li>
								</ul>
							</li>
						<?php else: ?>
							<li><a href="<?= base_url('/login'); ?>">Masuk</a></li>
						<?php endif; ?>
							<li><a href="<?= base_url('/main/tentang'); ?>">Kontak</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>