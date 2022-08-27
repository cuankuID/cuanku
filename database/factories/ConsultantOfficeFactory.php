<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultantOfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    // $table->string('name');
    // $table->string('slug');
    // $table->string('image')->nullable();
    // $table->text('information')->nullable();
    // $table->string('phone')->nullable();
    // $table->string('email')->nullable();
    // $table->string('website')->nullable();
    // $table->foreignId('province_id');
    // $table->foreignId('city_id'); 
    // $table->string('full_address')->nullable();
    // $table->double('lat');
    // $table->double('long');

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'slug' => $this->faker->slug(),
            'information' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(3,6))) . '</p>',
            'phone' => 0 . $this->faker->randomNumber(9, true),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'province_id' => mt_rand(1,10),
            'city_id' => mt_rand(1,10),
            'full_address' => $this->faker->address(),
            'lat' => $this->faker->randomFloat(7, 60, 61),
            'long' => $this->faker->randomFloat(7, 109, 110),
        ];
    }
}
