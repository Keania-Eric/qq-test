<?php

namespace Database\Factories;

use App\Models\Movie;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=> $this->faker->name. ' Movie',
            'desc'=> $this->faker->sentence,
            'view_date'=> $this->faker->dateTimeThisMonth($max = 'now', $timezone=null),
            'duration'=> $this->faker->randomDigit(),
            'tag_line'=> $this->faker->catchPhrase,
            'avg_rating'=> 0,
            'status'=>1,
            'venue_id'=> Venue::factory()->create()->id,
            'cover_img'=> $this->faker->imgageUrl($width=640, $height=480)
        ];
    }
}
