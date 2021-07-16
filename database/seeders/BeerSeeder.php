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
                'name' => 'Hazed and Confused',
                'style' => 'Hazy IPA',
                'abv' => 5.9,
                'ibu' => 77,
                'srm' => null,
                'og' => 1.057,
                'fg' => 1.012,
                'notes' => '',
            ]);
//
//        Beer::factory()
//            ->create([
//                'tap' => 3,
//                'active' => true,
//                'name' => 'Campfire Stout',
//                'style' => 'Stout',
//                'brewery' => 'Belching Beaver'
//            ]);
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
