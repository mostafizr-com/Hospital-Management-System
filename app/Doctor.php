<?php

namespace App;

use App\Department;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
         'name', 'phone', 'email', 'image', 'skills', 'brief'
    ];

    function department()
    {
        return $this->belongsTo('App\Department', 'department_id');
    }
}
