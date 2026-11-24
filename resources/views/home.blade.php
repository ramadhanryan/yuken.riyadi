<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#102b5c">
    <title>PT Sinar Mutiara Cakrabuana | Yuken Indonesia</title>
    @include('partials.styles')
</head>
<body>
    @include('partials.navbar')

    <main>
        <section class="hero" id="home" aria-labelledby="hero-title">
            <div class="hero-inner">
                <div class="eyebrow">Official Yuken distributor in Indonesia</div>
                <h1 id="hero-title">JAPANESE PRECISION <span>WE ARE YUKEN</span></h1>
                <p class="intro">PT Sinar Mutiara Cakrabuana supplies Yuken hydraulic pumps, valves, and equipment across Indonesia. Since 2018, we have supported industry with Japanese precision and the experience of Riyadi Group.</p>
                <div class="hero-actions">
                    <a class="button" href="#products">Explore our products <span aria-hidden="true">→</span></a>
                    <!-- <span class="since">Trusted hydraulic solutions since 2018</span> -->
                </div>
            </div>
        </section>
        <section class="products-section" id="products" aria-labelledby="products-title">
            <div class="products-inner">
                <div class="products-heading">
                    <div>
                        <p class="products-kicker">The full collection</p>
                        <h2 class="products-title" id="products-title">Our Product</h2>
                    </div>
                    <p class="products-description">Explore Yuken hydraulic components engineered for precise control, dependable performance, and demanding industrial applications.</p>
                </div>
                <div class="product-grid">
                    @php
                        $products = [
                            ['name' => 'Linear Servo Valves', 'image' => 'yuk-linear-servo-valves.jpg', 'type' => 'Hydraulic equipment'],
                            ['name' => 'Hydraulics Cylinders', 'image' => 'yuk-hydraulics-cylinders.jpg', 'type' => 'Hydraulic equipment'],
                            ['name' => 'Flow Controls', 'image' => 'yuk-flow-control.jpg', 'type' => 'Hydraulic equipment'],
                            ['name' => 'Modules', 'image' => 'yuk-modules.jpg', 'type' => 'Hydraulic equipment'],
                            ['name' => 'Pressure Control Valves', 'image' => 'yuk-pressure-control-valve.jpg', 'type' => 'Hydraulic equipment'],
                            ['name' => 'Pumps', 'image' => 'yuk-pumps.jpg', 'type' => 'Hydraulic equipment'],
                            ['name' => 'Solenoid Valves', 'image' => 'yuk-solenoid-valves.jpg', 'type' => 'Hydraulic equipment'],
                        ];
                    @endphp
                    @foreach ($products as $product)
                        <a class="product-card" id="product-{{ \Illuminate\Support\Str::slug($product['name']) }}" href="https://www.yuken.co.jp/en/" target="_blank" rel="noopener noreferrer" aria-label="View {{ $product['name'] }} on Yuken's official website">
                            <div class="product-image-wrap">
                                <img class="product-image" src="{{ asset('images/' . $product['image']) }}" alt="Yuken {{ $product['name'] }}" loading="lazy">
                            </div>
                            <div class="product-info">
                                <p class="product-type">{{ $product['type'] }}</p>
                                <h3 class="product-name">{{ $product['name'] }}</h3>
                                <span class="product-link">View product <span aria-hidden="true">→</span></span>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a class="product-catalog-link" href="https://www.yuken.co.jp/en/" target="_blank" rel="noopener noreferrer">Visit the Yuken product catalog <span aria-hidden="true">↗</span></a>
            </div>
        </section>

        <section class="applications-section" id="applications" aria-labelledby="applications-title">
            <div class="applications-inner">
                <div class="applications-heading">
                    <div>
                        <p class="applications-kicker">Good to know</p>
                        <h2 class="applications-title" id="applications-title">Application</h2>
                    </div>
                    <p class="applications-description">Need something more specific? Our team is happy to help.</p>
                </div>
                <div class="slider-wrap">
                    <button class="slider-btn prev" type="button" aria-label="Previous applications">&#8249;</button>
                    <div class="slider-track" id="appTrack">
                        @php
                            $applications = [
                                ['name' => 'Automotive Transportation', 'image' => 'Automotive Transportation.webp'],
                                ['name' => 'Construction & Earth-moving Equipment', 'image' => 'Construction&Earth-movingEquipment.webp'],
                                ['name' => 'Industrial Robots', 'image' => 'IndustrialRobotos.webp'],
                                ['name' => 'Machine Tools', 'image' => 'machine-tools.webp'],
                                ['name' => 'Manufacturing Machinery', 'image' => 'ManufacturingMachinery.webp'],
                                ['name' => 'Plastic Processing and Forming Machinery', 'image' => 'plastic-processing.webp'],
                                ['name' => 'Power Generation', 'image' => 'PowerGeneration.webp'],
                                ['name' => 'Steel Plant Equipment', 'image' => 'steel-plant-equipment.webp'],
                            ];
                        @endphp
                        @foreach ($applications as $app)
                            <div class="app-slide">
                                <img src="{{ asset('images/' . $app['image']) }}" alt="{{ $app['name'] }}" loading="lazy">
                                <span class="app-label">{{ $app['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                    <button class="slider-btn next" type="button" aria-label="Next applications">&#8250;</button>
                </div>
            </div>
        </section>
    </main>
        <section class="inquiry-section" id="contact" aria-labelledby="inquiry-title">
            <div class="inquiry-inner">
                <div class="inquiry-heading">
                    <p class="inquiry-kicker">Let's find your fit</p>
                    <h2 class="inquiry-title" id="inquiry-title">A better space starts with a conversation.</h2>
                    <p class="inquiry-description">One product or a whole workspace? Tell us what you have in mind. We'll help you explore your options.</p>
                    <p class="inquiry-subtext">✉ marketing.event@riyadi.co.id</p>
                    <p class="inquiry-subtext">Our team replies within 2 business days.</p>
                </div>
                <form class="inquiry-form">
                    <div class="form-field">
                        <label class="form-label">Your name <span style="color:#b00020;">*</span></label>
                        <input class="form-input" type="text" name="name" placeholder="" required>
                    </div>
                    <div class="form-field">
                        <label class="form-label">Email address <span style="color:#b00020;">*</span></label>
                        <input class="form-input" type="email" name="email" placeholder="" required>
                    </div>
                    <!-- <div class="form-field full">
                        <label class="form-label">Products you're interested in</label>
                        <input class="form-input" type="text" name="products" placeholder="e.g. Linea desk, Ease task chair">
                    </div> -->
                    <div class="form-field full">
                        <label class="form-label">Message <span style="color:#b00020;">*</span></label>
                        <textarea class="form-textarea" name="message" placeholder="" required></textarea>
                    </div>
                    <p class="form-note">We'll only use your details to respond to your inquiry. Read our privacy policy.</p>
                    <button class="form-submit" type="submit">Send inquiry <span aria-hidden="true">→</span></button>
                </form>
            </div>
        </section>

        <footer class="site-footer">
            <div class="footer-inner">
                <div class="footer-brand">
                    <div class="footer-logos">
                        <img class="footer-logo-smc" src="{{ asset('images/smc-logo.png') }}" alt="SMC — PT Sinar Mutiara Cakrabuana">
                        </div>
                    <!-- <p class="footer-text">PT Sinar Mutiara Cakrabuana Automation & Industrial Equipment</p> -->
                    <p class="footer-text">Wisma 47, Jl Cideng Barat No.46D - 47<br>Kel. Cideng, Kec. Gambir<br>Jakarta Pusat 10150 - Indonesia</p>
                </div>
                <div class="footer-product">
                    <p class="footer-heading">Product</p>
                    <ul class="footer-list">
                        <li><a href="#products">Flow Control</a></li>
                        <li><a href="#products">Linear Servo Valves</a></li>
                        <li><a href="#products">Modules</a></li>
                        <li><a href="#products">Pressure</a></li>
                        <li><a href="#products">Control Valves</a></li>
                    </ul>
                </div>
                <div class="footer-company">
                    <p class="footer-heading">Company</p>
                    <ul class="footer-list">
                        <li><a href="#">About Riyadi Group</a></li>
                        <li><a href="#">About Yuken</a></li>
                        <li><a href="#">Product Catalog</a></li>
                        <li><a href="#contact">Contact us</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <p class="footer-heading">Get in touch</p>
                    <div class="footer-contact-item">
                        <span class="footer-contact-label">Email</span>
                        <span class="footer-contact-value">suminoue@riyadi.co.id</span>
                    </div>
                    <div class="footer-contact-item">
                        <span class="footer-contact-label">Hours</span>
                        <span class="footer-contact-value">Monday-Friday 08.00 AM - 05.00 PM</span>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-inner">
                    <p class="footer-copy">© 2026 Sinar Mutiara Cakrabuana. Yuken Distributor in Indonesia.</p>
                    <div class="footer-meta">
                        <a href="{{ url('/privacy') }}">Privacy policy</a>
                        <a href="{{ url('/privacy') }}">Terms &amp; conditions</a>
                    </div>
                </div>
            </div>
        </footer>

    @include('partials.scripts')
    </body>
</html>
