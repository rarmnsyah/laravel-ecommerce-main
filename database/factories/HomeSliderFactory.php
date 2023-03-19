<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeSlider>
 */
class HomeSliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'top_title' => $this->faker->text(10),
            'title' => $this->faker->text(10),
            'sub_title' => $this->faker->text(10),
            'image' => 'slider-'.$this->faker->numberBetween(1,2).'.png'
        ];
    }
}
