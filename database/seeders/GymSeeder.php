<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class GymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Xavi',
            'email' => 'xrf@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'created_At' => Carbon::now(),
            'updated_At' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Duki',
            'email' => 'duki@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'created_At' => Carbon::now(),
            'updated_At' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'name' => 'Paulo',
            'email' => 'paulo@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'created_At' => Carbon::now(),
            'updated_At' => Carbon::now()
        ]);

    }
}
