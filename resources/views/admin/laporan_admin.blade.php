@extends('master.admin')
@section('title', 'Dashboard Laporan')
@section('content-title', 'Laporan')
@section('content')
<div class="row">
        <div class="col-lg-4">
                <div class="card mb-4">
                <div style="font-weight: 500;" class="card-header bg-dark text-white">
			        <i class="fas fa-user me-1" style="margin-right: 5px;"></i>
			        Data Siswa
			    </div>
                <div>
                        <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">NISN</th>
                        <th scope="col">LAPORAN</th>
                        <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                            <a href="#" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                            <a href="#" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                            <a href="#" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
            </div>
                </div>

            <div class="col-lg-8"> 
                <table class="table table-responsive table-hover table-bordered">

                </table>
            </div>
</div>
@endsection