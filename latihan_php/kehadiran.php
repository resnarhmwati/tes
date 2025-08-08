<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1 align="center">KEHADIRAN SISWA TANGGAL SEKIAN</h1>
  <table border="1" width="50%" cellspacing="0">
    <tr>
      <th>No</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>

  <?php
  //mengambil data table ke database
  require_once('koneksi.php');
  $data = mysqli_query($koneksi, "SELECT * FROM kehadiran_siswa");

  //menampilkan data siswa
  $no = 1;
  while($siswa=mysqli_fetch_assoc($data)) :
  ?>
    <tr>
    <td> <?= $no++ ?> </td>
    <td> <?= $siswa['nis']?></td>
    <td> <?= $siswa['nama_siswa']?></td>
    <td> <?= $siswa['keterangan']?></td>
    <td>Update | Delete</td>
    <!-- <td><a href="edit-siswa.php?id=<?=$siswa['id']; ?>">update </a>| delete</td> -->
    </tr>
  <?php
  endwhile;
  ?>
    </table>
</body>
</html>