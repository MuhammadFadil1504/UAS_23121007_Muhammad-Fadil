<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UAS</title>
	<link rel="stylesheet" type="text/css" href="css/data_wali.css">
</head>
<body>
	<div class="container">
		<button class="btn-tambah"><a href="tambah_wali.php" class="button-add">Tambah Data</a></button>
	<br>
		<table class="data-table" border="1">
			<thead>
			<tr>
				<th colspan="10" style="text-align: left;">Data Wali</th>
			</tr>
			<?php include "koneksi.php" ?>
			<tr>
				<th rowspan="2">No</th>
				<th rowspan="2">Nama Siswa</th>
				<th colspan="2">Nama Lengkap</th>
				<th rowspan="2">Alamat</th>
				<th rowspan="2">No Telpon</th>
				<th rowspan="2">Penghasilan</th>
				<th rowspan="2">Tempat Tinggal</th>
				<th rowspan="2">Keterangan</th>
				<th rowspan="2" style="width: 150px;">Aksi</th>
			</tr>
			<tr>
				<th>Nama Ayah</th>
				<th>Nama Ibu</th>
			</tr>
			</thead>
			<?php 
			$data = mysqli_query($koneksi, "SELECT * FROM tbl_wali");
			$nomor = 1;
			while ($tampil = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $tampil['nama_siswa']; ?></td>
				<td><?php echo $tampil['nama_ayah']; ?></td>
				<td><?php echo $tampil['nama_ibu']; ?></td>
				<td><?php echo $tampil['alamat_wali']; ?></td>
				<td><?php echo $tampil['no_telpon']; ?></td>
				<td><?php echo $tampil['penghasilan_wali']; ?></td>
				<td><?php echo $tampil['tempat_tinggal']; ?></td>
				<td><?php echo $tampil['keterangan_wali']; ?></td>
				<div class="action-button">
				<td>
				<button class="btn-update"><a href="edit_wali.php?id=<?php echo $tampil['id_wali'];?>" class="button-add">UPDATE</a></button>
				<button class="btn-delete"><a href="hapus_wali.php?id=<?php echo $tampil['id_wali'];?>" class="button-add">HAPUS</a></button>
			</td>
		</div>
			</tr>
			<?php 
							}
			 ?>	
	</table>
	</div>
</body>
</html>