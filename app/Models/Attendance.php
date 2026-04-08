<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['intern_register_id', 'lesson_id', 'status'];

    public function intern_register()
    {
        return $this->belongsTo(InternRegister::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
