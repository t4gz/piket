@extends('master.admin')
@section('title', 'Dashboard Absen')
@section('content-title', 'Absen')
@section('content')

    @if ($message = Session::get('hapus'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-8">
                <div style="font-weight: 500;" class="card-header bg-dark text-white">
                    <div class="row" style="justify-content: space-between;">
                        <div class="icon">
                            <i class="fas fa-book me-1" style="margin-right: 5px;"></i>
                            Data Absen
                        </div>
                        <a class="btn btn-sm btn-danger" href="{{ route('absen-admin.hapus') }}">Hapus Absen Hari Ini</a>
                    </div>
                </div>
                <div class="card mb-6">
                    @if ($absen->isEmpty())
                        <div class="card-body">
                            <section class="text-center">
                                <h3>Belum ada Siswa yang Absen 😔</h3>
                            </section>
                        </div>
                    @else
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">TANGGAL</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->nisn }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a onclick="show({{ $item->id }})" class="btn btn-sm btn-info"><i
                                                    class="fas fa-info"></i> Tampilkan</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4" style="border: 1px solid #bbb;">
                <div style="font-weight: 500;" class="card-header bg-dark text-white">
                    <i class="fas fa-book me-1" style="margin-right: 5px;"></i>
                    Absen Siswa
                </div>
                <div id="absen" class="card-body">
                    <section class="text-center">
                        <h3>Pilih Siswa terlebih dahulu</h3>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script>
        function show(id) {
            $.get('absen-admin/' + id, function(data) {
                $('#absen').html(data);
            })
        }
    </script>
@endsection
