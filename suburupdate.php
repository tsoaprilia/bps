<?php
include './innconeksi.php';
$daerah = $_POST["daerah"];
$kadarair = $_POST["kadarair"];
$hasilpanen = $_POST["hasilpanen"];
$kadarkekeringan = $_POST["kadarkekeringan"];
$query = "UPDATE suburr SET daerah='$daerah', kadarair='$kadarair', hasilpanen='$hasilpanen', kadarkekeringan='$kadarkekeringan' WHERE daerah='$daerah'";
$result =  $connect ->query($query);
$num = mysqli_affected_rows($connect);

 if($num > 0){ 
     echo " BERHASIL UPDATE DATA <br>";
    
 }else{
     echo "gagal update <br>";
 }
 echo "<a href='suburtampil.php'>lihat data</a>";
?>