p=r'C:\laragon\www\laravel11\resources\views\home.blade.php'
s=open(p).read()
bad = """        const appTrack = document.getElementById('appTrack');
        const prevBtn = document.querySelector('.slider-btn.prev');
        const nextBtn = document.querySelector('.slider-btn.next');
        if (prevBtn) prevBtn.addEventListener('click', () => appTrack.scrollBy({ left: -340, behavior: 'smooth' }));
        if (nextBtn) nextBtn.addEventListener('click', () => appTrack.scrollBy({ left: 340, behavior: 'smooth' }));


    </main>"""
good = "\n    </main>"
s=s.replace(bad, good)
s=s.replace("ddEventListener('click', () => appTrack.scrollBy({ left: 340, behavior: 'smooth' }));\n","")
s=s.replace("    </script>","        const appTrack = document.getElementById('appTrack');\n        const prevBtn = document.querySelector('.slider-btn.prev');\n        const nextBtn = document.querySelector('.slider-btn.next');\n        if (prevBtn) prevBtn.addEventListener('click', () => appTrack.scrollBy({ left: -340, behavior: 'smooth' }));\n        if (nextBtn) nextBtn.addEventListener('click', () => appTrack.scrollBy({ left: 340, behavior: 'smooth' }));\n    </script>")
open(p,'w').write(s)
print("done")
