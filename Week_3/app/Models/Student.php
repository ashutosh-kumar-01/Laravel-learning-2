<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Student extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'students';

    protected $fillable = [
        // if model naem is singular 
        'reg',
        'name',
        'city',
        'course',
        'marks',
    ];
}
