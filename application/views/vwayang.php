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
		<center><h1>Data Wayang</h1></center>
		<a href="<?= site_url('Wayang/tambah_data') ?>" class="btn btn-info">TAMBAH DATA</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Sejarah</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1 ; foreach($dat as $row){ ?>
					<tr>
						<td><?= $nomor++ ?></td>
						<td><?= $row->nama ?></td>
						<td><?= $row->sejarah ?></td>
						<td><a href="<?= site_url('Wayang/edit_data/'.$row->id) ?>" class="btn btn-warning">EDIT</a></td>
						<td><a href="<?= site_url('Wayang/delete_data/'.$row->id) ?>"  class="btn btn-danger" onclick="return confirm('Anda akan menghapus <?= $row->nama ?> ?')">DELETE</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
