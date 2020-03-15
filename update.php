
<?php
include './innconeksi.php';
$nama = $_POST["kepala"];
$alamat = $_POST["alamat"];
$sudah = $POST["sudah_menikah"];
$belum = $_POST["belum_menikah"];

$query = "UPDATE penduduk SET kepala='$nama', alamat='$alamat',sudah_menikah='$sudah', belum_menikah='$belum' WHERE kepala='$nama'";
$result =  $connect ->query($query);
$num = mysqli_affected_rows($connect);

 if($num > 0){ 
     echo " BERHASIL UPDATE DATA <br>";
    
 }else{
     echo "gagal update <br>";
 }
 echo "<a href='tampil.php'>lihat data</a>";
?>