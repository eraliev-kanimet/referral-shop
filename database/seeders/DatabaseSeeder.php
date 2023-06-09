<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PageSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CountrySeeder::class);
    }
}
