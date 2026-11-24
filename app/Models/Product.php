<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'product_category_id', 'name', 'series_code', 'slug', 'short_description',
        'description', 'image', 'catalog_pdf', 'needs_review', 'is_active',
    ];

    protected function casts(): array
    {
        return ['needs_review' => 'boolean', 'is_active' => 'boolean'];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function applications(): BelongsToMany
    {
        return $this->belongsToMany(Application::class, 'product_application')
            ->withPivot('relevance', 'note', 'sort_order');
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class)->orderByRaw("CAST(SUBSTRING_INDEX(model_code, '-', -1) AS UNSIGNED)")->orderBy('model_code');
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }
}
