<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76"
		href="<?= base_url() ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="70x50"
		href="<?= base_url() ?>assets/img/logos/logo.png">
	<title>
		PT. Kereta Api Indonesia
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?= base_url() ?>assets/css/nucleo-icons.css"
		rel="stylesheet" />
	<link href="<?= base_url() ?>assets/css/nucleo-svg.css"
		rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url() ?>assets/css/nucleo-svg.css"
		rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle"
		href="<?= base_url() ?>assets/css/soft-ui-dashboard.css?v=1.0.2"
		rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-200">
	<!-- Navbar -->
	<nav
		class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-95 shadow-none my-3  navbar-transparent mt-4">
		<div class="container">
			<img src="<?= base_url() ?>assets/img/logos/logo.png"
				alt="" width="120" height="50">
			<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
				data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon mt-2">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
				</span>
			</button>
			<div class="collapse navbar-collapse" id="navigation">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
							href="<?= base_url() ?>#">
							<i class="fa fa-chart-pie opacity-6  me-1"></i>
							Dashboard
						</a>
					</li>
					<!--
					<li class="nav-item">
						<a class="nav-link me-2"
							href="<?= base_url() ?>pages/profile.html">
							<i class="fa fa-user opacity-6  me-1"></i>
							Profile
						</a>
					</li>
					-->
					<li class="nav-item">
						<a class="nav-link me-2"
							href="<?= base_url() ?>auth/registration">
							<i class="fas fa-user-circle opacity-6  me-1"></i>
							Daftar
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link me-2"
							href="<?= base_url() ?>auth/index">
							<i class="fas fa-key opacity-6  me-1"></i>
							Login
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navbar -->
	<section class="h-150-vh mb-8">
		<div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg"
			style="background-image: url('<?= base_url() ?>assets/img/background.jpg');">
			<span class="mask bg-gradient-dark opacity-6"></span>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5 text-center mx-auto">
						<h1 class="text-white mb-2 mt-5">Selamat Datang!</h1>
						<p class="text-lead text-white">Silakan login atau mendaftar akun terlebih dahulu, sebelum membeli tiket.</p>
					</div>
				</div>
			</div>
		</div>
