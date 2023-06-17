<?php

namespace App\Search;

use App\Http\Resources\Article\ArticleResource;
use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleSearch
{
    protected int $per_page = 8;

    public function search(): array
    {
        $paginator = Article::wherePosted(true)->paginate($this->per_page)->withQueryString();

        return $this->buildResponse($paginator);
    }

    protected function buildResponse(LengthAwarePaginator $paginator): array
    {
        return [
            'data' => ArticleResource::collection($paginator->items()),
            'current_page' => $paginator->currentPage(),
            'last_page' => $paginator->lastPage(),
            'next_page_url' => $paginator->nextPageUrl(),
            'prev_page_url' => $paginator->previousPageUrl(),
            'links' => $paginator->linkCollection(),
            'per_page' => $this->per_page,
            'total' => $paginator->total(),
        ];
    }
}
