<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use App\Models\jurusan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\laporan;
use App\Models\nama_kelas;
use App\Models\siswa;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = User::all()->where('role', '==', 'siswa');
        $laporan = laporan::all();
        $kelas = nama_kelas::with('jurusan')->withCount('siswa')->get();
        $jurusan = jurusan::all();
        $absened = Absen::where('created_at', today())->get();
        $absent = siswa::all()->count();
        $spj = [];
        $currentJurusan = null;
        $siswaCount = 0;

        foreach ($kelas as $k) {
            if ($currentJurusan !== $k->jurusan_id) {
                if (!is_null($currentJurusan)) {
                    // Menyimpan total siswa per jurusan sebelumnya
                    $spj[$currentJurusan] = $siswaCount;
                }

                $currentJurusan = $k->jurusan_id;
                $siswaCount = 0;
            }

            $siswaCount += $k->siswa_count;
            $a[] = $k;
        }

        // Menyimpan total siswa untuk jurusan terakhir
        if (!is_null($currentJurusan)) {
            $spj[$currentJurusan] = $siswaCount;
        }
        $data_absen = ['jurusan', 'spj', 'absent', 'absened'];
        return view('admin.dashboard_admin', compact('siswa', 'laporan', $data_absen));
    }


    public function listguru()
    {
        return view('admin.listguru_admin');
    }
    public function listabsen()
    {
        return view('admin.absen_admin');
    }
    public function listlaporan()
    {
        return view('admin.');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
