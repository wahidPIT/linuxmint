<?php


class Komik extends Produk implements InfoProduk{

    public $jumlahhalaman;

    public function __construct($judul,$penulis, $penerbit, $harga, $jumlahhalaman){
        parent::__construct($judul,$penulis, $penerbit, $harga);
        $this->jumlahhalaman = $jumlahhalaman;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}";

        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo() . "- { $this->jumlahhalaman} Halaman";

        return $str;
    }


}