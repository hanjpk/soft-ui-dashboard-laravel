<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class GempaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gempa')->insert([
            [
                'id' => 1,
                'created_at' => '2024-08-08 10:59:36',
                'datetime' => '2024-08-08 03:44:48',
                'lat' => '4.02 LS',
                'lon' => '122.46 BT',
                'mag' => 3.1,
                'dep' => 5,
            ],
            [
                'id' => 2,
                'created_at' => '2024-08-08 19:47:24',
                'datetime' => '2024-08-08 12:46:41',
                'lat' => '6.8 LS',
                'lon' => '112.46 BT',
                'mag' => 3.1,
                'dep' => 10,
            ],
        ]);
    }
}
