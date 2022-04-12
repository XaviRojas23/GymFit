<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityDay extends Model
{
    use HasFactory;

    protected $fillables = [
        'activity_id',
        'recurrent_day',
        'specific_day',
        'start_time',
        'end_time'
    ];

    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
