@extends('layout.siswa')
@section('content')
    <!-- Page Content -->
    <br>
    <br>

    <div class="container">
        <h1 class="text-center">Informasi</h1>
    </div>

    <br>
    <br>

    <div class="row" style="justify-content: center;">
        <div class="card col-md-4 mr-5" style="width: 300px;">
            <img src="./images/1.png" alt="1.png" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title">murid_placeHolder</h4>
                <br>
                <p class="card-text">Nama :</p>
                <p class="card-text">NISN :</p>
            </div>
        </div>

        <div class="card col-md-4" style="width: 300px;">
            <div class="card-body">
                <h4 class="card-title">murid_placeHolder</h4>
                <br>
                <p class="card-text">Tangal Piket :</p>
                <p class="card-text">Deskripsi piket :</p>
                <p class="card-text">bukti piket :</p>
            </div>
        </div>
    </div>
    @endsection
