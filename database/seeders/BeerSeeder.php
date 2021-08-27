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
                'name' => 'Get Oat Of Your Mind',
                'style' => 'New England IPA',
                'abv' => 5.6,
                'ibu' => 25,
                'srm' => 8.7,
                'og' => 1.062,
                'fg' => 1.020,
                'notes' => '',
            ]);

        Beer::factory()
            ->create([
                'tap' => 1,
                'active' => true,
                'name' => 'Bring on the Wheat',
                'style' => 'American Wheat',
                'abv' => 4.7,
                'og' => 1.054,
                'fg' => 1.018,
                'ibu' => 21
            ]);

        Beer::factory()
            ->create([
                'tap' => 4,
                'active' => true,
                'name' => 'Sparkling Water w/ Calamansi Friut',
                'style' => 'H20',
//                'abv' => 4.7,
//                'og' => 1.054,
//                'fg' => 1.018,
//                'ibu' => 21
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
