<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert(
            [
                ['brand_name' => 'Alpina'],
                ['brand_name' => 'Bering'],
                ['brand_name' => 'Breitling'],
                ['brand_name' => 'Calvin Klein'],
                ['brand_name' => 'Candino'],
                ['brand_name' => 'Century'],
                ['brand_name' => 'Certina'],
                ['brand_name' => 'Condor'],
                ['brand_name' => 'D&G'],
                ['brand_name' => 'Enicar'],
                ['brand_name' => 'Longines'],
            ]
        );
        DB::table('users')->insert([
            [
                'user_name' => 'Admin',
                'user_email' => 'admin@gmail.com',
                'user_password' => bcrypt('1'),
                
            ],
            [
                'user_name' => 'User',
                'user_email' => 'user@gmail.com',
                'user_password' => bcrypt('1'),
            ]
        ]);
    }
}
