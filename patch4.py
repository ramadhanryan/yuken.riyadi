p=r'C:\laragon\www\laravel11\resources\views\home.blade.php'
s=open(p).read()

# Remove stray JS block before </main>
bad = """        const appTrack = document.getElementById('appTrack');
        const prevBtn = document.querySelector('.slider-btn.prev');
        const nextBtn = document.querySelector('.slider-btn.next');
        if (prevBtn) prevBtn.addEventListener('click', () => appTrack.scrollBy({ left: -340, behavior: 'smooth' }));
        if (nextBtn) nextBtn.addEventListener('click', () => appTrack.scrollBy({ left: 340, behavior: 'smooth' }));


    </main>"""
s=s.replace(bad, "\n    </main>")

# Remove broken leftover
s=s.replace("ddEventListener('click', () => appTrack.scrollBy({ left: 340, behavior: 'smooth' }));\n", "")

# Add slider listeners inside the real script block
s=s.replace("    </script>", "        const appTrack = document.getElementById('appTrack');\n        const prevBtn = document.querySelector('.slider-btn.prev');\n        const nextBtn = document.querySelector('.slider-btn.next');\n        if (appTrack && prevBtn) prevBtn.addEventListener('click', () => appTrack.scrollBy({ left: -340, behavior: 'smooth' }));\n        if (appTrack && nextBtn) nextBtn.addEventListener('click', () => appTrack.scrollBy({ left: 340, behavior: 'smooth' }));\n    </script>")

open(p,'w').write(s)
print("done")
