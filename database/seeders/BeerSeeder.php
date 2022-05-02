<?php

namespace Database\Seeders;

use App\Models\beer;
use Illuminate\Database\Seeder;

class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beer::factory()
            ->create([
                'tap' => 2,
                'active' => true,
                'name' => 'Droid Juice',
                'style' => 'Juicy IPA',
                'abv' => 8.1,
                'ibu' => 28,
                'srm' => 6.2,
                'og' => 1.080,
                'fg' => 1.018,
                'notes' => 'Tropical, fruity and floral flavours and aromas, providing notes of mango and grapefruit.',
            ]);
//
//        Beer::factory()
//            ->create([
//                'tap' => 1,
//                'active' => true,
//                'name' => 'Christmas Ale',
//                'style' => 'Seasonal Ale',
//                'abv' => 6.8,
//                'og' => 1.07,
//                'fg' => 1.018,
//                'ibu' => 30,
//                'notes' => 'Featuring ginger, cinnamon and a dollop of honey to create a wonderful ale that can be enjoyed year round.',
//            ]);

        Beer::factory()
            ->create([
                'tap' => 3,
                'active' => true,
                'name' => 'Snickerdoodle!',
                'style' => 'Blonde Stout',
//                'brewery' => 'Other Brother',
                'ibu' => '37',
                'abv' => '8.1',
                'srm' => 7.2,
                'og' => 1.092,
                'fg' => 1.030,
                'notes' => 'Big and sweet, this in-your-face cinnamon bomb will give you vibes of fresh baked cookies right out of the oven.'
            ]);

        Beer::factory()
            ->create([
                'tap' => 4,
                'active' => true,
                'name' => 'Sparkling Water',
                'style' => 'H20',
                'abv' => null,
                'ibu' => null,
                'srm' => null,
                'og' => null,
                'fg' => null,
                'notes' => '',
            ]);
//        Beer::factory()
//            ->create([
//                'tap' => 4,
//                'active' => true,
//                'name' => 'Juice Cruz',
//                'style' => 'Sour Milkshake IPA',
//                'brewery' => 'Alvarado Street Brewery'
//            ]);
    }
}
