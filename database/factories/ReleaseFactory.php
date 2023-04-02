<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Release>
 */
class ReleaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'talent_name' => $this->faker->sentence(mt_rand(1, 2)),
            'title' => $this->faker->sentence(mt_rand(1, 2)),   
            'slug' => $this->faker->slug(mt_rand(1, 2)),
            'talent_id' => mt_rand(1, 3),
            'category_id' => mt_rand(1, 3),
            'desc' => $this->faker->paragraph(mt_rand(3, 5)),
            'excerpt' => $this->faker->paragraph(mt_rand(1, 2)),
            'email' => $this->faker->safeEmail(),
            'instagram' => $this->faker->sentence(1),
            // 'artwork' => $this->faker->sentence(1),
            // 'talent_photo' => $this->faker->sentence(1),
        ];
    }
}
