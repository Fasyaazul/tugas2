<html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<title>perputakaan</title>
<body>
<h3>Data Mahasiswa</h3>
<a href="tambah_mahasiswa.php" class="btn btn-success">Tambah Mahasiswa</a>
<table class="table table-hover table-hover">
	<thread>
		<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>NIM</th>
		<th>ALAMAT</th>
		<th>USERNAME</th>
		<th>AKSI</th>
		</tr>
	</thread>
		<tbody>
		<?php
		include "koneksi.php";
		$qry_mahasiswa=mysqli_query($koneksi,"select * from mahasiswa");
		$no=0;
		while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
			$no++;?>
		<tr>
			<td><?=$no?></td>
			<td><?=$data_mahasiswa['Nama']?></td>
			<td><?=$data_mahasiswa['NIM']?></td>
			<td><?=$data_mahasiswa['Alamat']?></td>
			<td><?=$data_mahasiswa['Username']?></td>
			<td>
				<a href="edit.php?id_mahasiswa=<?=$data_mahasiswa['id_mahssiswa']?>" class="btn btn-success">Edit</a>

				<a href="hapus.php?id_mahasiswa=<?=$data_mahasiswa['id_mahssiswa']?>"
					onclick="return confirm('apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a>
			</td>

		</tr>
		<?php
	}
	?>
	</tbody>
	</table>
	</body>
	</html>