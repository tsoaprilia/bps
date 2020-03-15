<?php
include './innconeksi.php';
$daerah= $_GET["daerah"];
$query = "SELECT * FROM suburr WHERE daerah='$daerah'";
$result = mysqli_query($connect, $query);
$row = $result->fetch_assoc();
?>

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
  <h3><font color="#d9d9d9"> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;Kota/Kabupaten Malang</font></h3>
</div>
 <br>
 <nav class="navbar navbar-expand-sm bg-dark text-center navbar-dark ">
  <a class="navbar-brand text-center" >TINGKAT KESUBURAN TANAH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>  
</nav>
 <br>
 <br>
 <div class="jumbotron">
      <h1 class="display-4">Tambah Data ! </h1>

      <br>
      <br>

<div class="container">
  <h2>fill the form</h2>
  <form action="suburupdate.php" method="POST">
  
  <div class="form-group">
      <label for="daerah">daerah:</label>
      <input type="text" class="form-control" id="daerah" placeholder="Enter daerah" name="daerah"value="<?php echo $row['kepala'];?>" >
    </div>
    <div class="form-group">
      <label for="kadarair">kadar air:</label>
      <input type="text" class="form-control" id="kadarair" placeholder="Enter kadar air(%)" name="kadarair">
    </div>
    <div class="form-group">
      <label for="hasilpanen">lahan panen:</label>
      <input type="text" class="form-control" id="hasilpanen" placeholder="Enter lahan panen(hektar)" name="hasilpanen">
    </div>
    <div class="form-group">
      <label for="kadarkekeringan">kadar kekeringan:</label>
      <input type="text" class="form-control" id="kadarkekeringan" placeholder="Enter Kadar kekeringan(%)" name="kadarkekeringan">
    </div>
    <td><input type="hidden" name="daerah" value="<?php echo $row['daerah'];?>"></td>
    <button type="submit" class="btn btn-primary" value="simpan"  >Submit</button>
  </form>
</div>

    </div>
 <br>
 <br>
 <br>
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
