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
                'created_at' => '2022-09-09 06:33:10',
                'updated_at' => '2022-09-09 06:33:10',
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
                'created_at' => '2022-09-09 06:35:35',
                'updated_at' => '2022-09-09 06:35:35',
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
                'created_at' => '2022-09-09 06:36:56',
                'updated_at' => '2022-09-09 06:36:56',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Irenea Gendis',
                'position' => 'Chief Marketing Officer',
                'image' => 'team-images/nxBK0eaaxMqcPypJrQSEELiIjkNOMRcZ95FN6xGQ.png',
                'email' => NULL,
                'facebook' => NULL,
                'instagram' => NULL,
                'linkedin' => 'https://www.linkedin.com/ireneagendis',
                'created_at' => '2022-12-10 01:28:13',
                'updated_at' => '2022-12-10 01:28:13',
            ),
        ));
        
        
    }
}