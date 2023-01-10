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
        <div class="card-header bg-dark py-3">
            <a href="#" data-toggle="modal" data-target="#createSiswa" class="btn btn-success">Create Siswa</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="bg-dark text-white">
                    <tr>
                      <th scope="col" >No.</th>
                      <th scope="col">Nama</th>
                      <th scope="col">NISN</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Action</th>
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
                    <td>
                        <a href="#" data-toggle="modal" data-target="#editSiswa" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a> 
                    </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection