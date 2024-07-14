<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    // Fillable fields
    protected $fillable = [
        'day_id',
        'class_id',
        'trainer_id',
        'start_time',
        'end_time'
    ];

    // Define relationship with the Day model
    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    // Define relationship with the GymClass model
    public function gymClass()
    {
        return $this->belongsTo(GymClass::class, 'class_id');
    }

    // Define relationship with the Trainer model
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
}
