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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('Descripcion');
            $table->string('Categoria');
            $table->string('Dificultad');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('Descripcion');
            $table->timestamps();
        });
        Schema::create('dificultades', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
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
        Schema::dropIfExists('dificultades');

    }
};
