<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('job_type')->insert([
            ['id' => 1, 'job_type_name' => 'Full Time'], 
            ['id' => 2, 'job_type_name' => 'Part Time'], 
            ['id' => 3, 'job_type_name' => 'Freelance'], 
            ['id' => 4, 'job_type_name' => 'Contract, Full Time'], 
            ['id' => 5, 'job_type_name' => 'Contract, Part Time'], 
            ['id' => 6, 'job_type_name' => 'Volunteer']
        ]);
    }
}
