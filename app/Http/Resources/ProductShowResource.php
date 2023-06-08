<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductShowResource extends JsonResource
{
    /**
     * @var Product
     */
    public $resource;

    public function toArray(Request $request): array
    {
        $packs = [];

        foreach ($this->resource->packs as $pack) {
            $packs[] = [
                'id' => $pack->id,
                'type' => $pack->type,
                'dose' => $pack->dose,
                'quantity' => $pack->quantity,
                'price' => $pack->price,
                'measure' => $pack->measure,
                'bestseller' => $pack->bestseller,
            ];
        }

        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'slug' => $this->resource->slug,
            'images' => array_map(fn (string $image) => asset('storage/' . $image), $this->resource->images),
            'price' => $this->resource->getMinPrice(),
            'category' => new CategoryResource($this->resource->category),
            'short_desc' => $this->resource->short_desc,
            'desc' => $this->resource->desc,
            'active_ingredients' => $this->resource->active_ingredients,
            'extra_other_names' => $this->resource->extra_other_names,
            'seo' => $this->resource->seo,
            'packs' => $packs,
        ];
    }
}
