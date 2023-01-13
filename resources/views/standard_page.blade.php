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
    <a class="navbar-brand" href="/">
      <img src="../images/logo_smk.png" alt="Logo" height="60" > 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">        <
        <li class="nav-item">
          <a class="nav-link active" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/register">Register</a>
        </li>
        <!-- <li class="nav-item dropdown">
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
      <td>ammar</td>
      <td>0004282719</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>rafif</td>
      <td>0052829183</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ilham</td>
      <td>0042382193</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>dwi</td>
      <td>0042738293</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
      </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>tora</td>
      <td>0042383823</td>
      <td>
        <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
      </td>
    </tr>
  </tbody>
</table>
</div>

</body>
</html>