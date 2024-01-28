<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Rektrutmen Infomedia</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top d-flex align-items-center">
		<div class="container-fluid d-flex align-items-center justify-content-between">

			<a href=" <?= site_url('index'); ?>" class="logo d-flex align-items-center me-auto me-xl-0">
				<h1>Infomedia</h1>
				<span>.</span>
			</a>

			<!-- Nav Menu -->
			<nav id="navmenu" class="navmenu">

				<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav><!-- End Nav Menu -->

			<a class="btn-getstarted" href="<?= site_url('index/login'); ?>">Masuk</a>

		</div>
	</header><!-- End Header -->

	<main id="main">

		<!-- Hero Section - Home Page -->
		<section id="hero" class="hero">

			<img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

			<div class="container">
				<div class="row">
					<div class="col-lg-10">
						<h2 data-aos="fade-up" data-aos-delay="100">Selamat Datang</h2>
						<p data-aos="fade-up" data-aos-delay="200">REKRUTMEN INFOMEDIA NUSANTARA</p>
					</div>
					<div class="col-lg-5">
						<a href="<?= site_url('index/jobVacancy'); ?>" class="btn btn-secondary">Jelajahi Karier</a>
					</div>
				</div>
			</div>

		</section><!-- End Hero Section -->

		<!-- Clients Section - Home Page -->


		<!-- About Section - Home Page -->
		<section id="about" class="about">

			<div class="container" data-aos="fade-up" data-aos-delay="100">
				<div class="row align-items-xl-center gy-5">

					<div class="col-xl-5 content">
						<h3>Informasi</h3>
						<h2>Rekrutmen Infomedia
						</h2>

						<a href="#" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
					</div>

					<div class="col-xl-7">
						<div class="row gy-4 icon-boxes">

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
								<div class="icon-box">
									<i class="bi bi-buildings"></i>
									<h3>MANAGE OPERATION HUMAN RESOURCE</h3>
									<ul>
										<li>
											Digital Payroll and Administration - Digital Recruiment
										</li>
										<li>
											Digital Learning
										</li>
										<li>
											Corporate Travel Management
										</li>
									</ul>
								</div>
							</div> <!-- End Icon Box -->

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
								<div class="icon-box">
									<i class="bi bi-clipboard-pulse"></i>
									<h3>MANAGE OPERATION FINANCE & ACCOUNTING</h3>
									<ul>
										<li>
											Invoice to Pay(I2P)
										</li>
										<li>
											Invoice to Cash(I2C)
										</li>
										<li>
											Record to Report (R2R) - Tax Accounting
										</li>
										<li>
											Fixed Asset Accounting
										</li>
									</ul>
								</div>
							</div> <!-- End Icon Box -->

							<div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
								<div class="icon-box">
									<i class="bi bi-command"></i>
									<h3>MANAGE OPERATION PROCUREMENT</h3>
									<ul>
										<li>Procurement Center</li>
									</ul>
								</div>
							</div> <!-- End Icon Box -->



						</div>
					</div>

				</div>
			</div>

		</section><!-- End About Section -->

		<section id="faq" class="faq">

			<div class="container">

				<div class="row gy-4">

					<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
						<div class="content px-xl-5">
							<h3><span>Frequently Asked </span><strong>Questions</strong></h3>
						</div>
					</div>

					<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

						<div class="faq-container">
							<div class="faq-item faq-active">
								<h3><span class="num">1.</span> <span>
										Apa spesifikasi komputer yang dibutuhkan untuk melakukan pengisian aplikasi
										online?</span></h3>
								<div class="faq-content">
									<p>Siapkan komputer atau laptop yang telah terinstall web browser minimal Internet
										Explorer 10 atau yang terbaru atau Mozilla Firefox minimal versi 3.0 atau Google
										Chrome minimal versi 16. Lengkapi komputer atau laptop Anda dengan mouse.
										Pastikan web browser tersebut dapat menerima cookies dan pastikan komputer atau
										laptop Anda tersambung dengan jaringan internet yang stabil.</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">2.</span> <span>Bagaimana cara mendaftar dan melamar di Portal
										Rekrutmen Infomedia?</span></h3>
								<div class="faq-content">
									<p>Silahkan <b>mendaftarkan akun</b> terlebih dahulu dengan cara: <br>

										1. Mengklik tombol “registrasi”.

										2. Mengisi nama lengkap, alamat email, nomor KTP dan password.<br>

										3. Aktivasi akun dikirimkan melalui email yang didaftarkan. <br>

										4. Masuk kembali ke portal rekrutmen menggunakan alamat email dan password.<br>



										Kemudian, lakukan proses lamaran dengan cara berikut: <br>

										1. Melengkapi Daftar Riwayat Hidup, termasuk upload dokumen pendukung dan foto
										diri (tidak harus pas foto, namun sopan dan profesional). <br>

										2. Memilih salah satu dari lowongan pekerjaan yang sesuai dengan minat. </p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">3.</span> <span>Apa saja dokumen yang diunggah (upload) yang
										menjadi persayaratan untuk melamar?</span></h3>
								<div class="faq-content">
									<p>
										Dokumen yang wajib diunggah (upload) dan menjadi persayaratan untuk melamar
										antara lain: <br>

										1. Foto diri, tidak harus pas foto, namun tetap sopan dan profesional. <br>

										2. Scan identitas diri (KTP) - mandatory; <br>

										3. Scan ijazah atau Surat Keterangan Lulus - mandatory; <br>

										4. Scan transkrip nilai - mandatory; <br>
									</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">4.</span> <span>Haruskah saya mengirimkan berkas-berkas seperti
										CV, Ijazah, dll ke kantor
										Infomedia Nusantara?</span></h3>
								<div class="faq-content">
									<p>Proses lamaran dan rekrutmen dilakuan secara online, sehingga tidak perlu
										mengirimkan berkas secara offline. Anda cukup melengkapi Daftar Riwayat Hidup
										dan meng-upload dokumen yaitu KTP, foto, ijazah, transkrip nilai, dan dokumen
										optional lainnya.</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

							<div class="faq-item">
								<h3><span class="num">5.</span> <span>Bagaimana jika saya lupa password?</span></h3>
								<div class="faq-content">
									<p>Kamu bisa klik tombol lupa password di halaman login. Kemudian reset password
										akan dikirimkan ke email kamu.
									</p>
								</div>
								<i class="faq-toggle bi bi-chevron-right"></i>
							</div><!-- End Faq item-->

						</div>

					</div>
				</div>

			</div>

		</section><!-- End Faq Section -->

		<section id="recent-posts" class="recent-posts">

			<!--  Section Title -->
			<div class="container section-title" data-aos="fade-up">
				<h2>Yang Mungkin Buat Kamu Tertarik</h2>
			</div><!-- End Section Title -->

			<div class="container">

				<div class="row gy-4">

					<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
						<article>

							<div class="post-img">
								<img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
							</div>

							<p class="post-category">Strategi</p>

							<h2 class="title">
								<a href="blog-details.html">Sukses Karir Melalui Prinsip SMART</a>
							</h2>
							<a href="#" class="btn btn-danger">Baca Selengkapnya</a>

						</article>
					</div><!-- End post list item -->

					<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
						<article>

							<div class="post-img">
								<img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
							</div>

							<p class="post-category">Seminar</p>

							<h2 class="title">
								<a href="blog-details.html">Well Balanced Life 4R by Telkom</a>
							</h2>

							<a href="#" class="btn btn-danger">Baca Selengkapnya</a>

						</article>
					</div><!-- End post list item -->

					<div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
						<article>

							<div class="post-img">
								<img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
							</div>

							<p class="post-category">Tutorial</p>

							<h2 class="title">
								<a href="blog-details.html">Cara Membuat CV yang Kekinian dan Terlihat Profesional</a>
							</h2>

							<a href="#" class="btn btn-danger">Baca Selengkapnya</a>

						</article>
					</div><!-- End post list item -->

				</div><!-- End recent posts list -->

			</div>

		</section><!-- End Recent-posts Section -->

	</main>

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">

		<div class="container footer-top">
			<div class="row gy-4">
				<div class="col-lg-5 col-md-12 footer-about">
					<a href="index.html" class="logo d-flex align-items-center">
						<span>Infomedia</span>
					</a>
					<div class="social-links d-flex mt-4">
						<a href=""><i class="bi bi-twitter"></i></a>
						<a href=""><i class="bi bi-facebook"></i></a>
						<a href=""><i class="bi bi-instagram"></i></a>
						<a href=""><i class="bi bi-linkedin"></i></a>
					</div>
				</div>

				<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
					<h4>Contact Us</h4>
					<p>PT Infomedia Nusantara</p>
					<p>Head Office Jl. RS. Fatmawati 77-8</p>
					<p>Jakarta 12150 </p>
					<p class="mt-4"><strong>Phone:</strong> <span>+62 7201221</span></p>
				</div>

			</div>
		</div>

		<div class="container copyright text-center mt-4">
			<p>&copy; <span>Copyright</span> 2024 <strong class="px-1">Infomedia</strong> <span>All Rights
					Reserved</span>
			</p>
			<div class="credits">

			</div>
		</div>

	</footer><!-- End Footer -->

	<!-- Scroll Top Button -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Preloader -->
	<div id="preloader">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>