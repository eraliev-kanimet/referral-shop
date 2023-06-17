<?php

namespace App\Http\Resources\Article;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * @var Article
     */
    public $resource;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'slug' => $this->resource->slug,
            'image' => asset('storage/' . $this->resource->image),
            'date' => $this->resource->updated_at->format('d-M-Y')
        ];
    }
}
