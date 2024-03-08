<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('city')->insert([
            ['id' => 1, 'city_name' => 'Yangon', 'country_id'=>1],
            ['id' => 2, 'city_name' => 'Mandalay', 'country_id'=>1],
            ['id' => 3, 'city_name' => 'PyinOoLwin', 'country_id'=>1],
            ['id' => 4, 'city_name' => 'NayPyiTaw', 'country_id'=>1],
            ['id' => 5, 'city_name' => 'TaungGyi', 'country_id'=>1],
            ['id' => 6, 'city_name' => 'Dawei', 'country_id'=>1],
            ['id' => 7, 'city_name' => 'ChaungThar', 'country_id'=>1],
            ['id' => 8, 'city_name' => 'NgweSaung', 'country_id'=>1],
            ['id' => 9, 'city_name' => 'NgaPali', 'country_id'=>1],
            ['id' => 10, 'city_name' => 'Kalaw', 'country_id'=>1],
            ['id' => 11, 'city_name' => 'Pago', 'country_id'=>1]
         
        ]);
    }
}
