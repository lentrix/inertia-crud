<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner' => fake()->name,
            'address' => fake()->address,
            'phone' => fake()->phoneNumber,
            'type' => fake()->randomElement(['Condominium Unit','House','Apartment','Villa','Hut','Cabin']),
            'rental_amount' => fake()->numberBetween(2000,15000)
        ];
    }
}
