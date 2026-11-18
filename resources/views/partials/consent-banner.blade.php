<style>
    .site-notice {
        --sn-navy: #142f5b;
        --sn-blue: #203d91;
        --sn-blue-dark: #142f70;
        --sn-text: #3a4a66;
        --sn-muted-bg: #f3f6fc;
        --sn-border: rgba(20, 47, 91, .1);

        position: fixed;
        z-index: 1000;
        right: 24px;
        bottom: max(24px, env(safe-area-inset-bottom));
        width: min(440px, calc(100vw - 32px));
        overflow: hidden;
        color: var(--sn-text);
        background: #fff;
        border: 1px solid var(--sn-border);
        border-radius: 16px;
        box-shadow:
            0 2px 6px rgba(13, 36, 68, .06),
            0 20px 48px rgba(13, 36, 68, .18);
        font: 14px/1.55 system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
    }
    /* aksen warna tipis di sisi atas */
    .site-notice::before {
        content: "";
        display: block;
        height: 4px;
        background: linear-gradient(90deg, var(--sn-blue), #4a74e0);
    }
    .site-notice[hidden] { display: none; }
    .site-notice:not([hidden]) { animation: site-notice-in .35s cubic-bezier(.2, .8, .2, 1) both; }

    .site-notice-body { padding: 20px 22px 22px; }

    .site-notice-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 14px;
    }
    .site-notice-badge {
        display: grid;
        flex: none;
        place-items: center;
        width: 40px;
        height: 40px;
        color: var(--sn-blue);
        background: var(--sn-muted-bg);
        border-radius: 11px;
    }
    .site-notice-title {
        margin: 0;
        color: var(--sn-navy);
        font-size: 16px;
        font-weight: 700;
        line-height: 1.3;
        letter-spacing: -.01em;
    }

    .site-notice-list {
        display: grid;
        gap: 10px;
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .site-notice-item {
        display: flex;
        gap: 12px;
        padding: 12px 14px;
        background: var(--sn-muted-bg);
        border-radius: 11px;
    }
    .site-notice-item svg { flex: none; margin-top: 2px; color: var(--sn-blue); }
    .site-notice-item h3 {
        margin: 0 0 2px;
        color: var(--sn-navy);
        font-size: 13.5px;
        font-weight: 700;
    }
    .site-notice-item p { margin: 0; font-size: 13px; line-height: 1.5; }

    .site-notice-actions { margin-top: 18px; }
    .site-notice-button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 11px 18px;
        color: #fff;
        background: var(--sn-blue);
        border: 0;
        border-radius: 10px;
        box-shadow: 0 1px 2px rgba(20, 47, 112, .25);
        font: inherit;
        font-weight: 600;
        cursor: pointer;
        transition: background-color .15s ease, transform .15s ease, box-shadow .15s ease;
    }
    .site-notice-button:hover {
        background: var(--sn-blue-dark);
        box-shadow: 0 4px 12px rgba(20, 47, 112, .28);
    }
    .site-notice-button:active { transform: translateY(1px); }
    .site-notice-button:focus-visible { outline: 3px solid #8caaff; outline-offset: 3px; }

    @keyframes site-notice-in {
        from { opacity: 0; transform: translateY(16px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    @media (prefers-reduced-motion: reduce) {
        .site-notice:not([hidden]) { animation: none; }
        .site-notice-button { transition: none; }
    }
    @media (max-width: 600px) {
        .site-notice {
            right: 12px;
            bottom: max(12px, env(safe-area-inset-bottom));
            width: calc(100vw - 24px);
            border-radius: 14px;
        }
        .site-notice-body { padding: 18px 16px 16px; }
    }
</style>

<aside class="site-notice" id="siteNotice" role="region" aria-labelledby="siteNoticeTitle" hidden>
    <div class="site-notice-body">
        <header class="site-notice-header">
            <span class="site-notice-badge" aria-hidden="true">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <polyline points="9 12 11 14 15 10"/>
                </svg>
            </span>
            <h2 class="site-notice-title" id="siteNoticeTitle">Informasi Cache dan Cookie</h2>
        </header>

        <ul class="site-notice-list">
            <li class="site-notice-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                </svg>
                <div>
                    <h3>Cache performa</h3>
                    <p>Kami menyimpan sementara data katalog dan aset situs agar halaman dapat dimuat lebih cepat. Cache ini tidak menyimpan informasi pribadi Anda.</p>
                </div>
            </li>
            <li class="site-notice-item">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="11" width="18" height="11" rx="2"/>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                </svg>
                <div>
                    <h3>Cookie esensial</h3>
                    <p>Situs dapat menggunakan cookie teknis untuk menjalankan fitur dasar. Kami tidak menggunakannya untuk iklan atau pelacakan. Pilihan persetujuan Anda disimpan di browser ini.</p>
                </div>
            </li>
        </ul>

        <div class="site-notice-actions">
            <button class="site-notice-button" id="siteNoticeAccept" type="button">Setuju dan tutup</button>
        </div>
    </div>
</aside>

<script>
    (() => {
        const notice = document.getElementById('siteNotice');
        const acceptButton = document.getElementById('siteNoticeAccept');
        const consentKey = 'smc-site-notice-v1';

        try {
            if (window.localStorage.getItem(consentKey) !== 'accepted') notice.hidden = false;
        } catch (_) {
            notice.hidden = false;
        }

        acceptButton.addEventListener('click', () => {
            try { window.localStorage.setItem(consentKey, 'accepted'); } catch (_) {}
            notice.hidden = true;
        });
    })();
</script>