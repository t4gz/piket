<?php

namespace Database\Seeders;

use App\Models\jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hari = [
            [
                'hari' => 'senin'
            ],
            [
                'hari' => 'selasa'
            ],
            [
                'hari' => 'rabu'
            ],
            [
                'hari' => 'kamis'
            ],
            [
                'hari' => 'jumat'
            ],
        ];
        jadwal::insert($hari);
    }
}
