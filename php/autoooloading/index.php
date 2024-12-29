<?php
// DEKLARASI OBJECT DISINI==+ + +================================

// masukin require untuk kelas lain
// supaya kenal 
// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/CetakInfoProduk.php';

// CARA REQUIRE YANG LEBIH SIMPEL PAKE FILE INIT.PHP
require_once 'App/init.php';


$produk1 = new Komik("memew", "salmanjomok", "ponIT", 2999999, 290);

$produk2 = new Game("ngewes", "sakon", " pondIT", 38888 , 12);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1);
$cetakProduk->tambahProduk( $produk2);

echo $cetakProduk->cetak();























?>