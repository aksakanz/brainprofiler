<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Career PT Infomedia Nusantara</title>
	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png'); ?>">
	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/index.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/fa/css/all.min.css') ?>" rel="stylesheet">
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>


</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url('index'); ?>">
				<img src="<?= base_url('assets/img/logo.png'); ?>" alt="PT Infomedia Nusantara" style="max-width: 100px; height: auto;"> <!-- Adjust the max-width to control the size -->
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link " href="<?= site_url('index'); ?>">Job Vacancy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('index/company'); ?>">Company</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="<?= site_url('index/contact'); ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('index/login'); ?>">Masuk</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>



	<style>
		.container {
			text-align: center;
		}

		.row {
			display: inline-block;
			padding: 10px;
		}
	</style>

	<div class="container mt-5">
		<center>
			<h5>Follow Us On</h5>
		</center>
		<hr>
		<div class="container">
			<div class="row">
				<a href="#"><i class="fab fa-linkedin-in fa-4x" style="color: #0082ca;"></i></a>
			</div>

			<div class="row">
				<a href="#"><i class="fab fa-instagram fa-4x" style="color: #ac2bac;"></i></a>
			</div>

			<div class="row">
				<a href="#"><i class="fab fa-whatsapp fa-4x" style="color: #25d366;"></i></a>
			</div>
		</div>
	</div>




	<footer class="footer bg-dark text-light text-center">
		<div class="container">
			<p>&copy; <?php echo date('Y'); ?> BrainProfiler. All rights reserved.</p>
		</div>
	</footer>

</body>

</html>