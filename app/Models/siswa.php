<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nama_kelas()  {
        return $this->belongsTo(nama_kelas::class);
    }

    // public function jurusan(){
    //     return $this->belongsTo(jurusan::class);
    // }
}
