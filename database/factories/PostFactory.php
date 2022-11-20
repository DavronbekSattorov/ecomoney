<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => ucwords($this->faker->words(4, true)),
            'description' => $this->faker->paragraph(5),
            'option'=>$this->faker->randomElement(['buy', 'sell']),
            'location'=>$this->faker->address,
            'price'=>$this->faker->biasedNumberBetween($min = 10, $max = 600),
        ];
    }

    public function existing()
    {
        return $this->state(function (array $attributes) {
            return [
                'user_id' => $this->faker->numberBetween(1, 20),
            ];
        });
    }
}
