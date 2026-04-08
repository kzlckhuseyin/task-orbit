<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['title'];

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function internships()
    {
        return $this->hasMany(Internship::class);
    }
}
