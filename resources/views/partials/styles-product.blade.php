<style>
    :root { --product-navy: #172d65; --product-blue: #2948a2; --product-ink: #17243a; --product-muted: #687486; }
    * { box-sizing: border-box; }
    body { margin: 0; color: var(--product-ink); font-family: Inter, "Segoe UI", Arial, sans-serif; }
    a { color: inherit; }
    .product-page-banner { position: relative; display: grid; min-height: 330px; overflow: hidden; place-items: center; isolation: isolate; padding: 78px 24px 40px; background: linear-gradient(120deg, #172d65, #2948a2 55%, #4f75c7); }
    .product-page-banner::before { position: absolute; z-index: -1; top: -180px; right: -80px; width: 520px; height: 520px; content: ""; border: 1px solid rgba(255,255,255,.2); border-radius: 50%; box-shadow: 0 0 0 42px rgba(255,255,255,.05), 0 0 0 92px rgba(255,255,255,.035); }
    .product-banner-copy { width: min(1180px, 100%); margin: auto; color: #fff; }
    .product-banner-kicker { margin: 0 0 14px; color: #b9d5ff; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
    .product-banner-title { max-width: 720px; margin: 0; font-size: clamp(40px, 6vw, 68px); line-height: 1.02; letter-spacing: -.055em; }
    .product-banner-copy-text { max-width: 560px; margin: 20px 0 0; color: #dce8ff; font-size: 16px; line-height: 1.7; }
    .product-content { background: #f5f7fa; }
    .product-section-inner { width: min(1180px, calc(100% - 48px)); margin: auto; }
    .categories-section { padding: 96px 0 106px; background: #fff; scroll-margin-top: 78px; }
    .product-section-heading { display: flex; align-items: end; justify-content: space-between; gap: 32px; margin-bottom: 38px; }
    .product-section-kicker { margin: 0 0 10px; color: #1769c2; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
    .product-section-title { margin: 0; color: #142945; font-size: clamp(34px, 4vw, 48px); line-height: 1.08; letter-spacing: -.04em; }
    .product-section-description { max-width: 425px; margin: 0 0 4px; color: #637287; font-size: 15px; line-height: 1.75; }
    .category-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
    .category-card { display: flex; min-width: 0; flex-direction: column; overflow: hidden; border: 1px solid #e2e8ef; background: #fff; color: inherit; text-decoration: none; transition: border-color .22s ease, box-shadow .22s ease, transform .22s ease; }
    .category-card:hover { transform: translateY(-4px); border-color: #b7cee7; box-shadow: 0 14px 30px rgba(22,52,88,.1); }
    .category-image-wrap { display: grid; height: 200px; padding: 18px; place-items: center; background: linear-gradient(145deg,#f8fafc,#edf2f7); }
    .category-image { display: block; width: 100%; height: 100%; object-fit: contain; mix-blend-mode: multiply; }
    .category-info { display: flex; min-height: 108px; flex: 1; flex-direction: column; padding: 17px 18px 16px; }
    .category-type { margin: 0 0 8px; color: #8794a4; font-size: 9px; font-weight: 700; letter-spacing: .15em; text-transform: uppercase; }
    .category-name { margin: 0; color: #1b2e47; font-size: 16px; line-height: 1.35; font-weight: 650; }
    .category-link { display: inline-flex; align-items: center; gap: 9px; margin-top: auto; padding-top: 15px; color: #1769c2; font-size: 12px; font-weight: 700; }
    .catalog-section { padding: 96px 0 112px; background: #f1f3f5; scroll-margin-top: 78px; }
    .catalog-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 20px; }
    .catalog-card { display: flex; min-height: 308px; flex-direction: column; overflow: hidden; border: 1px solid #dfe5eb; background: #fff; box-shadow: 0 12px 28px rgba(30,47,73,.05); }
    .catalog-cover { display: grid; height: 166px; padding: 18px; place-items: center; background: #e5e9ee; }
    .catalog-cover img { width: 100%; height: 100%; object-fit: contain; mix-blend-mode: multiply; }
    .catalog-body { display: flex; flex: 1; flex-direction: column; padding: 20px 21px 18px; }
    .catalog-label { margin: 0 0 8px; color: #1769c2; font-size: 10px; font-weight: 750; letter-spacing: .15em; text-transform: uppercase; }
    .catalog-title { margin: 0; color: #1b2e47; font-size: 19px; line-height: 1.25; }
    .catalog-description { margin: 9px 0 17px; color: #728095; font-size: 13px; line-height: 1.55; }
    .catalog-download { display: inline-flex; align-items: center; justify-content: space-between; gap: 12px; margin-top: auto; padding: 11px 13px; border: 1px solid #b9cbe3; color: #174eae; font-size: 12px; font-weight: 700; text-decoration: none; transition: background .2s, border-color .2s, color .2s; }
    .catalog-download:hover { border-color: #174eae; background: #174eae; color: #fff; }
    .family-grid, .application-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 22px; }
    .family-card, .application-card { overflow: hidden; border: 1px solid #e0e6ed; background: #fff; box-shadow: 0 12px 28px rgba(30,47,73,.05); }
    .family-card { display: flex; min-width: 0; min-height: 100%; flex-direction: column; border-radius: 4px; transition: transform .28s ease, border-color .28s ease, box-shadow .28s ease; }
    .family-card:hover, .family-card:focus-within { transform: translateY(-6px); border-color: #b9cce2; box-shadow: 0 20px 42px rgba(23,45,101,.13); }
    .family-image-wrap, .application-image-wrap { display: grid; height: auto; padding: 20px; place-items: center; background: linear-gradient(145deg,#f7f9fb,#e8edf3); }
    .family-image-wrap { overflow: hidden; border-bottom: 1px solid #e8edf2; }
    .family-image-wrap img, .application-image-wrap img { width: 100%; height: 100%; object-fit: contain; mix-blend-mode: multiply; }
    .family-image-wrap img { transition: transform .45s cubic-bezier(.2,.7,.2,1); }
    .family-card:hover .family-image-wrap img, .family-card:focus-within .family-image-wrap img { transform: scale(1.055); }
    .family-card-body, .application-card-body { padding: 20px; }
    .family-card-body { display: flex; flex: 1; flex-direction: column; align-items: flex-start; }
    .family-card-body h3, .application-card-body h3 { margin: 0; font-size: 20px; }
    .family-card-body h3 a, .application-card-body h3 a { color: #1b2e47; text-decoration: none; transition: color .2s ease; }
    .family-card:hover .family-card-body h3 a, .family-card:focus-within .family-card-body h3 a { color: #1769c2; }
    .family-series, .family-model-count { color: #687486; font-size: 13px; }
    .model-chip-list { display: flex; flex-wrap: wrap; gap: 7px; margin: 13px 0; }
    .model-chip-list span { padding: 6px 9px; border: 1px solid #dce4ed; color: #30445e; font-size: 11px; }
    .review-flag, .review-note { padding: 11px 13px; border-left: 3px solid #d69b2d; background: #fff7e7; color: #79551a; font-size: 12px; line-height: 1.55; }
    .family-card-link, .text-link { display: inline-flex; gap: 8px; color: #1769c2; font-size: 13px; font-weight: 700; text-decoration: none; }
    .family-card-link { margin-top: auto; padding-top: 7px; }
    .family-card-link span { transition: transform .2s ease; }
    .family-card:hover .family-card-link span, .family-card:focus-within .family-card-link span { transform: translateX(4px); }
    .category-filter { display: flex; flex-wrap: wrap; gap: 9px; margin-bottom: 28px; }
    .category-filter-link { padding: 9px 13px; border: 1px solid #dce3eb; background: #fff; color: #45566b; font-size: 12px; text-decoration: none; }
    .category-filter-link.selected { border-color: #1d4f9a; background: #1d4f9a; color: #fff; }
    .empty-state { grid-column: 1/-1; padding: 46px; background: #fff; text-align: center; }
    .detail-section { padding: 78px 0 100px; background: #f4f6f8; }
    .detail-header { margin-bottom: 30px; padding: 35px; background: #fff; }
    .detail-header h1 { margin: 0 0 12px; color: #172d65; font-size: clamp(34px,5vw,54px); }
    .detail-columns { display: grid; grid-template-columns: 1.2fr .8fr; gap: 24px; }
    .detail-panel { padding: 26px; background: #fff; }
    .variant-list { display: grid; gap: 14px; }
    .variant-card { padding: 20px; border: 1px solid #e1e7ee; background: #fff; }
    .variant-card h3 { margin: 0 0 14px; color: #1c3762; }
    .spec-table { width: 100%; border-collapse: collapse; font-size: 13px; }
    .spec-table td { padding: 9px 8px; border-bottom: 1px solid #edf0f3; vertical-align: top; }
    .spec-table td:first-child { width: 58%; color: #66758a; }
    .application-list { display: grid; gap: 12px; padding: 0; list-style: none; }
    .application-list li { padding: 13px; border: 1px solid #e2e8ef; }
    .application-list small { display: block; margin-top: 5px; color: #78869a; line-height: 1.5; }
    @media (prefers-reduced-motion: reduce) { .family-card, .family-image-wrap img, .family-card-body h3 a, .family-card-link span { transition: none; } .family-card:hover, .family-card:focus-within { transform: none; } }
    .site-footer { background: #fff; }
    .footer-inner { width: min(1280px, calc(100% - 48px)); margin: auto; display: grid; grid-template-columns: 1.7fr .75fr .75fr .75fr; gap: 48px; padding: 36px 0 46px; }
    .footer-logo { width: min(320px, 100%); height: 40px; object-fit: contain; object-position: left center; }
    .footer-address { margin: 13px 0 0; color: #717a79; font-size: 14px; line-height: 1.65; }
    .footer-heading { margin: 2px 0 14px; font-size: 13px; font-weight: 700; }
    .footer-list { display: grid; gap: 13px; margin: 0; padding: 0; list-style: none; color: #737b79; font-size: 13px; }
    .footer-list a { text-decoration: none; }
    .footer-list a:hover { color: #24469a; }
    .footer-bottom { background: #172d65; color: #fff; }
    .footer-bottom-inner { width: min(1280px, calc(100% - 48px)); min-height: 52px; margin: auto; display: flex; align-items: center; justify-content: space-between; gap: 20px; font-size: 12px; }
    .footer-bottom p { margin: 0; }
    .footer-meta { display: flex; gap: 27px; }
    .footer-meta a { text-decoration: none; }
    @media (max-width: 900px) { .category-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); } .catalog-grid, .family-grid, .application-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); } }
    @media (max-width: 760px) { .product-section-inner { width: calc(100% - 36px); } .product-page-banner { min-height: 290px; } .product-section-heading { display: block; margin-bottom: 28px; } .product-section-description { margin-top: 15px; } .category-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; } .category-image-wrap { height: 160px; padding: 11px; } .category-info { min-height: 108px; padding: 14px 13px; } .category-name { font-size: 14px; } .catalog-grid, .family-grid, .application-grid, .detail-columns { grid-template-columns: 1fr; } .catalog-section, .categories-section { padding: 70px 0 78px; } .detail-header, .detail-panel { padding: 21px; } .footer-inner { width: calc(100% - 40px); grid-template-columns: repeat(2, minmax(0,1fr)); gap: 28px 20px; padding: 34px 0; } .footer-brand { grid-column: 1 / -1; } .footer-bottom-inner { width: calc(100% - 40px); padding: 15px 0; align-items: flex-start; flex-direction: column; } }
    @include('partials.navbar-styles')
    .product-page-banner { margin-top: 78px; }
</style>
