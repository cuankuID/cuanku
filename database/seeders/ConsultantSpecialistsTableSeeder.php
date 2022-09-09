<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConsultantSpecialistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('consultant_specialists')->delete();
        
        \DB::table('consultant_specialists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Konsultan Perencana Keuangan',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Konsultan Akuntansi',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Konsultan Investasi',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Konsultan Financial Auditing',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Konsultan Pajak',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
        ));
        
        
    }
}