    <?php
    
    $angka = [1, 2, 3, 4, 5, 6, 100, 200 ,300, 400 ,500];
    
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            div {
                background-color: beige;
                text-align: center;
                width: 60px;
                height: 60px;
                float:left
                
            }
            </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<!-- perulangan pada array -->
<?php for( $i = 0; $i < count($angka); $i++ ) { ?>

    <div><?php  echo $angka[$i]; ?></div>

<?php } ?>
<br>


<!-- pake foreach : lebih gampang-->
<?php foreach ($angka as $a ) { ?>
       <div><?php echo $a ?></div>
<?php } ?>
<br>


<!-- foreach array gaya templating dan simple -->
<?php foreach( $angka as $a ) :?>
    <div> <?= $a;?> </div>
<?php endforeach?>

   </html>
</body>
</html>