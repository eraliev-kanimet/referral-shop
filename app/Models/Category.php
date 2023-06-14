<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
