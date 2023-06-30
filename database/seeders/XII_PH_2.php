<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XII_PH_2 extends Seeder
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
                'nisn' => 123123123,
                'nama' => 'maulana zidan',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'vicky ambarwati',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'nathania',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'maulana zidan',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'natasha aurellya',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'mohammad ferdy',
                'kelas_id' => 4,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
        ];

        siswa::insert($kelas);
    }
}
