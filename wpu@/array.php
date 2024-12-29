<?php

// array : variabel yang bisa memiliki banyak nilai
// boleh berbeda nilainya
// 2 cara penulisan 
$friends = array("jun", "jin", 1, 2 ,true);
$friend = ["jun", "jin", 1, 2 ,true];

// menampilkan array
// var_dump($friends);
// var_dump($friend);
echo"<br>";
print_r($friends);
// untuk menampilkan 1 elemen
echo $friend[2];
// tampilkan jumlah elemen array
echo count($friends);





/*pertemuan 2 : assosiative array */ // 19 desember 2024
$hari = array ("senin", "selasa", "rabu", "kamis");
$month = ["january", "february", "march"];
$number = [1, 2, 3, 4, ];

// tampilkan array versi debugging
var_dump($hari);
print_r($month);


?>
<!--untuk pertemuan 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .kotak{
            width :30px;
            height : 30px;
            background-color: aquamarine;
            text-align: center;
            /* untuk nenghain teks scr vertikaal , jumlahnya sama kek ukuiran tingginya  */
            line-height: 30px;
            margin: 50px;
            float: left;
            /* bikin transisi kotaknya */
            transition:
             transform 1s;

        }

        .kotak:hover{
            /* bikin ktaknya muter */
            transform: rotate(360deg);
            border-radius: 30%;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$angka = [1,2,3,4,5,6,7,8 ];
?>

<?php foreach( $angka as $a )  : ?>
    <div class="kotak"<?= $a; ?></div>
<?php endforeach; ?>


</body>
</html>