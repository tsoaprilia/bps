<?php
include './innconeksi.php';
$jenins = $_POST["produk"];
$sembilan = $_POST["a2019"];
$puluh = $_POST["a2020"];
$query = "UPDATE produksii SET produk='$jenins', a2019='$sembilan', a2020='$puluh' WHERE produk='$jenins'";
$result =  $connect ->query($query);
$num = mysqli_affected_rows($connect);

 if($num > 0){ 
     echo " BERHASIL UPDATE DATA <br>";
    
 }else{
     echo "gagal update <br>";
 }
 echo "<a href='tampil.php'>lihat data</a>";
?>