<?php

namespace App\Search;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ProductSearch
{
    protected array $response;
    protected int $category_id = 0;

    public function search(): array
    {
        $per_page = 12;

        $query = $this->buildQuery();

        if ($this->category_id) {
            $query->where('category_id', $this->category_id);
        }

        $paginator = $query->paginate($per_page)->withQueryString();

        $this->response['products'] = $this->buildResponse($paginator, $per_page);

        return $this->response;
    }

    public function setCategoryId(?int $category_id): void
    {
        if ($category_id) {
            $this->category_id = $category_id;

            $category = Category::find($category_id);

            $this->response['category'] = new CategoryResource($category);
        }
    }

    protected function buildQuery(): Builder
    {
        return Product::query()
            ->whereIsAvailable(true)
            ->with(['category', 'packs' => function (Builder $query) {
                $query->where('is_available', true);
            }]);
    }

    protected function buildResponse($paginator, $per_page): array
    {
        return [
            'data' => ProductResource::collection($paginator->items()),
            'current_page' => $paginator->currentPage(),
            'last_page' => $paginator->lastPage(),
            'next_page_url' => $paginator->nextPageUrl(),
            'prev_page_url' => $paginator->previousPageUrl(),
            'links' => $paginator->linkCollection(),
            'per_page' => $per_page,
            'total' => $paginator->total(),
        ];
    }
}
