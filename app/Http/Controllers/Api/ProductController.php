<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductShowResource;
use App\Models\Product;
use App\Search\ProductSearch;

class ProductController extends Controller
{
    public function index()
    {
        $productSearch = new ProductSearch();

        return response()->json($productSearch->search());
    }

    public function show(Product $product)
    {
        if ($product->is_available) {
            return new ProductShowResource($product);
        }

        return response()->json([], 404);
    }
}
