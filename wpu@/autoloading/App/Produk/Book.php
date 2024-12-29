<?php

abstract class Book {
	public $judul;
	public $penulis;
	public $penerbit;
	public $harga;

	
    // bikin abstract method
    // abstract function infoBook();
	function __construct($judul, $penulis, $penerbit, $harga){
		$this->judul = $judul;
		$this->penulis= $penulis;
		$this->penerbit = $penerbit;
		$this->harga =$harga;
	}

	function data(){
		  $isi = " $this->judul $this->penulis $this->penerbit $this->harga";
		  return $isi;
		 
	}


}






?>