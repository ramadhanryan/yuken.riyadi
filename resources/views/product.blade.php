<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#172d65">
    <title>Products | PT Sinar Mutiara Cakrabuana</title>
    @include('partials.styles-product')
</head>
<body>
    @include('partials.navbar')
    <main class="product-content">
        <section class="product-page-banner" aria-labelledby="product-page-title">
            <div class="product-banner-copy">
                <p class="product-banner-kicker">Yuken hydraulic solutions</p>
                <h1 class="product-banner-title" id="product-page-title">Precision for every flow.</h1>
                <p class="product-banner-copy-text">Browse product families and compare model specifications.</p>
            </div>
        </section>

        <section class="categories-section" id="categories" aria-labelledby="categories-title">
            <div class="product-section-inner">
                <div class="product-section-heading">
                    <div><p class="product-section-kicker">Product catalogue</p><h2 class="product-section-title" id="categories-title">Product families</h2></div>
                    <p class="product-section-description">Choose a category, then open a product family to review its available models and technical data.</p>
                </div>
                <nav class="category-filter" aria-label="Filter product families by category">
                    <a class="category-filter-link{{ $selectedCategory ? '' : ' selected' }}" href="{{ route('products.index') }}#families">All families</a>
                    @foreach ($categories as $category)
                        <a class="category-filter-link{{ $selectedCategory === $category->slug ? ' selected' : '' }}" id="category-{{ $category->slug }}" href="{{ route('products.index', ['category' => $category->slug]) }}#families">{{ $category->name }} <span>{{ $category->products_count }}</span></a>
                    @endforeach
                </nav>

                <div class="family-grid" id="families">
                    @forelse ($products as $product)
                        <article class="family-card">
                            <a class="family-image-wrap" href="{{ route('products.show', $product->slug) }}" aria-label="View {{ $product->name }}">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->category->name }}" loading="lazy">
                            </a>
                            <div class="family-card-body">
                                <p class="category-type">{{ $product->category->name }}</p>
                                <h3><a href="{{ route('products.show', $product->slug) }}">{{ $product->name }}</a></h3>
                                @if ($product->series_code)<p class="family-series">Series code: <strong>{{ $product->series_code }}</strong></p>@endif
                                <p class="family-model-count">{{ $product->variants->count() }} model variants</p>
                                <div class="model-chip-list">
                                    @foreach ($product->variants->take(5) as $variant)<span>{{ $variant->model_code }}</span>@endforeach
                                    @if ($product->variants->count() > 5)<span>+{{ $product->variants->count() - 5 }} more</span>@endif
                                </div>
                                @if ($product->needs_review)<p class="review-flag">Application mapping needs review</p>@endif
                                <a class="family-card-link" href="{{ route('products.show', $product->slug) }}">View models and specifications <span aria-hidden="true">&#8594;</span></a>
                            </div>
                        </article>
                    @empty
                        <div class="empty-state"><h3>No product families in this category yet</h3><p>More product data will appear here when it is available.</p><a href="{{ route('products.index') }}">View all families</a></div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-brand"><img class="footer-logo" src="{{ asset('images/smc-logo.png') }}" alt="PT Sinar Mutiara Cakrabuana"><p class="footer-address">Wisma 47, Jl Cideng Barat No.46D - 47<br>Kel. Cideng, Kec. Gambir<br>Jakarta Pusat 10150 - Indonesia<br><br>+62 21 - 630 8525<br>suminoue@riyadi.co.id</p></div>
            <div><h2 class="footer-heading">Product</h2><ul class="footer-list"><li><a href="#categories">Product families</a></li><li><a href="{{ route('applications.index') }}">Applications</a></li><li><a href="{{ url('/contact') }}">Contact us</a></li></ul></div>
            <div><h2 class="footer-heading">Company</h2><ul class="footer-list"><li><a href="https://group.riyadi.co.id/about">About Riyadi Group</a></li><li><a href="https://www.yuken.co.jp/en/corp/info">About Yuken</a></li><li><a href="https://www.yuken.co.jp/en/">Yuken website</a></li></ul></div>
            <div><h2 class="footer-heading">Get in touch</h2><ul class="footer-list"><li><a href="mailto:suminoue@riyadi.co.id">suminoue@riyadi.co.id</a></li><li>Monday–Friday</li><li>08.00 AM - 05.00 PM</li></ul></div>
        </div>
        <div class="footer-bottom"><div class="footer-bottom-inner"><p>© 2026 Sinar Mutiara Cakrabuana. Yuken Distributor in Indonesia.</p><div class="footer-meta"><a href="#">Privacy policy</a><a href="#">Terms &amp; conditions</a></div></div></div>
    </footer>
    @include('partials.scripts')
</body>
</html>
