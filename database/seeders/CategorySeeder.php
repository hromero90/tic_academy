<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Diseño Gráfico'
        ]);

        Category::create([
            'name' => 'Inteligencia Artificial'
        ]);

        Category::create([
            'name' => 'Ofimatica'
        ]);

        Category::create([
            'name' => 'Gratis'
        ]);
    }
}
