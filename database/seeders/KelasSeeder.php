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
                'kelas' =>'XII'
            ],
            [
                'kelas' =>'XI'
            ],
            [
                'kelas' =>'X'
            ],
        ];

        Kelas::insert($kelas);
    }
}
