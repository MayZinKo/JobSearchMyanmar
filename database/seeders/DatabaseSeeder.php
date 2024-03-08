<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(JobTableSeeder::class);
        $this->call(JobtypeTableSeeder::class);
        $this->call(JobtypeTableSeeder::class);
    }
}
