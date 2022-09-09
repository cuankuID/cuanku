<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Event',
                'slug' => 'event',
                'created_at' => '2022-09-09 14:18:53',
                'updated_at' => '2022-09-09 14:18:53',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tips n Trik',
                'slug' => 'tips-n-trik',
                'created_at' => '2022-09-09 14:18:53',
                'updated_at' => '2022-09-09 14:18:53',
            ),
        ));
        
        
    }
}