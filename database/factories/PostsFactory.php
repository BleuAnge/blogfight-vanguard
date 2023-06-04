<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $format = ['Premium' , 'V-Premium' , 'D-Standard'];
        $nation = ['Keter Sanctuary' , 'Dragon Empire' , 'Stoichea' , 'Dark State' , 'Bradnt Gate' , 'Lyrical Monestario'];
        $tags = $format[rand(0 , 2)] . ',' . $nation[rand(0 , 5)];
        return [
            'title' => $this->faker->sentence(),
            'tags' => $tags,
            'description' => $this->faker->paragraph(4),
            'image' => $this->faker->imageUrl(),
            'sender' => $this->faker->companyEmail(),
        ];
    }
}
