<?php
include "koneksi.php";

// Ambil total pemasukan
$queryPemasukan = mysqli_query($koneksi, "SELECT SUM(jumlah) AS total FROM transactions WHERE jenis = 'pemasukan'");
$dataPemasukan = mysqli_fetch_assoc($queryPemasukan);
$totalPemasukan = $dataPemasukan['total'] ?? 0;

// Ambil total pengeluaran
$queryPengeluaran = mysqli_query($koneksi, "SELECT SUM(jumlah) AS total FROM transactions WHERE jenis = 'pengeluaran'");
$dataPengeluaran = mysqli_fetch_assoc($queryPengeluaran);
$totalPengeluaran = $dataPengeluaran['total'] ?? 0;

// Hitung saldo akhir
$saldoAkhir = $totalPemasukan - $totalPengeluaran;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Saldo Akhir</title>
</head>
<body>
    <h2>Laporan Keuangan</h2>
    <table border="1" cellpadding="10">
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
            <td><strong>Rp <?= number_format($saldoAkhir, 0, ',', '.') ?></strong></td>
        </tr>
    </table>
</body>
</html>
