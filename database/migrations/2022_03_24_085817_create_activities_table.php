<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('Descripcion');
            $table->timestamps();
        });
        Schema::create('dificultads', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
        Schema::create('lugars', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id')->constrained()->onDelete('cascade');
            $table->string('name')->unique();
            $table->string('descripcion');
            $table->foreignid('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignid('dificultad_id')->constrained()->onDelete('cascade');
            $table->foreignid('lugar_id')->constrained()->onDelete('cascade');
            $table->string('images');
            $table->time('inicio');
            $table->time('fin');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('dificultads');
        Schema::dropIfExists('lugars');


    }
};
