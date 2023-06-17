<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'content',
        'seo'
    ];

    protected $casts = [
        'content' => 'array',
        'seo' => 'array',
    ];

    public $timestamps = false;
}
