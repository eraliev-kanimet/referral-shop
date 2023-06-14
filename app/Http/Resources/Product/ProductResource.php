<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Category\CategoryResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * @var Product
     */
    public $resource;

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'slug' => $this->resource->slug,
            'images' => array_map(fn (string $image) => asset('storage/' . $image), $this->resource->images),
            'price' => $this->resource->getMinPrice(),
            'category' => new CategoryResource($this->resource->category)
        ];
    }
}
