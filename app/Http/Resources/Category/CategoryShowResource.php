<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Request;

class CategoryShowResource extends CategoryResource
{
    public function toArray(Request $request): array
    {
        $data = parent::toArray($request);

        $data['seo'] = $this->resource->seo;
        $data['desc'] = $this->resource->desc;

        return $data;
    }
}
