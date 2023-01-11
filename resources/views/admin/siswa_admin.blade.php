@extends('master.admin')
@section('title', 'Data Siswa')
@section('content-title', 'Siswa')
@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">X</button>
        <strong>{{ $message  }} </strong>                       
    </div>
@endif

<div class="col-lg-12">
    <div class="card shadow mb-4">
        <div class="card-header bg-dark text-white py-3">
            <i class="fas fa-user me-1" style="margin-right: 5px;"></i>
            Data Siswa
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="bg-dark text-white">
                    <tr>
                      <th scope="col" >No.</th>
                      <th scope="col">Nama</th>
                      <th scope="col">NISN</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $i => $item)
                    <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{ $item -> nama }}</td>
                    <td>{{ $item -> nisn }}</td>
                    <td>{{ $item -> alamat }}</td>
                    <td>{{ $item -> jk }}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection