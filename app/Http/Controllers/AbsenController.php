<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use Auth;
use Session;

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
            'foto' => 'required',
        ]);

        //ambil informasi file yang di upload 
        $file = $request->file('foto');
        //rename 
        $nama_file = time()."_".$file->getClientOriginalName();
        //proses upload 
        $tujuan_upload= './Template/img';
        $file->move($tujuan_upload,$nama_file);

        Absen::create([
            'nama' => auth()->user()->name,
            'nisn'=> auth()->user()->nisn,
            'deskripsi'=>$request-> deskripsi,
            'foto'=> $nama_file,
        ]);
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
