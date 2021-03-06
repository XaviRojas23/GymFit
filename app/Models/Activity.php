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
        'images',
        'inicio',
        'fin'
    ];

    protected $dates = [
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

    public function activity_days()
    {
        return $this->hasMany(ActivityDay::class)->orderBy('start_time');
    }
}
