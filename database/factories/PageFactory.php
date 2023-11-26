<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(Page::statusesList('key')),
            'template' => $this->faker->randomElement(Page::templatesList('key')),
            'body' => implode(' ', array_map(function ($item) {
                return "<p>$item</p>";
            }, $this->faker->paragraphs(12))),
        ];
    }
}
