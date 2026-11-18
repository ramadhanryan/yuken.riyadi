@include('partials.consent-banner')

<script>
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    const navItems = Array.from(document.querySelectorAll('.nav-item'));

    const moveNavIndicator = target => {
        const navRect = navbar.getBoundingClientRect();
        const targetRect = target.getBoundingClientRect();
        navLinks.style.setProperty('--nav-indicator-left', `${targetRect.left - navRect.left}px`);
        navLinks.style.setProperty('--nav-indicator-width', `${targetRect.width}px`);
        navLinks.style.setProperty('--nav-indicator-opacity', '1');
    };
    const hideNavIndicator = () => navLinks.style.setProperty('--nav-indicator-opacity', '0');
    navLinks.querySelectorAll(':scope > a, .nav-trigger').forEach(item => {
        item.addEventListener('mouseenter', () => moveNavIndicator(item));
        item.addEventListener('focus', () => moveNavIndicator(item));
    });
    navLinks.addEventListener('mouseleave', hideNavIndicator);
    navLinks.addEventListener('focusout', event => {
        if (!navLinks.contains(event.relatedTarget)) hideNavIndicator();
    });

    const updateNavbar = () => {
        if (!navbar.classList.contains('always-visible')) {
            navbar.classList.toggle('visible', window.scrollY > 48);
        }
    };
    window.addEventListener('scroll', updateNavbar, { passive: true });
    updateNavbar();


    const closeNavItem = item => {
        item.classList.remove('open');
        item.querySelector('.nav-trigger').setAttribute('aria-expanded', 'false');
    };

    menuToggle.addEventListener('click', () => {
        const open = navLinks.classList.toggle('open');
        navItems.forEach(closeNavItem);
        menuToggle.setAttribute('aria-expanded', String(open));
        menuToggle.setAttribute('aria-label', open ? 'Close navigation menu' : 'Open navigation menu');
    });

    navItems.forEach(item => {
        const trigger = item.querySelector('.nav-trigger');
        trigger.addEventListener('click', () => {
            const shouldOpen = !item.classList.contains('open');
            navItems.forEach(closeNavItem);
            if (shouldOpen) {
                item.classList.add('open');
                trigger.setAttribute('aria-expanded', 'true');
            }
        });
        item.addEventListener('mouseenter', () => {
            if (window.matchMedia('(min-width: 701px)').matches) {
                navItems.forEach(closeNavItem);
                item.classList.add('open');
                trigger.setAttribute('aria-expanded', 'true');
            }
        });
        item.addEventListener('mouseleave', () => {
            if (window.matchMedia('(min-width: 701px)').matches && !item.contains(document.activeElement)) {
                closeNavItem(item);
            }
        });
    });

    navLinks.addEventListener('click', event => {
        if (event.target.closest('a')) {
            navItems.forEach(closeNavItem);
            navLinks.classList.remove('open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'Open navigation menu');
        }
    });
    document.addEventListener('click', event => {
        if (!event.target.closest('.nav-inner')) navItems.forEach(closeNavItem);
    });
    document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
            navItems.forEach(item => {
                const wasOpen = item.classList.contains('open');
                closeNavItem(item);
                if (wasOpen) item.querySelector('.nav-trigger').focus();
            });
            navLinks.classList.remove('open');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.setAttribute('aria-label', 'Open navigation menu');
        }
    });

    const appTrack = document.getElementById('appTrack');
    const prevBtn = document.querySelector('.slider-btn.prev');
    const nextBtn = document.querySelector('.slider-btn.next');
    const moveApplications = direction => {
        if (!appTrack) return;
        const firstSlide = appTrack.querySelector('.app-slide');
        if (!firstSlide) return;
        const gap = parseFloat(getComputedStyle(appTrack).gap) || 0;
        const step = firstSlide.getBoundingClientRect().width + gap;
        const maxScroll = appTrack.scrollWidth - appTrack.clientWidth;
        if (direction > 0 && appTrack.scrollLeft >= maxScroll - 4) {
            appTrack.scrollTo({ left: 0, behavior: 'smooth' });
        } else if (direction < 0 && appTrack.scrollLeft <= 4) {
            appTrack.scrollTo({ left: maxScroll, behavior: 'smooth' });
        } else {
            appTrack.scrollBy({ left: direction * step, behavior: 'smooth' });
        }
    };
    if (prevBtn) prevBtn.addEventListener('click', () => moveApplications(-1));
    if (nextBtn) nextBtn.addEventListener('click', () => moveApplications(1));
</script>
