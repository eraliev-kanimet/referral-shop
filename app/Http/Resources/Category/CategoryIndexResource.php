<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Request;

class CategoryIndexResource extends CategoryResource
{
    public function toArray(Request $request): array
    {
        $data = parent::toArray($request);

        $data['products'] = $this->resource->products->count();

        return $data;
    }
}
