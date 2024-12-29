<?php

// accesor method
// setter dan getter

class Book {
	public $judul;
	public $penulis;
	public $penerbit;
	public $harga;

	// bikin method  plus constructor
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
// bikin object plus  isi value
$buku1 = new Book("php", "rasmus lerdorf", "kominfo" , 100000);
// panggil method dalam clas
echo $buku1->data();

echo "hello";





?>