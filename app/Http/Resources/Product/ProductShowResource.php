<?php

namespace App\Http\Resources\Product;

use App\Models\Pack;
use Illuminate\Http\Request;

class ProductShowResource extends ProductResource
{
    public function toArray(Request $request): array
    {
        return array_merge(parent::toArray($request), [
            'short_desc' => $this->resource->short_desc,
            'desc' => $this->resource->desc,
            'active_ingredients' => $this->resource->active_ingredients,
            'extra_other_names' => $this->resource->extra_other_names,
            'seo' => $this->resource->seo,
            'packs' => $this->packs(),
        ]);
    }

    protected function packs(): array
    {
        $packs = [];

        foreach ($this->resource->packs->groupBy('dose') as $group) {
            $dose = 0;
            $items = [];

            foreach ($group as $pack) {
                /** @var Pack $pack */

                $dose = $pack->dose;

                $items[] = [
                    'id' => $pack->id,
                    'type' => $pack->type,
                    'dose' => $pack->dose,
                    'quantity' => $pack->quantity,
                    'price' => $pack->price,
                    'measure' => $pack->measure,
                    'bestseller' => $pack->bestseller,
                ];
            }

            $packs[] = [
                'dose' => $dose,
                'items' => $items
            ];
        }

        return $packs;
    }
}
