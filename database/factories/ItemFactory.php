<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'productname' => $this->faker->word,
            'productnumber' => rand(1, 1000),
            'shortdescr' => $this->faker->sentence,
            'price' => rand(1, 1000),
            'longdescr' => $this->faker->text,
            'languages_id' => 1,
        ];
    }
}
