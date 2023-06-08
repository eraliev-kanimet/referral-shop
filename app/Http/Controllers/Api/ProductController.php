<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ProductRequest;
use App\Search\ProductSearch;

class ProductController extends Controller
{
    public function index(ProductRequest $request)
    {
        $productSearch = new ProductSearch();
        $productSearch->setCategoryId($request->get('category_id'));

        return response()->json($productSearch->search());
    }
}
