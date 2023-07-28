
    <div class="card ">
        <div class="card-header">
            <strong> {{ $absen->nama}}</strong>
        </div>
        <div class="card-body">
            <strong>Deskripsi</strong>
            <p>{{ $absen->deskripsi }}</p>
            <strong>Foto</strong><br>
            <img src="{{ asset('/Template/img/'.$absen->foto) }}" width="130" class="mt-3 mx-auto img-thumbail">
        </div>
    </div>
    <br>
