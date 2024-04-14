<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    
    {
        // $etats=['nouveau','occasion','repare'];
        return [
            'code'=>fake()->randomNumber(9),
            'description'=>fake()->name(),
            'marque'=>fake()->jobTitle(),
            'etat'=>fake()->name()
        ];
    }
}
