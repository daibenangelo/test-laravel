<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => "Daiben",
            'last_name' => "Sanchez",
            'email' => "admin@iscp.com",
            'password' => Hash::make("1234"),
            'role' => "admin"
        ]);
    }
}
