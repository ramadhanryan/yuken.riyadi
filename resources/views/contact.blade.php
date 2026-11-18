<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#203d91">
    <title>Contact Us | PT Sinar Mutiara Cakrabuana</title>
   @include('partials.styles-contact')
</head>
<body>
    @include('partials.navbar')
    <main>
        <section class="page-banner" aria-labelledby="page-title"><h1 id="page-title">Contact Us</h1></section>
        <nav class="breadcrumb" aria-label="Breadcrumb"><div class="breadcrumb-inner"><a href="{{ url('/') }}">Home</a><span aria-hidden="true">›</span><span class="current" aria-current="page">Contact Us</span></div></nav>
        <section class="contact-section" aria-label="Office contact details and location">
            <div class="contact-card">
                <div class="contact-details">
                    <h2>Office</h2>
                    <div class="title-rule" aria-hidden="true"></div>
                    <div class="detail-group"><strong>WISMA 47</strong><address>Jl Cideng Barat No.46D - 47<br>Jakarta Pusat 10150 - Indonesia</address></div>
                    <div class="detail-group"><strong>Phone</strong><a href="tel:+62216308525">+62 21 - 630 8525</a></div>
                    <div class="detail-group"><strong>Email</strong><a href="mailto:suminoue@riyadi.co.id">suminoue@riyadi.co.id</a></div>
                    <div class="detail-group"><strong>Working Hours:</strong><span>Mon-Fri (08.00 AM - 05.00 PM)</span></div>
                </div>
                <iframe class="map-frame" title="Map showing Wisma 47, Jakarta" src="https://maps.google.com/maps?q=Wisma%2047%20Jl%20Cideng%20Barat%20Jakarta&t=&z=16&ie=UTF8&iwloc=&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
        </section>
    </main>
    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-brand"><img class="footer-logo" src="{{ asset('images/smc-logo.png') }}" alt="PT Sinar Mutiara Cakrabuana"><p class="footer-address">Wisma 47, Jl Cideng Barat No.46D - 47<br>Kel. Cideng, Kec. Gambir<br>Jakarta Pusat 10150 - Indonesia<br><br>+62 21 - 630 8525<br>suminoue@riyadi.co.id</p></div>
            <div><h2 class="footer-heading">Product</h2><ul class="footer-list"><li><a href="{{ url('/#products') }}">Flow Control</a></li><li><a href="{{ url('/#products') }}">Linear Servo Valves</a></li><li><a href="{{ url('/#products') }}">Modules</a></li><li><a href="{{ url('/#products') }}">Pressure Control Valves</a></li></ul></div>
            <div><h2 class="footer-heading">Company</h2><ul class="footer-list"><li><a href="https://group.riyadi.co.id/about">About Riyadi Group</a></li><li><a href="https://www.yuken.co.jp/en/corp/info">About Yuken</a></li><li><a href="https://www.yuken.co.jp/en/">Product Catalog</a></li><li><a href="{{ url('/contact') }}">Contact us</a></li></ul></div>
            <div><h2 class="footer-heading">Get in touch</h2><ul class="footer-list"><li><a href="mailto:suminoue@riyadi.co.id">suminoue@riyadi.co.id</a></li><li>Monday–Friday</li><li>08.00 AM - 05.00 PM</li></ul></div>
        </div>
        <div class="footer-bottom"><div class="footer-bottom-inner"><p>© 2026 Sinar Mutiara Cakrabuana. Yuken Distributor in Indonesia.</p><div class="footer-meta"><a href="#">Privacy policy</a><a href="#">Terms &amp; conditions</a></div></div></div>
    </footer>
    @include('partials.scripts')
</body>
</html>
