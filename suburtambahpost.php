<?php
include './innconeksi.php';
$daerah = $_POST["daerah"];
$kadarair = $_POST["kadarair"];
$hasilpanen= $_POST["hasilpanen"];
$kadarkekeringan= $_POST["kadarkekeringan"];


$query = "INSERT INTO suburr ( daerah, kadarair, hasilpanen, kadarkekeringan)
          VALUES ('$daerah','$kadarair','$hasilpanen', '$kadarkekeringan')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:suburtampil.php");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>