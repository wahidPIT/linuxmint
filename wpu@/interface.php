<?php

// interface

interface infoBook {
    public function getInfoBook();
};

// bikin implements dari interface
class Book  implements infoBook {
	public $judul;
	public $penulis;
	public $penerbit;
	public $harga;

	// WAJIB ...buat method yang ada di interface 
    public function getInfoBook(){

    }
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

$book1 = new Book("python", "van Rossum", "gramed", 100000);
echo $book1->data();



?>