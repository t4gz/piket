<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            XII_RPL_1::class,
            XII_RPL_2::class,
            XII_PH_1::class,
            XII_PH_2::class,
            XII_BDP_1::class,
            XII_BDP_2::class,
            XII_PSPT_1::class,
            XII_PSPT_2::class,
        ]); 
    }
}
