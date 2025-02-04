<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([

            //admin
            [
                'name' => 'admin',
                'email' => 'dev2.ngenit@gmail.com',
                'password' => Hash::make('Pa$$w0rd!'),
            ],


        ]);
    }
}
