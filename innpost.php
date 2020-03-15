<?php
include './innconeksi.php';

$username = $_POST["username"];
$email = $_POST["email"];
$kunci = $_POST["kunci"];

$query = "INSERT INTO kunjung (username, email, kunci )
          VALUES ('$username', '$email', ' $kunci')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:masuk.php");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>