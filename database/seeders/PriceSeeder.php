<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        price::create([
            'name' => 'Gratis',
            'value' => 0
        ]);

        price::create([
            'name' => '19.99 US$ (nivel 1)',
            'value' => 19.99
        ]);

        price::create([
            'name' => '49.99 US$ (nivel 2)',
            'value' => 49.99
        ]);

        price::create([
            'name' => '99.99 US$ (nivel 3)',
            'value' => 99.99
        ]);
    }
}
