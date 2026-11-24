<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#172d65">
    <title>{{ $product->name }} | Yuken</title>
    @include('partials.styles-product')
    <style>
        .cjt-hero { margin-top: 78px; padding: 58px 24px; color: #fff; background: linear-gradient(120deg,#172d65,#2948a2 58%,#4f75c7); }
        .cjt-hero-inner { display: grid; grid-template-columns: minmax(0,1fr) minmax(320px,.82fr); align-items: center; gap: clamp(36px,7vw,100px); width: min(1180px,100%); margin: auto; }
        .cjt-kicker { margin: 0 0 14px; color: #c5d9ff; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
        .cjt-title { margin: 0; font-size: clamp(40px,5.7vw,64px); line-height: 1.03; letter-spacing: -.05em; }
        .cjt-intro { max-width: 600px; margin: 20px 0 0; color: #e0eaff; font-size: 16px; line-height: 1.75; }
        .cjt-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin: 26px 0 0; padding: 0; list-style: none; }
        .cjt-highlights li { padding: 9px 12px; border: 1px solid rgba(255,255,255,.24); border-radius: 3px; color: #fff; font-size: 12px; }
        .cjt-visual { display: grid; min-height: 285px; place-items: center; overflow: hidden; border: 1px solid rgba(255,255,255,.55); border-radius: 14px; background: #fff; box-shadow: 0 22px 55px rgba(6,20,55,.2); }
        .cjt-visual img { display: block; width: 100%; height: 285px; object-fit: contain; }
        .cjt-main { padding: 62px 0 92px; background: #f4f6f8; }
        .cjt-content { width: min(1180px,calc(100% - 48px)); margin: auto; }
        .cjt-back { margin: 0 0 30px; }
        .cjt-back a { color: #1769c2; font-size: 13px; font-weight: 700; text-decoration: none; }
        .cjt-heading { margin-bottom: 23px; }
        .cjt-heading h2 { margin: 0; color: #142945; font-size: clamp(28px,3.5vw,40px); letter-spacing: -.035em; }
        .cjt-heading p { max-width: 760px; margin: 10px 0 0; color: #637287; font-size: 14px; line-height: 1.65; }
        .cjt-grid { display: grid; grid-template-columns: minmax(0,1.3fr) minmax(250px,.7fr); gap: 18px; align-items: start; }
        .cjt-panel { padding: 24px; border: 1px solid #e1e7ee; border-radius: 5px; background: #fff; box-shadow: 0 12px 28px rgba(30,47,73,.045); }
        .cjt-panel h3 { margin: 0 0 18px; color: #1c3762; font-size: 17px; }
        .cjt-table { width: 100%; border-collapse: collapse; font-size: 13px; }
        .cjt-table th, .cjt-table td { padding: 11px 9px; border-bottom: 1px solid #e9edf2; text-align: left; vertical-align: top; }
        .cjt-table th { width: 58%; color: #596b82; font-weight: 600; }
        .cjt-table td { color: #263b57; }
        .cjt-config { overflow-wrap: anywhere; font-weight: 700; }
        .cjt-bore-list { display: flex; flex-wrap: wrap; gap: 7px; }
        .cjt-bore-list span { padding: 5px 8px; border: 1px solid #dce4ed; border-radius: 3px; color: #30445e; font-size: 12px; }
        .cjt-mount-list { color: #263b57; line-height: 1.8; }
        .cjt-notes { display: grid; gap: 10px; margin-top: 18px; padding: 17px 19px; border-left: 3px solid #d69b2d; background: #fff8ea; }
        .cjt-notes p { margin: 0; color: #705b35; font-size: 12px; line-height: 1.65; }
        @media (max-width: 760px) {
            .cjt-hero { padding: 42px 18px; }
            .cjt-hero-inner { grid-template-columns: 1fr; gap: 28px; }
            .cjt-visual, .cjt-visual img { min-height: 210px; height: 210px; }
            .cjt-main { padding: 42px 0 66px; }
            .cjt-content { width: calc(100% - 32px); }
            .cjt-grid { grid-template-columns: 1fr; }
            .cjt-panel { padding: 17px; }
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    @php($cjtVariant = $product->variants->first())
    @php($cjtSpecs = $cjtVariant?->specs ?? [])
    <header class="cjt-hero">
        <div class="cjt-hero-inner">
            <div>
                <p class="cjt-kicker">Yuken hydraulic cylinders</p>
                <h1 class="cjt-title">{{ $product->name }}</h1>
                <p class="cjt-intro">{{ $product->description }}</p>
                <ul class="cjt-highlights">
                    <li>3.5 MPa nominal pressure</li>
                    <li>8 bore sizes</li>
                    <li>8–300 mm/s operating speed</li>
                </ul>
            </div>
            <div class="cjt-visual"><img src="{{ asset($product->image) }}" alt="Yuken CJT 3.5 MPa series hydraulic cylinder"></div>
        </div>
    </header>
    <main class="product-content">
        <section class="cjt-main">
            <div class="cjt-content">
                <p class="cjt-back"><a href="{{ route('products.index', ['category' => 'hydraulic-cylinders']) }}">← Back to hydraulic cylinders</a></p>
                <div class="cjt-heading">
                    <p class="product-section-kicker">CJT-35 product data</p>
                    <h2>Specifications</h2>
                    <p>Model configuration, pressure limits, speed range, and maximum stroke values from the CJT-35 sheet.</p>
                </div>
                <div class="cjt-grid">
                    <section class="cjt-panel" aria-labelledby="cjt-operating-title">
                        <h3 id="cjt-operating-title">Operating specifications</h3>
                        <table class="cjt-table"><tbody>
                            <tr><th scope="row">Model number pattern</th><td class="cjt-config">{{ $cjtVariant->model_code }}</td></tr>
                            <tr><th scope="row">Cylinder bore sizes</th><td><div class="cjt-bore-list">@foreach ($cjtSpecs['Cylinder bore sizes (mm)'] ?? [] as $bore)<span>{{ $bore }} mm</span>@endforeach</div></td></tr>
                            <tr><th scope="row">Mounting types</th><td class="cjt-mount-list">{{ implode(', ', $cjtSpecs['Mounting types'] ?? []) }}</td></tr>
                            <tr><th scope="row">Nominal pressure</th><td>{{ $cjtSpecs['Nominal pressure (MPa)'] ?? '—' }} MPa</td></tr>
                            <tr><th scope="row">Maximum allowable pressure</th><td>{{ $cjtSpecs['Maximum allowable pressure (MPa)'] ?? '—' }} MPa</td></tr>
                            <tr><th scope="row">Proof test pressure</th><td>{{ number_format((float) ($cjtSpecs['Proof test pressure (MPa)'] ?? 0), 1) }} MPa</td></tr>
                            <tr><th scope="row">Minimum working pressure</th><td>{{ number_format((float) ($cjtSpecs['Minimum working pressure (MPa)'] ?? 0), 1) }} MPa</td></tr>
                            <tr><th scope="row">Operating speed range</th><td>{{ $cjtSpecs['Minimum operating speed (mm/s)'] ?? '—' }}–{{ $cjtSpecs['Maximum operating speed (mm/s)'] ?? '—' }} mm/s</td></tr>
                            <tr><th scope="row">Ambient temperature range</th><td>{{ $cjtSpecs['Ambient temperature range'] ?? '—' }}</td></tr>
                            <tr><th scope="row">Thread tolerance</th><td>{{ $cjtSpecs['Thread tolerance'] ?? '—' }}</td></tr>
                            <tr><th scope="row">Applicable standard</th><td>{{ $cjtSpecs['Applicable standard'] ?? '—' }}</td></tr>
                        </tbody></table>
                    </section>
                    <section class="cjt-panel" aria-labelledby="cjt-stroke-title">
                        <h3 id="cjt-stroke-title">Maximum stroke by bore</h3>
                        <table class="cjt-table"><thead><tr><th scope="col">Cylinder bore</th><th scope="col">Maximum stroke</th></tr></thead><tbody>
                            @foreach ($cjtSpecs['Maximum stroke by bore (mm)'] ?? [] as $bore => $stroke)
                                <tr><th scope="row">{{ $bore }} mm</th><td>{{ $stroke }} mm</td></tr>
                            @endforeach
                        </tbody></table>
                        <p class="cjt-notes" style="display:block"><span>Stroke tolerance: {{ $cjtSpecs['Stroke tolerance'] ?? 'Refer to manufacturer documentation.' }}</span></p>
                    </section>
                </div>
                <div class="cjt-notes" aria-label="Operating notes">
                    <p>Consult Yuken before operating above rated pressure because operating conditions are restricted.</p>
                    <p>The workbook lists this specification for the CJT 3.5 MPa series. Confirm suitability for the intended fluid and operating conditions with the manufacturer.</p>
                </div>
            </div>
        </section>
    </main>
    <footer class="site-footer"><div class="footer-bottom"><div class="footer-bottom-inner"><p>© 2026 Sinar Mutiara Cakrabuana</p><a href="{{ route('products.index') }}">Product catalogue</a></div></div></footer>
    @include('partials.scripts')
</body>
</html>