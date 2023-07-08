<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function nama_kelas()
    {
        return $this->hasMany(nama_kelas::class);
    }
}
