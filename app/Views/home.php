<?= $this->extend('layout/template'); ?>

<?= $this->section('style'); ?>

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<section id="home" class="hero-section-full">
	<div id="heroCarouselBg" class="carousel slide carousel-fade hero-bg" data-bs-ride="carousel">
		<div class="carousel-inner h-100">
			<div class="carousel-item active h-100">
				<img src="<?= base_url('assets/sample1.jpg') ?>" class="d-block w-100 h-100 object-fit-cover" alt="Background 1">
			</div>
			<div class="carousel-item h-100">
				<img src="<?= base_url('assets/sample2.jpg') ?>" class="d-block w-100 h-100 object-fit-cover" alt="Background 2">
			</div>
			<div class="carousel-item h-100">
				<img src="<?= base_url('assets/sample3.png') ?>" class="d-block w-100 h-100 object-fit-cover" alt="Background 3">
			</div>
		</div>
	</div>

	<div class="hero-overlay"></div>

	<div class="container position-relative h-100 d-flex align-items-center justify-content-start text-start">
		<div class="hero-content-wrapper col-lg-7" style="z-index: 3;">
			<h1 class="hero-title mb-4 animate-up">Bersama<br>Membangun<br>Harapan</h1>

			<p class="lead mb-4 animate-up delay-1">
				Bergabunglah bersama kami untuk menciptakan perubahan nyata dan masa depan yang lebih cerah bagi mereka yang membutuhkan.
			</p>

			<div class="animate-up delay-2">
				<a href="#about" class="btn btn-donate btn-lg px-5 py-3 shadow">Kenali Lebih Dalam</a>
			</div>
		</div>
	</div>
</section>

<section id="about" class="py-5">
	<div class="container py-5">
		<div class="row align-items-center mb-5">
			<div class="col-lg-6">
				<img src="https://placehold.co/600x400/d3effa/333?text=Tentang+Kami" alt="About" class="img-fluid rounded-4 mb-4 mb-lg-0">
			</div>
			<div class="col-lg-6">
				<h6 class="text-uppercase fw-bold ls-2">Tentang Yayasan</h6>
				<h2 class="fw-bold mb-3" style="color: var(--primary-dark)">Mewujudkan Kebaikan Bersama</h2>
				<p class="text-muted">
					Yayasan Bumi Sejahtera Bersama bergerak dibidang Pendidikan, Sosial, Kemanusiaan dan Keagamaan. Berbadan Hukum dengan Nomor Daftar Yayasan: No.AHU-0030594.AH.01.12.TAHUN 2024 per tanggal 10 Desember 2024. Yayasan kami berkomitmen untuk memberdayakan masyarakat kurang mampu melalui berbagai program yang berfokus pada peningkatan kualitas hidup dan kesejahteraan sosial.
				</p>
			</div>
		</div>

		<div class="row g-4 mt-4">
			<div class="col-md-6">
				<div class="p-4 rounded-4 h-100" style="background-color: var(--bg-white-off);">
					<h3 class="fw-bold mb-3" style="color: var(--primary-dark)">Visi Kami</h3>
					<p class="text-muted">Berkarya untuk mewujudkan yayasan yang membawa berkat dan menolong banyak orang.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="p-4 rounded-4 h-100" style="background-color: var(--bg-cream);">
					<h3 class="fw-bold mb-3" style="color: var(--primary-dark)">Misi Kami</h3>
					<p class="text-muted">Mewujudkan panggilan Spiritualitas Hidup Kristiani yang menyatakan KASIH.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="programs" class="py-5 bg-light">
	<div class="container py-5">
		<h2 class="section-title">Program Kami</h2>
		<p class="text-center mb-5 col-lg-8 mx-auto text-muted">
			Fokus utama kami terbagi dalam beberapa pilar penting untuk memastikan dampak yang berkelanjutan.
		</p>

		<div class="row g-4">
			<div class="col-md-6 col-lg-4">
				<div class="program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<img src="<?= base_url('assets/pendidikan.svg') ?>" alt="Pendidikan" width="70">
					</div>
					<h5 class="fw-bold">Pendidikan</h5>
					<p class="small">Mendukung akses sekolah dan beasiswa bagi anak kurang mampu.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<img src="<?= base_url('assets/kesehatan.svg') ?>" alt="Kesehatan" width="70">
					</div>
					<h5 class="fw-bold">Kesehatan</h5>
					<p class="small">Layanan kesehatan gratis dan penyuluhan gizi bagi masyarakat.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<img src="<?= base_url('assets/sosial.svg') ?>" alt="Sosial" width="70">
					</div>
					<h5 class="fw-bold">Sosial</h5>
					<p class="small">Program penghijauan dan pengelolaan sampah berbasis komunitas.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>

<?= $this->endSection(); ?>