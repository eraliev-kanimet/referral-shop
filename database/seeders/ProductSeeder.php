<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Pack;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        if (!Product::count()) {
            foreach ($this->data() as $data) {
                $category = $this->category($data);

                $product = $this->product($category, $data);

                $this->packs($product, $data);
            }
        } else {
            print "  Products exist\n";
        }
    }

    protected function category(array $data): Category
    {
        $name = $data['category']['en'];
        $slug = Str::slug($name);

        return Category::firstOrCreate([
            'slug' => $slug
        ], [
            'name' => ttt($name),
            'image' => $this->image($data),
            'slug' => $slug,
            'seo' => [
                'title' => ttt($name),
                'desc' => ttt($name)
            ]
        ]);
    }

    protected function product(Category $category, array $data): Product
    {
        $name = $data['name']['en'];

        $product = [
            'name' => ttt($name),
            'slug' => Str::slug($name),
            'category_id' => $category->id,
            'seo' => [
                'title' => ttt($name),
                'desc' => ttt($name),
            ]
        ];

        $product['images'] = [$this->image($data)];

        if (isset($data['short_description'])) {
            $product['short_desc'] = ttt($data['short_description']['en']);

            $product['seo']['desc'] = ttt(strip_tags($data['short_description']['en']));
        }

        if (isset($data['description'])) {
            $product['desc'] = ttt($data['description']['en']);
        }

        if (isset($data['active_ingredient'])) {
            $product['active_ingredients'] = array_map(fn ($value) => trim($value), explode(',', $data['active_ingredient']['en']));
        }

        if (isset($data['is_available'])) {
            $product['is_available'] = (bool)$data['is_available'];
        }

        if (isset($data['extra_other_names'])) {
            $product['extra_other_names'] = array_map(fn ($value) => trim($value), explode(',', $data['extra_other_names']['en']));
        }

        $product = Product::firstOrCreate([
            'slug' => $product['slug']
        ], $product);

        $product->packs()->delete();

        return $product;
    }

    protected function packs(Product $product, array $data): void
    {
        foreach ($data['packs'] as $pack) {
            if ($pack) {
                Pack::create([
                    'product_id' => $product->id,
                    'type' => $pack['type'],
                    'dose' => (int)$pack['dose'],
                    'quantity' => (int)$pack['quantity'],
                    'measure' => $pack['measure'],
                    'price' => (float)$pack['price'],
                    'bestseller' => (bool)$pack['bestseller'],
                    'is_available' => (bool)$pack['available'],
                ]);
            }
        }
    }

    protected function image(array $data): string
    {
        $dir = storage_path('app/public/products');

        if (!is_dir($dir)) {
            mkdir($dir, 0750, true);
        }

        if ($data['image']) {
            $path = $dir . '/' . $data['image'];

            if (!file_exists($path)) {
                File::copy(storage_path('fake/images/' . $data['image']), $path);
            }

            return 'products/' . $data['image'];
        }

        $path = $dir . '/default.webp';

        if (!file_exists($path)) {
            File::copy(storage_path('fake/images/default.webp'), $path);
        }

        return 'products/default.webp';
    }

    protected function data()
    {
        return json_decode(file_get_contents(storage_path('fake/fake.json')), true);
    }
}
