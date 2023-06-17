<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        if (!Article::count()) {
            $dir = storage_path('app/public/articles');

            if (!is_dir($dir)) {
                mkdir($dir, 0750, true);
            }

            for ($i = 0; $i < 15; $i++) {
                $title = fake()->sentence(3) . $i;

                $image = rand(1, 5) . '.jpg';
                $path = "$dir/$image";

                if (!file_exists($path)) {
                    File::copy(storage_path("fake/images2/$image"), $path);
                }

                Article::create([
                    'name' => ttt($title),
                    'slug' => Str::slug($title),
                    'image' => "pages/$image",
                    'content' => ttt($this->content(
                        fake()->paragraph(4),
                        fake()->title,
                        fake()->paragraph(4),
                        fake()->paragraph(4),
                        fake()->title,
                        fake()->paragraph(4),
                        fake()->paragraph(4),
                        fake()->paragraph(4),
                    )),
                    'tags' => ['MEDICINE', 'PROSTATE'],
                    'posted' => true
                ]);
            }
        } else {
            print "  Articles exists\n";
        }
    }

    protected function content($text1, $head1, $text2, $text3, $head2, $text4, $text5, $text6): string
    {
        $content = "<p>$text1</p><h2>$head1</h2><p>$text2</p>";
        $content .= "<blockquote class='blockquote'><p class='mb-0'>$text3</p></blockquote>";
        $content .= "<h2>$head2</h2><p>$text4</p>";
        $content .= "<h3>$head2</h3><p>$text5</p><p>$text6</p>";

        return $content;
    }
}
