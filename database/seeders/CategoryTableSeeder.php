<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            ['id' => 1, 'category_name' => 'Accounting & Finance'],
            ['id' => 2, 'category_name' => 'Admin, Administrative'],
            ['id' => 3, 'category_name' => 'Banking & Insurance'],
            ['id' => 4, 'category_name' => 'Business Development'],
            ['id' => 5, 'category_name' => 'Customer Service'],
            ['id' => 6, 'category_name' => 'Driver'],
            ['id' => 7, 'category_name' => 'Digital Marketing'],
            ['id' => 8, 'category_name' => 'Education, Teaching'],
            ['id' => 9, 'category_name' => 'Engineering, Technical'],
            ['id' => 10, 'category_name' => 'Fresh Gradurate'],
            ['id' => 11, 'category_name' => 'Food & Beverage'],
            ['id' => 12, 'category_name' => 'Graphic Designer, 2D/3D'],
            ['id' => 13, 'category_name' => 'Hospitality & Tourism'],
            ['id' => 14, 'category_name' => 'HR, Training & Recruitment'],
            ['id' => 15, 'category_name' => 'IT, Hardware & Software'],
            ['id' => 16, 'category_name' => 'Legal & Compliance'],
            ['id' => 17, 'category_name' => 'Management, Manager, Supervisor'],
            ['id' => 18, 'category_name' => 'Media Creativity'],
            ['id' => 19, 'category_name' => 'Medical, Doctor & Nursing'],
            ['id' => 20, 'category_name' => 'NGO'],
            ['id' => 21, 'category_name' => 'Operation'],
            ['id' => 22, 'category_name' => 'Pharmaceuticals'],
            ['id' => 23, 'category_name' => 'Property & Real Estate'],
            ['id' => 24, 'category_name' => 'Research & Analysis'],
            ['id' => 25, 'category_name' => 'Sale & Marketing'],
            ['id' => 26, 'category_name' => 'Secretary & PA'],
            ['id' => 27, 'category_name' => 'Security, Cleaner'],
            ['id' => 28, 'category_name' => 'Telecom'],
            ['id' => 29, 'category_name' => 'Translator & Interpreter'],
            ['id' => 30, 'category_name' => 'Others']
        ]);
    }
}
