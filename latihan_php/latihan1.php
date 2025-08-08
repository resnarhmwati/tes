<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1" width="50%" cellspacing="0">
    <tr>
      <th>No</th>
      <th>nama</th>
      <th>umur</th>
      <th>email</th>
    </tr>

    <?php
      $siswa = [
  ['nama' => 'gaven',
  'umur' => 16,
  'email' => 'wel@gmail.com'],
  ['nama' => 'marchell',
  'umur' => 15,
  'email' => 'wel@gmail.com'],
  ['nama' => 'ken',
  'umur' => 16,
  'email' => 'welgmail.com'],
  ['nama' => 'matthew',
  'umur' => 16,
  'email' => 'wel@gmail.com'],
  ['nama' => 'jean',
  'umur' => 18,
  'email' => 'void@gmail.com'],
];

  $no = 1;
  foreach ($siswa as $s) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>" . $s['nama'] . "</td>";
    echo "<td>" . $s['umur'] . "</td>";
    echo "<td>" . $s['email'] . "</td>";
    echo "</tr>";
  }
  ?>
    </table>
</body>
</html>