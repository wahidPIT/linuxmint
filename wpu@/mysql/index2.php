<?php
// koneksi kedatabase
$conn = mysqli_connect("localhost","alin","wahidun1.", "praktekphp");

// ambil data dari tabel user / query data user
$result = mysqli_query($conn,"SELECT * FROM santri");
// var_dump($result);
// cek error
// if(!$result){
//     echo mysqli_error($conn);
// }

//ambil data  (fetch) user dari object $result : ada 4 cara.
//mysqli_fetch_row(); = mengembalikan array numeric.
// mysqli_fetch_assoc() = mengembalikan array assosiative
//mysqli_fetch_array()= mengembalikan keduanya(numer dan assoc )
//mysqli_fetch_object();

// $user = mysqli_fetch_assoc($result);
// var_dump($user);

// pakai loop
// while ( $user = mysqli_fetch_assoc($result) ) {
//        var_dump($user);
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Daftar Santri</h1>

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

<?php while ( $row = mysqli_fetch_assoc($result) ): ?>
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

<?php endwhile; ?>

    </table>
</body>
</html>