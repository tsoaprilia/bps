<?php
include './innconeksi.php';
$daerah = $_GET['daerah'];
$query = "DELETE FROM suburr WHERE daerah='$daerah'";
$result =  mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
 if($num>0){
     echo " BERHASIL hapus DATA <br>";
 }else{
     echo "gagal hapus <br>";
 }
 echo "<a href='suburtampil.php'>lihat data</a>";
?>