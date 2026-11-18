# Caching strategy

## Website data

Product and application pages use Laravel's cache store for read-heavy catalog queries. Index data is cached for 10 minutes and slug/category results for 5 minutes. Category query values are hashed in cache keys. The short TTL bounds how long an edit can remain stale when edits are made directly in the database or through a future admin tool. If catalog writes are added, invalidate the affected `catalog:*` or `applications:*` keys from the write path (or use Redis cache tags and flush the catalog tag).

For production with multiple PHP workers or servers, set `CACHE_STORE=redis` and configure the Redis connection in `.env`. The current default `database` store remains a valid low-traffic fallback, provided the Laravel cache table exists (`php artisan make:cache-table` then `php artisan migrate`). Do not use the `array` store in production because it does not persist between requests.

## API response example

There are no API routes in this application yet. For a future public, read-only catalog endpoint, cache the data separately from the HTTP response:

```php
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

Route::get('/api/products', function () {
    $products = Cache::remember('api:products:v1', now()->addMinutes(2), fn () =>
        Product::active()->with('category')->orderBy('name')->get()
    );

    return response()->json(['data' => $products])
        ->header('Cache-Control', 'public, max-age=60, s-maxage=120, stale-while-revalidate=30');
});
```

Only use public HTTP caching for identical responses shared by everyone. For authenticated, personalized, or sensitive responses, use `Cache-Control: private, no-store` (or a carefully scoped `private, max-age=...`) and never share those responses through a CDN. Keep the server cache key inclusive of every input that changes the result, such as filters, locale, and API version.

## Static assets

The `public/.htaccess` rules cache Vite fingerprinted build files for one year with `immutable`; deployment builds produce new filenames when content changes. Public images and PDFs get a seven-day expiration. If production uses Nginx instead of Apache, translate these rules into Nginx `location`/`expires` directives. Ensure HTML and Laravel routes are not marked immutable; let Laravel or the CDN use short revalidation periods for public pages.

## Operations

After changing cache configuration, run `php artisan config:cache`. To clear application cache after deployment or a manual catalog update, run `php artisan cache:clear`. These commands clear framework configuration/data cache respectively; `cache:clear` may clear unrelated application cache entries in the same store.
