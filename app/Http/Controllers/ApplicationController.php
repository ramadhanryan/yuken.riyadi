<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Support\Facades\Cache;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Cache::remember('applications:index:v1', now()->addMinutes(10), fn () =>
            Application::active()->withCount('products')->orderBy('sort_order')->get()
        );

        return view('applications.index', compact('applications'));
    }

    public function show(string $slug)
    {
        [$application, $products] = Cache::remember('applications:show:v1:'.$slug, now()->addMinutes(5), function () use ($slug) {
            $application = Application::active()->where('slug', $slug)->firstOrFail();
            $products = $application->products()
                ->where('products.is_active', true)
                ->with(['category', 'variants' => fn ($query) => $query->active()])
                ->orderByRaw("FIELD(product_application.relevance, 'primary', 'secondary')")
                ->orderBy('product_application.sort_order')
                ->get();

            return [$application, $products];
        });

        return view('applications.show', compact('application', 'products'));
    }
}
