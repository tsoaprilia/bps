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
  <a class="navbar-brand text-center" >DATA PENDUDUK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
           
              <li class="nav-item">
                <a class="nav-link" href="yaadmin.php">menu awal Data Resmi Statistik (admin)   </a>
              </li> 
                
    </ul>
  </div>  
</nav>
 <br>
 <br>


      <br>
      <br>
      <div class="iya">


<center><h2> Perkembagan ternak dan pertanian</h2>
<table border="1" width="70%" ></center>
<tr>
<th bgcolor="aqua">jenis produk</th>
<th bgcolor="aqua">2019</th>
<th bgcolor="aqua">2020</th>
<th colspan="2" bgcolor="aqua">AKSI</th>
</tr>
<?php
include "tampilkoneksi.php";
$query = "SELECT * FROM produksii";
$sql = mysqli_query($connect,$query);
while($data = mysqli_fetch_array ($sql)){
  echo "<tr>";
  echo "<td>",$data ['produk']."</td>";
  echo "<td>",$data ['a2019']."</td>";
  echo "<td>",$data ['a2018']."</td>";
  echo "<td> <a href='taniupdateform.php?nama=".$data['produk']."'>EDIT</a></td>";
  echo "<td><a href='tanihapus.php?nama=".$data['produk']."'onclick='return confirm(\"apakah anda yakin ingin menghapus data?\")'>delete</a></td>";
  echo "</tr>";
}
?>


</div>
<br><br>
 
</body>


</html>
