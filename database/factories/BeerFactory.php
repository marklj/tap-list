<?php

namespace Database\Factories;

use App\Models\beer;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = beer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'tap' => $this->faker->numberBetween(0, 15),
            'style' => $this->faker->words(2, true),
            'abv' => $this->faker->randomFloat(1, 3, 14),
            'ibu' => $this->faker->numberBetween(10, 110),
            'srm' => $this->faker->numberBetween(5, 85),
            'og' => $this->faker->randomFloat(3, 1.00, 1.1),
            'fg' => $this->faker->randomFloat(3, 1.00, 1.1),
//            'notes' => $this->faker->sentence(15),
            'active' => $this->faker->boolean,
        ];
    }
}
