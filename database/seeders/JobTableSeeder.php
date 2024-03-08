<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('job')->insert([
                'job_title' => 'Job Title ' . $i,
                'job_requirement' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusantium optio und.Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi accusantium optio und.',
                'privilege' => 'Privilege ' . $i,
                'address' => 'Address ' . $i,
                'category_id' => rand(1, 30), 
                'company_id' => rand(1, 10), 
                'job_type_id' => rand(1, 6), 
                'city_id' => rand(1, 11), 
            ]);
        }
    }
}
