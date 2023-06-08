<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image',
        'slug',
        'desc',
        'seo'
    ];

    protected $casts = [
        'name' => 'array',
        'seo' => 'array',
    ];

    public $timestamps = false;
}
