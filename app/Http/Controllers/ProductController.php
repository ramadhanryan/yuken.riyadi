<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Cache::remember('catalog:categories:v1', now()->addMinutes(10), fn () =>
            ProductCategory::active()->withCount(['products' => fn ($query) => $query->where('is_active', true)])
                ->orderBy('sort_order')->get()
        );
        $selectedCategory = $request->query('category');

        $cacheKey = 'catalog:products:v1:'.($selectedCategory ? 'category:'.sha1($selectedCategory) : 'all');
        $products = Cache::remember($cacheKey, now()->addMinutes(5), fn () =>
            Product::active()
                ->with(['category', 'variants' => fn ($query) => $query->where('is_active', true)])
                ->when($selectedCategory, fn ($query) => $query->whereHas('category', fn ($category) => $category->where('slug', $selectedCategory)))
                ->orderBy('name')->get()
        );

        return view('product', compact('categories', 'products', 'selectedCategory'));
    }

    public function show(string $slug)
    {
        $product = Cache::remember('catalog:product:v2:'.$slug, now()->addMinutes(5), fn () =>
            Product::active()->with([
                'category',
                'applications' => fn ($query) => $query->active()->orderBy('product_application.sort_order'),
                'variants' => fn ($query) => $query->active()->orderByRaw("CAST(SUBSTRING_INDEX(model_code, '-', -1) AS UNSIGNED)")->orderBy('model_code'),
            ])->where('slug', $slug)->firstOrFail()
        );

        return view($slug === 'asr-series' ? 'products.asr-show' : ($slug === 'a3h-series' ? 'products.a3h-show' : ($slug === 'cjt35-series' ? 'products.cjt35-show' : ($slug === 'pv2r-series' ? 'products.pv2r-show' : 'products.show'))), compact('product'));
    }
}
