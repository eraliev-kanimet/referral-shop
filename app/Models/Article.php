<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'content',
        'tags',
        'posted'
    ];

    protected $casts = [
        'name' => 'array',
        'content' => 'array',
        'tags' => 'array',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function next(): ?self
    {
        return self::where('id', '>', $this->id)->orderBy('id')->first();
    }

    public function prev(): ?self
    {
        return self::where('id', '<', $this->id)->orderBy('id', 'desc')->first();
    }
}
