<?php

class cetakInfoBook{

    public $daftarBook = array();

    public function tambahProduk( Book $produk){
        $this->daftarBook[] = $produk;
    }

    function cetak(){
        $hasil = "Data Buku :  ";

        foreach ($this->daftarBook as $p ){
            $hasil . " {$p->data()} ";
        }

        return $hasil;
    }
}


?>