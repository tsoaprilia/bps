<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="jumbotron text-center bg-dark" style="margin-bottom:0">
  <h1><img src="bps.png" class="rounded-circle" alt="Cinque Terre" width="170" height="120"><font color="#d9d9d9"> &nbsp;&nbsp;BADAN PUSAT STATISTIK</font></h1>
  <h3><font color="#d9d9d9"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Kota/kabupaten Malang</font></h3>
</div>
 <br>
 <nav class="navbar navbar-expand-sm bg-dark text-center navbar-dark ">
  <a class="navbar-brand text-center" >Tingkat Kesuburan Tanah</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Data Resmi Statistik
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="yapengunjung.php">Data Penduduk</a>
              <a class="dropdown-item" href="yapengunjung1.php">Data pertanian dan peternakan</a>
              <a class="dropdown-item" href="yapengunjung2.php">Data Kesuburan Tanah</a>
              <a class="dropdown-item" href="home.html">SUDAH AKHIRI</a>
             </div>
           
    </ul> 
</nav>
 <br>
 <br>


      <br>
      <br>
      <div class="jumbotron">
 <P>INFO! untuk mendapat informasi lebih lengkap klik "Data Resmi Statistik"</P>
      <h1 class="display-4">Selamat Datang! </h1>


<center><h2> Tingkat Kesuburan Tanah</h2>
<table border="1" width="70%" ></center>
<tr>
<th bgcolor="aqua">daerah</th>
<th bgcolor="aqua">kadar air</th>
<th bgcolor="aqua">lahan panen</th>
<th bgcolor="aqua">kadar kekeringan</th>
</tr>
<?php
include "tampilkoneksi.php";
$query = "SELECT * FROM suburr";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array ($sql)){
  echo "<tr>";
  echo "<td>",$data ['daerah']."</td>";
  echo "<td>",$data ['kadarair']."</td>";
  echo "<td>",$data ['hasilpanen']."</td>";
  echo "<td>",$data ['kadarkekeringan']."</td>";
   echo "</tr>";
}
?>


</div>
<br><br>
 
</body>


</html>
