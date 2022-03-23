<?php

namespace Database\Factories;

use App\Models\Filter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filter>
 */
class FilterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Filter::class;

    public function definition()
    {
        return [
            'name' => $this->faker->numerify('Filter ##')
        ];
    }
}
