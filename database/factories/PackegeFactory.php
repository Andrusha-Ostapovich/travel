<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Packege>
 */
class PackegeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'head' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'footer' => $this->faker->sentence,
            'included' => [
                'food' => $this->faker->,
                'feature2' => $this->faker->word,
                // додайте інші включені функції за необхідності
            ],
            'price' => $this->faker->randomFloat(2, 10, 500), // випадкова десяткова цифра в діапазоні від 10 до 500
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
