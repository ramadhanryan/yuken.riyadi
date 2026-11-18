 <style>
        :root { --navy: #172d65; --blue: #2948a2; --ink: #17243a; --muted: #687486; }
        * { box-sizing: border-box; }
        body { margin: 0; color: var(--ink); font-family: Inter, "Segoe UI", Arial, sans-serif; }
        a { color: inherit; }
        .page-banner { position: relative; display: grid; min-height: 236px; overflow: hidden; place-items: center; isolation: isolate; background: radial-gradient(ellipse at 40% 110%, rgba(255,255,255,.66), transparent 40%), linear-gradient(115deg, #d7e6f4, #7bb3de 52%, #8fc1e2); }
        .page-banner::before { position: absolute; z-index: -1; inset: -35%; content: ""; opacity: .52; background: repeating-linear-gradient(145deg, transparent 0 74px, rgba(255,255,255,.46) 76px 79px, transparent 81px 142px), repeating-linear-gradient(25deg, transparent 0 115px, rgba(255,255,255,.26) 117px 120px, transparent 122px 205px); transform: rotate(-7deg); }
        .page-banner::after { position: absolute; z-index: -1; inset: 0; content: ""; background: linear-gradient(90deg, rgba(245,250,255,.18), transparent 55%, rgba(24,82,145,.10)); }
        .page-banner h1 { margin: 0; color: #fff; font-size: clamp(36px, 4vw, 48px); font-weight: 750; letter-spacing: -.025em; text-shadow: 0 3px 8px rgba(30,65,105,.3); }
        .breadcrumb { min-height: 42px; background: #2d49a1; color: #fff; }
        .breadcrumb-inner { width: min(1248px, calc(100% - 48px)); min-height: 42px; margin: auto; display: flex; align-items: center; gap: 20px; font-size: 14px; font-weight: 650; }
        .breadcrumb a { text-decoration: none; }
        .breadcrumb .current { color: #b5c5fa; }
        .contact-section { position: relative; isolation: isolate; overflow: hidden; padding: 106px 24px 120px; background: #f1f3f5; }
        .contact-section::before { position: absolute; z-index: -1; inset: 0; content: ""; background: radial-gradient(circle at 12% 22%, #d9dde100 0 0px, transparent 117px), radial-gradient(circle at 87% 16%, #dbdee169 0 400px, transparent 169px), radial-gradient(circle at 91% 88%, #d9dde100 0 0px, transparent 125px), radial-gradient(circle at 16% 94%, #d9dde100 0 0px, transparent 79px); }
        .contact-section::after { position: absolute; z-index: -1; top: 37%; left: 48%; width: 230px; height: 230px; content: ""; background: #d9dde1; border-radius: 50%; transform: translate(-50%, -50%); }
        .contact-card { position: relative; z-index: 1; width: min(1034px, 100%); min-height: 484px; margin: auto; display: grid; grid-template-columns: .92fr 1.08fr; background: #fff; box-shadow: 0 24px 60px rgba(24,43,74,.13), 0 3px 9px rgba(24,43,74,.07); }
        .contact-details { padding: 66px 63px 48px; }
        .contact-details h2 { margin: 0 0 21px; color: #090d14; font-size: 36px; line-height: 1.15; }
        .title-rule { width: 104px; height: 2px; margin-bottom: 22px; background: #3656bd; }
        .detail-group { margin-top: 17px; font-size: 16px; line-height: 1.5; }
        .detail-group strong { display: block; margin-bottom: 4px; color: #111; font-size: 15px; }
        .detail-group address { font-style: normal; }
        .detail-group a { text-decoration: underline; text-underline-offset: 2px; }
        .map-frame { min-height: 484px; border: 0; width: 100%; }
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
        @media (max-width: 760px) {
            .page-banner { min-height: 190px; }
            .breadcrumb-inner { width: calc(100% - 36px); }
            .contact-section { padding: 52px 18px 64px; }
            .contact-card { grid-template-columns: 1fr; }
            .contact-details { padding: 38px 30px; }
            .map-frame { min-height: 330px; }
            .footer-inner { width: calc(100% - 40px); grid-template-columns: repeat(2, minmax(0,1fr)); gap: 28px 20px; padding: 34px 0; }
            .footer-brand { grid-column: 1 / -1; }
            .footer-bottom-inner { width: calc(100% - 40px); padding: 15px 0; align-items: flex-start; flex-direction: column; }
        }
        @include('partials.navbar-styles')
        .page-banner { margin-top: 78px; }
    </style>
