<?php
require_once("koneksi.php");

if (isset($_POST["jenis"], $_POST["jumlah"], $_POST["keterangan"], $_POST["tanggal"])) {
    $jenis = $_POST["jenis"];
    $jumlah = $_POST["jumlah"];
    $keterangan = $_POST["keterangan"];
    $tanggal = $_POST["tanggal"];

    $query = "INSERT INTO kas_kelas (jenis, jumlah, keterangan, tanggal) 
              VALUES ('$jenis', '$jumlah', '$keterangan', '$tanggal')";
    mysqli_query($koneksi, $query);

    header("Location: kas_kelas.php");
    exit;
}
?>

<h2>Form Input Transaksi</h2>
<form method="post" action="">
  <label>Jenis:</label>
  <select name="jenis" required>
    <option value="pemasukan">Pemasukan</option>
    <option value="pengeluaran">Pengeluaran</option>
  </select><br><br>

  <label>Jumlah:</label>
  <input type="number" name="jumlah" required><br><br>

  <label>Keterangan:</label>
  <input type="text" name="keterangan" required><br><br>

  <label>Tanggal:</label>
  <input type="date" name="tanggal" required><br><br>

  <button type="submit">Simpan</button>
</form>

<br>
<a href="kas_kelas.php">Kembali ke Data</a>
