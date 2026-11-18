<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->constrained()->restrictOnDelete();
            $table->string('name', 200);
            $table->string('series_code', 100)->nullable();
            $table->string('slug', 220)->unique();
            $table->string('short_description', 300)->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('catalog_pdf')->nullable();
            $table->boolean('needs_review')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
