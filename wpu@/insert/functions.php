<?php
// koneksi kedatabase
$conn = mysqli_connect("localhost","alin","wahidun1.", database: "praktekphp");

function query($query){
    // suapay variabel $con jadi global
    global $conn ;
    $result = mysqli_query($conn, $query);
    // supaya proses ambil data di dalam functions
    // bikin kotak kosong
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        // isi kotak kosong tadi
        $rows[] = $row;
    }
    // kembalikan kotak
    return $rows;
    
}




// ambil data dari tabel user / query data user
// $result = mysqli_query($conn,"SELECT * FROM santri");











?>