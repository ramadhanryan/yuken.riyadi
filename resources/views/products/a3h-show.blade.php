<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#172d65">
    <title>{{ $product->name }} | Yuken</title>
    @include('partials.styles-product')
    <style>
        .a3h-hero { margin-top: 78px; padding: 58px 24px; color: #fff; background: linear-gradient(120deg,#172d65,#2948a2 58%,#4f75c7); }
        .a3h-hero-inner { display: grid; grid-template-columns: minmax(0,1fr) minmax(320px,.82fr); align-items: center; gap: clamp(36px,7vw,100px); width: min(1180px,100%); margin: auto; }
        .a3h-kicker { margin: 0 0 14px; color: #c5d9ff; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
        .a3h-title { margin: 0; font-size: clamp(42px,6vw,68px); line-height: 1; letter-spacing: -.055em; }
        .a3h-intro { max-width: 590px; margin: 20px 0 0; color: #e0eaff; font-size: 16px; line-height: 1.75; }
        .a3h-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin: 26px 0 0; padding: 0; list-style: none; }
        .a3h-highlights li { padding: 9px 12px; border: 1px solid rgba(255,255,255,.24); border-radius: 3px; color: #fff; font-size: 12px; }
        .a3h-visual { display: grid; min-height: 285px; place-items: center; overflow: hidden; border: 1px solid rgba(255,255,255,.55); border-radius: 14px; background: #fff; box-shadow: 0 22px 55px rgba(6,20,55,.2); }
        .a3h-visual img { display: block; width: 100%; height: 285px; object-fit: contain; }
        .a3h-main { padding: 62px 0 92px; background: #f4f6f8; }
        .a3h-content { width: min(1180px,calc(100% - 48px)); margin: auto; }
        .a3h-back { margin: 0 0 30px; }
        .a3h-back a { color: #1769c2; font-size: 13px; font-weight: 700; text-decoration: none; }
        .a3h-heading { margin-bottom: 23px; }
        .a3h-heading h2 { margin: 0; color: #142945; font-size: clamp(28px,3.5vw,40px); letter-spacing: -.035em; }
        .a3h-heading p { max-width: 760px; margin: 10px 0 0; color: #637287; font-size: 14px; line-height: 1.65; }
        .a3h-panel { padding: 24px; border: 1px solid #e1e7ee; border-radius: 5px; background: #fff; box-shadow: 0 12px 28px rgba(30,47,73,.045); }
        .a3h-table-wrap { overflow-x: auto; }
        .a3h-table { width: 100%; min-width: 900px; border-collapse: collapse; font-size: 13px; }
        .a3h-table th, .a3h-table td { padding: 13px 11px; border-bottom: 1px solid #e9edf2; text-align: left; vertical-align: top; }
        .a3h-table thead th { color: #53647c; background: #f6f8fb; font-size: 11px; font-weight: 700; letter-spacing: .025em; }
        .a3h-table tbody th { color: #1c3762; font-weight: 700; white-space: nowrap; }
        .a3h-table tbody td { color: #52627a; white-space: nowrap; }
        .a3h-notes { display: grid; gap: 10px; margin-top: 18px; padding: 17px 19px; border-left: 3px solid #d69b2d; background: #fff8ea; }
        .a3h-notes p { margin: 0; color: #705b35; font-size: 12px; line-height: 1.65; }
        @media (max-width: 760px) {
            .a3h-hero { padding: 42px 18px; }
            .a3h-hero-inner { grid-template-columns: 1fr; gap: 28px; }
            .a3h-visual, .a3h-visual img { min-height: 210px; height: 210px; }
            .a3h-main { padding: 42px 0 66px; }
            .a3h-content { width: calc(100% - 32px); }
            .a3h-panel { padding: 15px; }
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    @php($a3hVariants = $product->variants->sortBy('model_code', SORT_NATURAL | SORT_FLAG_CASE)->values())
    <header class="a3h-hero">
        <div class="a3h-hero-inner">
            <div>
                <p class="a3h-kicker">Yuken pump series</p>
                <h1 class="a3h-title">{{ $product->name }}</h1>
                <p class="a3h-intro">{{ $product->description }}</p>
                <ul class="a3h-highlights">
                    <li>{{ $a3hVariants->count() }} model sizes</li>
                    <li>16.3–180.7 cm³/rev displacement</li>
                    <li>28 MPa rated pressure</li>
                </ul>
            </div>
            <div class="a3h-visual"><img src="{{ asset($product->image) }}" alt="Yuken A3H pump"></div>
        </div>
    </header>
    <main class="product-content">
        <section class="a3h-main">
            <div class="a3h-content">
                <p class="a3h-back"><a href="{{ route('products.index', ['category' => 'pumps']) }}">← Back to pump products</a></p>
                <div class="a3h-heading">
                    <p class="product-section-kicker">Model comparison</p>
                    <h2>A3H series specifications</h2>
                    <p>Compare displacement, pressure, shaft speed, and mounting mass for the seven model sizes listed in the workbook.</p>
                </div>
                <div class="a3h-panel">
                    <div class="a3h-table-wrap">
                        <table class="a3h-table">
                            <thead>
                                <tr><th scope="col">Model number</th><th scope="col">Geometric displacement<br>(cm³/rev)</th><th scope="col">Minimum adjusted flow<br>(cm³/rev)</th><th scope="col">Rated pressure<br>(MPa)</th><th scope="col">Intermittent pressure<br>(MPa)</th><th scope="col">Max shaft speed<br>(r/min)</th><th scope="col">Min shaft speed<br>(r/min)</th><th scope="col">Flange mount mass<br>(kg)</th><th scope="col">Foot mount mass<br>(kg)</th></tr>
                            </thead>
                            <tbody>
                            @foreach ($a3hVariants as $variant)
                                @php($spec = $variant->specs ?? [])
                                <tr>
                                    <th scope="row">{{ $variant->model_code }}</th>
                                    <td>{{ $spec['Geometric displacement (cm³/rev)'] ?? '—' }}</td>
                                    <td>{{ number_format((float) ($spec['Minimum adjusted flow (cm³/rev)'] ?? 0), 1) }}</td>
                                    <td>{{ $spec['Rated operating pressure (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Intermittent operating pressure (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Maximum shaft speed (r/min)'] ?? '—' }}</td>
                                    <td>{{ $spec['Minimum shaft speed (r/min)'] ?? '—' }}</td>
                                    <td>{{ number_format((float) ($spec['Approx. mass, flange mounting (kg)'] ?? 0), 1) }}</td>
                                    <td>{{ number_format((float) ($spec['Approx. mass, foot mounting (kg)'] ?? 0), 1) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="a3h-notes" aria-label="Operating notes">
                        <p>The maximum shaft speeds shown are specified at a suction pressure of 0 kPa.</p>
                        <p>Specifications shown are for petroleum-based oils. Pumps for special fluids are available, but operating pressure, maximum speed, temperature, and viscosity ranges may vary by fluid.</p>
                        <p>Consult Yuken when operating above rated pressure because operating conditions are restricted. The ＊ symbol is shown as in the workbook model numbers.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="site-footer"><div class="footer-bottom"><div class="footer-bottom-inner"><p>© 2026 Sinar Mutiara Cakrabuana</p><a href="{{ route('products.index') }}">Product catalogue</a></div></div></footer>
    @include('partials.scripts')
</body>
</html>