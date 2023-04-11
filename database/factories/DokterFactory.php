<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\spesialis;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dokter>
 */
class DokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'nama' => $this->faker->name(),
            'tarif' => $this->faker->randomNumber(5, true),
            'spesialis_id' => $this->faker->numberBetween(1, 12)
        ];
    }
}
