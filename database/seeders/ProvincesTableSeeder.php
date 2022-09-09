<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 1,
                'name' => 'Bali',
                'created_at' => '2022-09-09 14:02:52',
                'updated_at' => '2022-09-09 14:02:52',
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 2,
                'name' => 'Bangka Belitung',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 3,
                'name' => 'Banten',
                'created_at' => '2022-09-09 14:02:56',
                'updated_at' => '2022-09-09 14:02:56',
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => 4,
                'name' => 'Bengkulu',
                'created_at' => '2022-09-09 14:03:03',
                'updated_at' => '2022-09-09 14:03:03',
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => 5,
                'name' => 'DI Yogyakarta',
                'created_at' => '2022-09-09 14:03:13',
                'updated_at' => '2022-09-09 14:03:13',
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => 6,
                'name' => 'DKI Jakarta',
                'created_at' => '2022-09-09 14:03:17',
                'updated_at' => '2022-09-09 14:03:17',
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => 7,
                'name' => 'Gorontalo',
                'created_at' => '2022-09-09 14:03:23',
                'updated_at' => '2022-09-09 14:03:23',
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => 8,
                'name' => 'Jambi',
                'created_at' => '2022-09-09 14:03:29',
                'updated_at' => '2022-09-09 14:03:29',
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => 9,
                'name' => 'Jawa Barat',
                'created_at' => '2022-09-09 14:03:42',
                'updated_at' => '2022-09-09 14:03:42',
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => 10,
                'name' => 'Jawa Tengah',
                'created_at' => '2022-09-09 14:04:04',
                'updated_at' => '2022-09-09 14:04:04',
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => 11,
                'name' => 'Jawa Timur',
                'created_at' => '2022-09-09 14:04:27',
                'updated_at' => '2022-09-09 14:04:27',
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => 12,
                'name' => 'Kalimantan Barat',
                'created_at' => '2022-09-09 14:04:55',
                'updated_at' => '2022-09-09 14:04:55',
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => 13,
                'name' => 'Kalimantan Selatan',
                'created_at' => '2022-09-09 14:05:08',
                'updated_at' => '2022-09-09 14:05:08',
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => 14,
                'name' => 'Kalimantan Tengah',
                'created_at' => '2022-09-09 14:05:18',
                'updated_at' => '2022-09-09 14:05:18',
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => 15,
                'name' => 'Kalimantan Timur',
                'created_at' => '2022-09-09 14:05:26',
                'updated_at' => '2022-09-09 14:05:26',
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => 16,
                'name' => 'Kalimantan Utara',
                'created_at' => '2022-09-09 14:05:37',
                'updated_at' => '2022-09-09 14:05:37',
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => 17,
                'name' => 'Kepulauan Riau',
                'created_at' => '2022-09-09 14:05:41',
                'updated_at' => '2022-09-09 14:05:41',
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => 18,
                'name' => 'Lampung',
                'created_at' => '2022-09-09 14:05:43',
                'updated_at' => '2022-09-09 14:05:43',
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => 19,
                'name' => 'Maluku',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => 20,
                'name' => 'Maluku Utara',
                'created_at' => '2022-09-09 14:05:50',
                'updated_at' => '2022-09-09 14:05:50',
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => 21,
            'name' => 'Nanggroe Aceh Darussalam (NAD)',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => 22,
            'name' => 'Nusa Tenggara Barat (NTB)',
                'created_at' => '2022-09-09 14:05:54',
                'updated_at' => '2022-09-09 14:05:54',
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => 23,
            'name' => 'Nusa Tenggara Timur (NTT)',
                'created_at' => '2022-09-09 14:06:00',
                'updated_at' => '2022-09-09 14:06:00',
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => 24,
                'name' => 'Papua',
                'created_at' => '2022-09-09 14:06:18',
                'updated_at' => '2022-09-09 14:06:18',
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => 25,
                'name' => 'Papua Barat',
                'created_at' => '2022-09-09 14:06:40',
                'updated_at' => '2022-09-09 14:06:40',
            ),
            25 => 
            array (
                'id' => 26,
                'province_id' => 26,
                'name' => 'Riau',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            26 => 
            array (
                'id' => 27,
                'province_id' => 27,
                'name' => 'Sulawesi Barat',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            27 => 
            array (
                'id' => 28,
                'province_id' => 28,
                'name' => 'Sulawesi Selatan',
                'created_at' => '2022-09-09 14:06:47',
                'updated_at' => '2022-09-09 14:06:47',
            ),
            28 => 
            array (
                'id' => 29,
                'province_id' => 29,
                'name' => 'Sulawesi Tengah',
                'created_at' => '2022-09-09 14:06:49',
                'updated_at' => '2022-09-09 14:06:49',
            ),
            29 => 
            array (
                'id' => 30,
                'province_id' => 30,
                'name' => 'Sulawesi Tenggara',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            30 => 
            array (
                'id' => 31,
                'province_id' => 31,
                'name' => 'Sulawesi Utara',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            31 => 
            array (
                'id' => 32,
                'province_id' => 32,
                'name' => 'Sumatera Barat',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            32 => 
            array (
                'id' => 33,
                'province_id' => 33,
                'name' => 'Sumatera Selatan',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            33 => 
            array (
                'id' => 34,
                'province_id' => 34,
                'name' => 'Sumatera Utara',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
        ));
        
        
    }
}