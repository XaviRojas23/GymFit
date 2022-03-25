<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'name' => 'Crossfit',
            'Descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'Categoria' => 'Fuerza',
            'Dificultad' => 'Dificil',
            'inicio'=>'11:00',
            'fin'=>'12:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('activities')->insert([
            'name' => 'Yoga',
            'Descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'Categoria' => 'Fuerza',
            'Dificultad' => 'Medio',
            'inicio'=>'11:00',
            'fin'=>'12:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('activities')->insert([
            'name' => 'Gimnasio',
            'Descripcion' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'Categoria' => 'Fuerza',
            'Dificultad' => 'Facil',
            'inicio'=>'11:00',
            'fin'=>'12:00',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
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
        DB::table('dificultades')->insert([
            'name' => 'Facil',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('dificultades')->insert([
            'name' => 'Medio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('dificultades')->insert([
            'name' => 'Dificil',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('lugares')->insert([
            'name' => 'Gimnasio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('lugares')->insert([
            'name' => 'Sala1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('lugares')->insert([
            'name' => 'Sala2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
