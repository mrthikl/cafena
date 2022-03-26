<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'admin_name' => 'admin',
            'admin_email' => 'admin@gmail.com',
            'admin_password' => bcrypt('1'),
        ]);
        DB::table('users')->insert([
            'user_name' => 'user',
            'user_email' => 'user@gmail.com',
            'user_password' => bcrypt('1'),
        ]);
    }
}
