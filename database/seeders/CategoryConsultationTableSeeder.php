<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryConsultation;

class CategoryConsultationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryConsultation::create([
            'name' => 'Free',
            'price' => 0
        ]);
        CategoryConsultation::create([
            'name' => 'Silver',
            'price' => 50000,
        ]);
        CategoryConsultation::create([
            'name' => 'Gold',
            'price' => 100000,
        ]);
        CategoryConsultation::create([
            'name' => 'Platinum',
            'price' => 250000,
        ]);
    }
}
