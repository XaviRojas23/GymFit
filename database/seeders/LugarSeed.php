<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LugarSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lugars')->insert([
            'name' => 'Gimnasio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('lugars')->insert([
            'name' => 'Sala-1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('lugars')->insert([
            'name' => 'Sala-2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
