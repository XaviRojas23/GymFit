<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DificultadSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dificultads')->insert([
            'name' => 'Fácil',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('dificultads')->insert([
            'name' => 'Medio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('dificultads')->insert([
            'name' => 'Dificil',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
