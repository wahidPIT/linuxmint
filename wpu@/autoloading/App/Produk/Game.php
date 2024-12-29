<?php

require_once 'Book.php';
require_once 'InfoBook.php';
class Game extends Book implements InfoBook{

    public $type;

    function __construct($judul, $penulis ,$penerbit ,$harga,$type){
        parent::__construct($judul, $penulis ,$penerbit ,$harga);
        $this->type = $type;

  }

  function data(){
    $isi = " $this->judul $this->penulis $this->penerbit $this->harga";
    return $isi;
  }
public function getInfoBook(){
    $game =" {$this->data()}  " ."{$this->type}";
    return $game;
}



}









?>