<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_name = $this->faker->unique()->words($nb=2, $asText = true);
        $slug = Str::slug($category_name, '-');
        $image = $this->faker->image;
        return [
            'name' => $category_name,
            'slug' => $slug,
            'image' => 'categoriy-thumb'.$this->faker->numberBetween(1,8),
        ];
    }
}
