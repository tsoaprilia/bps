<?php
$host="localhost";
$user="root";
$password="";
$db ="bpss";

$connect = mysqli_connect($host,$user,$password,$db);
if(!$connect){
    echo "koneksi gagal : ".mysqli_connect_error();
}
?>