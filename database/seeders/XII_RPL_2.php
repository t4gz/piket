<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\siswa;

class XII_RPL_2 extends Seeder
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
                'nama' => 'inna filjannati',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'ilham bintang',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'steven alden',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'alip adiawan',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'rafli dwi',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'mochammad dwi',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
        ];

        siswa::insert($kelas);
    }
}
