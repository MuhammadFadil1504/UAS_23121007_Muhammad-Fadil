<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	mysqli_query($koneksi, "DELETE FROM tbl_wali WHERE id_wali='$id'");
	echo"<script>alert('Data Berhasil Di Hapus')
		window.location='data_wali.php'</script>";
?>