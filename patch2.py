p=r'C:\laragon\www\laravel11\resources\views\home.blade.php'
s=open(p).read()
repls = [
 ("'Automotive Transportation.jpg'","'Automotive Transportation.webp'"),
 ("'Construction&Earth-movingEquipment.jpg'","'Construction&Earth-movingEquipment.webp'"),
 ("'IndustrialRobotos.jpg'","'IndustrialRobotos.webp'"),
 ("'machine-tools.jpg'","'machine-tools.webp'"),
 ("'ManufacturingMachinery.jpg'","'ManufacturingMachinery.webp'"),
 ("'PowerGeneration.jpg'","'PowerGeneration.webp'"),
 ("'SpecializedManufacturing.jpg'","'SpecializedManufacturing.webp'"),
 ("'steel-plant-equipment.jpg'","'steel-plant-equipment.webp'"),
]
for a,b in repls:
    s=s.replace(a,b)
# remove plastic-processing (no webp) slide? keep jpg
open(p,'w').write(s)
print("done")
