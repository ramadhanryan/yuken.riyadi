<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('model_code', 160)->unique();
            $table->string('slug', 200)->unique();
            $table->json('specs')->nullable();
            $table->boolean('needs_review')->default(false);
            $table->text('review_note')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->index(['product_id', 'is_active']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_variants');
    }
};
