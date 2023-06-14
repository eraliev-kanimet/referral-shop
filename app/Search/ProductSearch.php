<?php

namespace App\Search;

use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductSearch
{
    protected int $category_id = 0;
    protected int $per_page = 12;

    public function search(): array
    {
        $query = $this->buildQuery();

        if ($this->category_id) {
            $query->where('category_id', $this->category_id);
        }

        $paginator = $query->paginate($this->per_page)->withQueryString();

        return $this->buildResponse($paginator);
    }

    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    protected function buildQuery(): Builder
    {
        return Product::query()
            ->whereIsAvailable(true)
            ->with(['category', 'packs' => function (Builder $query) {
                $query->where('is_available', true);
            }]);
    }

    protected function buildResponse(LengthAwarePaginator $paginator): array
    {
        return [
            'data' => ProductResource::collection($paginator->items()),
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
