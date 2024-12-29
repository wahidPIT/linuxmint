<?php

// membuat class
// property : variabel dalam class
// method : function dalam class

class Book {
	public $judul;
	public $penulis;
	public $penerbit;
	protected $harga;
	public $diskon;

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

	// setting diskon produk
	function setDiskon($diskon){
		$this->diskon = $diskon;
	}
	function getDiskon(){
		return $this->harga - ($this->harga *  $this->diskon /100);
	}

}
// bikin object plus  isi value
$buku1 = new Book("php", "rasmus lerdorf", "kominfo" , 1000000);
// panggil method dalam clas
echo $buku1->data();
echo"<hr>";
//  $buku1->diskon = 45;   <<<<bisa pake ini atau
$buku1->setDiskon  (36);
 echo $buku1->getDiskon();





?>