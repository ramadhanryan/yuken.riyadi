        .navbar { position: fixed; z-index: 10; top: 0; left: 0; width: 100%; transform: translateY(-110%); opacity: 0; background: rgba(255,255,255,.97); box-shadow: 0 8px 28px rgba(13,36,68,.10); backdrop-filter: blur(12px); transition: transform .32s ease, opacity .32s ease; }
        .navbar.visible { transform: translateY(0); opacity: 1; }
        .nav-inner { width: min(1240px, calc(100% - 48px)); min-height: 78px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { display: inline-flex; align-items: center; color: var(--navy); text-decoration: none; }
        .brand-logos { display: flex; flex-direction: column; align-items: flex-end; flex: 0 0 auto; }
        .smc-logo-link, .riyadi-logo-link { display: block; line-height: 0; }
        .smc-logo { display: block; width: 286px; height: 38px; object-fit: contain; }
        .riyadi-logo { display: block; width: 90px; position: relative; top: -2px; object-fit: contain; }
        .smc-logo-link:focus-visible, .riyadi-logo-link:focus-visible { outline: 2px solid #1769c2; outline-offset: 3px; border-radius: 2px; }
        .nav-links { align-self: stretch; display: flex; align-items: center; gap: clamp(18px, 3vw, 38px); }
        .nav-links::after { position: absolute; bottom: 0; left: var(--nav-indicator-left, 0); width: var(--nav-indicator-width, 0); height: 4px; content: ""; background: #1769c2; opacity: var(--nav-indicator-opacity, 0); transition: left .28s cubic-bezier(.2,.75,.25,1),width .28s cubic-bezier(.2,.75,.25,1),opacity .16s ease; pointer-events: none; }
        .nav-links > a, .nav-trigger { color: #34465d; text-decoration: none; font: inherit; font-size: 13px; font-weight: 600; transition: color .2s; }
        .nav-links > a:hover, .nav-trigger:hover, .nav-trigger[aria-expanded="true"] { color: var(--blue); }
        .nav-links > a.active, .nav-trigger.active { color: var(--blue); }
        .nav-item { position: static; }
        .nav-trigger { display: inline-flex; align-items: center; gap: 7px; padding: 26px 0; border: 0; background: transparent; cursor: pointer; }
        .nav-chevron { width: 7px; height: 7px; border-right: 1.5px solid currentColor; border-bottom: 1.5px solid currentColor; transform: rotate(45deg) translateY(-2px); transition: transform .2s; }
        .nav-item.open .nav-chevron { transform: rotate(225deg) translate(-1px, -1px); }
        .mega-menu { position: absolute; top: 100%; right: 0; left: 0; z-index: 12; visibility: hidden; padding: 0 24px; border-top: 1px solid #edf0f4; background: #fff; box-shadow: 0 22px 40px rgba(17,39,69,.13); opacity: 0; transform: translateY(9px); transition: opacity .2s, transform .2s, visibility .2s; }
        .nav-item.open .mega-menu, .nav-item:hover .mega-menu, .nav-item:focus-within .mega-menu { visibility: visible; opacity: 1; transform: translateY(0); }
        .mega-content { display: grid; width: min(1200px,100%); margin: auto; padding: 30px 0 34px; }
        .mega-products-content { grid-template-columns: minmax(210px,.75fr) minmax(0,2fr); align-items: start; gap: 42px; }
        .mega-intro-kicker { margin: 0 0 9px; color: #1769c2; font-size: 10px; font-weight: 750; letter-spacing: .16em; text-transform: uppercase; }
        .mega-intro-title { margin: 0; color: #172b46; font-size: 21px; line-height: 1.25; }
        .mega-intro-copy { max-width: 270px; margin: 10px 0 16px; color: #728095; font-size: 13px; line-height: 1.65; }
        .mega-all-link { display: inline-flex; align-items: center; gap: 8px; color: #1769c2; font-size: 12px; font-weight: 700; text-decoration: none; }
        .mega-products-list { display: grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap: 6px 20px; }
        .mega-product-link { display: flex; min-height: 54px; align-items: center; gap: 11px; padding: 8px 10px; color: #273950; text-decoration: none; transition: background .2s,color .2s; }
        .mega-product-link:hover { background: #f3f7fc; color: #1769c2; }
        .mega-product-number { color: #9ba8b8; font-size: 10px; font-weight: 700; }
        .mega-product-name { font-size: 12px; font-weight: 650; line-height: 1.35; }
        .mega-about-content { grid-template-columns: minmax(200px,.75fr) minmax(0,2fr); align-items: center; gap: 42px; }
        .mega-about-grid { display: grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap: 14px; }
        .mega-about-card { display: flex; min-height: 112px; flex-direction: column; justify-content: center; padding: 20px 22px; border: 1px solid #e4e9ef; color: #1d3048; text-decoration: none; transition: border-color .2s,background .2s,transform .2s; }
        .mega-about-card:hover { transform: translateY(-2px); border-color: #b9cee5; background: #f8fbff; }
        .mega-about-card strong { font-size: 15px; }
        .mega-about-card span { margin-top: 7px; color: #748195; font-size: 12px; line-height: 1.5; }
        .mega-about-card em { margin-top: 12px; color: #1769c2; font-size: 12px; font-style: normal; font-weight: 700; }
        .nav-links .contact-link { padding: 16px 22px; border-radius: 4px; background: #0e44a7; color: #fff; }
        .nav-links .contact-link:hover { background: #2286ff; color: #fff;}
        .menu-toggle { display: none; position: relative; width: 42px; height: 42px; padding: 0; border: 0; border-radius: 4px; background: transparent; color: var(--navy); cursor: pointer; }
        .menu-toggle:hover { background: #f1f5fa; }
        .menu-toggle span { position: absolute; left: 11px; width: 20px; height: 2px; border-radius: 2px; background: currentColor; transition: top .25s,transform .25s,opacity .18s; }
        .menu-toggle span:nth-child(1) { top: 13px; }.menu-toggle span:nth-child(2) { top: 20px; }.menu-toggle span:nth-child(3) { top: 27px; }
        .menu-toggle[aria-expanded="true"] span:nth-child(1) { top: 20px; transform: rotate(45deg); }
        .menu-toggle[aria-expanded="true"] span:nth-child(2) { opacity: 0; transform: translateX(-5px); }
        .menu-toggle[aria-expanded="true"] span:nth-child(3) { top: 20px; transform: rotate(-45deg); }
        @media (min-width: 701px) { .nav-item:hover .nav-chevron, .nav-item:focus-within .nav-chevron { transform: rotate(225deg) translate(-1px,-1px); } }
        @media (max-width: 700px) {
            .nav-inner { width: calc(100% - 36px); }
            .smc-logo { width: min(222px,56vw); height: 31px; }.riyadi-logo { width: 82px; }
            .menu-toggle { display: block; }
            .nav-links { position: absolute; top: 100%; left: 0; right: 0; align-self: auto; max-height: 0; overflow-x: hidden; overflow-y: auto; padding: 0 22px; flex-direction: column; align-items: stretch; gap: 0; visibility: hidden; background: #fff; box-shadow: 0 14px 20px rgba(13,36,68,.10); opacity: 0; pointer-events: none; transform: translateY(-10px); transition: max-height .35s,padding .3s,opacity .22s,transform .3s,visibility .3s; }
            .nav-links::after { display: none; }
            .nav-links.open { max-height: 78svh; padding: 12px 22px 20px; visibility: visible; opacity: 1; pointer-events: auto; transform: translateY(0); }
            .nav-links > a { padding: 13px 4px; }.nav-item { width: 100%; border-bottom: 1px solid #edf0f4; }
            .nav-trigger { width: 100%; justify-content: space-between; padding: 14px 4px; }
            .mega-menu { position: static; display: block; max-height: 0; overflow: hidden; padding: 0; border: 0; background: #f7f9fc; box-shadow: none; transition: max-height .32s,opacity .22s,transform .25s,visibility .32s; }
            .nav-item.open .mega-menu { max-height: 48svh; }
            .mega-content { display: block; padding: 17px 12px; }.mega-intro { display: none; }
            .mega-products-list { grid-template-columns: repeat(2,minmax(0,1fr)); gap: 2px 8px; }
            .mega-product-link { min-height: 44px; padding: 7px 4px; }.mega-product-name { font-size: 11px; }
            .mega-about-grid { grid-template-columns: 1fr; gap: 8px; }.mega-about-card { min-height: 0; padding: 13px 14px; }
            .nav-links .contact-link { margin-top: 7px; text-align: center; }
        }

/* Use text color alone to mark the current navigation page. */
.nav-links > a.active:not(.contact-link), .nav-trigger.active { color: #7b8796; }
.nav-links .contact-link.active, .nav-links .contact-link.active:hover { background: #2286ff; color: #fff; }