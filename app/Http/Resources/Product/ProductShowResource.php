<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;

class ProductShowResource extends ProductResource
{
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

        return array_merge(parent::toArray($request), [
            'short_desc' => $this->resource->short_desc,
            'desc' => $this->resource->desc,
            'active_ingredients' => $this->resource->active_ingredients,
            'extra_other_names' => $this->resource->extra_other_names,
            'seo' => $this->resource->seo,
            'packs' => $packs,
        ]);
    }
}
