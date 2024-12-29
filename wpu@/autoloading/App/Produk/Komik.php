<?php

require_once 'Book.php';
require_once 'InfoBook.php';
class Komik extends Book implements InfoBook {

    public $genre;

    function __construct($judul, $penulis ,$penerbit ,$harga, $genre){
        parent::__construct($judul,$penulis, $penerbit ,$harga);
        $this->genre = $genre;
    }
    
    function data(){
        $isi = " $this->judul $this->penulis $this->penerbit $this->harga";
        return $isi;
      }
    public function getInfoBook(){
        $komik=" {$this->data()}  " . "{$this->genre}";
        return $komik;
    }
    
        
    // abstract function infoBook();
}












?>