<?php

namespace Database\Factories;

use App\Models\Hobby;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hobby>
 */
class HobbyFactory extends Factory
{
    protected $model = Hobby::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakerFileName = $this->faker->image(
            "public/storage/hobbiesimages",
            800,
            600
        );

        return [
            'sctitle' => $this->faker->sentence(),
            'section' => $this->faker->paragraph(20),

            'image' => "hobbiesimages/" . basename($fakerFileName),
        ];
    }
}
