<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Rizky Intan Cahyani',
                'position' => 'Chief Executive Officer',
                'image' => 'team-images/rej7gjo2NXTef1AvlWoTOpK6QGfTlAxqof4skRcA.png',
                'email' => 'mail.intan.cahya@gmail.com',
                'facebook' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/intancahya/',
                'created_at' => '2022-09-09 13:33:10',
                'updated_at' => '2022-09-09 13:33:10',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sahdewi Bunga Safira',
                'position' => 'Chief Technology Officer',
                'image' => 'team-images/yJxulT0b7A9DlYxOnHyJVrbcTAxY3VbrvFS5fmTb.png',
                'email' => 'sahdewibunga@student.uns.ac.id',
                'facebook' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/sahdewibunga/',
                'created_at' => '2022-09-09 13:35:35',
                'updated_at' => '2022-09-09 13:35:35',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Tjut Aurel Azzahra',
                'position' => 'Chief Financial Officer',
                'image' => 'team-images/bheOwCEe5CH0cgwhLVv8d1zbtu26esPsdZkIjPxC.png',
                'email' => 'tjutaurel@student.uns.ac.id',
                'facebook' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/tjut-aurel-azzahra-5427741bb/',
                'created_at' => '2022-09-09 13:36:56',
                'updated_at' => '2022-09-09 13:36:56',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Farras Arkan Isnaini J.',
                'position' => 'Website Developer',
                'image' => 'team-images/GyJ7pAzs7jutdweGUKJWsz8auo0Cx80ob0HYTs7p.png',
                'email' => 'farras.arkan@gmail.com',
                'facebook' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/farrasarkan/',
                'created_at' => '2022-09-09 13:37:44',
                'updated_at' => '2022-09-09 13:37:44',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'M. Ardhana Gusti Syahputra',
                'position' => 'Mobile Developer',
                'image' => 'team-images/vMzFLCF7iBYpQdDcIiSGXbwuHZS8qKlEey1MqPOS.png',
                'email' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/in/muhammad-ardhana-a211a6214/',
                'created_at' => '2022-09-09 13:38:43',
                'updated_at' => '2022-09-09 13:38:43',
            ),
        ));
        
        
    }
}