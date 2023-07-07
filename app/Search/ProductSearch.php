<?php

namespace App\Search;

use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Contracts\Database\Eloquent\Builder;

class ProductSearch
{
    protected int $category_id = 0;

    public function __construct(
        protected ?string $query_string = ''
    )
    {
    }

    public function search(): array
    {
        $query = $this->buildQuery();

        if ($this->category_id) {
            $query->where('category_id', $this->category_id);
        }

        if ($this->query_string) {
            $words = explode(' ', $this->query_string);

            $query->where(function (Builder $query) use ($words) {
                foreach ($words as $word) {
                    $query->orWhere('name', 'like', "%$word%")
                        ->orWhere('active_ingredients', 'like', "%$word%")
                        ->orWhere('extra_other_names', 'like', "%$word%")
                        ->orWhereHas(
                            'category',
                            fn(Builder $query) => $query->where('name', 'like', "%$word%")
                        );
                }
            });
        }

        $paginator = $query->paginate(12)->withQueryString();

        return paginator_format($paginator, ProductResource::collection($paginator->items()));
    }

    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
    }

    protected function buildQuery(): Builder
    {
        return Product::query()
            ->select([
                'id',
                'name',
                'slug',
                'images',
                'price',
                'category_id',
                'active_ingredients',
                'extra_other_names',
            ])
            ->whereIsAvailable(true)
            ->with([
                'category',
                'packs' => fn(Builder $query) => $query->where('is_available', true)
            ]);
    }
}
