<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="home" class="hero-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<h1 class="hero-title mb-4">Bersama<br>Membangun<br>Harapan</h1>
				<p class="lead mb-4">
					Bergabunglah bersama kami untuk menciptakan perubahan nyata dan masa depan yang lebih cerah bagi mereka yang membutuhkan.
				</p>
				<a href="#about" class="btn btn-outline-dark rounded-pill px-4 py-2">Kenali Lebih Dalam</a>
			</div>
			<div class="col-lg-6 text-center">
				<img src="https://placehold.co/600x400/7c9779/white?text=Ilustrasi+Yayasan" alt="Hero Image" class="img-fluid rounded-4 shadow">
			</div>
		</div>
	</div>
</section>

<section id="about" class="py-5">
	<div class="container py-5">
		<div class="row align-items-center mb-5">
			<div class="col-lg-6">
				<img src="https://placehold.co/600x400/b3c1b4/333?text=Tentang+Kami" alt="About" class="img-fluid rounded-4 mb-4 mb-lg-0">
			</div>
			<div class="col-lg-6">
				<h6 class="text-uppercase text-muted fw-bold ls-2">Tentang Yayasan</h6>
				<h2 class="fw-bold mb-3" style="color: var(--primary-dark)">Mewujudkan Kebaikan Bersama</h2>
				<p class="text-muted">
					[cite_start]Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat[cite: 20].
				</p>
			</div>
		</div>

		<div class="row g-4 mt-4">
			<div class="col-md-6">
				<div class="p-4 rounded-4 h-100" style="background-color: var(--bg-white-off);">
					<h3 class="fw-bold mb-3" style="color: var(--primary-dark)">Visi Kami</h3>
					[cite_start]<p>Menciptakan masyarakat yang mandiri, sehat, dan berpendidikan melalui gotong royong dan kepedulian sosial[cite: 35].</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="p-4 rounded-4 h-100" style="background-color: var(--bg-cream);">
					<h3 class="fw-bold mb-3" style="color: var(--primary-dark)">Misi Kami</h3>
					<ul class="list-unstyled">
						<li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Memberikan akses pendidikan berkualitas.</li>
						<li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Meningkatkan layanan kesehatan masyarakat.</li>
						[cite_start]<li><i class="bi bi-check-circle-fill text-success me-2"></i> Memberdayakan ekonomi keluarga prasejahtera[cite: 38].</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="programs" class="py-5 bg-light">
	<div class="container py-5">
		<h2 class="section-title">Program Kami</h2>
		<p class="text-center text-muted mb-5 col-lg-8 mx-auto">
			Fokus utama kami terbagi dalam beberapa pilar penting untuk memastikan dampak yang berkelanjutan.
		</p>

		<div class="row g-4">
			<div class="col-md-6 col-lg-3">
				<div class="program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<i class="bi bi-book fs-4"></i>
					</div>
					<h5 class="fw-bold">Pendidikan</h5>
					[cite_start]<p class="small text-muted">Mendukung akses sekolah dan beasiswa bagi anak kurang mampu[cite: 21].</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<i class="bi bi-heart-pulse fs-4"></i>
					</div>
					<h5 class="fw-bold">Kesehatan</h5>
					[cite_start]<p class="small text-muted">Layanan kesehatan gratis dan penyuluhan gizi bagi masyarakat[cite: 25].</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<i class="bi bi-tree fs-4"></i>
					</div>
					<h5 class="fw-bold">Lingkungan</h5>
					[cite_start]<p class="small text-muted">Program penghijauan dan pengelolaan sampah berbasis komunitas[cite: 29].</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<i class="bi bi-shop fs-4"></i>
					</div>
					<h5 class="fw-bold">Ekonomi</h5>
					[cite_start]<p class="small text-muted">Pelatihan UMKM dan bantuan modal usaha mikro[cite: 41].</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5" style="background-color: var(--primary-dark); color: white;">
	<div class="container py-5 text-center">
		<i class="bi bi-quote fs-1 opacity-50"></i>
		<h2 class="my-4 fst-italic fw-light col-lg-8 mx-auto">
			"Berkat bantuan yayasan, kini kami memiliki harapan baru untuk masa depan yang lebih baik."
		</h2>
		<p class="fw-bold mb-0">- Penerima Manfaat</p>
	</div>
</section>

<?= $this->endSection(); ?>