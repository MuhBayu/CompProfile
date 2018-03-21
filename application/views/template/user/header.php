<!doctype html>
<html lang="en">
<head>
	<title><?= $this->config->item('page_title'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url('/assets/klorofil/vendor/bootstrap/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/klorofil/vendor/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/klorofil/vendor/linearicons/style.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/klorofil/vendor/chartist/css/chartist-custom.css'); ?>">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url('/assets/klorofil/css/main.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/klorofil/css/demo.css'); ?>">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/klorofil/img/apple-icon.png'); ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('/assets/klorofil/img/favicon.png'); ?>">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="./"><img src="<?= base_url('/assets/klorofil/img/fusionAdmin.png'); ?>" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-user"></i> <span><?= $this->session->u_name; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
							<?php if ($this->session->u_level === '1') : ?>
								<li><a href="<?= base_url('admin');?>"><i class="lnr lnr-users"></i> <span>Admin Panel</span></a></li>
							<?php endif; ?>
								<li><a href="<?= base_url('main/logout');?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?= base_url('user');?>" id="navDash"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
						<li><a href="<?= base_url('user/proyek');?>"><i class="lnr lnr-chart-bars"></i><span>Proyek Terlibat</span></a></li>
						<li><a href="<?= base_url('user/pengaturan');?>"><i class="lnr lnr-cog"></i><span>Pengaturan</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->