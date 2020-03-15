<?php
include './innconeksi.php';

$no= $_POST["nokk"];
$nama= $_POST["kepala"];
$alamat= $_POST["alamat"];
$sudah= $_POST["sudah_menikah"];
$belum= $_POST["belum_menikah"];

$query = "INSERT INTO penduduk (nokk, kepala, alamat, sudah_menikah, belum_menikah )
          VALUES ('$no','$nama','$alamat','$sudah','$belum')";
$result = mysqli_query($connect, $query);
$num  =mysqli_affected_rows($connect);
if($num>0){
    header("location:tampil.php");
}else{
    echo "gagal tambah data  : ".mysqli_error($connect);
}          
?>


