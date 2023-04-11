<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\edukasi>
 */
class EdukasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(1,5)),
            'exert' => $this->faker->paragraph(mt_rand(1,2)),
            'body' => $this->faker->paragraphs(mt_rand(2,4), true)
        ];
    }
}
