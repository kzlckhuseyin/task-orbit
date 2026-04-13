<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];

    public function profile()
    {
        return $this->hasMany(Profile::class);
    }
}
