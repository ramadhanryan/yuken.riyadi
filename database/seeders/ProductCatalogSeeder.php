<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCatalogSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ProductCategorySeeder::class,
            ApplicationSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
