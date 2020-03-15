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
  <a class="navbar-brand text-center" >Perkembangan ternak dan pertanian</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>  
</nav>
 <br>
 <br>
 <div class="jumbotron">
      <h1 class="display-4">Tambah Data ! </h1>

      <br>Perkembangan produksi ternak dan pertanian per jenis produk dikabupaten/kota Malang(ton) 2019,2020.
      <br>
      <br>
      <br>
      <br>

<div class="container">
  <h2>fill the form</h2>
  <form action="tanitambahpost.php" method="POST">
    <div class="form-group">
      <label for="produk">jenisproduk:</label>
      <input type="text" class="form-control" id="produk" placeholder="Enter jenis Produk" name="produk">
    </div>
    <div class="form-group">
      <label for="a2019">2019:</label>
      <input type="text" class="form-control" id="a2019" placeholder="Enter jumlah (ton)" name="a2019">
    </div>
    <div class="form-group">
      <label for="a2018">2020:</label>
      <input type="text" class="form-control" id="a2018" placeholder="Enter Jumlah (ton)" name="a2018">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>