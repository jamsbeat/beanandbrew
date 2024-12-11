<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'milk' => $this->faker->randomElement(['Whole', 'Skim', 'Almond', 'Soy']),
            'size' => $this->faker->randomElement(['Small', 'Medium', 'Large']),
        ];
    }
}