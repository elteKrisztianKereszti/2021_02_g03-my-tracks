<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Project::class;

    public function definition()
    {
        return [
            'name' => $this->faker->lastName(),
            'description' => $this->faker->optional()->sentence(),
            'image_url' => $this->faker->optional()->imageUrl(),
        ];
    }
}
