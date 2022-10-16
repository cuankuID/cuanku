<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'uuid' => '1',
                'name' => 'Muhammad Ardhana',
                'nik' => 32523542,
                'address' => 'Sebelas Maret University',
                'latitude' => -5.08,
                'longitude' => 123.47,
                'username' => 'Ardhana Ganteng',
                'email' => 'syahputra.ardhana@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MsagSMkLXTTonFQIBSItCOT7Vgxud5dzTEW7bHifglBdVONb3klD.',
                'status' => 1,
                'role_id' => 1,
                'pricing_tier_id' => 1,
                'access_chat_id' => '0',
                'remember_token' => NULL,
                'created_at' => '2022-09-15 05:02:46',
                'updated_at' => '2022-09-15 05:02:46',
                'active_status' => 0,
                'avatar' => 'WhatsApp Image 2022-08-16 at 20.11.04.jpeg-1663218335.jpg',
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
            ),
            1 => 
            array (
                'id' => 2,
                'uuid' => '1',
                'name' => 'Muhammad Ilham',
                'nik' => 32523541,
                'address' => 'Sebelas Maret University',
                'latitude' => -5.08,
                'longitude' => 123.47,
                'username' => 'Ilham',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UfmJq.IAgwsUK90vZ/nnnOpjGNpPZyRVTxqSylfHYHnfE7gokcH0K',
                'status' => 1,
                'role_id' => 1,
                'pricing_tier_id' => 1,
                'access_chat_id' => '0',
                'remember_token' => NULL,
                'created_at' => '2022-09-15 05:22:52',
                'updated_at' => '2022-09-15 05:22:52',
                'active_status' => 0,
                'avatar' => NULL,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
            ),
            2 => 
            array (
                'id' => 3,
                'uuid' => '1',
                'name' => 'Cony Adrelianus',
                'nik' => 32523503,
                'address' => 'Sebelas Maret University',
                'latitude' => -5.08,
                'longitude' => 123.47,
                'username' => 'Cony',
                'email' => 'cony@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6SF2H2TJN/eZH4DRB5srJeu0MX8sBSTP/aulSRIHubbZk3S5SAhu.',
                'status' => 1,
                'role_id' => 1,
                'pricing_tier_id' => 1,
                'access_chat_id' => '0',
                'remember_token' => NULL,
                'created_at' => '2022-09-22 12:21:54',
                'updated_at' => '2022-09-22 12:21:54',
                'active_status' => 0,
                'avatar' => NULL,
                'dark_mode' => 0,
                'messenger_color' => '#2180f3',
            ),
        ));
        
        
    }
}