<!doctype html>
<html lang="id">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?? 'YAYASAN - Bersama Membangun Harapan'; ?></title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">

	<?= $this->renderSection('styles'); ?>
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="<?= base_url('assets/logo-old.svg') ?>" width="40" height="40" alt="Logo Yayasan">&nbsp;BUMI SEJAHTERA BERSAMA</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto align-items-center">
					<li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
					<li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
					<li class="nav-item"><a class="nav-link" href="#programs">Program</a></li>
					<!-- <li class="nav-item">
						<a class="btn btn-donate ms-2" href="#">Donasi Sekarang</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>

	<?= $this->renderSection('content'); ?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-4">
					<h4 class="fw-bold mb-3">YAYASAN BUMI SEJAHTERA BERSAMA</h4>
					<p>Bersama Membangun Harapan untuk masa depan yang lebih baik bagi semua.</p>
				</div>
				<div class="col-md-4 mb-4">
					<h5>Tautan</h5>
					<ul class="list-unstyled">
						<li><a href="#home">Beranda</a></li>
						<li><a href="#about">Tentang Kami</a></li>
						<li><a href="#programs">Program</a></li>
					</ul>
				</div>
				<div class="col-md-4 mb-4">
					<h5>Kontak</h5>
					<p><i class="bi bi-telephone me-2"></i> 08889400521 / 081321329881</p>
					<p><i class="bi bi-geo-alt me-2"></i> Holis Regency C32 Bandung, Jawa Barat</p>
					<p><i class="bi bi-envelope me-2"></i> yayasanbumisejahterabersama@gmail.com</p>
				</div>
			</div>
			<hr style="border-color: var(--primary-light);">
			<div class="text-center small">
				&copy; 2025 Yayasan. All rights reserved.
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<?= $this->renderSection('scripts'); ?>
</body>

</html>