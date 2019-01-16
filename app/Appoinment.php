<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    protected $fillable = [ 'appoinment_time', 'confirm_status' ];
}
