@extends('layout.siswa')
@section('content')
    <!-- Page Content -->
    <br>
    <br>

    <div class="container">
        <h1 class="text-center">Absen Piket</h1>
    </div>
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <br>
    <br>

    <div class="container">
        <form method="post" enctype="multipart/form-data" action="{{ route('absen.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-3 col-form-label" required>Deskripsi</label>
                <div class="col-sm-9">
                    <input type="text" name="deskripsi" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputFile" class="col-sm-3 col-form-label">Upload Foto (Individu)</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control-file" id="individu" name="individu" value="" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputFile" class="col-sm-3 col-form-label">Upload Foto (Kelompok Absen)</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control-file" id="kelompok" name="kelompok" value="" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
            </div>
        </form>
    </div>
@endsection
