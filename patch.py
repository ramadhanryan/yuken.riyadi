import re
p=r'C:\laragon\www\laravel11\resources\views\home.blade.php'
s=open(p).read()

s=s.replace("<a href=\"#products\">Products</a>","<a href=\"#products\">Products</a>\n                <a href=\"#applications\">Applications</a>")

section = r'''
        <section class="applications-section" id="applications" aria-labelledby="applications-title">
            <div class="applications-inner">
                <div class="applications-heading">
                    <div>
                        <p class="applications-kicker">Where Yuken works</p>
                        <h2 class="applications-title" id="applications-title">Applications</h2>
                    </div>
                    <p class="applications-description">Hydraulic solutions trusted across diverse industries and heavy-duty applications.</p>
                </div>
                <div class="slider-wrap">
                    <button class="slider-btn prev" aria-label="Previous">&#8249;</button>
                    <div class="slider-track" id="appTrack">
                        @php
                            $applications = [
                                ['name' => 'Automotive Transportation', 'image' => 'Automotive Transportation.jpg'],
                                ['name' => 'Construction & Earth-moving Equipment', 'image' => 'Construction&Earth-movingEquipment.jpg'],
                                ['name' => 'Industrial Robots', 'image' => 'IndustrialRobotos.jpg'],
                                ['name' => 'Machine Tools', 'image' => 'machine-tools.jpg'],
                                ['name' => 'Manufacturing Machinery', 'image' => 'ManufacturingMachinery.jpg'],
                                ['name' => 'Plastic Processing', 'image' => 'plastic-processing.jpg'],
                                ['name' => 'Power Generation', 'image' => 'PowerGeneration.jpg'],
                                ['name' => 'Specialized Manufacturing', 'image' => 'SpecializedManufacturing.jpg'],
                                ['name' => 'Steel Plant Equipment', 'image' => 'steel-plant-equipment.jpg'],
                            ];
                        @endphp
                        @foreach ($applications as $app)
                            <div class="app-slide">
                                <img src="{{ asset('images/' . $app['image']) }}" alt="{{ $app['name'] }}" loading="lazy">
                                <span class="app-label">{{ $app['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                    <button class="slider-btn next" aria-label="Next">&#8250;</button>
                </div>
            </div>
        </section>
'''
s=s.replace('    </main>','    '+section+'    </main>')

css = r'''
        .applications-section { padding: 104px 24px 112px; background: #f1f5f9; scroll-margin-top: 72px; }
        .applications-inner { width: min(1180px, 100%); margin: 0 auto; }
        .applications-heading { display: flex; align-items: end; justify-content: space-between; gap: 32px; margin-bottom: 38px; }
        .applications-kicker { margin: 0 0 11px; color: #1769c2; font-size: 11px; font-weight: 750; letter-spacing: .18em; text-transform: uppercase; }
        .applications-title { margin: 0; color: #142945; font-size: clamp(34px, 4vw, 48px); line-height: 1.1; letter-spacing: -.04em; }
        .applications-description { max-width: 430px; margin: 0 0 3px; color: #637287; font-size: 15px; line-height: 1.75; }
        .slider-wrap { position: relative; }
        .slider-track { display: flex; gap: 18px; overflow-x: auto; scroll-snap-type: x mandatory; scroll-behavior: smooth; padding: 4px 2px 12px; scrollbar-width: none; }
        .slider-track::-webkit-scrollbar { display: none; }
        .app-slide { flex: 0 0 320px; scroll-snap-align: start; position: relative; border-radius: 8px; overflow: hidden; background: #fff; box-shadow: 0 8px 24px rgba(22,52,88,.08); }
        .app-slide img { width: 100%; height: 220px; object-fit: cover; display: block; }
        .app-label { position: absolute; left: 12px; bottom: 12px; padding: 6px 10px; background: rgba(16,43,92,.85); color: #fff; font-size: 13px; font-weight: 600; border-radius: 4px; }
        .slider-btn { position: absolute; top: 50%; transform: translateY(-50%); z-index: 2; width: 40px; height: 40px; border: 0; border-radius: 50%; background: #fff; color: #102b5c; font-size: 24px; line-height: 1; cursor: pointer; box-shadow: 0 6px 16px rgba(13,36,68,.15); }
        .slider-btn.prev { left: -12px; }
        .slider-btn.next { right: -12px; }
        @media (max-width: 700px) {
            .applications-section { padding: 76px 20px 82px; }
            .applications-heading { display: block; margin-bottom: 27px; }
            .applications-description { margin-top: 14px; font-size: 14px; }
            .app-slide { flex: 0 0 80%; }
            .app-slide img { height: 180px; }
            .slider-btn { display: none; }
        }
'''
s=s.replace('        @media (prefers-reduced-motion: reduce)','        '+css+'\n        @media (prefers-reduced-motion: reduce)')

js = r'''
        const appTrack = document.getElementById('appTrack');
        const prevBtn = document.querySelector('.slider-btn.prev');
        const nextBtn = document.querySelector('.slider-btn.next');
        if (prevBtn) prevBtn.addEventListener('click', () => appTrack.scrollBy({ left: -340, behavior: 'smooth' }));
        if (nextBtn) nextBtn.addEventListener('click', () => appTrack.scrollBy({ left: 340, behavior: 'smooth' }));
'''
s=s.replace('    </script>','        '+js+'\n    </script>')
open(p,'w').write(s)
print("done")
