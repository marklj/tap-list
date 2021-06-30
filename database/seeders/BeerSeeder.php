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
                'tap' => 1,
                'active' => true,
                'name' => 'Hello Blond',
                'style' => 'Blond Ale',
                'abv' => 4.2,
                'ibu' => 21,
                'srm' => 22,
                'og' => 1.040,
                'fg' => 1.012,
                'notes' => 'Cloudy with a full body and pungent with notes of overripe strawberries, orange zest, gooseberries, dry white wine, and tangerine juice.',
            ]);

        Beer::factory()
            ->create([
                'tap' => 2,
                'active' => true,
                'name' => 'Dream Team',
                'style' => 'IPA',
                'abv' => 6.1,
                'ibu' => 53,
                'srm' => 33,
                'og' => 1.040,
                'fg' => 1.012,
                'notes' => 'Cloudy with a full body and pungent with notes of overripe strawberries, orange zest, gooseberries, dry white wine, and tangerine juice.',
            ]);

        Beer::factory()
            ->create([
                'tap' => 3,
                'active' => true,
                'name' => 'Campfire Stout',
                'style' => 'Stout',
                'brewery' => 'Belching Beaver'
            ]);
        Beer::factory()
            ->create([
                'tap' => 4,
                'active' => true,
                'name' => 'Juice Cruz',
                'style' => 'Sour Milkshake IPA',
                'brewery' => 'Alvarado Street Brewery'
            ]);
    }
}
