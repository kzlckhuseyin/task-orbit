<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskSubmission extends Model
{
    protected $fillable = ['intern_register_id', 'task_id', 'submissions', 'point', 'status'];

    public function intern_register()
    {
        return $this->belongsTo(InternRegister::class);
    }
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
