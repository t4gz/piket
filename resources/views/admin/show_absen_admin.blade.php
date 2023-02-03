@foreach($absen as $item)
    <div class="card ">
        <div class="card-header">
            <strong> {{ $item->nama}}</strong>
        </div>
        <div class="card-body">
            <strong>Deskripsi</strong>
            <p>{{ $item->deskripsi }}</p>
            <strong>Foto</strong><br>
            <img src="{{ asset('/Template/img/'.$item->foto) }}" width="130" class="mt-3 mx-auto img-thumbail">
        </div>
    </div>
    <br>
    @endforeach