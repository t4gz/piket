<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
        protected $fillable = [
            'pelapor',
            'nisn',
            'nama',
            'deskripsi',
            'foto',
        ];
        
        protected $table = 'laporan';

        // public function siswa (){
        //     return$this->belongsTo('App\Models\siswa', 'absen');
        // }
}
