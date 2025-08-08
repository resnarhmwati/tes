<?php
//mengkkoneksikan ke database
define('HOST_NAME','localhost');
define('USER_NAME','root');
define('PASSWORD','');
define('DB_NAME','transactions');

$koneksi = mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DB_NAME);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>