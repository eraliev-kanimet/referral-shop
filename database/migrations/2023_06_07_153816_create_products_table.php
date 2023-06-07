<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->string('slug')->unique()->index();
            $table->json('images');
            $table->json('seo');
            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->json('short_desc')->nullable();
            $table->json('desc')->nullable();
            $table->json('active_ingredients')->nullable();
            $table->json('extra_other_names')->nullable();
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
