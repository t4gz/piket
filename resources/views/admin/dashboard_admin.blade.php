@extends('admin.layout.admin')
@section('title', 'Dashboard')
@section('content-title', 'Selamat datang')
@section('content')
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Jumlah Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $absent }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Jumlah Laporan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $laporan->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-book fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-xl-3 col-md-6 mb-4">
                                                                <div class="card border-left-info shadow h-100 py-2">
                                                                    <div class="card-body">
                                                                        <div class="row no-gutters align-items-center">
                                                                            <div class="col mr-2">
                                                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                                                                </div>
                                                                                <div class="row no-gutters align-items-center">
                                                                                    <div class="col-auto">
                                                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                                                    </div>
                                                                                    <div class="col">
                                                                                        <div class="progress progress-sm mr-2">
                                                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->

        <!-- Pending Requests Card Example -->
        <!-- <div class="col-xl-3 col-md-6 mb-4">
                                                                <div class="card border-left-warning shadow h-100 py-2">
                                                                    <div class="card-body">
                                                                        <div class="row no-gutters align-items-center">
                                                                            <div class="col mr-2">
                                                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                                                    Pending Requests</div>
                                                                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                                                            </div>
                                                                            <div class="col-auto">
                                                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
        <canvas id="jumlah_siswa"></canvas>
        <canvas id="jumlah_absen"></canvas>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.js"></script>
    <script>
        $(document).ready(function() {
            // absen
            var chart_absen = document.getElementById('jumlah_absen');
            var absen = new Chart(chart_absen, {
                type: 'pie',
                data: {
                    labels: [
                        'Telah Absen',
                        'Belum Absen',
                    ],
                    datasets: [{
                        data: [
                            {!! $absened !!},
                            {!! $absent !!}
                        ],
                        backgroundColor: [
                            '#02b039',
                            '#b00202'
                        ]
                    }]
                },
            });

            var chart_siswa = document.getElementById('jumlah_siswa');
            var siswa = new Chart(chart_siswa, {
                type: 'doughnut',
                data: {
                    labels: [
                        @foreach ($jurusan as $j)
                            "{!! $j->jurusan !!}",
                        @endforeach
                    ],
                    datasets: [{
                        data: [
                            @foreach ($spj as $s)
                                {!! $s !!},
                            @endforeach
                        ],
                        backgroundColor: [
                            @foreach ($jurusan as $j)
                                "{!! $j->warna !!}",
                            @endforeach
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        display: false,
                    }
                }
            });

            Chart.overrides[doughnut].plugins.legend({
                beforeDraw: function(chart) {
                    var width = chart.chart.width,
                        height = chart.chart.height,
                        ctx = chart.chart.ctx;

                    ctx.restore();
                    var fontSize = (height / 200).toFixed(2);
                    ctx.font = fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";

                    if (chart.chart.canvas.id === 'jumlah_siswa') {

                        var textA = "Total Siswa",
                            textAX = Math.round((width - ctx.measureText(textA).width) / 2),
                            textAY = height / 2 - 50;
                        ctx.fillText(textA, textAX, textAY);

                        var data = chart.data.datasets[0].data;

                        var textB = "{!! $absent !!}",
                            textBX = Math.round((width - ctx.measureText(textB).width) / 2),
                            textBY = height / 2 + 50; // Mengatur posisi teks di bawah grafik

                        ctx.fillText(textB, textBX, textBY);

                    }
                    ctx.save();
                }
            });




        });

        function handleHover(evt, item, legend) {
            legend.chart.data.datasets[0].backgroundColor.forEach((color, index, colors) => {
                colors[index] = index === item.index || color.length === 9 ? color : color + '4D';
            });
            legend.chart.update();
        }

        function handleLeave(evt, item, legend) {
            legend.chart.data.datasets[0].backgroundColor.forEach((color, index, colors) => {
                colors[index] = color.length === 9 ? color.slice(0, -2) : color;
            });
            legend.chart.update();
        }
    </script>

@endsection
