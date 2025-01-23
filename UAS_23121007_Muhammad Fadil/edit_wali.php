<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Data Wali</title>
</head>
<body>
  <h3>Update Data Admin</h3>
  <?php 
  include "koneksi.php";
  $id_wali = "";
        $nama_siswa= "";
        $nama_ayah= "";
        $nama_ibu= "";
        $alamat_wali = "";
        $no_telpon= "";
        $penghasilan_wali= "";
        $tempat_tinggal = "";
        $keterangan_wali= "";

        if(isset($_GET['id'])) {
            $id_wali = $_GET['id'];
            $query = "SELECT * FROM tbl_wali WHERE id_wali = '$id_wali'";
            $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
            $data = mysqli_fetch_assoc($result);

            if($data) {
                $nama_siswa = $data['nama_siswa'];
                $nama_ayah = $data['nama_ayah'];
                $nama_ibu = $data['nama_ibu'];
                $alamat_wali = $data['alamat_wali'];
                $no_telpon = $data['no_telpon'];
                $penghasilan_wali= $data['penghasilan_wali'];
                $tempat_tinggal = $data['tempat_tinggal'];
                $keterangan_wali = $data['keterangan_wali'];

            }
        }

   ?>

   <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td><input type="hidden" name="id_wali" value="<?php echo $id_wali; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama_siswa" value="<?php echo $nama_siswa; ?>"></td>
            </tr>
             <tr>
                <td>Nama Ayah</td>
                <td><input type="text" name="nama_ayah" value="<?php echo $nama_ayah; ?>"></td>
            </tr>
             <tr>
                <td>Nama Ibu</td>
                <td><input type="text" name="nama_ibu" value="<?php echo $nama_ibu; ?>"></td>
            </tr>
            <tr>
                <td>Alamat Wali</td>
                <td><input type="text" name="alamat_wali" value="<?php echo $alamat_wali; ?>"></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td><input type="text" name="no_telpon" value="<?php echo $no_telpon; ?>"></td>
            </tr>
              <tr>
                <td>Penghasilan Wali</td>
                <td><input type="text" name="penghasilan_wali" value="<?php echo $penghasilan_wali; ?>"></td>
            </tr>
            <tr>
                <td>Tempat Tinggal </td>
                <td><input type="text" name="tempat_tinggal" value="<?php echo $tempat_tinggal; ?>"></td>
            </tr>
             <tr>
                <td>Keterangan Wali</td>
                <td><input type="text" name="keterangan_wali" value="<?php echo $keterangan_wali; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="UPDATE"></td>
            </tr>
        </table>
    </form>

    <?php 
    if(isset($_POST['simpan'])){
           $id_wali            = $_POST['id_wali'];
            $nama_siswa        = $_POST['nama_siswa'];
            $nama_ayah         = $_POST['nama_ayah'];
            $nama_ibu          = $_POST['nama_ibu'];
            $alamat_wali       = $_POST['alamat_wali'];
            $no_telpon        = $_POST['no_telpon'];
            $penghasilan_wali  = $_POST['penghasilan_wali'];
            $tempat_tinggal    = $_POST['tempat_tinggal'];
            $keterangan_wali   = $_POST['keterangan_wali'];

            if(!empty($id_wali)) {
                // Update data jika ID wali diisi
                $query = "UPDATE tbl_wali SET
                          nama_siswa = '$nama_siswa', 
                          nama_ayah = '$nama_ayah', 
                          nama_ibu = '$nama_ibu', 
                          alamat_wali = '$alamat_wali', 
                          no_telpon= '$no_telpon',
                          penghasilan_wali = '$penghasilan_wali',
                          tempat_tinggal = '$tempat_tinggal', 
                          keterangan_wali= '$keterangan_wali'";
                  
                  $query .= " WHERE id_wali = '$id_wali'";

            } else {
               // Insert data baru jika ID Wali kosong
                $query = "INSERT INTO tbl_wali (nama_siswa, nama_ayah, nama_ibu, alamat_wali, no_telpon, penghasilan_wali, tempat_tinggal, keterangan_wali";


              
                
                $query .= ") 
                VALUES ('$nama_siswa', '$nama_ayah', '$nama_ibu', '$alamat_wali', '$no_telpon', '$penghasilan_wali', '$tempat_tinggal', '$keterangan_wali'";


                
                
                $query .= ")";
            }

            $proses = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
            if($proses) {
                echo "<script>alert('Data Berhasil Disimpan atau Diperbarui');
                window.location='data_wali.php'</script>";
            } else {
                echo "<script>alert('Terjadi kesalahan, data gagal disimpan atau diperbarui.');</script>";
            }
        }
    ?>
</body>
</html>