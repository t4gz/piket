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
                'nama' => 'Inna Filjannati Aprilina',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Ilham Bintang Herlambang',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Steven Alden Airlangga Cahya Ksatria Maulana Malik Ibrahim',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'M. Alif Adiawan',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Rafli Dwi Ferdiansyah',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Mochammad Dwi Febriansyah',
                'kelas_id' => 2,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
        ];

        siswa::insert($kelas);
    }
}
