<?php

namespace Database\Factories;

use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Track::class;

    public function definition()
    {
        return [
            //
            'name'     => $this->faker->word,
            'filename' => null,
            'color'    => $this->faker->hexColor,
        ];
    }
}
