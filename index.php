<?php
require 'koneksi.php';

$query = "select * from mahasiswa";
$data =mysqli_query(mysql: $conn, query: $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Alamat</th>
      <th scope="col">No HP</th>
      <th scope="col">Prodi</th>
      <th scope="col">Fakultas</th>
      <th scope="col">Pesan & Kesan</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($data as $row): ?>
                <tr>
                    <td><?= $row['nama_lengkap']; ?></td>
                    <td><?= $row['tempat_lahir']; ?></td>
                    <td><?= $row['tanggal_lahir']; ?></td>
                    <td><?= $row['jenis_kelamin']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                    <td><?= $row['prodi']; ?></td>
                    <td><?= $row['fakultas']; ?></td>
                    <td><?= $row['pesan_kesan']; ?></td>
                </tr>
                <?php endforeach; ?>
  </tbody>
</table>
<a href="form.php"> tambah data</a>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>