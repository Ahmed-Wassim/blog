<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraph(5),
            'featured' => $this->faker->boolean(),
            'views' => $this->faker->numberBetween(0, 1000),
            'image' =>  $this->faker->imageUrl(),
        ];
    }
}
