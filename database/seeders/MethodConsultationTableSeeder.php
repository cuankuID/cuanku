<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MethodConsultation;

class MethodConsultationTableSeeder extends Seeder
{
    public function run()
    {
        MethodConsultation::create([
            'name' => 'BCA',
            'account_number' => '01036745619719',
            'account_name' => 'Cuanku Indonesia',
        ]);

        MethodConsultation::create([
            'name' => 'BNI',
            'account_number' => '0103674456532',
            'account_name' => 'Cuanku Indonesia',
        ]);

        MethodConsultation::create([
            'name' => 'BRIVA',
            'account_number' => '01036745612131',
            'account_name' => 'Cuanku Indonesia',
        ]);

        MethodConsultation::create([
            'name' => 'Mandiri',
            'account_number' => '01036745616878',
            'account_name' => 'Cuanku Indonesia',
        ]);
    }
}
