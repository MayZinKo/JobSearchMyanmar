<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('company')->insert([
                'company_name' => 'Company ' . $i,
                'image' => 'comp_img_' . rand(1, 7).'.jpg',
                'email' => 'email ' . $i .'@email.com',
                'phone' => '0912345 ' . $i,
                'description' => 'description ' . $i,
                'privilege' => 'Privilege ' . $i,
                'city_id' => rand(1, 5),
                'company_type_id' => rand(1, 11),
                // Add other columns as needed
            ]);
        }
    }
}
