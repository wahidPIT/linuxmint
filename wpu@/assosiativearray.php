<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Murid</title>
    <style>
        ul li{
            list-style-type: none;
        }
    </style>
</head>
<body>

<h1>daftar Murid</h1>

<?php

$murid = [
        ["wahid", 19, "programer", "nur@gmaiil.com"],
        ["damar", 20, "marine", "damzz@gmail.com"]
               
];
?>

<!-- ini array numeric / indexwed : indeksnya angka-->
<?php foreach($murid as $mr ) : ?>
<ul>
    <li>Nama : <?= $mr [0]; ?></li>
    <li>Umur : <?= $mr [1]; ?></li>
    <li>Jurusan : <?= $mr [2]; ?></li>
    <li>Email : <?= $mr [3]; ?></li>
</ul>
<?php endforeach;?>

<!-- ini asssiative array  : kalo data di array tertukar-->
<!-- key nya adalah string yang kita buat sendiri    -->
<?php
$mahasiswa =[
  [ "nama" => "wahidun",
    "umur" => 19,
    "jurusan" => "programmer",
    "email" => "wahid@gmail.com",
    "gambar" => "narutkecil.jpeg",
    // bikin array didalem lagi
    "tugas" => [13, "laravel", "ngaji"]
  ],
  [ "nama" => "damar",
    "umur" => 20,
    "jurusan" => "marine",
    "email" => "damzz@gmail.com",
    "gambar" => "narutkecil.jpeg",
  ],

];
// array terluarnya masih numeric karna gak didefinisikan 
echo $mahasiswa[1]["nama"];
echo $mahasiswa[0]["tugas"][1];

?>
<?php foreach($mahasiswa as $mh ) : ?>
<ul>
    <li>
        <img src="img/<?= $mh["gambar"]?>" >
    </li>
    <li>Nama : <?= $mh ["nama"]; ?></li>
    <li>Umur : <?= $mh ["umur"]; ?></li>
    <li>Jurusan : <?= $mh ["jurusan"]; ?></li>
    <li>Email : <?= $mh ["email"]; ?></li>
</ul>
<?php endforeach;?>

</body>
</html>