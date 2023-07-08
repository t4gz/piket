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
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Ach. Nur Irchamul Kholqillazuardy',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Achmad Annuru Akbar',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'perempuan',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Achmad Naufal Ferdiansyah',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Adinda Jati Mulia',
                'nama_kelas_id' => 1,
                'users_id' => 5,
                'jadwals_id' => 1,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki -laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Afrizaldin Ananda Phraqazza',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Aghna Naufal Caesaryan Rahmadani ',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Ahmad Zakki Saputra',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alan Nadia Bella Sahira',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alexander Sebastian Richard',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alief Rifqy Prasetya',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Alvina Salshabilla Linjani Putri',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Ananda Ardiansyah Hariaji',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Andrean Firmansyah',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Aprilia Dewi Sukmawati',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Arva Zaki Fanadzan',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Bilqist Alma Fadhilah',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Bima Wahyu Luckyta',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
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
            [
                'nisn' => 123123123,
                'nama' => 'Deef Vely Yustezio Arinanda',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Dewangga Bintang Nugroho',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Dhamar Adhi Susyatama Putra',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Dharma Eka Saputra',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Diva Egalyta Putri Affandi',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Elang Pandi Pranoto',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Farrel Aqeel Danendra',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Fernanda Satria Wibowo',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Fery Ferdinansyah',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Firta Arie Firmansyah',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Hafidz Ridwan Cahya',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Hendra Gani Fatihul Falah',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Herwan Ramadhani',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Hilzam Saiga Hamas',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'M Nurcholis Septian',
                'kelas_id' => 1,
                'users_id' => null,
                'alamat' => 'jalan-jalan',
                'jenis_kelamin' => 'laki - laki',
            ],
            [
                'nisn' => 123123123,
                'nama' => 'Triaji Pangestu I-uhur Siahaan',
                'kelas_id' => 1,
                'users_id' => null,
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
