<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = ['company_id', 'title', 'status', 'description'];

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
