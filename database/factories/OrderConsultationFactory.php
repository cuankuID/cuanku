<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(3,10),
            'status_id' => 1,
            'category_id' => mt_rand(1,2),
            'no_order' => 'LC-' . $this->faker->uuid(),
            'schedule' => $this->faker->dateTimeInInterval('+1 days', '+14 days'),
            'problem' => $this->faker->sentence(mt_rand(3,6))
        ];
    }
}
