<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;

class CategoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'name' => 'Aerobico',
            'Descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'name' => 'Fuerza',
            'Descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('categorias')->insert([
            'name' => 'Resistencia',
            'Descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
