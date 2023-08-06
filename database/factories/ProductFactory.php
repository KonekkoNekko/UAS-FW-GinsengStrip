<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'product_album' => fake()->words(3, true),
            'product_artist' => fake()->name($gender = 'male'|'female'),
            'product_price' => fake()->randomElement([200000, 300000, 400000]),
            'original_filename' => fake()->randomElement(['april skies - jesus mary chain (remove bg).png','countdown to extinction - megadeth (remove bg).png','in utero - nirvana (remove bg).png','jurang pemisah - yockie (remove bg).png','pablo honey - radiohead (remove bg).png']),
        ];
    }
}
