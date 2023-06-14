<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-orange navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?= base_url() ?>assets/index3.html" class="nav-link">Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Navbar Search -->
				<li class="nav-item">
					<a class="nav-link" data-widget="navbar-search" href="#" role="button">
						<i class="fas fa-search"></i>
					</a>
					<div class="navbar-search-block">
						<form class="form-inline">
							<div class="input-group input-group-sm">
								<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
									<button class="btn btn-navbar" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<button class="btn btn-navbar" type="button" data-widget="navbar-search">
										<i class="fas fa-times"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
				</li>


				<!-- Notifications Dropdown Menu -->
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">4</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">4 Notifications</span>
						<div class="dropdown-divider"></div>
						
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 4 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li>
				<!-- user Account -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?=base_url()?>assets/dist/img/user1-128x128.jpg" class="user-image">
						<span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-circle">
							<p>
								<?=$this->fungsi->user_login()->name?>
								<small><?=$this->fungsi->user_login()->address?></small>
							</p>
						</li>
						<li class="user-footer">
							<div class="left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="right">
								<a href="<?=site_url('auth/logout')?>" class="btn btn-flat bg-red">Keluar</a>
							</div>

						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('dashboard') ?>assets/index3.html" class="brand-link">
				<span class="brand-text font-weight-light">My POS</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-1 d-flex">
					<div class="image">
						<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<p style="color: white;"><?=ucfirst($this->fungsi->user_login()->username)?></p>
						<a href="#"><small class="fa fa-circle text-success"></small><small> Online</small></a>
					</div>
				</div>

				<!-- SidebarSearch Form -->
				<div class="form-inline">
					<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
								<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<li class="nav-header">Navigasi Utama</li>
						<li class="nav-item">
							<a href="<?=site_url('dashboard')?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=site_url('supplier')?>" class="nav-link">
								<i class="nav-icon fas fa-truck"></i>
								<p>
									Suppliers
								</p>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="<?=site_url('customer')?>" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>
									Customers
									
								</p>
							</a>
							
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-archive"></i>
								<p>
									Products
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?=site_url('category')?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Categories</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?=site_url('unit')?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Units</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Items</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-shopping-cart"></i>
								<p>
									Transaksi
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Sales</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Barang Masuk</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Barang Keluaran</p>
									</a>
								
							</ul>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file-archive"></i>
								<p>
									Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Penjualan</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Barang</p>
									</a>
								
							</ul>
						</li>
						<?php if($this->fungsi->user_login()->level == 1){?>
						<li class="nav-header">SETTINGS</li>
						<li class="nav-item">
							<a href="<?=site_url('user')?>" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p class="text">Users</p>
							</a>
						</li>
						<?php }?>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<?php echo $contents ?>
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Version</b> 3.1.0
			</div>
			<strong>Copyright &copy; 2020-2023 <a href="https://adminlte.io">Tugas Uas </a>.</strong> All rights reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
</body>

</html>