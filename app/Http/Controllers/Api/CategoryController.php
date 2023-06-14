<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Category\CategoryShowResource;
use App\Models\Category;
use App\Search\ProductSearch;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $productSearch = new ProductSearch();
        $productSearch->setCategoryId($category->id);

        return response()->json([
            'category' => new CategoryShowResource($category),
            'products' => $productSearch->search()
        ]);
    }
}
