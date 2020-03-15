<?php
include './innconeksi.php';
$jenins = $_POST["produk"];
$sembilan = $_POST["a2019"];
$puluh = $_POST["a2018"];
$query = "INSERT INTO produksii (produk, a2019, a2018)
          VALUES ('$jenins','$sembilan','$puluh')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:tanitampil.php");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>