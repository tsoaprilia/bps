<?php
include './innconeksi.php';
$nama = $_GET['kepala'];
$query = "DELETE FROM penduduk WHERE kepala='$nama'";
$result =  mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);
 if($num>0){
     echo " BERHASIL hapus DATA <br>";
 }else{
     echo "gagal hapus <br>";
 }
 echo "<a href='tampil.php'>lihat data</a>";
?>