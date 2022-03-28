<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'descripcion',
        'categoria_id',
        'dificultad_id',
        'lugar_id',
        'inicio',
        'fin'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function dificultad(){
        return $this->belongsTo(Dificultad::class);
    }
    public function lugar(){
        return $this->belongsTo(Lugar::class);
    }
}
