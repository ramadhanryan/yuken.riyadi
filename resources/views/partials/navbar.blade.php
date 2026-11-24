@php($homePrefix = request()->is('contact') || request()->is('privacy') ? url('/') : '')
@php($homePage = request()->is('/') || request()->is('home'))
@php($productPage = request()->is('product*'))
<nav class="navbar{{ request()->is('contact') || request()->is('privacy') || request()->is('applications*') || $productPage ? ' visible always-visible' : '' }}" id="navbar" aria-label="Main navigation">
    <div class="nav-inner">
        <div class="brand">
            <div class="brand-logos" aria-label="Company logos">
                <a class="smc-logo-link" href="{{ url('/') }}" aria-label="PT Sinar Mutiara Cakrabuana home"><img class="smc-logo" src="{{ asset('images/smc-logo.png') }}" alt="PT Sinar Mutiara Cakrabuana"></a>
                <a class="riyadi-logo-link" href="https://group.riyadi.co.id/" target="_blank" rel="noopener noreferrer" aria-label="Visit Riyadi Group website"><img class="riyadi-logo" src="{{ asset('images/memberofriyadi.svg') }}" alt="Riyadi Group"></a>
            </div>
        </div>
        <button class="menu-toggle" id="menuToggle" aria-label="Open navigation menu" aria-expanded="false"><span></span><span></span><span></span></button>
        <div class="nav-links" id="navLinks">
            <a class="{{ $homePage ? 'active' : '' }}" href="{{ $homePrefix }}/#home" @if ($homePage) aria-current="page" @endif>Home</a>
            <div class="nav-item{{ $productPage ? ' active' : '' }}" id="productsNavItem">
                <a class="nav-trigger{{ $productPage ? ' active' : '' }}" id="productsMenuButton" href="{{ url('/product') }}" @if ($productPage) aria-current="page" @endif>Products <span class="nav-chevron" aria-hidden="true"></span></a>
                <div class="mega-menu" id="productsMegaMenu" aria-labelledby="productsMenuButton">
                    <div class="mega-content mega-products-content">
                        <div class="mega-intro"><p class="mega-intro-kicker">Yuken product range</p><h2 class="mega-intro-title">Hydraulic control, built for precision.</h2><p class="mega-intro-copy">Explore pumps, valves, and components for dependable hydraulic systems.</p><a class="mega-all-link" href="{{ url('/product') }}#categories">View all products <span aria-hidden="true">&#8594;</span></a></div>
                        <div class="mega-products-list" aria-label="Product categories">
                            <a class="mega-product-link" href="{{ url('/product') }}#category-linear-servo-valves"><span class="mega-product-number">01</span><span class="mega-product-name">Linear Servo Valves</span></a>
                            <a class="mega-product-link" href="{{ url('/product') }}#category-hydraulic-cylinders"><span class="mega-product-number">02</span><span class="mega-product-name">Hydraulic Cylinders</span></a>
                            <a class="mega-product-link" href="{{ url('/product') }}#category-flow-controls"><span class="mega-product-number">03</span><span class="mega-product-name">Flow Controls</span></a>
                            <a class="mega-product-link" href="{{ url('/product') }}#category-modules"><span class="mega-product-number">04</span><span class="mega-product-name">Modules</span></a>
                            <a class="mega-product-link" href="{{ url('/product') }}#category-pressure-control-valves"><span class="mega-product-number">05</span><span class="mega-product-name">Pressure Control Valves</span></a>
                            <a class="mega-product-link" href="{{ url('/product') }}#category-pumps"><span class="mega-product-number">06</span><span class="mega-product-name">Pumps</span></a>
                            <a class="mega-product-link" href="{{ url('/product') }}#category-solenoid-valves"><span class="mega-product-number">07</span><span class="mega-product-name">Solenoid Valves</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="{{ request()->is('applications*') ? 'active' : '' }}" href="{{ url('/applications') }}" @if (request()->is('applications*')) aria-current="page" @endif>Applications</a>
            <div class="nav-item" id="aboutNavItem">
                <button class="nav-trigger" id="aboutMenuButton" type="button" aria-expanded="false" aria-controls="aboutMegaMenu">About us <span class="nav-chevron" aria-hidden="true"></span></button>
                <div class="mega-menu" id="aboutMegaMenu" aria-labelledby="aboutMenuButton"><div class="mega-content mega-about-content"><div class="mega-intro"><p class="mega-intro-kicker">About our partners</p><h2 class="mega-intro-title">Experience and engineering, together.</h2><p class="mega-intro-copy">Learn about the group behind SMC and the Japanese brand we represent.</p></div><div class="mega-about-grid"><a class="mega-about-card" href="https://group.riyadi.co.id/about" target="_blank" rel="noopener noreferrer"><strong>About Riyadi Group</strong><span>Our parent group and its industrial distribution experience.</span><em>Meet Riyadi Group &#8599;</em></a><a class="mega-about-card" href="https://www.yuken.co.jp/en/corp/info" target="_blank" rel="noopener noreferrer"><strong>About Yuken</strong><span>Discover Yuken's hydraulic engineering and company history.</span><em>Meet Yuken &#8599;</em></a></div></div></div>
            </div>
            <a class="contact-link{{ request()->is('contact') ? ' active' : '' }}" href="{{ url('/contact') }}" @if (request()->is('contact')) aria-current="page" @endif>Contact <span aria-hidden="true">↗</span></a>
        </div>

    </div>
</nav>
