<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'role' => 'admin'
            ],
            [
                'role' => 'wakel'
            ],
            [
                'role' => 'siswa'
            ],
        ];
        role::insert($role);
    }
}
