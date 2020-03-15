<?php
include 'innconeksi.php';

$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['kunci'];

$data= mysqli_query($connect, "SELECT * FROM kunjung WHERE username='$username' and email='$email' ");
$cek = mysqli_num_rows($data);
if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status']="login";
    header("location:yapengunjung.php");

}else{
    header("location:index.php?pesan=gagal");
}
?>
