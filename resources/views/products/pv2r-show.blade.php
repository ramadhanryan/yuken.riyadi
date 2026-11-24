<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#172d65">
    <title>{{ $product->name }} | Yuken</title>
    @include('partials.styles-product')
    <style>
        .pv2r-hero { margin-top: 78px; padding: 58px 24px; color: #fff; background: linear-gradient(120deg,#172d65,#2948a2 58%,#4f75c7); }
        .pv2r-hero-inner { display: grid; grid-template-columns: minmax(0,1fr) minmax(320px,.82fr); align-items: center; gap: clamp(36px,7vw,100px); width: min(1180px,100%); margin: auto; }
        .pv2r-kicker { margin: 0 0 14px; color: #c5d9ff; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
        .pv2r-title { margin: 0; font-size: clamp(42px,6vw,68px); line-height: 1; letter-spacing: -.055em; }
        .pv2r-intro { max-width: 600px; margin: 20px 0 0; color: #e0eaff; font-size: 16px; line-height: 1.75; }
        .pv2r-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin: 26px 0 0; padding: 0; list-style: none; }
        .pv2r-highlights li { padding: 9px 12px; border: 1px solid rgba(255,255,255,.24); border-radius: 3px; color: #fff; font-size: 12px; }
        .pv2r-visual { display: grid; min-height: 285px; place-items: center; overflow: hidden; border: 1px solid rgba(255,255,255,.55); border-radius: 14px; background: #fff; box-shadow: 0 22px 55px rgba(6,20,55,.2); }
        .pv2r-visual img { display: block; width: 100%; height: 285px; object-fit: contain; }
        .pv2r-main { padding: 62px 0 92px; background: #f4f6f8; }
        .pv2r-content { width: min(1180px,calc(100% - 48px)); margin: auto; }
        .pv2r-back { margin: 0 0 30px; }
        .pv2r-back a { color: #1769c2; font-size: 13px; font-weight: 700; text-decoration: none; }
        .pv2r-heading { margin-bottom: 23px; }
        .pv2r-heading h2 { margin: 0; color: #142945; font-size: clamp(28px,3.5vw,40px); letter-spacing: -.035em; }
        .pv2r-heading p { max-width: 780px; margin: 10px 0 0; color: #637287; font-size: 14px; line-height: 1.65; }
        .pv2r-panel { padding: 24px; border: 1px solid #e1e7ee; border-radius: 5px; background: #fff; box-shadow: 0 12px 28px rgba(30,47,73,.045); }
        .pv2r-table-wrap { overflow-x: auto; }
        .pv2r-table { width: 100%; min-width: 1500px; border-collapse: collapse; font-size: 12px; }
        .pv2r-table th, .pv2r-table td { padding: 11px 10px; border-bottom: 1px solid #e9edf2; text-align: left; vertical-align: top; }
        .pv2r-table thead th { color: #53647c; background: #f6f8fb; font-size: 10px; font-weight: 700; line-height: 1.45; }
        .pv2r-table tbody th { color: #1c3762; font-weight: 700; white-space: nowrap; }
        .pv2r-table tbody td { color: #52627a; white-space: nowrap; }
        .pv2r-notes { display: grid; gap: 9px; margin-top: 18px; padding: 17px 19px; border-left: 3px solid #d69b2d; background: #fff8ea; }
        .pv2r-notes p { margin: 0; color: #705b35; font-size: 12px; line-height: 1.65; }
        @media (max-width: 760px) {
            .pv2r-hero { padding: 42px 18px; }
            .pv2r-hero-inner { grid-template-columns: 1fr; gap: 28px; }
            .pv2r-visual, .pv2r-visual img { min-height: 210px; height: 210px; }
            .pv2r-main { padding: 42px 0 66px; }
            .pv2r-content { width: calc(100% - 32px); }
            .pv2r-panel { padding: 15px; }
        }
    </style>
</head>
<body>
    @include('partials.navbar')
    @php($pv2rVariants = $product->variants->sortBy('model_code', SORT_NATURAL | SORT_FLAG_CASE)->values())
    <header class="pv2r-hero">
        <div class="pv2r-hero-inner">
            <div>
                <p class="pv2r-kicker">Yuken single vane pumps</p>
                <h1 class="pv2r-title">{{ $product->name }}</h1>
                <p class="pv2r-intro">{{ $product->description }}</p>
                <ul class="pv2r-highlights">
                    <li>{{ $pv2rVariants->count() }} models</li>
                    <li>5.8–237 cm³/rev displacement</li>
                    <li>PV2R1 to PV2R4 frame groups</li>
                </ul>
            </div>
            <div class="pv2r-visual"><img src="{{ asset($product->image) }}" alt="Yuken PV2R series single vane pump"></div>
        </div>
    </header>
    <main class="product-content">
        <section class="pv2r-main">
            <div class="pv2r-content">
                <p class="pv2r-back"><a href="{{ route('products.index', ['category' => 'pumps']) }}">← Back to pump products</a></p>
                <div class="pv2r-heading">
                    <p class="product-section-kicker">Model comparison</p>
                    <h2>PV2R series specifications</h2>
                    <p>Compare geometric displacement, maximum operating pressure, fluid-specific pressure ratings, and shaft speed across the models listed in the workbook.</p>
                </div>
                <div class="pv2r-panel">
                    <div class="pv2r-table-wrap">
                        <table class="pv2r-table">
                            <thead>
                                <tr>
                                    <th scope="col">Model</th>
                                    <th scope="col">Geometric displacement<br>(cm³/rev)</th>
                                    <th scope="col">Maximum operating<br>pressure (MPa)</th>
                                    <th scope="col">Petroleum base oil<br>anti-wear (MPa)</th>
                                    <th scope="col">Petroleum base oil<br>R&amp;O (MPa)</th>
                                    <th scope="col">Water-glycol<br>fluids (MPa)</th>
                                    <th scope="col">Water-in-oil<br>emulsions (MPa)</th>
                                    <th scope="col">Phosphate esters<br>(MPa)</th>
                                    <th scope="col">Output flow / input<br>power reference</th>
                                    <th scope="col">Maximum shaft speed<br>(r/min)</th>
                                    <th scope="col">Minimum shaft speed<br>(r/min)</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($pv2rVariants as $variant)
                                @php($spec = $variant->specs ?? [])
                                <tr>
                                    <th scope="row">{{ $variant->model_code }}</th>
                                    <td>{{ number_format((float) ($spec['Geometric displacement (cm³/rev)'] ?? 0), 1) }}</td>
                                    <td>{{ $spec['Maximum operating pressure (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Pressure, petroleum base oils - anti-wear (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Pressure, petroleum base oils - R&O (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Pressure, water-glycol fluids (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Pressure, water-in-oil emulsions (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Pressure, phosphate esters (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Output flow and input power reference'] ?? '—' }}</td>
                                    <td>{{ $spec['Maximum shaft speed (r/min)'] ?? '—' }}</td>
                                    <td>{{ $spec['Minimum shaft speed (r/min)'] ?? '—' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="pv2r-notes" aria-label="Specification notes">
                        <p>Output flow and input power values are referenced on other catalog pages: PV2R1, B-11 to B-13; PV2R2, B-13 to B-14; PV2R3, B-14 to B-15; PV2R4, B-15 to B-16.</p>
                        <p>Parenthetical values and footnote marks are retained from the workbook. Consult the corresponding Yuken catalog pages for their full operating conditions.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="site-footer"><div class="footer-bottom"><div class="footer-bottom-inner"><p>© 2026 Sinar Mutiara Cakrabuana</p><a href="{{ route('products.index') }}">Product catalogue</a></div></div></footer>
    @include('partials.scripts')
</body>
</html>