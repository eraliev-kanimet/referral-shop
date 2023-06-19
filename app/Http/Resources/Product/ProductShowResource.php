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
            $measure = 'mg';
            $items = [];
            $mostExpensivePack = 0;

            $packagePrices = $group->map(fn (Pack $pack) => $pack->price / $pack->quantity);

            if ($packagePrices->count()) {
                $mostExpensivePack = max($packagePrices->toArray());
            }

            foreach ($group as $pack) {
                /** @var Pack $pack */

                $dose = $pack->dose;
                $measure = $pack->measure;

                $items[] = [
                    'id' => $pack->id,
                    'type' => $pack->type,
                    'dose' => $pack->dose,
                    'quantity' => $pack->quantity,
                    'price' => $pack->price,
                    'measure' => $pack->measure,
                    'bestseller' => $pack->bestseller,
                    'save' => $this->save($pack, $mostExpensivePack)
                ];
            }

            $packs[] = [
                'dose' => $dose,
                'measure' => $measure,
                'items' => $items
            ];
        }

        return $packs;
    }

    protected function save(Pack $pack, $mostExpensivePack): int|string
    {
        $sum = $mostExpensivePack - $pack->price / $pack->quantity;

        return abs($pack->quantity * $sum) !== 0
            ? number_format(abs($pack->quantity * $sum), 2, '.', '')
            : 0;
    }
}
