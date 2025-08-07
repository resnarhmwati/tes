<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Persegi Panjang</title>
</head>
<body>
    <h1>Hitung Luas dan Keliling Persegi Panjang</h1>
    <form method="get">
        <label>Panjang: </label>
        <input type="number" name="panjang" required>
        <br>
        <label>Lebar: </label>
        <input type="number" name="lebar" required>
        <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if (isset($_GET['panjang']) && isset($_GET['lebar'])) {
        $panjang = $_GET['panjang'];
        $lebar = $_GET['lebar'];

        // Menghitung luas dan keliling
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        echo "Luas Persegi Panjang: " . $luas . "<br>";
        echo "Keliling Persegi Panjang: " . $keliling . "<br>";
    }
    ?>
</body>
</html>
