<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Works>
 */
class WorksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakerFileName = $this->faker->image(
            "public/storage/worksimages",
            800,
            600
        );

        return [
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->paragraph(20),
            'image' => "worksimages/" . basename($fakerFileName),
        ];
    }
}
