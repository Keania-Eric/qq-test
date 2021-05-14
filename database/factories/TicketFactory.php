<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=> 'Common NT'.$this->faker->randomDigit(),
            'price'=> $this->faker->numberBetween($min=2000, $max=5000),
            'desc'=> $this->faker->sentence
        ];
    }
}
