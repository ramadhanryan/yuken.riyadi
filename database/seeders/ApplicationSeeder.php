<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        $applications = [
            ['automotive-transportation', 'Automotive Transportation', 'images/Automotive Transportation.webp'],
            ['construction-earth-moving-equipment', 'Construction & Earth-moving Equipment', 'images/Construction&Earth-movingEquipment.webp'],
            ['industrial-robots', 'Industrial Robots', 'images/IndustrialRobotos.webp'],
            ['machine-tools', 'Machine Tools', 'images/machine-tools.webp'],
            ['manufacturing-machinery', 'Manufacturing Machinery', 'images/ManufacturingMachinery.webp'],
            ['plastic-processing-forming-machinery', 'Plastic Processing and Forming Machinery', 'images/plastic-processing.webp'],
            ['power-generation', 'Power Generation', 'images/PowerGeneration.webp'],
            ['steel-plant-equipment', 'Steel Plant Equipment', 'images/steel-plant-equipment.webp'],
        ];

        foreach ($applications as $index => [$slug, $name, $image]) {
            Application::updateOrCreate(['slug' => $slug], [
                'name' => $name,
                'image' => $image,
                'sort_order' => $index + 1,
                'is_active' => true,
            ]);
        }
    }
}
