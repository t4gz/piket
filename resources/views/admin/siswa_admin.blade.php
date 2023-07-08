@extends('layout.admin')
@section('title', 'Data')
@section('content-title', 'Siswa & Guru')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">X</button>
            <strong>{{ $message }} </strong>
        </div>
    @endif

    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header bg-dark text-white py-3">
                <i class="fas fa-user me-1" style="margin-right: 5px;"></i>
                Data Guru
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th>1</th>
                            <td>Brh</td>
                            <td>RPL</td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
