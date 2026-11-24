<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#172477">
    <title>Privacy Policy | PT Sinar Mutiara Cakrabuana</title>
    @include('partials.styles-contact')
    <style>
        :root { --privacy-navy: #172477; --privacy-orange: #f39200; --privacy-ink: #263653; --privacy-muted: #52627a; --privacy-border: #e1e5ea; --privacy-bg: #f4f7fa; }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; scroll-padding-top: 104px; }
        body { margin: 0; color: var(--privacy-ink); background: var(--privacy-bg); font-family: Inter, Arial, system-ui, sans-serif; -webkit-font-smoothing: antialiased; }
        .privacy-hero { min-height: 408px; display: grid; place-items: center; padding: 105px 24px 58px; text-align: center; color: #fff; background: linear-gradient(115deg, #172477 0%, #1c1b78 100%); }
        .privacy-hero-inner { width: min(760px, 100%); }
        .privacy-shield { width: 70px; height: 70px; display: grid; place-items: center; margin: 0 auto 25px; border-radius: 50%; background: rgba(105, 132, 231, .32); }
        .privacy-shield svg { width: 33px; height: 33px; }
        .privacy-hero h1 { margin: 0 0 13px; font-size: clamp(32px, 4vw, 40px); font-weight: 500; letter-spacing: -.025em; }
        .privacy-hero p { max-width: 700px; margin: 0 auto; color: rgba(255,255,255,.84); font-size: 18px; line-height: 1.55; }
        .privacy-updated { display: block; margin-top: 20px; color: #c6d0ff; font-size: 13px; }
        .privacy-main { min-height: 60vh; padding: 42px 22px 72px; background: var(--privacy-bg); }
        .privacy-layout { display: grid; grid-template-columns: 224px minmax(0, 1fr); gap: 42px; width: min(1100px, 100%); margin: 0 auto; align-items: start; }
        .privacy-toc { position: sticky; top: 28px; padding: 20px 12px 16px; border: 1px solid var(--privacy-border); border-radius: 12px; background: #fff; }
        .privacy-toc h2 { margin: 0 9px 13px; font-size: 14px; font-weight: 600; }
        .privacy-toc-list { display: grid; gap: 5px; }
        .privacy-toc a { min-height: 36px; display: flex; align-items: center; gap: 10px; padding: 7px 10px; border-radius: 7px; color: #52627a; font-size: 13px; text-decoration: none; transition: background-color .18s ease, color .18s ease; }
        .privacy-toc a:hover { background: #fff4e3; color: #9b5c00; }
        .privacy-toc a[aria-current="location"] { color: #fff; background: var(--privacy-orange); }
        .privacy-toc svg { width: 16px; height: 16px; flex: 0 0 16px; stroke: currentColor; }
        .privacy-article { min-width: 0; padding: 38px 40px; border: 1px solid var(--privacy-border); border-radius: 12px; background: #fff; box-shadow: 0 3px 14px rgba(24, 45, 79, .035); }
        .privacy-section { scroll-margin-top: 104px; padding: 0 0 28px; margin: 0 0 28px; border-bottom: 1px solid var(--privacy-border); }
        .privacy-section:last-child { padding-bottom: 0; margin-bottom: 0; border-bottom: 0; }
        .privacy-section h2 { display: flex; align-items: center; gap: 12px; margin: 0 0 13px; color: #1d2d49; font-size: 19px; font-weight: 600; line-height: 1.35; }
        .privacy-section h2 svg { width: 20px; height: 20px; flex: 0 0 20px; color: var(--privacy-orange); stroke: currentColor; }
        .privacy-section p, .privacy-section li { color: var(--privacy-muted); font-size: 14px; line-height: 1.7; }
        .privacy-section p { margin: 0 0 12px; }
        .privacy-section p:last-child { margin-bottom: 0; }
        .privacy-section ul { display: grid; gap: 7px; margin: 8px 0 12px; padding-left: 22px; }
        .privacy-section li strong { color: #263653; font-weight: 600; }
        .privacy-contact-card { display: grid; gap: 10px; margin: 17px 0 13px; padding: 19px 20px; border-radius: 10px; background: #f7f8fa; }
        .privacy-contact-card p { margin: 0; overflow-wrap: anywhere; }
        .privacy-contact-card a { color: #203d91; text-decoration-thickness: 1px; text-underline-offset: 2px; }
        @media (max-width: 1023px) {
            .privacy-layout { grid-template-columns: 190px minmax(0, 1fr); gap: 24px; }
            .privacy-article { padding: 30px; }
        }
        @media (max-width: 767px) {
            .privacy-hero { min-height: auto; padding: 105px 20px 48px; }
            .privacy-shield { width: 62px; height: 62px; margin-bottom: 20px; }
            .privacy-hero p { font-size: 15px; }
            .privacy-main { padding: 20px 14px 44px; }
            .privacy-layout { display: flex; flex-direction: column; gap: 16px; }
            .privacy-toc { position: static; width: 100%; padding: 15px 12px 12px; }
            .privacy-toc h2 { margin-bottom: 10px; }
            .privacy-toc-list { display: flex; overflow-x: auto; gap: 6px; padding-bottom: 4px; scrollbar-width: thin; }
            .privacy-toc a { min-width: max-content; }
            .privacy-article { width: 100%; padding: 22px 20px; }
            .privacy-section { padding-bottom: 22px; margin-bottom: 22px; }
            .privacy-section h2 { font-size: 18px; }
        }
        @media (prefers-reduced-motion: reduce) { html { scroll-behavior: auto; } *, *::before, *::after { transition-duration: .01ms !important; } }
    </style>
</head>
<body>
    @include('partials.navbar')
    <header class="privacy-hero">
        <div class="privacy-hero-inner">
            <div class="privacy-shield" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></svg>
            </div>
            <h1>Privacy Policy</h1>
            <p>We are committed to protecting your privacy and being transparent about how information is collected and used when you visit PT Sinar Mutiara Cakrabuana's website.</p>
            <!-- <time class="privacy-updated" datetime="2025-08-01">Last updated: August 1, 2025</time> -->
        </div>
    </header>

    <main class="privacy-main">
        <div class="privacy-layout">
            <nav class="privacy-toc" aria-label="Privacy policy sections">
                <h2>Quick Navigation</h2>
                <div class="privacy-toc-list">
                    <a href="#introduction" aria-current="location"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h8"/></svg><span>Introduction</span></a>
                    <a href="#data-collection"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.7 4 3 9 3s9-1.3 9-3V5M3 12c0 1.7 4 3 9 3s9-1.3 9-3"/></svg><span>Data Collection</span></a>
                    <a href="#use-of-data"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="m19.4 15 .1.1 1.4 1.1-1.4 2.4-1.7-.7a8 8 0 0 1-1.5.9L16 20.5h-2.8l-.4-1.8a8 8 0 0 1-1.7 0l-.4 1.8H8l-.3-1.7a8 8 0 0 1-1.5-.9l-1.7.7-1.4-2.4 1.4-1.1a8 8 0 0 1-.2-1.8l-1.5-1v-2.8l1.7-.4a8 8 0 0 1 .8-1.5l-.7-1.7 2.4-1.4 1.1 1.4a8 8 0 0 1 1.8-.2l1-1.5h2.8l.4 1.7a8 8 0 0 1 1.5.8l1.7-.7 1.4 2.4-1.4 1.1a8 8 0 0 1 .2 1.8l1.5 1v2.8l-1.7.4a8 8 0 0 1-.4 1.4Z"/></svg><span>Use of Data</span></a>
                    <a href="#cookies"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/></svg><span>Cookies</span></a>
                    <a href="#third-parties"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></svg><span>Third-party Services</span></a>
                    <a href="#your-rights"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM16 11l2 2 4-4"/></svg><span>Your Rights</span></a>
                    <a href="#contact-us"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg><span>Contact Us</span></a>
                </div>
            </nav>

            <article class="privacy-article" aria-label="Privacy Policy">
                <section class="privacy-section" id="introduction">
                    <h2><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h8"/></svg>Introduction</h2>
                    <p>This Privacy Policy explains how PT Sinar Mutiara Cakrabuana collects, uses, and safeguards information when you visit this website or contact us about our products and services.</p>
                </section>

                <section class="privacy-section" id="data-collection">
                    <h2><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5v14c0 1.7 4 3 9 3s9-1.3 9-3V5M3 12c0 1.7 4 3 9 3s9-1.3 9-3"/></svg>Data Collection</h2>
                    <p>When you contact us or submit information through this website, we may collect personal information such as:</p>
                    <ul>
                        <li><strong>Contact details:</strong> name, email address, and phone number.</li>
                        <li><strong>Business details:</strong> company name and address.</li>
                        <li><strong>Technical information:</strong> browser type, pages visited, and device information.</li>
                    </ul>
                    <p>We use technical information to understand how visitors use the website.</p>
                </section>

                <section class="privacy-section" id="use-of-data">
                    <h2><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="m19.4 15 .1.1 1.4 1.1-1.4 2.4-1.7-.7a8 8 0 0 1-1.5.9L16 20.5h-2.8l-.4-1.8a8 8 0 0 1-1.7 0l-.4 1.8H8l-.3-1.7a8 8 0 0 1-1.5-.9l-1.7.7-1.4-2.4 1.4-1.1a8 8 0 0 1-.2-1.8l-1.5-1v-2.8l1.7-.4a8 8 0 0 1 .8-1.5l-.7-1.7 2.4-1.4 1.1 1.4a8 8 0 0 1 1.8-.2l1-1.5h2.8l.4 1.7a8 8 0 0 1 1.5.8l1.7-.7 1.4 2.4-1.4 1.1a8 8 0 0 1 .2 1.8l1.5 1v2.8l-1.7.4a8 8 0 0 1-.4 1.4Z"/></svg>Use of Data</h2>
                    <p>Information you provide is used to respond to inquiries, provide information about our products and services, improve the website, and comply with legal obligations.</p>
                    <p>We do not sell your personal data to third parties.</p>
                </section>

                <section class="privacy-section" id="cookies">
                    <h2><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20"/></svg>Cookies and Tracking</h2>
                    <p>This website may use cookies to support basic website functions. You can control cookie settings through your browser. The cache notice stores your acknowledgment in your browser's local storage; this is separate from the site's performance cache, which temporarily stores catalog data and static assets to help pages load faster.</p>
                    <p>The performance cache stores website content and assets, not information you submit through contact forms.</p>
                </section>

                <section class="privacy-section" id="third-parties">
                    <h2><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z"/><path d="m9 12 2 2 4-4"/></svg>Third-party Services</h2>
                    <p>The Contact page includes an embedded Google Maps map to show our office location. When you view that page, Google may process information according to its own privacy policy and settings.</p>
                </section>

                <section class="privacy-section" id="your-rights">
                    <h2><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2M10 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM16 11l2 2 4-4"/></svg>Your Rights</h2>
                    <p>You may contact us to request:</p>
                    <ul>
                        <li><strong>Access:</strong> access to personal data you have provided to us.</li>
                        <li><strong>Correction:</strong> correction of inaccurate or incomplete personal data.</li>
                        <li><strong>Deletion:</strong> deletion of your personal data, where applicable.</li>
                    </ul>
                    <p>To make a request, please use the contact information below.</p>
                </section>

                <section class="privacy-section" id="contact-us">
                    <h2><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>Contact Us</h2>
                    <p>If you have questions about this Privacy Policy or your personal information, contact PT Sinar Mutiara Cakrabuana:</p>
                    <div class="privacy-contact-card">
                        <p><strong>Email:</strong> <a href="mailto:suminoue@riyadi.co.id">suminoue@riyadi.co.id</a></p>
                        <p><strong>Phone:</strong> <a href="tel:+62216308525">+62 21 - 630 8525</a></p>
                        <p><strong>Address:</strong> Wisma 47, Jl Cideng Barat No. 46D–47, Jakarta Pusat 10150, Indonesia</p>
                        <p><strong>Business Hours:</strong> Monday–Friday, 08:00–17:00 WIB</p>
                    </div>
                </section>
            </article>
        </div>
    </main>

    <footer class="site-footer">
        <div class="footer-inner">
            <div class="footer-brand"><img class="footer-logo" src="{{ asset('images/smc-logo.png') }}" alt="PT Sinar Mutiara Cakrabuana"><p class="footer-address">Wisma 47, Jl Cideng Barat No.46D - 47<br>Kel. Cideng, Kec. Gambir<br>Jakarta Pusat 10150 - Indonesia<br><br>+62 21 - 630 8525<br>suminoue@riyadi.co.id</p></div>
            <div><h2 class="footer-heading">Product</h2><ul class="footer-list"><li><a href="{{ url('/#products') }}">Flow Control</a></li><li><a href="{{ url('/#products') }}">Linear Servo Valves</a></li><li><a href="{{ url('/#products') }}">Modules</a></li><li><a href="{{ url('/#products') }}">Pressure Control Valves</a></li></ul></div>
            <div><h2 class="footer-heading">Company</h2><ul class="footer-list"><li><a href="https://group.riyadi.co.id/about">About Riyadi Group</a></li><li><a href="https://www.yuken.co.jp/en/corp/info">About Yuken</a></li><li><a href="https://www.yuken.co.jp/en/">Product Catalog</a></li><li><a href="{{ url('/contact') }}">Contact us</a></li></ul></div>
            <div><h2 class="footer-heading">Get in touch</h2><ul class="footer-list"><li><a href="mailto:suminoue@riyadi.co.id">suminoue@riyadi.co.id</a></li><li>Monday–Friday</li><li>08.00 AM - 05.00 PM</li></ul></div>
        </div>
        <div class="footer-bottom"><div class="footer-bottom-inner"><p>© 2026 Sinar Mutiara Cakrabuana. Yuken Distributor in Indonesia.</p><div class="footer-meta"><a href="{{ url('/privacy') }}">Privacy policy</a><a href="{{ url('/privacy') }}">Terms &amp; conditions</a></div></div></div>
    </footer>
    @include('partials.scripts')
    <script>
        (() => {
            const links = [...document.querySelectorAll('.privacy-toc a')];
            const sections = links.map(link => document.querySelector(link.getAttribute('href'))).filter(Boolean);
            const setActive = id => links.forEach(link => {
                if (link.hash === `#${id}`) link.setAttribute('aria-current', 'location');
                else link.removeAttribute('aria-current');
            });
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver(entries => {
                    const visible = entries.filter(entry => entry.isIntersecting).sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
                    if (visible) setActive(visible.target.id);
                }, { rootMargin: '-18% 0px -68% 0px', threshold: [0, .1, .3, .6] });
                sections.forEach(section => observer.observe(section));
            }
            links.forEach(link => link.addEventListener('click', () => setActive(link.hash.slice(1))));
        })();
    </script>
</body>
</html>
