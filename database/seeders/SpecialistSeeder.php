<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ConsultantSpecialist;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConsultantSpecialist::create([
            'name' => 'Konsultan Perencana Keuangan'
        ]);

        ConsultantSpecialist::create([
            'name' => 'Konsultan Akuntansi'
        ]);

        ConsultantSpecialist::create([
            'name' => 'Konsultan Investasi'
        ]);

        ConsultantSpecialist::create([
            'name' => 'Konsultan Financial Auditing'
        ]);

        ConsultantSpecialist::create([
            'name' => 'Konsultan Pajak'
        ]);
    }
}
