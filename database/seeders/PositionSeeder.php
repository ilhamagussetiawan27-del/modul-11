<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('positions')->insert([
            [
                'code' => 'IS',
                'name' => 'Ilham Setiawan',
                'description' => 'Mahasiswa'
            ],
            [
                'code' => 'LM',
                'name' => 'Lionel Messi',
                'description' => 'GOAT'
            ],
            [
                'code' => 'MM',
                'name' => 'Marc Marquez',
                'description' => 'GOAT MOTOGP'
            ],
        ]);
    }
}
