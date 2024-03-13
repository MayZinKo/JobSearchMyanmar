<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'dev@email.com',
                'password' => bcrypt('dev')
              
            ],
            [
                'id' => 2,
                'name' => 'Dev',
                'email' => 'dev@gmail.com',
                'password' => bcrypt('dev')
            ]
        ]);
    }
}
