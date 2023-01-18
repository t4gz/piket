<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piket</title>


  <!-- Custom fonts for this template-->
  <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">


</head>
<body>
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container" style="font-size: 20px ;">
    <a class="navbar-brand" href="#">
      <img src="../images/logo_smk.png" alt="Logo" height="60" > 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="/siswa">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="laporan">laporan</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Absen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<br>
<br>

<div class="container">
  <h1 class="text-center">Informasi</h1>
</div>

<br>
<br>

<div class="row" style="justify-content: center;">
<div class="card col-md-4 mr-5" style="width: 300px;" >
  <img src="./images/1.png" alt="1.png" class="card-img-top" >
  <div class="card-body">
    <h4 class="card-title">murid_placeHolder</h4>
     <br>
    <p class="card-text">Nama :</p>
    <p class="card-text">NISN :</p>
  </div>
</div>

<div class="card col-md-4" style="width: 300px;" >
  <div class="card-body">
    <h4 class="card-title">murid_placeHolder</h4>
     <br>
    <p class="card-text">Tangal Piket    :</p>
    <p class="card-text">Deskripsi piket :</p>
    <p class="card-text">bukti piket     :</p>
  </div>
</div
</div>

</body>
</html>