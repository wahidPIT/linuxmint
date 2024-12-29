<h2>Perulangan</h2>
<?php
// pengulangan
// for
// while
// do
// foreach : khusus array - sering kepake


// for loop
for( $i = 0; $i < 10; $i++ ){
    echo"hello world";
}

// while
// cek dulu baru jalankan
$i=0;
while($i<10){
    echo "hello wahidun ! <br>";
    $i++;
}

// do while
// jalankan lalu cek kondisinya
// do{
//     echo "hello wahid";
//     $i= 0;
// }while($i<10);
// TAK MATIIN KARNA NONSTOP 

/*----------LATIHAN  */

?>
<!DOCTYPE html>
<t lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

    <style>
        .warna{
            background-color: beige;
        }
    </style>
</head>
<body>

<!-- Latihan 1 -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for( $i = 1; $i <=5; $i++ ){
                echo "<tr>";
                for($j=1; $j<=5; $j++ ){

                    echo "<td>$i,$j</td>";
                }
                echo"</tr>";
       }       
        ?>
</table>
<br><br>


<!-- pakai gaya templating / syntax templating -->
<!-- memisahkan tag php dan html -->
  <table border="1" cellpadding="20" cellspacing="0" >
        <?php for($i=1; $i <=5; $i++ ):?>
            <!-- lakukan pengecekan untuk ganjil genap -->
             <?php  if ($i % 2 == 1) :?>
               <tr class="warna">
            <?php  else :?>
               <tr>
            <?php endif; ?>
                <?php for($j=1; $j<=5; $j++) :?>
                    <td><?php echo "$i, $j"; ?> </td>
                <?php  endfor?>    
            </tr>
        <?php endfor?>
  </table> <br><br>

<!-- kurung kurawal pembuka diganti = : /titik dibuat
     kurung kurawal penutup diganti = endfor 
     (karna untuk for ,kalo endif - umtuk if /endforeach - untuk foreach) -->








     
<h2>Pengkondisian / Percabangan</h2>
<?php

//Latihan 2 : Pengkondisian / percabangan  \
//if else
// if else if else
// ternary operator
// switch (saat if else terlalu banyak)

$w = 10;
if ($w < 20) { 
    echo "benar" ."\n";
} else {
    echo "salah";
}

// bikin spasi
echo"\n";

$a=20;
if ($a<20) {
    echo "kurang" . "\n";
} elseif ($a=20){
    echo "Bingo" . "\n";
}else {
    echo"lebih " . "\n";
}



?>
</body>
</html>
