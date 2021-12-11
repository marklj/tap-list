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
                'name' => 'Oat Of This Swirled',
                'style' => 'Pastry Stout',
                'abv' => 12,
                'ibu' => 24,
                'srm' => 53,
                'og' => 1.117,
                'fg' => 1.037,
                'notes' => 'A bourbon infused combination of cocoa nibs, cinnamon, and vanilla.',
            ]);

//        Beer::factory()
//            ->create([
//                'tap' => 1,
//                'active' => true,
//                'name' => 'Harvest Moon',
//                'style' => 'Blood Orange Hefeweizen',
//                'abv' => 5.6,
//                'og' => 1.056,
//                'fg' => 1.013,
//                'ibu' => 14,
//                'notes' => 'A juicy dose of blood orange that will make you howl for more.',
//            ]);

        Beer::factory()
            ->create([
                'tap' => 3,
                'active' => true,
                'name' => 'Roundabouter',
                'style' => 'Tropical IPA',
                'brewery' => 'Other Brother',
                'ibu' => '23',
                'abv' => '6.6',
                'srm' => null,
                'og' => null,
                'fg' => null,
                'notes' => 'Classic tropical IPA with a medium body that launches the nectarine and cannabis aromas into perfect orbit. Keep it movin\'!'
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
