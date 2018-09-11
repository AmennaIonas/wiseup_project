<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $table = 'bikes';
    public $timestamps = true;

    protected $fillable = [
        'title', 'image'
    ];
}
