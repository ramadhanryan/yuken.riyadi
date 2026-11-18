<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['linear-servo-valves', 'Linear Servo Valves', 'images/yuk-linear-servo-valves.jpg'],
            ['hydraulic-cylinders', 'Hydraulic Cylinders', 'images/yuk-hydraulics-cylinders.jpg'],
            ['flow-controls', 'Flow Controls', 'images/yuk-flow-control.jpg'],
            ['modules', 'Modules', 'images/yuk-modules.jpg'],
            ['pressure-control-valves', 'Pressure Control Valves', 'images/yuk-pressure-control-valve.jpg'],
            ['pumps', 'Pumps', 'images/yuk-pumps.jpg'],
            ['solenoid-valves', 'Solenoid Valves', 'images/yuk-solenoid-valves.jpg'],
        ];

        foreach ($categories as $index => [$slug, $name, $image]) {
            ProductCategory::updateOrCreate(['slug' => $slug], [
                'name' => $name,
                'image' => $image,
                'sort_order' => $index + 1,
                'is_active' => true,
            ]);
        }
    }
}
