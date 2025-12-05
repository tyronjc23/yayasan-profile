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

<section id="about" class="section-common">
	<div class="container">
		<div class="row align-items-center mb-5">
			<div class="col-lg-12">
				<h1 class="fw-bold mb-3" style="color: var(--primary-dark)">Tentang Yayasan</h1>
				<p class="text-muted">
					Yayasan Bumi Sejahtera Bersama bergerak dibidang Pendidikan, Sosial dan Kemanusiaan. Berbadan Hukum dengan Nomor Daftar Yayasan: No.AHU-0030594.AH.01.12.TAHUN 2024 per tanggal 10 Desember 2024. Yayasan kami berkomitmen untuk memberdayakan masyarakat kurang mampu melalui berbagai program yang berfokus pada peningkatan kualitas hidup dan kesejahteraan sosial.
				</p>
			</div>
		</div>

		<div class="row g-4">
			<div class="col-md-6 col-lg-4">
				<div class="about-program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<img src="<?= base_url('assets/pendidikan.svg') ?>" alt="Pendidikan" width="70">
					</div>
					<h5 class="fw-bold">Pendidikan</h5>
					<p class="small">Mendukung akses sekolah dan beasiswa bagi anak kurang mampu.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="about-program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<img src="<?= base_url('assets/kesehatan.svg') ?>" alt="Kesehatan" width="70">
					</div>
					<h5 class="fw-bold">Kesehatan</h5>
					<p class="small">Layanan kesehatan gratis dan penyuluhan gizi bagi masyarakat.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="about-program-card p-4 h-100 text-center">
					<div class="icon-box mx-auto">
						<img src="<?= base_url('assets/sosial.svg') ?>" alt="Sosial" width="70">
					</div>
					<h5 class="fw-bold">Sosial</h5>
					<p class="small">about-Program penghijauan dan pengelolaan sampah berbasis komunitas.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-common section-alt">
	<div class="container">
		<div class="section-header">
			<h1 class="section-title">Tentang Kami</h1>
		</div>

		<div class="row align-items-center mb-5">
			<div class="col-lg-12" style="text-align: center;">
				<img src="https://placehold.co/600x400/d3effa/333?text=image" alt="About" class="img-fluid rounded-4 mb-4 mb-lg-0">
			</div>
		</div>

		<div class="row justify-content-center my-5">
			<div class="col-lg-10">
				<div class="text-center mb-4">
					<h3 class="fw-bold" style="color: var(--primary-dark)">Struktur Pengurus</h3>
					<p class="text-muted small">Dedikasi tim kami untuk melayani masyarakat.</p>
				</div>

				<div class="table-responsive org-table-wrapper">
					<table class="table org-table">
						<thead>
							<tr>
								<th class="text-center" style="width: 50px;">No</th>
								<th>Jabatan</th>
								<th>Nama Pengurus</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center">1</td>
								<td><span class="badge-role">Ketua Pembina</span></td>
								<td class="fw-bold">Heru Djuanto Tjokrosaputro</td>
							</tr>
							<tr>
								<td class="text-center">2</td>
								<td><span class="badge-role">Anggota Pembina</span></td>
								<td class="fw-bold">Bernard Tjokrosaputro</td>
							</tr>
							<tr>
								<td class="text-center">3</td>
								<td><span class="badge-role">Ketua</span></td>
								<td class="fw-bold">Yavet Sulle Konda</td>
							</tr>
							<tr>
								<td class="text-center">4</td>
								<td><span class="badge-role">Wakil Ketua</span></td>
								<td class="fw-bold">Tatang Surjana</td>
							</tr>
							<tr>
								<td class="text-center">5</td>
								<td><span class="badge-role">Sekretaris Umum</span></td>
								<td class="fw-bold">Sulistyo Nugroho</td>
							</tr>
							<tr>
								<td class="text-center">6</td>
								<td><span class="badge-role">Sekretaris</span></td>
								<td class="fw-bold">Arda Rahardja Lukitobudi</td>
							</tr>
							<tr>
								<td class="text-center">7</td>
								<td><span class="badge-role">Bendahara</span></td>
								<td class="fw-bold">Agus Sofyan</td>
							</tr>
							<tr>
								<td class="text-center">8</td>
								<td><span class="badge-role">Ketua Pengawas</span></td>
								<td class="fw-bold">Jap Han Sien</td>
							</tr>
							<tr>
								<td class="text-center">9</td>
								<td><span class="badge-role">Anggota Pengawas</span></td>
								<td class="fw-bold">Hasan Bachtiar</td>
							</tr>
						</tbody>
					</table>
				</div>
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

<section id="programs" class="section-common">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title">Program Kami</h2>
			<p class="section-desc">
				Fokus utama kami terbagi dalam beberapa pilar penting untuk memastikan dampak yang berkelanjutan.
			</p>
		</div>

		<div class="row g-4">

			<div class="col-lg-12">
				<div class="program-card">
					<div class="program-card-img-wrapper">
						<img src="https://placehold.co/600x400/d3effa/333?text=image+pendidikan" alt="Pendidikan" class="program-card-img">
					</div>

					<div class="program-card-body">
						<h3 class="program-title">Pendidikan</h3>
						<p class="program-desc">
							<ol>
								<li>Mendirikan Pendidikan Taman Kanak-Kanak (TK).</li>
								<li>Mendirikan Pendidikan Anak Usia Dini (PAUD).</li>
								<li>Menyelenggarakan Pendidikan dan Pelatihan dalam berbagai kejuruan.</li>
								<li>Membuka akses pendidikan berkualitas melalui beasiswa dan bimbingan belajar bagi anak-anak prasejahtera.</li>
							</ol>
						</p>
						<a href="#" class="program-link">
							Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
						</a>
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="program-card">
					<div class="program-card-body">
						<h3 class="program-title">Kesehatan</h3>
						<p class="program-desc">
							<ol>
								<li>Mendirikan Rumah Sakit, Poliklinik dan Laboratorium dan Balai-balai pengobatan umum.</li>
								<li>Layanan kesehatan gratis, penyuluhan gizi, dan bantuan pengobatan bagi lansia dan balita.</li>
							</ol>
						</p>
						<a href="#" class="program-link">
							Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
						</a>
					</div>

					<div class="program-card-img-wrapper">
						<img src="https://placehold.co/600x400/d3effa/333?text=image+kesehatan" alt="Kesehatan" class="program-card-img">
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="program-card">
					<div class="program-card-img-wrapper">
						<img src="https://placehold.co/600x400/d3effa/333?text=image+sosial" alt="Sosial" class="program-card-img">
					</div>
					
					<div class="program-card-body">
						<h3 class="program-title">Sosial</h3>
						<p class="program-desc">
							<ol>
								<li>Mendirikan Panti Asuhan, Panti Jompo dan Panti Wreda.</li>
								<li>Menyelenggarakan pelayanan unit usaha dengan mendirikan dan mengelola lembaga-lembaga sehubungan dengan hal itu.</li>
								<li>Menyelenggarakan usaha-usaha pelayanan sosial lainnya dalam arti yang seluas-luasnya dengan medirikan dan mengelola lembaga-lembaga sehubungan dengan itu.</li>
								<li>Tanggap bencana, bantuan sembako, serta program pelestarian lingkungan berbasis komunitas.</li>
							</ol>
						</p>
						<a href="#" class="program-link">
							Selengkapnya <i class="bi bi-arrow-right ms-2"></i>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>

<?= $this->endSection(); ?>