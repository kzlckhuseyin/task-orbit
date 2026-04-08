<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title', 'internship_id', 'start_date', 'end_date', 'description', 'content', 'profile_id'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }


    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
