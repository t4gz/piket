<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\dokumentasi;
use App\Models\siswa;
use Auth;
use Illuminate\Support\Facades\Session;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('siswa.absen_siswa');
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
        $validasi = $request->validate([
            'deskripsi' => 'required',
            'individu' => 'required',
            'kelompok' => 'required',
        ]);

        //ambil informasi file yang di upload 
        $fileI = $request->file('individu');
        $fileK = $request->file('kelompok');
        //rename 
        $nama_fileI = time() . "_" . $fileI->getClientOriginalName();
        $nama_fileK = time() . "_" . $fileK->getClientOriginalName();
        //proses upload 
        $tujuan_upload = './Template/img';
        $fileI->move($tujuan_upload, $nama_fileI);
        $fileK->move($tujuan_upload, $nama_fileK);

        $uid = auth()->user()->id;
        $siswa_id = siswa::where('users_id', $uid)->value('id');

        $absen = Absen::create([
            'siswa_id' => $siswa_id,
            'deskripsi' => $request->deskripsi,
            'status' => 'piket',
        ]);

        $dok = [
            [
                'dokumentasis_id' => $absen->id,
                'foto' => $nama_fileI,
                'keterangan' => 'individu',
            ],
            [
                'dokumentasis_id' => $absen->id,
                'foto' => $nama_fileK,
                'keterangan' => 'kelompok',
            ],
        ];

        dokumentasi::insert($dok);

        Session::flash('message', "Selamat, Anda berhasil Absen !!");
        return redirect('/absen');
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
