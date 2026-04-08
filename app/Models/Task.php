<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['lesson_id', 'title', 'description'];

    public function task_submissions()
    {
        return $this->hasMany(TaskSubmission::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
