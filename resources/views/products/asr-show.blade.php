<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#172d65">
    <title>{{ $product->name }} | Yuken</title>
    @include('partials.styles-product')
    <style>
        .asr-hero { margin-top: 78px; padding: 58px 24px; color: #fff; background: linear-gradient(120deg,#172d65,#2948a2 58%,#4f75c7); }
        .asr-hero-inner { display: grid; grid-template-columns: minmax(0,1fr) minmax(320px,.82fr); align-items: center; gap: clamp(36px,7vw,100px); width: min(1180px,100%); margin: auto; }
        .asr-kicker { margin: 0 0 14px; color: #c5d9ff; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
        .asr-title { margin: 0; font-size: clamp(42px,6vw,68px); line-height: 1; letter-spacing: -.055em; }
        .asr-intro { max-width: 590px; margin: 20px 0 0; color: #e0eaff; font-size: 16px; line-height: 1.75; }
        .asr-highlights { display: flex; flex-wrap: wrap; gap: 10px; margin: 26px 0 0; padding: 0; list-style: none; }
        .asr-highlights li { padding: 9px 12px; border: 1px solid rgba(255,255,255,.24); border-radius: 3px; color: #fff; font-size: 12px; }
        .asr-visual { display: grid; min-height: 285px; place-items: center; overflow: hidden; border: 1px solid rgba(255,255,255,.55); border-radius: 14px; background: #fff; box-shadow: 0 22px 55px rgba(6,20,55,.2); }
        .asr-visual img { display: block; width: 100%; height: 285px; object-fit: contain; }
        .asr-main { padding: 62px 0 92px; background: #f4f6f8; }
        .asr-content { width: min(1180px,calc(100% - 48px)); margin: auto; }
        .asr-back { margin: 0 0 30px; }
        .asr-back a { color: #1769c2; font-size: 13px; font-weight: 700; text-decoration: none; }
        .asr-heading { margin-bottom: 23px; }
        .asr-heading h2 { margin: 0; color: #142945; font-size: clamp(28px,3.5vw,40px); letter-spacing: -.035em; }
        .asr-heading p { max-width: 700px; margin: 10px 0 0; color: #637287; font-size: 14px; line-height: 1.65; }
        .asr-panel { padding: 24px; border: 1px solid #e1e7ee; border-radius: 5px; background: #fff; box-shadow: 0 12px 28px rgba(30,47,73,.045); }
        .asr-table-wrap { overflow-x: auto; }
        .asr-table { width: 100%; min-width: 760px; border-collapse: collapse; font-size: 13px; }
        .asr-table th, .asr-table td { padding: 13px 12px; border-bottom: 1px solid #e9edf2; text-align: left; vertical-align: top; }
        .asr-table thead th { color: #53647c; background: #f6f8fb; font-size: 11px; font-weight: 700; letter-spacing: .04em; }
        .asr-table tbody th { color: #1c3762; font-weight: 700; white-space: nowrap; }
        .asr-table tbody td { color: #52627a; }
        .asr-model-details { margin-top: 10px; border: 1px solid #e1e7ee; border-radius: 4px; background: #fff; }
        .asr-model-details summary { display: flex; justify-content: space-between; gap: 16px; padding: 15px 17px; color: #1c3762; font-size: 14px; font-weight: 700; cursor: pointer; list-style-position: inside; }
        .asr-model-details summary span:last-child { color: #1769c2; font-size: 12px; font-weight: 600; }
        .asr-model-details[open] summary { border-bottom: 1px solid #e9edf2; }
        .asr-model-details .spec-table { margin: 8px 12px 14px; width: calc(100% - 24px); }
        .asr-footnote { margin: 16px 0 0; color: #687486; font-size: 12px; line-height: 1.65; }
        .asr-common { display: grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap: 14px; margin-top: 20px; }
        .asr-common-item { padding: 17px; border: 1px solid #e1e7ee; background: #fff; }
        .asr-common-item strong { display: block; margin-bottom: 6px; color: #1c3762; font-size: 12px; }
        .asr-common-item span { color: #687486; font-size: 13px; line-height: 1.55; }
        .asr-no-apps { margin: 0; color: #687486; font-size: 14px; line-height: 1.7; }
        @media (max-width: 760px) {
            .asr-hero { padding: 42px 18px; }
            .asr-hero-inner { grid-template-columns: 1fr; gap: 28px; }
            .asr-visual, .asr-visual img { min-height: 210px; height: 210px; }
            .asr-main { padding: 42px 0 66px; }
            .asr-content { width: calc(100% - 32px); }
            .asr-panel { padding: 15px; }
            .asr-common { grid-template-columns: 1fr 1fr; }
        }
        @media (max-width: 420px) { .asr-common { grid-template-columns: 1fr; } .asr-model-details summary { align-items: flex-start; flex-direction: column; gap: 5px; } }
    </style>
</head>
<body>
    @include('partials.navbar')
    @php($asrVariants = $product->variants->sortBy('model_code', SORT_NATURAL | SORT_FLAG_CASE)->values())
    <header class="asr-hero">
        <div class="asr-hero-inner">
            <div>
                <p class="asr-kicker">Yuken pump series</p>
                <h1 class="asr-title">{{ $product->name }}</h1>
                <p class="asr-intro">{{ $product->description }}</p>
                <ul class="asr-highlights">
                    <li>{{ $asrVariants->count() }} model variants</li>
                    <li>39.5–200 L/min maximum flow</li>
                    <li>AC servo motor drive</li>
                </ul>
            </div>
            <div class="asr-visual"><img src="{{ asset($product->image) }}" alt="Yuken ASR Series pump with AC servo motor"></div>
        </div>
    </header>
    <main class="product-content">
        <section class="asr-main">
            <div class="asr-content">
                <p class="asr-back"><a href="{{ route('products.index', ['category' => 'pumps']) }}">← Back to pump products</a></p>
                <div class="asr-heading">
                    <p class="product-section-kicker">Model comparison</p>
                    <h2>ASR series specifications</h2>
                    <p>Compare the main ratings below. Expand a model to view its full specifications from the series workbook.</p>
                </div>
                <div class="asr-panel">
                    <div class="asr-table-wrap">
                        <table class="asr-table">
                            <thead><tr><th scope="col">Model</th><th scope="col">Capacity</th><th scope="col">Max flow<br>(L/min)</th><th scope="col">Max pressure<br>(MPa)</th><th scope="col">Motor output<br>(kW)</th><th scope="col">Cooling</th><th scope="col">Mass single / dual<br>(kg)</th></tr></thead>
                            <tbody>
                            @foreach ($asrVariants as $variant)
                                @php($spec = $variant->specs ?? [])
                                <tr>
                                    <th scope="row">{{ $variant->model_code }}</th>
                                    <td>{{ $spec['Power capacity code'] ?? '—' }}</td>
                                    <td>{{ $spec['Max flow (L/min)'] ?? '—' }}</td>
                                    <td>{{ $spec['Max operating pressure (MPa)'] ?? '—' }}</td>
                                    <td>{{ $spec['Rated output (kW)'] ?? '—' }}</td>
                                    <td>{{ str_contains(strtolower($spec['Cooling system'] ?? ''), 'fan') ? 'Fan-cooled' : 'Self-cooled' }}</td>
                                    <td>{{ $spec['Mass single displacement (kg)'] ?? '—' }} / {{ $spec['Mass dual displacement (kg)'] ?? '—' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <p class="asr-footnote">Cooling fan power for fan-cooled models: 62 W at 50 Hz / 76 W at 60 Hz. Ambient operating conditions: 0 to +40 °C (no freezing), with humidity up to 80 %RH (no condensation).</p>
                </div>
                <div class="asr-common" aria-label="Specifications common to the series">
                    <div class="asr-common-item"><strong>Flow control</strong><span>Minimum adjustment 1%; hysteresis and repeatability 1% or less.</span></div>
                    <div class="asr-common-item"><strong>Pressure control</strong><span>Minimum adjustment 0.1 MPa; hysteresis and repeatability 1% or less.</span></div>
                    <div class="asr-common-item"><strong>Motor insulation</strong><span>Class F.</span></div>
                </div>
                <div class="asr-heading" style="margin:42px 0 18px">
                    <p class="product-section-kicker">Technical data</p>
                    <h2>Full specifications by model</h2>
                </div>
                @foreach ($asrVariants as $variant)
                    <details class="asr-model-details">
                        <summary><span>{{ $variant->model_code }}</span><span>View full specifications</span></summary>
                        <table class="spec-table"><tbody>
                        @foreach ($variant->specs ?? [] as $label => $value)
                            <tr><td>{{ $label }}</td><td>{{ is_scalar($value) ? $value : json_encode($value) }}</td></tr>
                        @endforeach
                        </tbody></table>
                    </details>
                @endforeach
                <p class="asr-footnote">Controller adjustment note: maximum flow rate and maximum operating pressure at 5 V can be set by adjusting the controller. Refer to the applicable controller documentation for setup.</p>
            </div>
        </section>
    </main>
    <footer class="site-footer"><div class="footer-bottom"><div class="footer-bottom-inner"><p>© 2026 Sinar Mutiara Cakrabuana</p><a href="{{ route('products.index') }}">Product catalogue</a></div></div></footer>
    @include('partials.scripts')
</body>
</html>