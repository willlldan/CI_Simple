<<!DOCTYPE html>

	<head>
		<title>Halaman Home</title>
	</head>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">

	<body>
		<center>
			<h1>Halo Nama Saya <?= $nama ?>, saya berumur <?= $umur ?> </h1>

			<a class="btn btn-primary" href="<?= site_url('Wayang/tampil') ?>">
				tampil Wayang
			</a>
		</center>
	</body>

	</html>