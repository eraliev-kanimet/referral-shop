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
        $this->faq();
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

    protected function faq(): void
    {
        $faq = [
            1 => 'What is the difference between Viagra, Cialis, Levitra, Soft and Regular?',
            2 => 'Do you require a prescription?',
            3 => 'What are you shipping methods?',
            4 => 'What medication do you offer?',
            5 => 'How can one place an order?',
            6 => 'What are your available payment methods?',
        ];

        Page::firstOrCreate([
            'name' => 'faq'
        ], [
            'name' => 'faq',
            'content' => array_map(function ($key, $value) {
                return [
                    'id' => $key,
                    'question' => $value,
                    'answer' => fake()->paragraph,
                ];
            }, array_keys($faq), array_values($faq)),
            'seo' => [
                'title' => ttt('FAQ'),
                'desc' => ttt('FAQ description'),
            ]
        ]);
    }
}
