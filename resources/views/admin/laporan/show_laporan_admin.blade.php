
    <div class="card ">
        <div class="card-header">
            <strong> {{ $laporan->pelapor}}</strong>
        </div>
        <div class="card-body">
            <strong>Deskripsi</strong>
            <p>{{ $laporan->deskripsi }}</p>
            <strong>Foto</strong><br>
            <img src="{{ asset('/Template/img/'.$laporan->foto) }}" width="130" class="mt-3 mx-auto img-thumbail">
        </div>
    </div>
    <br>
