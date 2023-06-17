<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Article\ArticleShowResource;
use App\Models\Article;
use App\Search\ArticleSearch;

class ArticleController extends Controller
{
    public function index()
    {
        $articleSearch = new ArticleSearch();

        return response()->json($articleSearch->search());
    }

    public function show(Article $article)
    {
        return new ArticleShowResource($article);
    }
}
