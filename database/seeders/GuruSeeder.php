<?php

namespace Database\Seeders;

use App\Models\guru;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $guru = [
            [
                'nip' => 123123,
                'nama' => 'asmuin',
                'kelas_id' => 1,
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nip' => 123123,
                'nama' => 'Lukman Sholeh',
                'kelas_id' => 2,
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nip' => 123123,
                'nama' => 'Sri Praptiwi',
                'kelas_id' => 3,
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nip' => 123123,
                'nama' => 'Nur Wahidah',
                'kelas_id' => 4,
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nip' => 123123,
                'nama' => 'Novita Larasati',
                'kelas_id' => 5,
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nip' => 123123,
                'nama' => 'Eka Rismayanti',
                'kelas_id' => 6,
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nip' => 123123,
                'nama' => 'Siswoyo Dwi Putro',
                'kelas_id' => 7,
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nip' => 123123,
                'nama' => 'Windy Lutfiana Tristy',
                'kelas_id' => 8,
                'jenis_kelamin' => 'laki - laki',
            ],
        ];

        guru::insert($guru);
    }
}
