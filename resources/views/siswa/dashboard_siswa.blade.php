@extends('layout.siswa')
@section('content')
    

    <!-- Page Content -->
    <br>
    <br>

    <div class="container">
        <h1 class="text-center">Jadwal piket hari {{ \Carbon\Carbon::today()->locale('id')->isoFormat('dddd') }}</h1>
        <h1>{{ $guru->nama }}</h1>
        {{-- <h1 class="text-center">{{ \Carbon\Carbon::today()->format('d-F-Y') }}</h1> --}}
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
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                @if ($soj->isNotEmpty())
                    @foreach ($soj as $s)
                        <tr>
                            <th scope=>{{ $loop->iteration }}</th>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->nisn }}</td>
                            <td>{{ optional($s->absen->first())->status }}</td>
                            <td>
                                <a href="/info" class="btn btn-sm btn-info btn-circle"><i class="fas fa-info"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="6" class="text-center">anda belum di jadwalkan</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>

    
@endsection
