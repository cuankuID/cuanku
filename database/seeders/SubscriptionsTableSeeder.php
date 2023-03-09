<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subscriptions')->delete();
        
        \DB::table('subscriptions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Silver',
                'price' => '50.000',
                'feature' => '<ul><li>Live Chat 3x</li><li>[Free] Template Keuangan + Tutorial Video</li><li>Article Access</li></ul>',
                'created_at' => '2023-02-25 10:41:33',
                'updated_at' => '2023-02-25 11:22:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Gold',
                'price' => '100.000',
                'feature' => '<ul><li>Live Chat 10x</li><li>[Premium] Template Pendataan Operasional</li><li>[Free] Laporan Keuangan + Tutorial Video</li><li>Article Access</li></ul>',
                'created_at' => '2023-02-25 11:24:31',
                'updated_at' => '2023-02-25 11:24:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Platinum',
                'price' => '250.000',
                'feature' => '<ul><li>Live Chat Sepuasnya</li><li>[Premium] Financial Statement, Budget Plan Template</li><li>[Premium] Template Pendataan Operasional</li><li>SPT Tutorial</li><li>Article Access</li></ul>',
                'created_at' => '2023-02-25 11:28:54',
                'updated_at' => '2023-02-25 11:28:54',
            ),
        ));
        
        
    }
}