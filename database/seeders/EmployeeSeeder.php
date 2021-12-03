<?php

namespace Database\Seeders;

use App\Models\Employees;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employees::factory()
            ->count(50)
            ->create();
    }
}
