<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    public $fillable = [
        'name',
        'slug',
        'images',
        'short_desc',
        'desc',
        'active_ingredients',
        'extra_other_names',
        'is_available',
        'seo',
        'category_id',
    ];

    protected $casts = [
        'name' => 'array',
        'images' => 'array',
        'short_desc' => 'array',
        'desc' => 'array',
        'extra_other_names' => 'array',
        'active_ingredients' => 'array',
        'seo' => 'array'
    ];

    public function packs(): HasMany
    {
        return $this->hasMany(Pack::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getMinPrice(): string
    {
        $min_prices = [];

        foreach ($this->packs as $pack) {
            $min_prices[] = $pack->price / $pack->quantity;
        }

        if (count($min_prices)) {
            return sprintf('%.2f', min($min_prices));
        }

        return 0;
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
