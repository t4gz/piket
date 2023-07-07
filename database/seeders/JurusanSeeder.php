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
                'jurusan' => 'RPL'
            ],
            [
                'jurusan' => 'PH'
            ],
            [
                'jurusan' => 'BDP'
            ],
            [
                'jurusan' => 'PSPT'
            ],
        ];

        jurusan::insert($jurusan);
    }
}
