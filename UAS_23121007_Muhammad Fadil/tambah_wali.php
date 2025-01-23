<!DOCTYPE html>
<html>
<head>
	<title>Input Data Wali</title>
</head>
<body>
	<h3>Input Data Wali</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama Siswa</td>
				<td><input type="text" name="nama_siswa"></td>
			</tr>
			<tr>
				<td>Nama Ayah</td>
				<td><input type="text" name="nama_ayah"></td>
			</tr>
			<tr>
				<td>Nama Ibu</td>
				<td><input type="text" name="nama_ibu"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat_wali"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" name="no_telpon"></td>
			</tr>
			<tr>
				<td>Penghasilan Wali</td>
				<td><input type="text" name="penghasilan_wali"></td>
			</tr>
			<tr>
				<td>Tempat Tinggal</td>
				<td><input type="text" name="tempat_tinggal"></td>
			</tr>
			<tr>
				<td>Keterangan Wali</td>
				<td><input type="text" name="keterangan_wali"></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	<?php 
        include "koneksi.php";
        if(isset($_POST['simpan'])){
            // Prepare the SQL query
            $query = "INSERT INTO tbl_wali (nama_siswa, nama_ayah, nama_ibu, alamat_wali, no_telpon, penghasilan_wali, tempat_tinggal, keterangan_wali) VALUES (
                '$_POST[nama_siswa]',
                '$_POST[nama_ayah]',
                '$_POST[nama_ibu]',
                '$_POST[alamat_wali]',
                '$_POST[no_telpon]',
                '$_POST[penghasilan_wali]',
                '$_POST[tempat_tinggal]',
                '$_POST[keterangan_wali]'
            )";

            // Execute the query
            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Data Berhasil Disimpan'); window.location='data_wali.php';</script>";
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
        }
    ?>

</body>
</html>