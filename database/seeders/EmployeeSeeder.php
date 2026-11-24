<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Ilham',
                'lastname' => 'Setiawan',
                'email' => 'ilham.setiawan@gmail.com',
                'age' => 20,
                'position_id' => 1
            ],
            [
                'firstname' => 'Lionel',
                'lastname' => 'Messi',
                'email' => 'lionel.messi@gmail.com',
                'age' => 35,
                'position_id' => 2
            ],
            [
                'firstname' => 'Marc',
                'lastname' => 'Marquez',
                'email' => 'marc.marquez@gmail.com',
                'age' => 32,
                'position_id' => 3
            ],
        ]);
    }
}
