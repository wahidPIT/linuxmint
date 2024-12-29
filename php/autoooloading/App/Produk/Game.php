<?php

class Game extends Produk implements InfoProduk{
    public $timeplay;

    public function __construct($judul,$penulis, $penerbit, $harga,$timeplay){
        parent::__construct($judul,$penulis, $penerbit, $harga);

        $this->timeplay = $timeplay;
    }


    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} | (Rp. {$this->harga}";

        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : " . $this->getInfo() . "- { $this->timeplay} Jam";

        return $str;
    }
}
























?>