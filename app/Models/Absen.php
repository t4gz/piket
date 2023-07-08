<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }
    public function dokumentasi()
    {
        return $this->hasMany(dokumentasi::class);
    }
    public function laporan()
    {
        return $this->hasMany(laporan::class);
    }
}
