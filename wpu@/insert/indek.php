<?php

require 'functions.php';
// bikin functions , semau mekanisme ada di dalam functions.php
$santri = query("SELECT * FROM santri");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<!-- nambah data mahasiswa tanpa lewat php myadmin -->
<h1>Daftar Santri</h1>

<a href="tambah.php">Tambah Data Santri</a>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
<!-- tampilkan data sesuai di database -->

<!-- <?php // while ( $row = mysqli_fetch_assoc($result) ): ?> -->
<?php foreach($santri as $row) : ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td>
                <img src="../img/<?php echo $row["Gambar"]; ?>" width="50">
            </td>
            <td><?= $row["NRP"] ?></td>
            <td><?= $row["Nama"] ?></td>
            <td><?= $row["Email"] ?></td>
            <td><?= $row["Jurusan"] ?></td>
        </tr>
<?php endforeach; ?> 
<!-- <?//php endwhile; ?> -->

    </table>
</body>
</html>