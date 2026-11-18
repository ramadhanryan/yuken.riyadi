<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductVariant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use RuntimeException;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $path = database_path('seeders/data/products.json');
        $products = json_decode(file_get_contents($path), true, flags: JSON_THROW_ON_ERROR);

        foreach ($products as $record) {
            $category = ProductCategory::where('slug', $record['category_slug'])->first();
            if (! $category) {
                throw new RuntimeException("Unknown product category: {$record['category_slug']}");
            }

            $product = Product::updateOrCreate(['slug' => $record['slug']], [
                'product_category_id' => $category->id,
                'name' => $record['name'],
                'series_code' => $record['series_code'] ?? null,
                'short_description' => $record['short_description'] ?? null,
                'description' => $record['description'] ?? null,
                'image' => $record['image'] ?? null,
                'catalog_pdf' => $record['catalog_pdf'] ?? null,
                'needs_review' => $record['needs_review'] ?? false,
                'is_active' => true,
            ]);

            $applicationLinks = [];
            foreach ($record['applications'] ?? [] as $order => $applicationData) {
                $application = Application::where('slug', $applicationData['slug'])->first();
                if (! $application) {
                    throw new RuntimeException("Unknown application: {$applicationData['slug']}");
                }

                $applicationLinks[$application->id] = [
                    'relevance' => $applicationData['relevance'],
                    'note' => $applicationData['note'] ?? null,
                    'sort_order' => $order + 1,
                ];
            }
            $product->applications()->sync($applicationLinks);

            foreach ($record['variants'] ?? [] as $variantData) {
                ProductVariant::updateOrCreate(['model_code' => $variantData['model_code']], [
                    'product_id' => $product->id,
                    'slug' => $variantData['slug'] ?? Str::slug($variantData['model_code']),
                    'specs' => $variantData['specs'] ?? null,
                    'needs_review' => $variantData['needs_review'] ?? false,
                    'review_note' => $variantData['review_note'] ?? null,
                    'is_active' => true,
                ]);
            }
        }
    }
}
