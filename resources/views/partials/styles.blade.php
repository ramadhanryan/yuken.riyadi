<style>
        :root { --navy: #102b5c; --blue: #1769c2; --ink: #162a43; }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin: 0; color: var(--ink); font-family: Inter, "Segoe UI", Arial, sans-serif; }
        .hero { min-height: 100svh; position: relative; isolation: isolate; display: flex; align-items: center; overflow: hidden; background: #dce8f3 url('{{ asset('images/oldyuken-precision-banner.png') }}') center / cover no-repeat; }
        .hero::before { content: ""; position: absolute; inset: 0; z-index: -1; background: linear-gradient(90deg, rgba(10, 30, 61, .82) 0%, rgba(12, 41, 79, .62) 41%, rgba(13, 48, 92, .10) 78%), linear-gradient(0deg, rgba(10, 31, 62, .30), transparent 45%); }
        .hero-inner { width: min(1180px, calc(100% - 48px)); margin: 0 auto; padding: 120px 0 72px; }
        .eyebrow { display: inline-flex; align-items: center; gap: 11px; color: #cfe5ff; font-size: 12px; font-weight: 700; letter-spacing: .19em; text-transform: uppercase; }
        .eyebrow::before { content: ""; width: 34px; height: 2px; background: #58a5ff; }
        h1 { max-width: 700px; margin: 22px 0 20px; color: white; font-size: clamp(42px, 6.1vw, 78px); line-height: 1.04; letter-spacing: -.045em; font-weight: 750; }
        h1 span { display: block; color: #8ec7ff; }
        .intro { max-width: 590px; margin: 0; color: rgba(255,255,255,.88); font-size: clamp(15px, 1.4vw, 18px); line-height: 1.8; }
        .hero-actions { display: flex; align-items: center; gap: 24px; margin-top: 34px; }
        .button { display: inline-flex; align-items: center; justify-content: center; gap: 12px; min-height: 52px; padding: 0 23px; border: 1px solid #fff; border-radius: 4px; background: white; color: var(--navy); text-decoration: none; font-weight: 700; font-size: 14px; transition: transform .2s, background .2s; }
        .button:hover { transform: translateY(-2px); background: #eef6ff; }
        .since { color: rgba(255,255,255,.82); font-size: 13px; }
        .products-section { padding: 104px 24px 112px; background: #fff; scroll-margin-top: 72px; }
        .products-inner { width: min(1180px, 100%); margin: 0 auto; }
        .products-heading { display: flex; align-items: end; justify-content: space-between; gap: 32px; margin-bottom: 38px; }
        .products-kicker { margin: 0 0 11px; color: #1769c2; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
        .products-title { margin: 0; color: #142945; font-size: clamp(34px, 4vw, 48px); line-height: 1.1; letter-spacing: -.04em; }
        .products-description { max-width: 430px; margin: 0 0 3px; color: #637287; font-size: 15px; line-height: 1.75; }
        .product-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }
        .product-card { display: flex; min-width: 0; flex-direction: column; overflow: hidden; border: 1px solid #e2e8ef; background: #fff; color: inherit; text-decoration: none; transition: border-color .22s ease, box-shadow .22s ease, transform .22s ease; }
        .product-card:hover { transform: translateY(-4px); border-color: #b7cee7; box-shadow: 0 14px 30px rgba(22, 52, 88, .10); }
        .product-image-wrap { display: grid; height: 218px; padding: 18px; place-items: center; background: linear-gradient(145deg, #f8fafc, #f1f5f9); }
        .product-image { display: block; width: 100%; height: 100%; object-fit: contain; mix-blend-mode: multiply; transition: transform .3s ease; }
        .product-card:hover .product-image { transform: scale(1.045); }
        .product-info { display: flex; min-height: 111px; flex: 1; flex-direction: column; padding: 17px 18px 16px; }
        .product-type { margin: 0 0 8px; color: #8794a4; font-size: 9px; font-weight: 700; letter-spacing: .15em; text-transform: uppercase; }
        .product-name { margin: 0; color: #1b2e47; font-size: 16px; line-height: 1.35; font-weight: 650; }
        .product-link { display: inline-flex; align-items: center; gap: 9px; margin-top: auto; padding-top: 15px; color: #1769c2; font-size: 12px; font-weight: 700; }
        .product-card:hover .product-link { gap: 13px; }
        .product-catalog-link { display: inline-flex; align-items: center; gap: 10px; margin-top: 28px; color: #1769c2; font-size: 13px; font-weight: 700; text-decoration: none; }
        .product-catalog-link:hover { color: #104e9b; }
        .applications-section { padding: 76px 24px 82px; background: #f7f8fa; scroll-margin-top: 72px; }
        .applications-inner { width: min(1280px, 100%); margin: 0 auto; display: grid; grid-template-columns: minmax(220px, .78fr) minmax(0, 1.6fr); align-items: center; gap: clamp(36px, 6vw, 88px); }
        .applications-kicker { margin: 0 0 12px; color: #1769c2; font-size: 10px; font-weight: 750; letter-spacing: .16em; text-transform: uppercase; }
        .applications-title { margin: 0; color: #182a40; font-size: clamp(32px, 3.5vw, 44px); line-height: 1.1; letter-spacing: -.04em; font-weight: 650; }
        .applications-description { max-width: 300px; margin: 15px 0 0; color: #748092; font-size: 14px; line-height: 1.65; }
        .slider-wrap { position: relative; min-width: 0; }
        .slider-track { display: flex; gap: 12px; overflow-x: auto; padding: 3px 1px 8px; scroll-behavior: smooth; scroll-snap-type: x mandatory; scrollbar-width: none; -ms-overflow-style: none; }
        .slider-track::-webkit-scrollbar { display: none; }
        .app-slide { position: relative; flex: 0 0 calc((100% - 24px) / 3); min-width: 0; aspect-ratio: .78; overflow: hidden; background: #23354b; scroll-snap-align: start; isolation: isolate; }
        .app-slide::after { content: ""; position: absolute; z-index: 0; inset: 0; background: linear-gradient(180deg, rgba(10, 22, 37, .12) 5%, rgba(8, 18, 31, .66) 100%); transition: background .25s ease; }
        .app-slide img { position: absolute; z-index: -1; inset: 0; width: 100%; height: 100%; object-fit: cover; transition: transform .45s ease; }
        .app-slide:hover img { transform: scale(1.06); }
        .app-slide:hover::after { background: linear-gradient(180deg, rgba(10, 22, 37, .08) 5%, rgba(8, 18, 31, .76) 100%); }
        .app-label { position: absolute; z-index: 1; right: 12px; bottom: 22px; left: 12px; color: #fff; text-align: center; text-wrap: balance; font-size: clamp(11px, 1vw, 14px); font-weight: 700; line-height: 1.45; text-shadow: 0 1px 8px rgba(0,0,0,.35); }
        .slider-btn { position: absolute; z-index: 2; top: 50%; display: grid; width: 34px; height: 34px; padding: 0 0 3px; place-items: center; border: 1px solid #c5ccd5; border-radius: 50%; background: rgba(255,255,255,.95); color: #566475; font: inherit; font-size: 24px; line-height: 1; cursor: pointer; transform: translateY(-50%); transition: background .2s, color .2s, border-color .2s; }
        .slider-btn:hover { border-color: #1769c2; background: #1769c2; color: #fff; }
        .slider-btn.prev { left: -17px; }
        .slider-btn.next { right: -17px; }

        .inquiry-section { position: relative; padding: 96px 24px 104px; background: #0d1f3a url('{{ asset('images/bg-inquiry.jpg') }}') center / cover no-repeat; scroll-margin-top: 72px; isolation: isolate; }
        .inquiry-section::before { content: ""; position: absolute; inset: 0; z-index: -1; background: linear-gradient(90deg, rgba(10, 30, 61, .92) 0%, rgba(12, 41, 79, .80) 38%, rgba(13, 48, 92, .58) 100%); }
        .inquiry-inner { width: min(1180px, 100%); margin: 0 auto; display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1.08fr); align-items: start; gap: clamp(36px, 8vw, 96px); }
        .inquiry-heading { max-width: 520px; }
        .inquiry-kicker { margin: 0 0 12px; color: #8ec7ff; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
        .inquiry-title { margin: 0; color: #fff; font-size: clamp(34px, 4.6vw, 56px); line-height: 1.06; letter-spacing: -.045em; }
        .inquiry-description { margin: 18px 0 0; color: rgba(255,255,255,.86); font-size: clamp(15px, 1.2vw, 17px); line-height: 1.8; }
        .inquiry-subtext { margin: 16px 0 0; color: rgba(255,255,255,.72); font-size: 14px; line-height: 1.8; }
        .inquiry-form { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 16px 18px; padding: clamp(26px, 4vw, 38px); border-radius: 6px; background: rgba(255,255,255,.98); box-shadow: 0 40px 70px rgba(8, 20, 44, .28); }
        .form-field { display: flex; flex-direction: column; gap: 9px; }
        .form-field.full { grid-column: 1 / -1; }
        .form-label { color: #1f2f47; font-size: 12px; font-weight: 700; letter-spacing: .04em; text-transform: uppercase; }
        .form-input, .form-textarea { width: 100%; padding: 11px 14px; border: 1px solid #d7dce5; border-radius: 4px; background: #fff; color: #162a43; font: inherit; font-size: 14px; transition: border-color .2s, box-shadow .2s; }
        .form-input:focus, .form-textarea:focus { outline: none; border-color: #1769c2; box-shadow: 0 0 0 3px rgba(23, 105, 194, .12); }
        .form-textarea { min-height: 150px; resize: vertical; }
        .form-submit { grid-column: 1 / -1; display: inline-flex; align-items: center; justify-content: center; gap: 10px; min-height: 54px; padding: 0 28px; border: 0; border-radius: 4px; background: linear-gradient(90deg, #1769c2 0%, #1f7be6 100%); color: #fff; font: inherit; font-size: 14px; font-weight: 700; cursor: pointer; transition: transform .2s, box-shadow .2s, filter .2s; }
        .form-submit:hover { transform: translateY(-2px); box-shadow: 0 16px 36px rgba(23, 105, 194, .26); filter: brightness(1.02); }
        .form-note { grid-column: 1 / -1; margin: 4px 0 0; color: #6b778a; font-size: 12px; text-align: center; }

        .site-footer { background: #fff; color: rgba(255,255,255,.88); }
        .footer-inner { width: min(1180px, calc(100% - 48px)); margin: 0 auto; display: grid; grid-template-columns: minmax(0, 1.2fr) repeat(3, minmax(0, 1fr)); gap: clamp(28px, 6vw, 64px); padding: 64px 0 64px; }
        .footer-brand { display: flex; flex-direction: column; gap: 18px; }
        .footer-logos { display: flex; flex-wrap: wrap; align-items: center; gap: 18px; }
        .footer-logo-smc { display: block; width: 248px; height: auto; }
        .footer-logo-ryd { display: block; width: 112px; height: auto; }
        .footer-text { margin: 0; max-width: 320px; color: rgba(89,85,85,.88); font-size: 14px; line-height: 1.8; }
        .footer-heading { margin: 0 0 16px; color: #000; font-size: 13px; font-weight: 750; letter-spacing: .16em; text-transform: uppercase; }
        .footer-list { display: grid; gap: 10px; margin: 0; padding: 0; list-style: none; }
        .footer-list a { color: rgba(89,85,85,.88); text-decoration: none; font-size: 14px; transition: color .2s; }
        .footer-list a:hover { color: var(--blue) }
        .footer-contact { display: grid; gap: 12px; }
        .footer-contact-item { display: grid; gap: 4px; }
        .footer-contact-label { color: rgba(89,85,85,.58); font-size: 11px; letter-spacing: .14em; text-transform: uppercase; }
        .footer-contact-value { color: rgba(89,85,85,.86); font-size: 14px; line-height: 1.8; }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,.12); }
        .footer-bottom-inner { margin: 0 auto; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 14px; padding: 18px 40px; background: #0f1f3b; }
        .footer-copy { margin: 0; color: rgba(255,255,255,.56); font-size: 13px; }
        .footer-meta { display: flex; flex-wrap: wrap; align-items: center; gap: 16px; color: rgba(255,255,255,.56); font-size: 13px; }
        .footer-meta a { color: rgba(255,255,255,.72); text-decoration: none; }
        .footer-meta a:hover { color: #fff; }

        @media (max-width: 980px) {
            .product-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .applications-section { padding: 64px 24px 70px; }
            .applications-inner { grid-template-columns: 1fr; gap: 26px; }
            .applications-description { max-width: 520px; }
            .app-slide { flex-basis: calc((100% - 24px) / 3); aspect-ratio: .88; }
            .inquiry-inner { grid-template-columns: 1fr; gap: 38px; }
            .footer-inner { grid-template-columns: repeat(2, minmax(0, 1fr)); }
            .footer-brand { grid-column: 1 / -1; }
        }
        @media (max-width: 700px) {
            .hero { min-height: 92svh; background-position: 55% center; }
            .hero::before { background: linear-gradient(90deg, rgba(10,30,61,.85), rgba(10,34,68,.54)), linear-gradient(0deg, rgba(10,31,62,.3), transparent 55%); }
            .hero-inner { width: min(100% - 40px, 540px); padding: 115px 0 58px; }
            h1 { font-size: clamp(43px, 12vw, 64px); }
            .intro { font-size: 15px; }
            .products-section { padding: 76px 20px 82px; }
            .products-heading { display: block; margin-bottom: 27px; }
            .products-description { margin-top: 14px; font-size: 14px; }
            .product-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
            .product-image-wrap { height: clamp(135px, 38vw, 190px); padding: 11px; }
            .product-info { min-height: 108px; padding: 14px 13px; }
            .product-name { font-size: 14px; }
            .product-link { font-size: 11px; }
            .applications-section { padding: 64px 20px 68px; }
            .applications-inner { gap: 24px; }
            .applications-heading { padding-right: 24px; }
            .applications-description { margin-top: 11px; }
            .slider-track { gap: 10px; }
            .app-slide { flex-basis: 50%; aspect-ratio: .84; }
            .slider-btn { width: 32px; height: 32px; }
            .slider-btn.prev { left: -12px; }
            .slider-btn.next { right: -12px; }
            .app-label { bottom: 18px; font-size: 13px; }
        }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; } }
        @include('partials.navbar-styles')
    </style>