<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_application', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->foreignId('application_id')->constrained()->cascadeOnDelete();
            $table->enum('relevance', ['primary', 'secondary'])->default('primary');
            $table->string('note')->nullable();
            $table->unsignedInteger('sort_order')->default(0);
            $table->primary(['product_id', 'application_id']);
            $table->index(['application_id', 'relevance']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_application');
    }
};
