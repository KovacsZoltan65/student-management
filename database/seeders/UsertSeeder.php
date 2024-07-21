<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->truncate();
        
        $users = [
            [ 'name' => 'Kovács Zoltán', 'email' => 'zoltan1_kovacs@msn.com', 'password' => bcrypt('password'), ]
        ];
         
        \App\Models\User::insert($users); 
    }
}
