<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pack extends Model
{
    public $fillable = [
        'type',
        'dose',
        'quantity',
        'price',
        'measure',
        'bestseller',
        'is_available'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public $timestamps = false;
}
