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
  <a class="navbar-brand text-center" >DATA PENDUDUK</a>
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
  <form action="tambahpost.php" method="POST">
<div class="form-group">
      <label for="nokk">No.Kartu Keluarga:</label>
      <input type="text" class="form-control" id="nokk" placeholder="Enter no. kartu keluarga" name="nokk">
    </div>
    <div class="form-group">
      <label for="kepala">Nama Kepala Keluarga:</label>
      <input type="text" class="form-control" id="kepala" placeholder="Enter nama kepala keluarga" name="kepala">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat">
    </div>
    <div class="form-group">
      <label for="sudah_menikah">Jumlah Anggota Keluarga sudah menikah:</label>
      <input type="text" class="form-control" id="sudah_menikah" placeholder="Enter Jumlah yang sudah menikah" name="sudah menikah">
    </div>
    <div class="form-group">
      <label for="belum_menikah">Jumlah Anggota Keluarga belum menikah:</label>
      <input type="text" class="form-control" id="belum_menikah" placeholder="Enter Jumlah yang belum menikah" name="belum menikah">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
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
