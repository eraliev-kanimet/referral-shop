<?php

use App\Http\Resources\Article\ArticleResource;
use Illuminate\Pagination\LengthAwarePaginator;

function ttt($value): array
{
    return [
        'en' => $value,
        'de' => $value,
        'es' => $value,
        'fr' => $value,
        'it' => $value,
    ];
}

function getNameInitial(string $name): string
{
    preg_match_all('/\b\w/u', $name, $matches);

    return strtoupper(implode('', $matches[0]));
}

function paginator_format(LengthAwarePaginator $paginator, $data): array
{
    return [
        'data' => $data,
        'current_page' => $paginator->currentPage(),
        'last_page' => $paginator->lastPage(),
        'next_page_url' => $paginator->nextPageUrl(),
        'prev_page_url' => $paginator->previousPageUrl(),
        'links' => $paginator->linkCollection(),
        'per_page' => $paginator->perPage(),
        'total' => $paginator->total(),
    ];
}
