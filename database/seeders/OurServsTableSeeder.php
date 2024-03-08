<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurServsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('our_servs')->insert([
            ['id' => 1, 'our_servs_name' => 'Job Listing'],
            ['id' => 2, 'our_servs_name' => 'Company Profile'],
            ['id' => 3, 'our_servs_name' => 'Interview Arrangement'],
            ['id' => 4, 'our_servs_name' => 'CV Preparation'],
            ['id' => 5, 'our_servs_name' => 'Job Application'],
            ['id' => 6, 'our_servs_name' => 'Personal Profile'],
            ['id' => 7, 'our_servs_name' => 'Job Fairs'],
            ['id' => 8, 'our_servs_name' => 'International Jobs'],
            ['id' => 9, 'our_servs_name' => 'Progress Tracking'],         
        ]);
    }
}
