<?php

namespace Database\Seeders;

use App\Models\nama_kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NamaKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                'kelas_id' => 1,
                'jurusan_id' => 1,
                'urutan_kelas' => 1,
            ],
            [
                'kelas_id' => 1,
                'jurusan_id' => 1,
                'urutan_kelas' => 2,
            ],
            [
                'kelas_id' => 1,
                'jurusan_id' => 2,
                'urutan_kelas' => 1,
            ],
            [
                'kelas_id' => 1,
                'jurusan_id' => 2,
                'urutan_kelas' => 2,
            ],
            [
                'kelas_id' => 1,
                'jurusan_id' => 3,
                'urutan_kelas' => 1,
            ],
            [
                'kelas_id' => 1,
                'jurusan_id' => 3,
                'urutan_kelas' => 2,
            ],
            [
                'kelas_id' => 1,
                'jurusan_id' => 4,
                'urutan_kelas' => 1,
            ],
            [
                'kelas_id' => 1,
                'jurusan_id' => 4,
                'urutan_kelas' => 2,
            ],
        ];

        nama_kelas::insert($kelas);
    }
}
