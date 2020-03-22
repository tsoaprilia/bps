




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="jumbotron text-center bg-dark" style="margin-bottom:0">
  <h1><img src="bps.png" class="rounded-circle" alt="Cinque Terre" width="170" height="120"><font color="#d9d9d9"> &nbsp;&nbsp;BADAN PUSAT STATISTIK</font></h1>
  <h3><font color="#d9d9d9"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Kota/Kabupaten Malang</font></h3>
</div>
 <br>
 <nav class="navbar navbar-expand-sm bg-dark text-center navbar-dark ">
  <a class="navbar-brand text-center" >UPDATE DATA PERTANIAN DAN PETERNAKAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>  
</nav>
 <br>
 <br>
 <div class="jumbotron">
 <div class="container">
  
  <div class="alert alert-primary text-center">
  <?php
include './innconeksi.php';
$urut = $_POST['urut'];
$jenins = $_POST["produk"];
$sembilan = $_POST["a2019"];
$puluh = $_POST["a2018"];
$query = "UPDATE produksii SET produk='$jenins', a2019='$sembilan', a2018='$puluh' WHERE urut='$urut'";
$result =  $connect ->query($query);
$num = mysqli_affected_rows($connect);

 if($num > 0){ 
     echo " BERHASIL UPDATE DATA <br>";
    
 }else{
     echo "gagal update <br>";
 }
 echo "<a href='tanitampil.php'>lihat data</a>";
?>

  </div>
</div>
</div>
</div>



  

    
 <br>
 <br>
 <br>
 
<div class="jumbotron text-center bg-dark" style="margin-bottom:0  ">
  <h5><font color="#d9d9d9">Media Sosial</font></h5>
  <br>
  <br>
  <img src="zz.PNG"  alt="Cinque Terre" width="304" height="120"> 
  <img src="zzz.PNG"  alt="Cinque Terre" width="304" height="120"> 
</div>

</body>
</html>