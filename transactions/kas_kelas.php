<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Kas Kelas</title>
</head>
<body>
  <h1 align="center">LAPORAN KAS KELAS XI PPLG-RPL 2</h1>
  <a href="input.php">+ Tambah Transaksi</a>
  <br><br>
  <table border="1" width="70%" cellspacing="0">
    <tr>
      <th>No</th>
      <th>JENIS</th>
      <th>JUMLAH</th>
      <th>KETERANGAN</th>
      <th>TANGGAL</th>
      <th>Aksi</th>
    </tr>

  <?php
  require_once('koneksi.php');
  $data = mysqli_query($koneksi, "SELECT * FROM kas_kelas ORDER BY tanggal ASC");

  $no = 1;
  while($kas = mysqli_fetch_assoc($data)) :
  ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= ucfirst($kas['jenis']) ?></td>
      <td>Rp <?= number_format($kas['jumlah'], 0, ',', '.') ?></td>
      <td><?= $kas['keterangan'] ?></td>
      <td><?= $kas['tanggal'] ?></td>
      <td><a href="hapus.php?id=<?= $data['id'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a></td>
    </tr>
  <?php endwhile; ?>
  </table>

  <br><h2>Laporan Saldo Akhir</h2>

  <?php
  // Ambil total pemasukan
  $pemasukan = mysqli_query($koneksi, "SELECT SUM(jumlah) AS total FROM kas_kelas WHERE jenis='pemasukan'");
  $dataPemasukan = mysqli_fetch_assoc($pemasukan);
  $totalPemasukan = $dataPemasukan['total'] ?? 0;

  // Ambil total pengeluaran
  $pengeluaran = mysqli_query($koneksi, "SELECT SUM(jumlah) AS total FROM kas_kelas WHERE jenis='pengeluaran'");
  $dataPengeluaran = mysqli_fetch_assoc($pengeluaran);
  $totalPengeluaran = $dataPengeluaran['total'] ?? 0;

  $saldo = $totalPemasukan - $totalPengeluaran;
  ?>

  <table border="1" cellspacing="0">
    <tr>
      <th>Total Pemasukan</th>
      <td>Rp <?= number_format($totalPemasukan, 0, ',', '.') ?></td>
    </tr>
    <tr>
      <th>Total Pengeluaran</th>
      <td>Rp <?= number_format($totalPengeluaran, 0, ',', '.') ?></td>
    </tr>
    <tr>
      <th><strong>Saldo Akhir</strong></th>
      <td><strong>Rp <?= number_format($saldo, 0, ',', '.') ?></strong></td>
    </tr>
  </table>
</body>
</html>
