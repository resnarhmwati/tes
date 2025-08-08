<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Siswa</title>
</head>
<body>
  <h1>TAMBAH DATA KEHADIRAN SISWA</h1>

  <form action="" method="post">
    <input type="number" name="nis" id="nis" placeholder="NIS...">
    <input type="text" name="nama_siswa" id="nama_siswa" placeholder="Isi Nama...">
    <input type="text" name="keterangan" id="keterangan" placeholder="Isi Keterangan...">
    <button type="submit" name="tambah">Tambah</button>
  </form>

  <?php
  //mengambil data dari form
  //echo $_POST['nama_siswa'];
  if(isset($_POST['tambah'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama_siswa'];
    $keterangan = $_POST['keterangan'];


    //koneksi ke database
    require_once('koneksi.php');

    //insert data
    $result = mysqli_query($koneksi, "INSERT INTO kehadiran_siswa VALUES ('','$nis','$nama','$keterangan')") or die (mysqli_error($koneksi));

    //cek apabila berhasil di input
    if($result) {
      echo "<script>window.alert('data berhasil ditambahkan!')</script>";
    }
  }
  ?>
</body>
</html>