<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InfoConsultantFactory extends Factory
{
    // $table->foreignId('consultant_id');
    // $table->foreignId('office_id')->nullable();
    // $table->string('slug');
    // $table->string('photo')->nullable();
    // $table->string('province');
    // $table->string('city');
    // $table->string('full_address')->nullable();
    // $table->string('price');
    // $table->string('specialist');
    // $table->string('work_experience');
    // $table->string('biography')->nullable();

    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = 1;

        return [
            'consultant_id' => $id++,
            'office_id' => mt_rand(1,9),
            'slug' => $this->faker->slug(),
            'province' => $this->faker->state(),
            'city' => $this->faker->city(),
            'full_address' => $this->faker->streetAddress(), 
            'price' => mt_rand(1,3) . '00000',
            'specialist' => $this->faker->randomElement(['Konsultan Akuntansi', 'Konsultan Pajak', 'Konsultan Investasi', 'Konsultan Financial Auditing', 'Konsultan Perencana Keuangan']),
            'work_experience' => mt_rand(1,6),
            'biography' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(3,6))) . '</p>'
        ];
    }
}
