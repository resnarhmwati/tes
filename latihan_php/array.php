<?php
// Array Numerik yang mermiliki index berupa angka
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9,];

//ngerun satu aja
echo $angka[3] . '<br>';

//menampilkan semua element
foreach ($angka as $a) {
  echo $a . '<br>';
}

// array assosiatif berupa string
$siswa = [
  ['nama' => 'gaven',
  'umur' => 16,
  'email' => 'wel@gmail.com'],
  ['nama' => 'marchell',
  'umur' => 15,
  'email' => 'wel@gmail.com'],
  ['nama' => 'gaven',
  'umur' => 16,
  'email' => 'welgmail.com'],
  ['nama' => 'matthew',
  'umur' => 16,
  'email' => 'wel@gmail.com'],
  ['nama' => 'jean',
  'umur' => 18,
  'email' => 'void@gmail.com'],
];

foreach($siswa as $s) {
  echo "{$s['nama']} - Umur: {$s['umur']} - Email: {$s['email']}<br>";
}

?>