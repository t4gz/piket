@extends('layout.siswa')
@section('content')
    <!-- Page Content -->
    <br>
    <br>
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        <h1 class="text-center">Laporan</h1>
    </div>

    <br>
    <br>

    <div class="container">
        <form action="{{ route('laporan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="pelapor" value="{{ auth()->user()->name }}">
            <input type="hidden" name="nisn" value="{{ auth()->user()->nisn }}">
            <div class="row mb-3">
                <label for="nama" class="col-sm-2 col-form-label" required>Nama yang dilaporkan</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label" required>Deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" name="deskripsi" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputFile" class="col-sm-2 col-form-label" required>Upload Foto (bukti)</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control-file" id="foto" name="foto" value="">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
            </div>
        </form>
    </div>
@endsection
