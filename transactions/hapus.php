<?php
require_once('koneksi.php');

if(!isset($_GET[$id])){
  $id = $_GET['id'];
  $query = mysqli_query($koneksi, "DELETE FROM kas_kelas WHERE id = $id");

if($query){
  echo "<script>
  alert('Data berhasil dihapus!');
  window.location.href= 'kas_kelas.php';
  </script>";
}

} else {
  echo "<script>
  alert('Data id tidak ada!');
  window.location.href= 'kas_kelas.php';
  </script>";
  }
?>