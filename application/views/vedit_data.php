<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	</head>
	<body>
		<right><a href="<?= site_url('Wayang/tampil') ?>" class="btn btn-info"><< KEMBALI</a></right>
		<center><h1>Edit Data Wayang</h1></center>
		<table class="table table-bordered">
			<form action="<?= site_url('Wayang/edit_data_action') ?>" method="post">
				<thead>
                <input hidden type="text" name="id" required value="<?= $dat->id ?>">
					<tr>
						<th>Nama</th>
						<th>:</th>
						<th><input type="text" name="nama" required value="<?= $dat->nama ?>"></th>
					</tr>
					<tr>
						<th>Sejarah</th>
						<th>:</th>
						<th><input type="text" name="sejarah" required value="<?= $dat->sejarah ?>"/></th>
					</tr>
					<tr>
						<th colspan="3"><center><input class="btn btn-warning"  type="submit" value="EDIT DATA" /></center></th>
					</tr>
				</thead>
			</form>
		</table>
	</body>
</html>
