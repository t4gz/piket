@extends('master.admin')
@section('title', 'Dashboard')
@section('content-title', 'Edit Laporan')
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow mb-4" style="border: 1px solid #bbb;">
                <div style="font-weight: 500;" class="card-header bg-dark text-white">
                    <i class="fas fa-book me-1" style="margin-right: 5px;"></i>
                    Laporan Siswa
                </div>
                <div class="input-group mb-1 mt-3 py-2 px-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly>
                </div>
                <div class="input-group mb-1 mt-1 py-2 px-5 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">NISN</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly>
                </div>
                <div class="input-group mb-3 mt-1 py-2 px-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Kelas</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" readonly>
                </div>
                <hr>
                <div class="input-group mb-3 mt-1 py-2 px-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Laporan</span>
                    </div>
                    <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="mb-3 text-center">
                    <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    <a href="" class="btn btn-sm btn-danger">Kembali</a>
                </div>
            </div>

        </div>
    </div>
@endsection
