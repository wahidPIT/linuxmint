<?php
// koneksi kedb
$conn = mysqli_connect("localhost", "alin", "wahidun1.", "praktekphp");


// cek apakah tombol submit sudah dipencet ato belom
if( isset($_POST["submit"])){
    // var_dump($_POST); 
    //  ambil data dari tiap elemen form
    $nrp = $_POST["NRP"];
    $nama = $_POST["Nama"];
    $email = $_POST["Email"];
    $jurusan = $_POST["Jurusan"];
    $gambar = $_POST["Gambar"];

    //query insert/masukin data
    $query = "INSERT INTO santri 
                  VALUES 
       ('9', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
       ";

    // eksekusi query
    mysqli_query($conn, $query);

    // cek apakah query berhasil dijalankan
    // var_dump((mysqli_affected_rows($conn)));
    if(mysqli_affected_rows($conn) > 0){
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Data gagal ditambahkan!";
    }

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Santri</title>
</head>
<body>
    <h1>Tambah Data Santri</h1>

    <form action="tambah.php" method="post">
        <ul>
            <!-- bagian name = diisi sesuai field di database -->
            <li>
                <label for="NRP">NRP : </label>
                <input type="text" name="NRP" id="NRP">
            </li>
            <li>
                <label for="Nama">Nama : </label>
                <input type="text" name="Nama" id="Nama">
            </li>
            <li>
                <label for="Email">Email : </label>
                <input type="email" name="Email" id="Email">
            </li>
            <li>
                <label for="Jurusan">Jurusan : </label>
                <input type="text" name="Jurusan" id="Jurusan">
            </li>
            <li>
                <label for="Gambar">Gambar : </label>
                <input type="text" name="Gambar" id="Gambar">
            </li>
            <li>
                <button type="submit" name="submit">Kirim Data</button>
            </li>
        </ul>








    </form>
</body>
</html>