<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amount>
 */
class AmountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trainee_id'=>fake()->numberBetween(1,10),
            'training_batche_id'=>fake()->numberBetween(1,10),
            'amount'=>fake()->randomDigit(),

        ];
    }
}
