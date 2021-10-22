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
                'name' => 'BREWja IPA',
                'style' => 'Hazy IPA',
                'abv' => 7.4,
                'ibu' => 40,
                'srm' => 5.4,
                'og' => 1.072,
                'fg' => 1.016,
                'notes' => 'Fresh, hoppy, and so drinkable, it\'ll put a spell on you.',
            ]);

        Beer::factory()
            ->create([
                'tap' => 1,
                'active' => true,
                'name' => 'Harvest Moon',
                'style' => 'Blood Orange Hefeweizen',
                'abv' => 5.6,
                'og' => 1.056,
                'fg' => 1.013,
                'ibu' => 14,
                'notes' => 'A juicy dose of blood orange that will make you howl for more.',
            ]);

        Beer::factory()
            ->create([
                'tap' => 4,
                'active' => true,
                'name' => 'Sparkling Water w/ Calamansi Fruit',
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
