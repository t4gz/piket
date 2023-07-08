<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nama_kelas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function siswa()  {
        return $this->hasMany(siswa::class);
    }

    public function kelas()  {
        return $this->belongsTo(kelas::class);
    }
    
    public function jurusan()  {
        return $this->belongsTo(jurusan::class);
    }
}
