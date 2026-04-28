<?php
$server="localhost";
$user="root";
$password="";
$database="db_wisata";

$koneksi=mysqli_connect($server,$user,$password,$database);

if(mysqli_connect_error()){
    echo "koneksi gagal : ";
}else{
    echo "koneksi berhasil";
}

?>