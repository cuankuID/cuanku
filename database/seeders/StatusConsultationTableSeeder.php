<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusConsultation;

class StatusConsultationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusConsultation::create([
            'name' => 'Requesting'
        ]);

        StatusConsultation::create([
            'name' => 'Waiting Payment'
        ]);

        StatusConsultation::create([
            'name' => 'Accepted'
        ]);

        StatusConsultation::create([
            'name' => 'Finished'
        ]);
    }
}
