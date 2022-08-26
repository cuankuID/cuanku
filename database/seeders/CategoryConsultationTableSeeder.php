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
            'name' => 'Standard',
            'price' => 0
        ]);
        CategoryConsultation::create([
            'name' => 'Premium',
            'price' => 20000
        ]);
    }
}
