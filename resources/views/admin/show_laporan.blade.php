{{-- @if($project->isEmpty())
    <h6>Siswa Belum Memiliki Project</h6>
@else --}}
    {{-- @foreach($project as $item) --}}
    <div class="card">
        <div class="card-header">
            <strong> {{ $item->nama_project}}</strong>
        </div>
        <div class="card-body">
            <strong>Tanggal Project</strong>
            {{-- <p>{{ $item->tanggal }}</p> --}}
            <p>tanggal_placeholder</p>
            <strong>Deskripsi Project</strong>
            {{-- <p>{{ $item->deskripsi }}</p> --}}
            <p>deskripsi_placeholder</p>
        </div>
        <div class="card-footer">
        <a href="" class="btn btn-sm btn-warning btn-circle"><i class="fas fa-edit"></i></a>
        <a href="" class="btn btn-sm btn-danger btn-circle"><i class="fas fa-trash"></i></a>
        </div>
    </div>
    {{-- @endforeach --}}
    {{-- @endif --}}