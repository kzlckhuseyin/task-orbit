<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commantable extends Model
{
    protected $fillable = ['command_id', 'commantable_id', 'commantable_type'];
}
