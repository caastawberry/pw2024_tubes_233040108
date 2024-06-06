<?php

 $conn = mysqli_connect('localhost','root','','pw2024_tubes_233040108') or die ('Gagal terhubung ke database');


 if(mysqli_connect_errno()){
    echo "Failed to connect to MYSQL:" .  mysqli.connect_errpr();
    exit();
 }

 function query($query)
 {
    global $con;
    $result = mysqli_query($conn, $query) or die(mysqli_error($con));

    $row = [];

    while ($row = mysqli_fetch_assoc($result)){
        $row[] = $row;
    }
    return $rows;
 }

 function cari($keyword) {

   // var_dump($keyword); die();
   global $conn;

   $query = "SELECT * FROM produk
               WHERE 
               nama_produk LIKE '%$keyword%' OR 
               kategori LIKE '%$keyword%'
               ";
   $result = mysqli_query($conn, $query);
   $rows = [];
   while ($row = mysqli_fetch_assoc($result)) {
       $rows[] = $row;
       }

   return $rows;
   }

 ?>
 