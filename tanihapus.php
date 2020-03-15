<?php
include './innconeksi.php';

$jenins = $_GET['produk'];

$query = "DELETE FROM produksii WHERE produk='$jenins'";
$result =  mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
 if($num>0){
     echo " BERHASIL hapus DATA <br>";
 }else{
     echo "gagal hapus <br>";
 }
 echo "<a href='tanitampil.php'>lihat data</a>";
?>