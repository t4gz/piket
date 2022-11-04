<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'absen',
        'nama',
        'nisn'
    ];

    protected $table = 'siswa';

    public function siswa (){
        return$this->hasMany('App\Models\laporan', 'absen_siswa');
    }
}
