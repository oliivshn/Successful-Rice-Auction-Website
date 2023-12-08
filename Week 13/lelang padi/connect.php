<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "lelang_padi";

    $koneksi = mysqli_connect($host,$user,$pass,$db);
    if(!$koneksi){
        die ("Tidak Terkoneksi");
    }
?>