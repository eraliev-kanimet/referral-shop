<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductShowResource;
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
        return new ProductShowResource($product);
    }
}
