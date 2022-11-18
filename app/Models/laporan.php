<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;
        protected $fillable = [
            'komentar',
            'bukti',
            'absen_siswa'
        ];
        
        protected $table = 'laporan';

        public function siswa (){
            return$this->belongsTo('App\Models\siswa', 'absen');
        }
}
