<?php

// traits digunakan untuk mendeklarasikan method yang bisa dipakai pada banyak class
// dengan keywrd trait
// example 1

trait nama {
    public function nama($name){
        echo  "name : $name";
    } 
}
   class game{
    use nama ;
   }

// bikin instans / object dari class bukan dari trait
$book1 = new game("god of war", "heldi" , "haqu", 66666 , true);
$book1->nama("wahidun");
echo"\n";
echo"\n";


/* example 2
multiple trait  */

trait umur {

    public function umur($age){
        echo "umurnya : $age";
    }
}

trait job {

    public function job($kerja){
        echo"kerjaku adalah : $kerja";
    } 
}

class aku {
    use nama ,umur , job;
}
// bikin object dengan multiple trait
$sigma = new aku();
$sigma->job("devops");
echo"\n";
$sigma->umur(20);
echo "\n";
$sigma->nama("ohio")











?>