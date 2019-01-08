<?php

namespace App;

use App\Doctor;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    
    function doctors()
    {
        return $this->hasMany('App\Doctor');
    }
}
