<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternRegister extends Model
{
    protected $fillable = ['profile_id', 'internship_id', 'status', 'message'];

    public function task_submissions()
    {
        return $this->hasMany(TaskSubmission::class);
    }

    public function attendaces()
    {
        return $this->hasMany(Attendance::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class);
    }
}
