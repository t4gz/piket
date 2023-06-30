<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kelas;

class KelasSeeder extends Seeder
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
                'nama_kelas' => 'XII RPL 1'
            ],
            [
                'nama_kelas' => 'XII RPL 2'
            ],
            [
                'nama_kelas' => 'XII PH 1'
            ],
            [
                'nama_kelas' => 'XII PH 2'
            ],
            [
                'nama_kelas' => 'XII BDP 1'
            ],
            [
                'nama_kelas' => 'XII BDP 2'
            ],
            [
                'nama_kelas' => 'XII PSPT 1'
            ],
            [
                'nama_kelas' => 'XII PSPT 2'
            ],
        ];

        Kelas::insert($kelas);
    }
}
