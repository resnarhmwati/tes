<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 align="center">DATA SISWA</h1>
  <table border="1" width="50%" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Umur</th>
      <th>Email</th>
    </tr>

  <?php
  require_once('koneksi.php');
  $data = mysqli_query($koneksi, "SELECT * FROM tabel_kelas");
  $no = 1; 
  //menampilkan data siswa
  while($siswa=mysqli_fetch_assoc($data)) :
?>
    <tr>
    <td> <?= $no++ ?> </td>
    <td> <?= $siswa['nama_siswa']; ?></td>
    <td> <?= $siswa['umur']; ?></td>
    <td> <?= $siswa['email']; ?></td>
    </tr>

  <?php
  endwhile;
  ?>
    </table>
</body>
</html>