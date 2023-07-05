<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Article\ArticleResource;
use App\Http\Resources\Article\ArticleShowResource;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $paginator = Article::wherePosted(true)->paginate(8)->withQueryString();
        $articles = ArticleResource::collection($paginator->items());

        return response()->json(paginator_format($paginator, $articles));
    }

    public function show(Article $article)
    {
        return new ArticleShowResource($article);
    }
}
