<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    use HasFactory;

    public function nama_kelas()
    {
        return $this->hasMany(nama_kelas::class);
    }

    public function siswa()
    {
        return $this->hasManyThrough(nama_kelas::class,siswa::class);
    }
}
