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
                'nama' => 'Abyaz Prince Muhammad',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Ach. Nur Irchamul Kholqillazuardy',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Achmad Annuru Akbar',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Achmad Naufal Ferdiansyah',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Adinda Jati Mulia',
                'nama_kelas_id' => 1,
                'users_id' => 5,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Afrizaldin Ananda Phraqazza',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Aghna Naufal Caesaryan Rahmadani ',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Ahmad Zakki Saputra',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alan Nadia Bella Sahira',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alexander Sebastian Richard',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alief Rifqy Prasetya',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alvina Salshabilla Linjani Putri',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Ananda Ardiansyah Hariaji',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Andrean Firmansyah',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Aprilia Dewi Sukmawati',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jadwals_id' => null,
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Arva Zaki Fanadzan',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Bilqist Alma Fadhilah',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Bima Wahyu Luckyta',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Christiano Juan Rafael',
                'nama_kelas_id' => 1,
                'users_id' => 9,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Deef Vely Yustezio Arinanda',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Dewangga Bintang Nugroho',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Dhamar Adhi Susyatama Putra',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Dharma Eka Saputra',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Diva Egalyta Putri Affandi',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Elang Pandi Pranoto',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Farrel Aqeel Danendra',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Fernanda Satria Wibowo',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Fery Ferdinansyah',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null

            ],
            [
                'nisn' => 123123123,
                'nama' => 'Firta Arie Firmansyah',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Hafidz Ridwan Cahya',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Hendra Gani Fatihul Falah',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Herwan Ramadhani',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Hilzam Saiga Hamas',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'M Nurcholis Septian',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Triaji Pangestu Luhur Siahaan',
                'nama_kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
                'jadwals_id' => null
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
