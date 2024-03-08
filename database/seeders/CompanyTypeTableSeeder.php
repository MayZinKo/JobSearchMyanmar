<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companyTypes = [
            ['company_type_name' => 'Technology'],
            ['company_type_name' => 'Finance'],
            ['company_type_name' => 'Healthcare'],
            ['company_type_name' => 'Retail'],
            ['company_type_name' => 'Manufacturing'],
        ];

        DB::table('company_type')->insert($companyTypes);
    }
}
