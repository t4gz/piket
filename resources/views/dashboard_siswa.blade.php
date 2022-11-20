@extends('master.script')
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
<nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
  <div class="container" style="font-size: 20px ;">
    <a class="navbar-brand" href="#">
      <img src="../images/logo_smk.png" alt="Logo" height="60" > 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Laporan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Absen</a>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>
        @auth
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 small">{{auth()->user()->name}}</span>
                <img class="img-profile rounded-circle"
                    src="{{ asset('template/img/undraw_profile.svg') }}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
        @endauth        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<br>
<br>

<div class="container">
  <h1 class="text-center">Jadwal piket</h1>
</div>

<br>
<br>

<div class="container-md">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">NAMA</th>
      <th scope="col">NISN</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>0004282719</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
        <a href="#" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>0052829183</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
        <a href="#" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry the Bird</td>
      <td>0042382193</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
        <a href="#" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Reja</td>
      <td>0042738293</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
        <a href="#" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Rahmad</td>
      <td>0042383823</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
        <a href="#" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
  </tbody>
</table>
</div>

</body>
</html>