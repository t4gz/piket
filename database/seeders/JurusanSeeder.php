<?php

namespace Database\Seeders;

use App\Models\jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
            [
                'jurusan' => 'RPL',
                'warna' => '#fc8403'
            ],
            [
                'jurusan' => 'PH',
                'warna' => '#eb7ac7'
            ],
            [
                'jurusan' => 'BDP',
                'warna' => '#020f7d'
            ],
            [
                'jurusan' => 'PSPT',
                'warna' => '#9c82fa'
            ],
        ];

        jurusan::insert($jurusan);
    }
}
