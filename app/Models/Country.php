<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'code',
        'dial_code',
        'states'
    ];

    protected $casts = [
        'name' => 'array',
        'states' => 'array',
    ];

    public $timestamps = false;
}
