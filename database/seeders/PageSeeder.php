<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PageSeeder extends Seeder
{
    public string $directory;

    public function run(): void
    {
        $this->directory = storage_path('app/public/pages');

        if (!is_dir($this->directory)) {
            mkdir($this->directory, 0750, true);
        }

        $this->testimonials();
    }

    protected function testimonials(): void
    {
        $testimonials = [];

        for ($i = 1; $i < 7; $i++) {
            $name = fake()->userName;

            $image = null;

            if (0 == $i % 2) {
                $image_name = rand(1, 5) . '.jpg';
                $path = $this->directory . "/$image_name";

                if (!file_exists($path)) {
                    File::copy(storage_path("fake/images2/$image_name"), $path);
                }

                $image = "pages/$image_name";
            }

            $testimonials[] = [
                'id' => $i,
                'name' => $name,
                'address' => fake()->city,
                'avatar' => $image,
                'initial' => getNameInitial($name),
                'content' => fake()->paragraph
            ];
        }

        Page::firstOrCreate([
            'name' => 'testimonials',
        ], [
            'name' => 'testimonials',
            'content' => $testimonials,
            'seo' => [
                'title' => ttt('Testimonials'),
                'desc' => ttt('Testimonials description'),
            ]
        ]);
    }
}
