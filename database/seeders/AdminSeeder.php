<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'username'=>'ilhxmstar',
                'email'=>'ilhxm@gmail.com',
                'roles_id'=>1,
                'password'=>bcrypt('123'),
            ],
            [
                'username'=>'tsanny',
                'email'=>'tagz@gmail.com',
                'roles_id'=>1,
                'password'=>bcrypt('123'),
            ],
            [
                'username'=>'steven',
                'email'=>'steven@gmail.com',
                'roles_id'=>1,
                'password'=>bcrypt('123'),
            ],
        ];

        User::insert($admin);
    }
}
