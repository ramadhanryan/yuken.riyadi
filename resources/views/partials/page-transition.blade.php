<style>
    #pageTransition {
        position: fixed;
        z-index: 3000;
        inset: 0;
        display: grid;
        place-items: center;
        padding: 24px;
        background: rgba(248, 250, 255, .94);
        -webkit-backdrop-filter: blur(9px);
        backdrop-filter: blur(9px);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: opacity .32s cubic-bezier(.22, 1, .36, 1), visibility 0s linear .32s;
    }
    #pageTransition.is-active { opacity: 1; visibility: visible; pointer-events: auto; transition-delay: 0s; }
    .page-transition-card { display: grid; justify-items: center; gap: 13px; color: #203d91; font: 600 14px/1.4 Inter, Arial, sans-serif; letter-spacing: .02em; opacity: 0; transform: translateY(8px) scale(.98); transition: opacity .28s ease, transform .36s cubic-bezier(.22, 1, .36, 1); }
    .page-transition-icon { display: grid; width: 74px; height: 74px; place-items: center; border: 1px solid rgba(32, 61, 145, .14); border-radius: 22px; background: #fff; box-shadow: 0 12px 35px rgba(32, 61, 145, .12); }
    .page-transition-icon svg { width: 38px; height: 38px; fill: none; stroke: currentColor; stroke-width: 1.6; stroke-linecap: round; stroke-linejoin: round; }
    #pageTransition.is-active .page-transition-card { opacity: 1; transform: translateY(0) scale(1); }
    #pageTransition[data-kind="product"] .transition-default-icon { display: none; }
    #pageTransition:not([data-kind="product"]) .transition-product-icon { display: none; }
    .page-transition-progress { width: 92px; height: 3px; overflow: hidden; border-radius: 4px; background: rgba(32, 61, 145, .12); }
    .page-transition-progress::after { display: block; width: 42%; height: 100%; border-radius: inherit; background: #f39200; content: ""; animation: pageTransitionProgress .8s ease-in-out infinite alternate; }
    @keyframes pageTransitionProgress { from { transform: translateX(-10%); } to { transform: translateX(150%); } }
    @keyframes pageTransitionContentIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
    body.page-transition-entering > main, body.page-transition-entering > .privacy-hero, body.page-transition-entering > .site-footer { animation: pageTransitionContentIn .52s cubic-bezier(.22, 1, .36, 1) both; }
    @media (prefers-reduced-motion: reduce) {
        #pageTransition { transition-duration: .01ms; }
        .page-transition-card { transition-duration: .01ms; }
        body.page-transition-entering > main, body.page-transition-entering > .privacy-hero, body.page-transition-entering > .site-footer { animation-duration: .01ms; }
        .page-transition-progress::after { animation-duration: 1.8s; }
    }
</style>
<div id="pageTransition" aria-hidden="true" role="status" aria-live="polite">
    <div class="page-transition-card">
        <div class="page-transition-icon" aria-hidden="true">
            <svg class="transition-product-icon" viewBox="0 0 40 40"><path d="M7 12.5 20 6l13 6.5v15L20 34 7 27.5v-15Z"/><path d="m7.5 12.8 12.5 6.4 12.5-6.4M20 19.2V34M13 9.5l13 6.6M28 23h5M30.5 20.5v5"/><circle cx="30.5" cy="23" r="4.5"/></svg>
            <svg class="transition-default-icon" viewBox="0 0 40 40"><path d="M8 12.5h24M8 20h18M8 27.5h13"/><circle cx="30" cy="27" r="5"/><path d="m28 27 1.4 1.4L32 25.5"/></svg>
        </div>
        <span id="pageTransitionLabel">Loading page</span>
        <span class="page-transition-progress" aria-hidden="true"></span>
    </div>
</div>
<script>
    (() => {
        const overlay = document.getElementById('pageTransition');
        const label = document.getElementById('pageTransitionLabel');
        const storageKey = 'smc-page-transition-v1';
        if (!overlay || !label) return;

        const isProductPage = url => /^\/(product|products)(\/|$)/i.test(url.pathname);
        const activate = kind => {
            overlay.dataset.kind = kind;
            label.textContent = kind === 'product' ? 'Loading products' : 'Loading page';
            overlay.setAttribute('aria-hidden', 'false');
            overlay.classList.add('is-active');
        };
        const deactivate = () => {
            overlay.classList.remove('is-active');
            overlay.setAttribute('aria-hidden', 'true');
        };

        try {
            const pending = JSON.parse(sessionStorage.getItem(storageKey) || 'null');
            sessionStorage.removeItem(storageKey);
            if (pending && Date.now() - pending.time < 10000) {
                activate(pending.kind === 'product' ? 'product' : 'default');
                document.body.classList.add('page-transition-entering');
                window.setTimeout(() => {
                    deactivate();
                    document.body.classList.remove('page-transition-entering');
                }, 220);
            }
        } catch (_) { /* Storage may be disabled by the browser. */ }

        document.addEventListener('click', event => {
            if (event.defaultPrevented || event.button !== 0 || event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return;
            const link = event.target.closest('a[href]');
            if (!link || link.hasAttribute('download') || link.hasAttribute('data-no-transition') || link.getAttribute('aria-disabled') === 'true') return;
            if (link.target && link.target.toLowerCase() !== '_self') return;

            let destination;
            try { destination = new URL(link.href, window.location.href); } catch (_) { return; }
            if (destination.origin !== window.location.origin) return;
            if (destination.pathname === window.location.pathname && destination.search === window.location.search && destination.hash) return;
            if (destination.href === window.location.href) return;

            const kind = isProductPage(destination) ? 'product' : 'default';
            try { sessionStorage.setItem(storageKey, JSON.stringify({ kind, time: Date.now() })); } catch (_) {}
            event.preventDefault();
            activate(kind);
            window.setTimeout(() => window.location.assign(destination.href), 340);
        });

        window.addEventListener('pageshow', event => { if (event.persisted) deactivate(); });
    })();
</script>