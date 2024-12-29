<?php

require_once 'Produk/Komik.php';
require_once 'Produk/Game.php';
require_once 'Produk/InfoBook.php';
require_once 'Produk/CetakInfoBook.php';





$buku1 =  new  Komik ("echi", "salman", "pit", 200000, "hentay");
$buku2 = new Game ("ganas", "dani", "pit",  90099999, "andventure" );

echo $buku1->getInfoBook();

$cetakBook = new cetakInfoBook ();
$cetakBook->tambahProduk ($buku1);
$cetakBook->tambahProduk ($buku2);
echo $cetakBook->cetak();











?>