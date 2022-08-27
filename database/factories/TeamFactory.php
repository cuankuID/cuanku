<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'email' => $this->faker->safeEmail(),
            'facebook' => $this->faker->url(),
            'instagram' => $this->faker->url(),
            'linkedin' => $this->faker->url()
        ];
    }
}
