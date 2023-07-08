<?php

namespace Database\Seeders;

use App\Models\siswa;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class XII_RPL_1 extends Seeder
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
                'nama' => 'Diva Egalyta Putri',
                'nama_kelas_id' => 1,
                'users_id' => 4,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Adinda Jati Mulia',
                'nama_kelas_id' => 1,
                'users_id' => 5,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alan Nadia Bella S',
                'nama_kelas_id' => 1,
                'users_id' => 6,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Hendra Gani Fatihul F',
                'nama_kelas_id' => 1,
                'users_id' => 7,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Hafidz Ridwan Cahya',
                'nama_kelas_id' => 1,
                'users_id' => 8,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Christiano Juan Rafael',
                'nama_kelas_id' => 1,
                'users_id' => 9,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
        ];

        $usersiswa = [
            [
                'username' => 'diva',
                'email' => 'diva@gmail.com',
                'roles_id' => 3,
                'password' => bcrypt('123'),
            ],
            [
                'username' => 'adinda',
                'email' => 'adinda@gmail.com',
                'roles_id' => 3,
                'password' => bcrypt('123'),
            ],
            [
                'username' => 'alan nadia',
                'email' => 'alan@gmail.com',
                'roles_id' => 3,
                'password' => bcrypt('123'),
            ],
            [
                'username' => 'hendra',
                'email' => 'hendra@gmail.com',
                'roles_id' => 3,
                'password' => bcrypt('123'),
            ],
            [
                'username' => 'hafidz',
                'email' => 'hafidz@gmail.com',
                'roles_id' => 3,
                'password' => bcrypt('123'),
            ],
            [
                'username' => 'chris',
                'email' => 'chris@gmail.com',
                'roles_id' => 3,
                'password' => bcrypt('123'),
            ],
        ];

        User::insert($usersiswa);
        siswa::insert($kelas);
    }
}
