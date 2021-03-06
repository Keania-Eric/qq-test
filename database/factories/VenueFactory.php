<?php

namespace Database\Factories;

use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

class VenueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=> $this->faker->city. ' Square',
            'capacity'=> $this->faker->numberBetween($min=200, $max=5000),
            'desc'=> $this->faker->sentence
        ];
    }
}
