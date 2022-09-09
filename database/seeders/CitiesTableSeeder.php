<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 1,
                'city_id' => 17,
                'name' => 'Badung',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 1,
                'city_id' => 32,
                'name' => 'Bangli',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 1,
                'city_id' => 94,
                'name' => 'Buleleng',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            3 => 
            array (
                'id' => 4,
                'province_id' => 1,
                'city_id' => 114,
                'name' => 'Denpasar',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            4 => 
            array (
                'id' => 5,
                'province_id' => 1,
                'city_id' => 128,
                'name' => 'Gianyar',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            5 => 
            array (
                'id' => 6,
                'province_id' => 1,
                'city_id' => 161,
                'name' => 'Jembrana',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            6 => 
            array (
                'id' => 7,
                'province_id' => 1,
                'city_id' => 170,
                'name' => 'Karangasem',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            7 => 
            array (
                'id' => 8,
                'province_id' => 1,
                'city_id' => 197,
                'name' => 'Klungkung',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            8 => 
            array (
                'id' => 9,
                'province_id' => 1,
                'city_id' => 447,
                'name' => 'Tabanan',
                'created_at' => '2022-09-09 14:02:54',
                'updated_at' => '2022-09-09 14:02:54',
            ),
            9 => 
            array (
                'id' => 10,
                'province_id' => 2,
                'city_id' => 27,
                'name' => 'Bangka',
                'created_at' => '2022-09-09 14:02:56',
                'updated_at' => '2022-09-09 14:02:56',
            ),
            10 => 
            array (
                'id' => 11,
                'province_id' => 2,
                'city_id' => 28,
                'name' => 'Bangka Barat',
                'created_at' => '2022-09-09 14:02:56',
                'updated_at' => '2022-09-09 14:02:56',
            ),
            11 => 
            array (
                'id' => 12,
                'province_id' => 2,
                'city_id' => 29,
                'name' => 'Bangka Selatan',
                'created_at' => '2022-09-09 14:02:56',
                'updated_at' => '2022-09-09 14:02:56',
            ),
            12 => 
            array (
                'id' => 13,
                'province_id' => 2,
                'city_id' => 30,
                'name' => 'Bangka Tengah',
                'created_at' => '2022-09-09 14:02:56',
                'updated_at' => '2022-09-09 14:02:56',
            ),
            13 => 
            array (
                'id' => 14,
                'province_id' => 2,
                'city_id' => 56,
                'name' => 'Belitung',
                'created_at' => '2022-09-09 14:02:56',
                'updated_at' => '2022-09-09 14:02:56',
            ),
            14 => 
            array (
                'id' => 15,
                'province_id' => 2,
                'city_id' => 57,
                'name' => 'Belitung Timur',
                'created_at' => '2022-09-09 14:02:56',
                'updated_at' => '2022-09-09 14:02:56',
            ),
            15 => 
            array (
                'id' => 16,
                'province_id' => 2,
                'city_id' => 334,
                'name' => 'Pangkal Pinang',
                'created_at' => '2022-09-09 14:02:56',
                'updated_at' => '2022-09-09 14:02:56',
            ),
            16 => 
            array (
                'id' => 17,
                'province_id' => 3,
                'city_id' => 106,
                'name' => 'Cilegon',
                'created_at' => '2022-09-09 14:02:58',
                'updated_at' => '2022-09-09 14:02:58',
            ),
            17 => 
            array (
                'id' => 18,
                'province_id' => 3,
                'city_id' => 232,
                'name' => 'Lebak',
                'created_at' => '2022-09-09 14:02:58',
                'updated_at' => '2022-09-09 14:02:58',
            ),
            18 => 
            array (
                'id' => 19,
                'province_id' => 3,
                'city_id' => 331,
                'name' => 'Pandeglang',
                'created_at' => '2022-09-09 14:02:59',
                'updated_at' => '2022-09-09 14:02:59',
            ),
            19 => 
            array (
                'id' => 20,
                'province_id' => 3,
                'city_id' => 402,
                'name' => 'Serang',
                'created_at' => '2022-09-09 14:02:59',
                'updated_at' => '2022-09-09 14:02:59',
            ),
            20 => 
            array (
                'id' => 21,
                'province_id' => 3,
                'city_id' => 403,
                'name' => 'Serang',
                'created_at' => '2022-09-09 14:03:00',
                'updated_at' => '2022-09-09 14:03:00',
            ),
            21 => 
            array (
                'id' => 22,
                'province_id' => 3,
                'city_id' => 455,
                'name' => 'Tangerang',
                'created_at' => '2022-09-09 14:03:00',
                'updated_at' => '2022-09-09 14:03:00',
            ),
            22 => 
            array (
                'id' => 23,
                'province_id' => 3,
                'city_id' => 456,
                'name' => 'Tangerang',
                'created_at' => '2022-09-09 14:03:00',
                'updated_at' => '2022-09-09 14:03:00',
            ),
            23 => 
            array (
                'id' => 24,
                'province_id' => 3,
                'city_id' => 457,
                'name' => 'Tangerang Selatan',
                'created_at' => '2022-09-09 14:03:02',
                'updated_at' => '2022-09-09 14:03:02',
            ),
            24 => 
            array (
                'id' => 25,
                'province_id' => 4,
                'city_id' => 62,
                'name' => 'Bengkulu',
                'created_at' => '2022-09-09 14:03:05',
                'updated_at' => '2022-09-09 14:03:05',
            ),
            25 => 
            array (
                'id' => 26,
                'province_id' => 4,
                'city_id' => 63,
                'name' => 'Bengkulu Selatan',
                'created_at' => '2022-09-09 14:03:05',
                'updated_at' => '2022-09-09 14:03:05',
            ),
            26 => 
            array (
                'id' => 27,
                'province_id' => 4,
                'city_id' => 64,
                'name' => 'Bengkulu Tengah',
                'created_at' => '2022-09-09 14:03:07',
                'updated_at' => '2022-09-09 14:03:07',
            ),
            27 => 
            array (
                'id' => 28,
                'province_id' => 4,
                'city_id' => 65,
                'name' => 'Bengkulu Utara',
                'created_at' => '2022-09-09 14:03:08',
                'updated_at' => '2022-09-09 14:03:08',
            ),
            28 => 
            array (
                'id' => 29,
                'province_id' => 4,
                'city_id' => 175,
                'name' => 'Kaur',
                'created_at' => '2022-09-09 14:03:09',
                'updated_at' => '2022-09-09 14:03:09',
            ),
            29 => 
            array (
                'id' => 30,
                'province_id' => 4,
                'city_id' => 183,
                'name' => 'Kepahiang',
                'created_at' => '2022-09-09 14:03:10',
                'updated_at' => '2022-09-09 14:03:10',
            ),
            30 => 
            array (
                'id' => 31,
                'province_id' => 4,
                'city_id' => 233,
                'name' => 'Lebong',
                'created_at' => '2022-09-09 14:03:10',
                'updated_at' => '2022-09-09 14:03:10',
            ),
            31 => 
            array (
                'id' => 32,
                'province_id' => 4,
                'city_id' => 294,
                'name' => 'Muko Muko',
                'created_at' => '2022-09-09 14:03:11',
                'updated_at' => '2022-09-09 14:03:11',
            ),
            32 => 
            array (
                'id' => 33,
                'province_id' => 4,
                'city_id' => 379,
                'name' => 'Rejang Lebong',
                'created_at' => '2022-09-09 14:03:12',
                'updated_at' => '2022-09-09 14:03:12',
            ),
            33 => 
            array (
                'id' => 34,
                'province_id' => 4,
                'city_id' => 397,
                'name' => 'Seluma',
                'created_at' => '2022-09-09 14:03:12',
                'updated_at' => '2022-09-09 14:03:12',
            ),
            34 => 
            array (
                'id' => 35,
                'province_id' => 5,
                'city_id' => 39,
                'name' => 'Bantul',
                'created_at' => '2022-09-09 14:03:15',
                'updated_at' => '2022-09-09 14:03:15',
            ),
            35 => 
            array (
                'id' => 36,
                'province_id' => 5,
                'city_id' => 135,
                'name' => 'Gunung Kidul',
                'created_at' => '2022-09-09 14:03:15',
                'updated_at' => '2022-09-09 14:03:15',
            ),
            36 => 
            array (
                'id' => 37,
                'province_id' => 5,
                'city_id' => 210,
                'name' => 'Kulon Progo',
                'created_at' => '2022-09-09 14:03:16',
                'updated_at' => '2022-09-09 14:03:16',
            ),
            37 => 
            array (
                'id' => 38,
                'province_id' => 5,
                'city_id' => 419,
                'name' => 'Sleman',
                'created_at' => '2022-09-09 14:03:16',
                'updated_at' => '2022-09-09 14:03:16',
            ),
            38 => 
            array (
                'id' => 39,
                'province_id' => 5,
                'city_id' => 501,
                'name' => 'Yogyakarta',
                'created_at' => '2022-09-09 14:03:16',
                'updated_at' => '2022-09-09 14:03:16',
            ),
            39 => 
            array (
                'id' => 40,
                'province_id' => 6,
                'city_id' => 151,
                'name' => 'Jakarta Barat',
                'created_at' => '2022-09-09 14:03:20',
                'updated_at' => '2022-09-09 14:03:20',
            ),
            40 => 
            array (
                'id' => 41,
                'province_id' => 6,
                'city_id' => 152,
                'name' => 'Jakarta Pusat',
                'created_at' => '2022-09-09 14:03:20',
                'updated_at' => '2022-09-09 14:03:20',
            ),
            41 => 
            array (
                'id' => 42,
                'province_id' => 6,
                'city_id' => 153,
                'name' => 'Jakarta Selatan',
                'created_at' => '2022-09-09 14:03:21',
                'updated_at' => '2022-09-09 14:03:21',
            ),
            42 => 
            array (
                'id' => 43,
                'province_id' => 6,
                'city_id' => 154,
                'name' => 'Jakarta Timur',
                'created_at' => '2022-09-09 14:03:22',
                'updated_at' => '2022-09-09 14:03:22',
            ),
            43 => 
            array (
                'id' => 44,
                'province_id' => 6,
                'city_id' => 155,
                'name' => 'Jakarta Utara',
                'created_at' => '2022-09-09 14:03:22',
                'updated_at' => '2022-09-09 14:03:22',
            ),
            44 => 
            array (
                'id' => 45,
                'province_id' => 6,
                'city_id' => 189,
                'name' => 'Kepulauan Seribu',
                'created_at' => '2022-09-09 14:03:23',
                'updated_at' => '2022-09-09 14:03:23',
            ),
            45 => 
            array (
                'id' => 46,
                'province_id' => 7,
                'city_id' => 77,
                'name' => 'Boalemo',
                'created_at' => '2022-09-09 14:03:27',
                'updated_at' => '2022-09-09 14:03:27',
            ),
            46 => 
            array (
                'id' => 47,
                'province_id' => 7,
                'city_id' => 88,
                'name' => 'Bone Bolango',
                'created_at' => '2022-09-09 14:03:27',
                'updated_at' => '2022-09-09 14:03:27',
            ),
            47 => 
            array (
                'id' => 48,
                'province_id' => 7,
                'city_id' => 129,
                'name' => 'Gorontalo',
                'created_at' => '2022-09-09 14:03:27',
                'updated_at' => '2022-09-09 14:03:27',
            ),
            48 => 
            array (
                'id' => 49,
                'province_id' => 7,
                'city_id' => 130,
                'name' => 'Gorontalo',
                'created_at' => '2022-09-09 14:03:28',
                'updated_at' => '2022-09-09 14:03:28',
            ),
            49 => 
            array (
                'id' => 50,
                'province_id' => 7,
                'city_id' => 131,
                'name' => 'Gorontalo Utara',
                'created_at' => '2022-09-09 14:03:28',
                'updated_at' => '2022-09-09 14:03:28',
            ),
            50 => 
            array (
                'id' => 51,
                'province_id' => 7,
                'city_id' => 361,
                'name' => 'Pohuwato',
                'created_at' => '2022-09-09 14:03:29',
                'updated_at' => '2022-09-09 14:03:29',
            ),
            51 => 
            array (
                'id' => 52,
                'province_id' => 8,
                'city_id' => 50,
                'name' => 'Batang Hari',
                'created_at' => '2022-09-09 14:03:31',
                'updated_at' => '2022-09-09 14:03:31',
            ),
            52 => 
            array (
                'id' => 53,
                'province_id' => 8,
                'city_id' => 97,
                'name' => 'Bungo',
                'created_at' => '2022-09-09 14:03:32',
                'updated_at' => '2022-09-09 14:03:32',
            ),
            53 => 
            array (
                'id' => 54,
                'province_id' => 8,
                'city_id' => 156,
                'name' => 'Jambi',
                'created_at' => '2022-09-09 14:03:33',
                'updated_at' => '2022-09-09 14:03:33',
            ),
            54 => 
            array (
                'id' => 55,
                'province_id' => 8,
                'city_id' => 194,
                'name' => 'Kerinci',
                'created_at' => '2022-09-09 14:03:33',
                'updated_at' => '2022-09-09 14:03:33',
            ),
            55 => 
            array (
                'id' => 56,
                'province_id' => 8,
                'city_id' => 280,
                'name' => 'Merangin',
                'created_at' => '2022-09-09 14:03:35',
                'updated_at' => '2022-09-09 14:03:35',
            ),
            56 => 
            array (
                'id' => 57,
                'province_id' => 8,
                'city_id' => 293,
                'name' => 'Muaro Jambi',
                'created_at' => '2022-09-09 14:03:35',
                'updated_at' => '2022-09-09 14:03:35',
            ),
            57 => 
            array (
                'id' => 58,
                'province_id' => 8,
                'city_id' => 393,
                'name' => 'Sarolangun',
                'created_at' => '2022-09-09 14:03:36',
                'updated_at' => '2022-09-09 14:03:36',
            ),
            58 => 
            array (
                'id' => 59,
                'province_id' => 8,
                'city_id' => 442,
                'name' => 'Sungaipenuh',
                'created_at' => '2022-09-09 14:03:37',
                'updated_at' => '2022-09-09 14:03:37',
            ),
            59 => 
            array (
                'id' => 60,
                'province_id' => 8,
                'city_id' => 460,
                'name' => 'Tanjung Jabung Barat',
                'created_at' => '2022-09-09 14:03:39',
                'updated_at' => '2022-09-09 14:03:39',
            ),
            60 => 
            array (
                'id' => 61,
                'province_id' => 8,
                'city_id' => 461,
                'name' => 'Tanjung Jabung Timur',
                'created_at' => '2022-09-09 14:03:40',
                'updated_at' => '2022-09-09 14:03:40',
            ),
            61 => 
            array (
                'id' => 62,
                'province_id' => 8,
                'city_id' => 471,
                'name' => 'Tebo',
                'created_at' => '2022-09-09 14:03:42',
                'updated_at' => '2022-09-09 14:03:42',
            ),
            62 => 
            array (
                'id' => 63,
                'province_id' => 9,
                'city_id' => 22,
                'name' => 'Bandung',
                'created_at' => '2022-09-09 14:03:45',
                'updated_at' => '2022-09-09 14:03:45',
            ),
            63 => 
            array (
                'id' => 64,
                'province_id' => 9,
                'city_id' => 23,
                'name' => 'Bandung',
                'created_at' => '2022-09-09 14:03:45',
                'updated_at' => '2022-09-09 14:03:45',
            ),
            64 => 
            array (
                'id' => 65,
                'province_id' => 9,
                'city_id' => 24,
                'name' => 'Bandung Barat',
                'created_at' => '2022-09-09 14:03:45',
                'updated_at' => '2022-09-09 14:03:45',
            ),
            65 => 
            array (
                'id' => 66,
                'province_id' => 9,
                'city_id' => 34,
                'name' => 'Banjar',
                'created_at' => '2022-09-09 14:03:46',
                'updated_at' => '2022-09-09 14:03:46',
            ),
            66 => 
            array (
                'id' => 67,
                'province_id' => 9,
                'city_id' => 54,
                'name' => 'Bekasi',
                'created_at' => '2022-09-09 14:03:46',
                'updated_at' => '2022-09-09 14:03:46',
            ),
            67 => 
            array (
                'id' => 68,
                'province_id' => 9,
                'city_id' => 55,
                'name' => 'Bekasi',
                'created_at' => '2022-09-09 14:03:46',
                'updated_at' => '2022-09-09 14:03:46',
            ),
            68 => 
            array (
                'id' => 69,
                'province_id' => 9,
                'city_id' => 78,
                'name' => 'Bogor',
                'created_at' => '2022-09-09 14:03:47',
                'updated_at' => '2022-09-09 14:03:47',
            ),
            69 => 
            array (
                'id' => 70,
                'province_id' => 9,
                'city_id' => 79,
                'name' => 'Bogor',
                'created_at' => '2022-09-09 14:03:48',
                'updated_at' => '2022-09-09 14:03:48',
            ),
            70 => 
            array (
                'id' => 71,
                'province_id' => 9,
                'city_id' => 103,
                'name' => 'Ciamis',
                'created_at' => '2022-09-09 14:03:49',
                'updated_at' => '2022-09-09 14:03:49',
            ),
            71 => 
            array (
                'id' => 72,
                'province_id' => 9,
                'city_id' => 104,
                'name' => 'Cianjur',
                'created_at' => '2022-09-09 14:03:50',
                'updated_at' => '2022-09-09 14:03:50',
            ),
            72 => 
            array (
                'id' => 73,
                'province_id' => 9,
                'city_id' => 107,
                'name' => 'Cimahi',
                'created_at' => '2022-09-09 14:03:50',
                'updated_at' => '2022-09-09 14:03:50',
            ),
            73 => 
            array (
                'id' => 74,
                'province_id' => 9,
                'city_id' => 108,
                'name' => 'Cirebon',
                'created_at' => '2022-09-09 14:03:51',
                'updated_at' => '2022-09-09 14:03:51',
            ),
            74 => 
            array (
                'id' => 75,
                'province_id' => 9,
                'city_id' => 109,
                'name' => 'Cirebon',
                'created_at' => '2022-09-09 14:03:53',
                'updated_at' => '2022-09-09 14:03:53',
            ),
            75 => 
            array (
                'id' => 76,
                'province_id' => 9,
                'city_id' => 115,
                'name' => 'Depok',
                'created_at' => '2022-09-09 14:03:54',
                'updated_at' => '2022-09-09 14:03:54',
            ),
            76 => 
            array (
                'id' => 77,
                'province_id' => 9,
                'city_id' => 126,
                'name' => 'Garut',
                'created_at' => '2022-09-09 14:03:55',
                'updated_at' => '2022-09-09 14:03:55',
            ),
            77 => 
            array (
                'id' => 78,
                'province_id' => 9,
                'city_id' => 149,
                'name' => 'Indramayu',
                'created_at' => '2022-09-09 14:03:55',
                'updated_at' => '2022-09-09 14:03:55',
            ),
            78 => 
            array (
                'id' => 79,
                'province_id' => 9,
                'city_id' => 171,
                'name' => 'Karawang',
                'created_at' => '2022-09-09 14:03:56',
                'updated_at' => '2022-09-09 14:03:56',
            ),
            79 => 
            array (
                'id' => 80,
                'province_id' => 9,
                'city_id' => 211,
                'name' => 'Kuningan',
                'created_at' => '2022-09-09 14:03:57',
                'updated_at' => '2022-09-09 14:03:57',
            ),
            80 => 
            array (
                'id' => 81,
                'province_id' => 9,
                'city_id' => 252,
                'name' => 'Majalengka',
                'created_at' => '2022-09-09 14:03:58',
                'updated_at' => '2022-09-09 14:03:58',
            ),
            81 => 
            array (
                'id' => 82,
                'province_id' => 9,
                'city_id' => 332,
                'name' => 'Pangandaran',
                'created_at' => '2022-09-09 14:03:59',
                'updated_at' => '2022-09-09 14:03:59',
            ),
            82 => 
            array (
                'id' => 83,
                'province_id' => 9,
                'city_id' => 376,
                'name' => 'Purwakarta',
                'created_at' => '2022-09-09 14:03:59',
                'updated_at' => '2022-09-09 14:03:59',
            ),
            83 => 
            array (
                'id' => 84,
                'province_id' => 9,
                'city_id' => 428,
                'name' => 'Subang',
                'created_at' => '2022-09-09 14:04:01',
                'updated_at' => '2022-09-09 14:04:01',
            ),
            84 => 
            array (
                'id' => 85,
                'province_id' => 9,
                'city_id' => 430,
                'name' => 'Sukabumi',
                'created_at' => '2022-09-09 14:04:01',
                'updated_at' => '2022-09-09 14:04:01',
            ),
            85 => 
            array (
                'id' => 86,
                'province_id' => 9,
                'city_id' => 431,
                'name' => 'Sukabumi',
                'created_at' => '2022-09-09 14:04:01',
                'updated_at' => '2022-09-09 14:04:01',
            ),
            86 => 
            array (
                'id' => 87,
                'province_id' => 9,
                'city_id' => 440,
                'name' => 'Sumedang',
                'created_at' => '2022-09-09 14:04:02',
                'updated_at' => '2022-09-09 14:04:02',
            ),
            87 => 
            array (
                'id' => 88,
                'province_id' => 9,
                'city_id' => 468,
                'name' => 'Tasikmalaya',
                'created_at' => '2022-09-09 14:04:02',
                'updated_at' => '2022-09-09 14:04:02',
            ),
            88 => 
            array (
                'id' => 89,
                'province_id' => 9,
                'city_id' => 469,
                'name' => 'Tasikmalaya',
                'created_at' => '2022-09-09 14:04:03',
                'updated_at' => '2022-09-09 14:04:03',
            ),
            89 => 
            array (
                'id' => 90,
                'province_id' => 10,
                'city_id' => 37,
                'name' => 'Banjarnegara',
                'created_at' => '2022-09-09 14:04:06',
                'updated_at' => '2022-09-09 14:04:06',
            ),
            90 => 
            array (
                'id' => 91,
                'province_id' => 10,
                'city_id' => 41,
                'name' => 'Banyumas',
                'created_at' => '2022-09-09 14:04:07',
                'updated_at' => '2022-09-09 14:04:07',
            ),
            91 => 
            array (
                'id' => 92,
                'province_id' => 10,
                'city_id' => 49,
                'name' => 'Batang',
                'created_at' => '2022-09-09 14:04:07',
                'updated_at' => '2022-09-09 14:04:07',
            ),
            92 => 
            array (
                'id' => 93,
                'province_id' => 10,
                'city_id' => 76,
                'name' => 'Blora',
                'created_at' => '2022-09-09 14:04:07',
                'updated_at' => '2022-09-09 14:04:07',
            ),
            93 => 
            array (
                'id' => 94,
                'province_id' => 10,
                'city_id' => 91,
                'name' => 'Boyolali',
                'created_at' => '2022-09-09 14:04:07',
                'updated_at' => '2022-09-09 14:04:07',
            ),
            94 => 
            array (
                'id' => 95,
                'province_id' => 10,
                'city_id' => 92,
                'name' => 'Brebes',
                'created_at' => '2022-09-09 14:04:08',
                'updated_at' => '2022-09-09 14:04:08',
            ),
            95 => 
            array (
                'id' => 96,
                'province_id' => 10,
                'city_id' => 105,
                'name' => 'Cilacap',
                'created_at' => '2022-09-09 14:04:08',
                'updated_at' => '2022-09-09 14:04:08',
            ),
            96 => 
            array (
                'id' => 97,
                'province_id' => 10,
                'city_id' => 113,
                'name' => 'Demak',
                'created_at' => '2022-09-09 14:04:09',
                'updated_at' => '2022-09-09 14:04:09',
            ),
            97 => 
            array (
                'id' => 98,
                'province_id' => 10,
                'city_id' => 134,
                'name' => 'Grobogan',
                'created_at' => '2022-09-09 14:04:09',
                'updated_at' => '2022-09-09 14:04:09',
            ),
            98 => 
            array (
                'id' => 99,
                'province_id' => 10,
                'city_id' => 163,
                'name' => 'Jepara',
                'created_at' => '2022-09-09 14:04:10',
                'updated_at' => '2022-09-09 14:04:10',
            ),
            99 => 
            array (
                'id' => 100,
                'province_id' => 10,
                'city_id' => 169,
                'name' => 'Karanganyar',
                'created_at' => '2022-09-09 14:04:10',
                'updated_at' => '2022-09-09 14:04:10',
            ),
            100 => 
            array (
                'id' => 101,
                'province_id' => 10,
                'city_id' => 177,
                'name' => 'Kebumen',
                'created_at' => '2022-09-09 14:04:11',
                'updated_at' => '2022-09-09 14:04:11',
            ),
            101 => 
            array (
                'id' => 102,
                'province_id' => 10,
                'city_id' => 181,
                'name' => 'Kendal',
                'created_at' => '2022-09-09 14:04:12',
                'updated_at' => '2022-09-09 14:04:12',
            ),
            102 => 
            array (
                'id' => 103,
                'province_id' => 10,
                'city_id' => 196,
                'name' => 'Klaten',
                'created_at' => '2022-09-09 14:04:12',
                'updated_at' => '2022-09-09 14:04:12',
            ),
            103 => 
            array (
                'id' => 104,
                'province_id' => 10,
                'city_id' => 209,
                'name' => 'Kudus',
                'created_at' => '2022-09-09 14:04:13',
                'updated_at' => '2022-09-09 14:04:13',
            ),
            104 => 
            array (
                'id' => 105,
                'province_id' => 10,
                'city_id' => 249,
                'name' => 'Magelang',
                'created_at' => '2022-09-09 14:04:13',
                'updated_at' => '2022-09-09 14:04:13',
            ),
            105 => 
            array (
                'id' => 106,
                'province_id' => 10,
                'city_id' => 250,
                'name' => 'Magelang',
                'created_at' => '2022-09-09 14:04:15',
                'updated_at' => '2022-09-09 14:04:15',
            ),
            106 => 
            array (
                'id' => 107,
                'province_id' => 10,
                'city_id' => 344,
                'name' => 'Pati',
                'created_at' => '2022-09-09 14:04:16',
                'updated_at' => '2022-09-09 14:04:16',
            ),
            107 => 
            array (
                'id' => 108,
                'province_id' => 10,
                'city_id' => 348,
                'name' => 'Pekalongan',
                'created_at' => '2022-09-09 14:04:16',
                'updated_at' => '2022-09-09 14:04:16',
            ),
            108 => 
            array (
                'id' => 109,
                'province_id' => 10,
                'city_id' => 349,
                'name' => 'Pekalongan',
                'created_at' => '2022-09-09 14:04:17',
                'updated_at' => '2022-09-09 14:04:17',
            ),
            109 => 
            array (
                'id' => 110,
                'province_id' => 10,
                'city_id' => 352,
                'name' => 'Pemalang',
                'created_at' => '2022-09-09 14:04:17',
                'updated_at' => '2022-09-09 14:04:17',
            ),
            110 => 
            array (
                'id' => 111,
                'province_id' => 10,
                'city_id' => 375,
                'name' => 'Purbalingga',
                'created_at' => '2022-09-09 14:04:18',
                'updated_at' => '2022-09-09 14:04:18',
            ),
            111 => 
            array (
                'id' => 112,
                'province_id' => 10,
                'city_id' => 377,
                'name' => 'Purworejo',
                'created_at' => '2022-09-09 14:04:18',
                'updated_at' => '2022-09-09 14:04:18',
            ),
            112 => 
            array (
                'id' => 113,
                'province_id' => 10,
                'city_id' => 380,
                'name' => 'Rembang',
                'created_at' => '2022-09-09 14:04:19',
                'updated_at' => '2022-09-09 14:04:19',
            ),
            113 => 
            array (
                'id' => 114,
                'province_id' => 10,
                'city_id' => 386,
                'name' => 'Salatiga',
                'created_at' => '2022-09-09 14:04:20',
                'updated_at' => '2022-09-09 14:04:20',
            ),
            114 => 
            array (
                'id' => 115,
                'province_id' => 10,
                'city_id' => 398,
                'name' => 'Semarang',
                'created_at' => '2022-09-09 14:04:20',
                'updated_at' => '2022-09-09 14:04:20',
            ),
            115 => 
            array (
                'id' => 116,
                'province_id' => 10,
                'city_id' => 399,
                'name' => 'Semarang',
                'created_at' => '2022-09-09 14:04:21',
                'updated_at' => '2022-09-09 14:04:21',
            ),
            116 => 
            array (
                'id' => 117,
                'province_id' => 10,
                'city_id' => 427,
                'name' => 'Sragen',
                'created_at' => '2022-09-09 14:04:22',
                'updated_at' => '2022-09-09 14:04:22',
            ),
            117 => 
            array (
                'id' => 118,
                'province_id' => 10,
                'city_id' => 433,
                'name' => 'Sukoharjo',
                'created_at' => '2022-09-09 14:04:23',
                'updated_at' => '2022-09-09 14:04:23',
            ),
            118 => 
            array (
                'id' => 119,
                'province_id' => 10,
                'city_id' => 445,
            'name' => 'Surakarta (Solo)',
                'created_at' => '2022-09-09 14:04:24',
                'updated_at' => '2022-09-09 14:04:24',
            ),
            119 => 
            array (
                'id' => 120,
                'province_id' => 10,
                'city_id' => 472,
                'name' => 'Tegal',
                'created_at' => '2022-09-09 14:04:25',
                'updated_at' => '2022-09-09 14:04:25',
            ),
            120 => 
            array (
                'id' => 121,
                'province_id' => 10,
                'city_id' => 473,
                'name' => 'Tegal',
                'created_at' => '2022-09-09 14:04:25',
                'updated_at' => '2022-09-09 14:04:25',
            ),
            121 => 
            array (
                'id' => 122,
                'province_id' => 10,
                'city_id' => 476,
                'name' => 'Temanggung',
                'created_at' => '2022-09-09 14:04:26',
                'updated_at' => '2022-09-09 14:04:26',
            ),
            122 => 
            array (
                'id' => 123,
                'province_id' => 10,
                'city_id' => 497,
                'name' => 'Wonogiri',
                'created_at' => '2022-09-09 14:04:26',
                'updated_at' => '2022-09-09 14:04:26',
            ),
            123 => 
            array (
                'id' => 124,
                'province_id' => 10,
                'city_id' => 498,
                'name' => 'Wonosobo',
                'created_at' => '2022-09-09 14:04:26',
                'updated_at' => '2022-09-09 14:04:26',
            ),
            124 => 
            array (
                'id' => 125,
                'province_id' => 11,
                'city_id' => 31,
                'name' => 'Bangkalan',
                'created_at' => '2022-09-09 14:04:30',
                'updated_at' => '2022-09-09 14:04:30',
            ),
            125 => 
            array (
                'id' => 126,
                'province_id' => 11,
                'city_id' => 42,
                'name' => 'Banyuwangi',
                'created_at' => '2022-09-09 14:04:31',
                'updated_at' => '2022-09-09 14:04:31',
            ),
            126 => 
            array (
                'id' => 127,
                'province_id' => 11,
                'city_id' => 51,
                'name' => 'Batu',
                'created_at' => '2022-09-09 14:04:32',
                'updated_at' => '2022-09-09 14:04:32',
            ),
            127 => 
            array (
                'id' => 128,
                'province_id' => 11,
                'city_id' => 74,
                'name' => 'Blitar',
                'created_at' => '2022-09-09 14:04:33',
                'updated_at' => '2022-09-09 14:04:33',
            ),
            128 => 
            array (
                'id' => 129,
                'province_id' => 11,
                'city_id' => 75,
                'name' => 'Blitar',
                'created_at' => '2022-09-09 14:04:34',
                'updated_at' => '2022-09-09 14:04:34',
            ),
            129 => 
            array (
                'id' => 130,
                'province_id' => 11,
                'city_id' => 80,
                'name' => 'Bojonegoro',
                'created_at' => '2022-09-09 14:04:35',
                'updated_at' => '2022-09-09 14:04:35',
            ),
            130 => 
            array (
                'id' => 131,
                'province_id' => 11,
                'city_id' => 86,
                'name' => 'Bondowoso',
                'created_at' => '2022-09-09 14:04:35',
                'updated_at' => '2022-09-09 14:04:35',
            ),
            131 => 
            array (
                'id' => 132,
                'province_id' => 11,
                'city_id' => 133,
                'name' => 'Gresik',
                'created_at' => '2022-09-09 14:04:36',
                'updated_at' => '2022-09-09 14:04:36',
            ),
            132 => 
            array (
                'id' => 133,
                'province_id' => 11,
                'city_id' => 160,
                'name' => 'Jember',
                'created_at' => '2022-09-09 14:04:36',
                'updated_at' => '2022-09-09 14:04:36',
            ),
            133 => 
            array (
                'id' => 134,
                'province_id' => 11,
                'city_id' => 164,
                'name' => 'Jombang',
                'created_at' => '2022-09-09 14:04:36',
                'updated_at' => '2022-09-09 14:04:36',
            ),
            134 => 
            array (
                'id' => 135,
                'province_id' => 11,
                'city_id' => 178,
                'name' => 'Kediri',
                'created_at' => '2022-09-09 14:04:37',
                'updated_at' => '2022-09-09 14:04:37',
            ),
            135 => 
            array (
                'id' => 136,
                'province_id' => 11,
                'city_id' => 179,
                'name' => 'Kediri',
                'created_at' => '2022-09-09 14:04:37',
                'updated_at' => '2022-09-09 14:04:37',
            ),
            136 => 
            array (
                'id' => 137,
                'province_id' => 11,
                'city_id' => 222,
                'name' => 'Lamongan',
                'created_at' => '2022-09-09 14:04:38',
                'updated_at' => '2022-09-09 14:04:38',
            ),
            137 => 
            array (
                'id' => 138,
                'province_id' => 11,
                'city_id' => 243,
                'name' => 'Lumajang',
                'created_at' => '2022-09-09 14:04:39',
                'updated_at' => '2022-09-09 14:04:39',
            ),
            138 => 
            array (
                'id' => 139,
                'province_id' => 11,
                'city_id' => 247,
                'name' => 'Madiun',
                'created_at' => '2022-09-09 14:04:39',
                'updated_at' => '2022-09-09 14:04:39',
            ),
            139 => 
            array (
                'id' => 140,
                'province_id' => 11,
                'city_id' => 248,
                'name' => 'Madiun',
                'created_at' => '2022-09-09 14:04:39',
                'updated_at' => '2022-09-09 14:04:39',
            ),
            140 => 
            array (
                'id' => 141,
                'province_id' => 11,
                'city_id' => 251,
                'name' => 'Magetan',
                'created_at' => '2022-09-09 14:04:40',
                'updated_at' => '2022-09-09 14:04:40',
            ),
            141 => 
            array (
                'id' => 142,
                'province_id' => 11,
                'city_id' => 255,
                'name' => 'Malang',
                'created_at' => '2022-09-09 14:04:40',
                'updated_at' => '2022-09-09 14:04:40',
            ),
            142 => 
            array (
                'id' => 143,
                'province_id' => 11,
                'city_id' => 256,
                'name' => 'Malang',
                'created_at' => '2022-09-09 14:04:41',
                'updated_at' => '2022-09-09 14:04:41',
            ),
            143 => 
            array (
                'id' => 144,
                'province_id' => 11,
                'city_id' => 289,
                'name' => 'Mojokerto',
                'created_at' => '2022-09-09 14:04:42',
                'updated_at' => '2022-09-09 14:04:42',
            ),
            144 => 
            array (
                'id' => 145,
                'province_id' => 11,
                'city_id' => 290,
                'name' => 'Mojokerto',
                'created_at' => '2022-09-09 14:04:43',
                'updated_at' => '2022-09-09 14:04:43',
            ),
            145 => 
            array (
                'id' => 146,
                'province_id' => 11,
                'city_id' => 305,
                'name' => 'Nganjuk',
                'created_at' => '2022-09-09 14:04:44',
                'updated_at' => '2022-09-09 14:04:44',
            ),
            146 => 
            array (
                'id' => 147,
                'province_id' => 11,
                'city_id' => 306,
                'name' => 'Ngawi',
                'created_at' => '2022-09-09 14:04:45',
                'updated_at' => '2022-09-09 14:04:45',
            ),
            147 => 
            array (
                'id' => 148,
                'province_id' => 11,
                'city_id' => 317,
                'name' => 'Pacitan',
                'created_at' => '2022-09-09 14:04:45',
                'updated_at' => '2022-09-09 14:04:45',
            ),
            148 => 
            array (
                'id' => 149,
                'province_id' => 11,
                'city_id' => 330,
                'name' => 'Pamekasan',
                'created_at' => '2022-09-09 14:04:46',
                'updated_at' => '2022-09-09 14:04:46',
            ),
            149 => 
            array (
                'id' => 150,
                'province_id' => 11,
                'city_id' => 342,
                'name' => 'Pasuruan',
                'created_at' => '2022-09-09 14:04:47',
                'updated_at' => '2022-09-09 14:04:47',
            ),
            150 => 
            array (
                'id' => 151,
                'province_id' => 11,
                'city_id' => 343,
                'name' => 'Pasuruan',
                'created_at' => '2022-09-09 14:04:48',
                'updated_at' => '2022-09-09 14:04:48',
            ),
            151 => 
            array (
                'id' => 152,
                'province_id' => 11,
                'city_id' => 363,
                'name' => 'Ponorogo',
                'created_at' => '2022-09-09 14:04:49',
                'updated_at' => '2022-09-09 14:04:49',
            ),
            152 => 
            array (
                'id' => 153,
                'province_id' => 11,
                'city_id' => 369,
                'name' => 'Probolinggo',
                'created_at' => '2022-09-09 14:04:49',
                'updated_at' => '2022-09-09 14:04:49',
            ),
            153 => 
            array (
                'id' => 154,
                'province_id' => 11,
                'city_id' => 370,
                'name' => 'Probolinggo',
                'created_at' => '2022-09-09 14:04:50',
                'updated_at' => '2022-09-09 14:04:50',
            ),
            154 => 
            array (
                'id' => 155,
                'province_id' => 11,
                'city_id' => 390,
                'name' => 'Sampang',
                'created_at' => '2022-09-09 14:04:51',
                'updated_at' => '2022-09-09 14:04:51',
            ),
            155 => 
            array (
                'id' => 156,
                'province_id' => 11,
                'city_id' => 409,
                'name' => 'Sidoarjo',
                'created_at' => '2022-09-09 14:04:51',
                'updated_at' => '2022-09-09 14:04:51',
            ),
            156 => 
            array (
                'id' => 157,
                'province_id' => 11,
                'city_id' => 418,
                'name' => 'Situbondo',
                'created_at' => '2022-09-09 14:04:51',
                'updated_at' => '2022-09-09 14:04:51',
            ),
            157 => 
            array (
                'id' => 158,
                'province_id' => 11,
                'city_id' => 441,
                'name' => 'Sumenep',
                'created_at' => '2022-09-09 14:04:52',
                'updated_at' => '2022-09-09 14:04:52',
            ),
            158 => 
            array (
                'id' => 159,
                'province_id' => 11,
                'city_id' => 444,
                'name' => 'Surabaya',
                'created_at' => '2022-09-09 14:04:53',
                'updated_at' => '2022-09-09 14:04:53',
            ),
            159 => 
            array (
                'id' => 160,
                'province_id' => 11,
                'city_id' => 487,
                'name' => 'Trenggalek',
                'created_at' => '2022-09-09 14:04:54',
                'updated_at' => '2022-09-09 14:04:54',
            ),
            160 => 
            array (
                'id' => 161,
                'province_id' => 11,
                'city_id' => 489,
                'name' => 'Tuban',
                'created_at' => '2022-09-09 14:04:54',
                'updated_at' => '2022-09-09 14:04:54',
            ),
            161 => 
            array (
                'id' => 162,
                'province_id' => 11,
                'city_id' => 492,
                'name' => 'Tulungagung',
                'created_at' => '2022-09-09 14:04:55',
                'updated_at' => '2022-09-09 14:04:55',
            ),
            162 => 
            array (
                'id' => 163,
                'province_id' => 12,
                'city_id' => 61,
                'name' => 'Bengkayang',
                'created_at' => '2022-09-09 14:04:57',
                'updated_at' => '2022-09-09 14:04:57',
            ),
            163 => 
            array (
                'id' => 164,
                'province_id' => 12,
                'city_id' => 168,
                'name' => 'Kapuas Hulu',
                'created_at' => '2022-09-09 14:04:59',
                'updated_at' => '2022-09-09 14:04:59',
            ),
            164 => 
            array (
                'id' => 165,
                'province_id' => 12,
                'city_id' => 176,
                'name' => 'Kayong Utara',
                'created_at' => '2022-09-09 14:04:59',
                'updated_at' => '2022-09-09 14:04:59',
            ),
            165 => 
            array (
                'id' => 166,
                'province_id' => 12,
                'city_id' => 195,
                'name' => 'Ketapang',
                'created_at' => '2022-09-09 14:05:00',
                'updated_at' => '2022-09-09 14:05:00',
            ),
            166 => 
            array (
                'id' => 167,
                'province_id' => 12,
                'city_id' => 208,
                'name' => 'Kubu Raya',
                'created_at' => '2022-09-09 14:05:01',
                'updated_at' => '2022-09-09 14:05:01',
            ),
            167 => 
            array (
                'id' => 168,
                'province_id' => 12,
                'city_id' => 228,
                'name' => 'Landak',
                'created_at' => '2022-09-09 14:05:01',
                'updated_at' => '2022-09-09 14:05:01',
            ),
            168 => 
            array (
                'id' => 169,
                'province_id' => 12,
                'city_id' => 279,
                'name' => 'Melawi',
                'created_at' => '2022-09-09 14:05:02',
                'updated_at' => '2022-09-09 14:05:02',
            ),
            169 => 
            array (
                'id' => 170,
                'province_id' => 12,
                'city_id' => 364,
                'name' => 'Pontianak',
                'created_at' => '2022-09-09 14:05:02',
                'updated_at' => '2022-09-09 14:05:02',
            ),
            170 => 
            array (
                'id' => 171,
                'province_id' => 12,
                'city_id' => 365,
                'name' => 'Pontianak',
                'created_at' => '2022-09-09 14:05:03',
                'updated_at' => '2022-09-09 14:05:03',
            ),
            171 => 
            array (
                'id' => 172,
                'province_id' => 12,
                'city_id' => 388,
                'name' => 'Sambas',
                'created_at' => '2022-09-09 14:05:04',
                'updated_at' => '2022-09-09 14:05:04',
            ),
            172 => 
            array (
                'id' => 173,
                'province_id' => 12,
                'city_id' => 391,
                'name' => 'Sanggau',
                'created_at' => '2022-09-09 14:05:05',
                'updated_at' => '2022-09-09 14:05:05',
            ),
            173 => 
            array (
                'id' => 174,
                'province_id' => 12,
                'city_id' => 395,
                'name' => 'Sekadau',
                'created_at' => '2022-09-09 14:05:06',
                'updated_at' => '2022-09-09 14:05:06',
            ),
            174 => 
            array (
                'id' => 175,
                'province_id' => 12,
                'city_id' => 415,
                'name' => 'Singkawang',
                'created_at' => '2022-09-09 14:05:06',
                'updated_at' => '2022-09-09 14:05:06',
            ),
            175 => 
            array (
                'id' => 176,
                'province_id' => 12,
                'city_id' => 417,
                'name' => 'Sintang',
                'created_at' => '2022-09-09 14:05:07',
                'updated_at' => '2022-09-09 14:05:07',
            ),
            176 => 
            array (
                'id' => 177,
                'province_id' => 13,
                'city_id' => 18,
                'name' => 'Balangan',
                'created_at' => '2022-09-09 14:05:10',
                'updated_at' => '2022-09-09 14:05:10',
            ),
            177 => 
            array (
                'id' => 178,
                'province_id' => 13,
                'city_id' => 33,
                'name' => 'Banjar',
                'created_at' => '2022-09-09 14:05:11',
                'updated_at' => '2022-09-09 14:05:11',
            ),
            178 => 
            array (
                'id' => 179,
                'province_id' => 13,
                'city_id' => 35,
                'name' => 'Banjarbaru',
                'created_at' => '2022-09-09 14:05:11',
                'updated_at' => '2022-09-09 14:05:11',
            ),
            179 => 
            array (
                'id' => 180,
                'province_id' => 13,
                'city_id' => 36,
                'name' => 'Banjarmasin',
                'created_at' => '2022-09-09 14:05:12',
                'updated_at' => '2022-09-09 14:05:12',
            ),
            180 => 
            array (
                'id' => 181,
                'province_id' => 13,
                'city_id' => 43,
                'name' => 'Barito Kuala',
                'created_at' => '2022-09-09 14:05:13',
                'updated_at' => '2022-09-09 14:05:13',
            ),
            181 => 
            array (
                'id' => 182,
                'province_id' => 13,
                'city_id' => 143,
                'name' => 'Hulu Sungai Selatan',
                'created_at' => '2022-09-09 14:05:14',
                'updated_at' => '2022-09-09 14:05:14',
            ),
            182 => 
            array (
                'id' => 183,
                'province_id' => 13,
                'city_id' => 144,
                'name' => 'Hulu Sungai Tengah',
                'created_at' => '2022-09-09 14:05:15',
                'updated_at' => '2022-09-09 14:05:15',
            ),
            183 => 
            array (
                'id' => 184,
                'province_id' => 13,
                'city_id' => 145,
                'name' => 'Hulu Sungai Utara',
                'created_at' => '2022-09-09 14:05:15',
                'updated_at' => '2022-09-09 14:05:15',
            ),
            184 => 
            array (
                'id' => 185,
                'province_id' => 13,
                'city_id' => 203,
                'name' => 'Kotabaru',
                'created_at' => '2022-09-09 14:05:15',
                'updated_at' => '2022-09-09 14:05:15',
            ),
            185 => 
            array (
                'id' => 186,
                'province_id' => 13,
                'city_id' => 446,
                'name' => 'Tabalong',
                'created_at' => '2022-09-09 14:05:16',
                'updated_at' => '2022-09-09 14:05:16',
            ),
            186 => 
            array (
                'id' => 187,
                'province_id' => 13,
                'city_id' => 452,
                'name' => 'Tanah Bumbu',
                'created_at' => '2022-09-09 14:05:16',
                'updated_at' => '2022-09-09 14:05:16',
            ),
            187 => 
            array (
                'id' => 188,
                'province_id' => 13,
                'city_id' => 454,
                'name' => 'Tanah Laut',
                'created_at' => '2022-09-09 14:05:17',
                'updated_at' => '2022-09-09 14:05:17',
            ),
            188 => 
            array (
                'id' => 189,
                'province_id' => 13,
                'city_id' => 466,
                'name' => 'Tapin',
                'created_at' => '2022-09-09 14:05:17',
                'updated_at' => '2022-09-09 14:05:17',
            ),
            189 => 
            array (
                'id' => 190,
                'province_id' => 14,
                'city_id' => 44,
                'name' => 'Barito Selatan',
                'created_at' => '2022-09-09 14:05:20',
                'updated_at' => '2022-09-09 14:05:20',
            ),
            190 => 
            array (
                'id' => 191,
                'province_id' => 14,
                'city_id' => 45,
                'name' => 'Barito Timur',
                'created_at' => '2022-09-09 14:05:20',
                'updated_at' => '2022-09-09 14:05:20',
            ),
            191 => 
            array (
                'id' => 192,
                'province_id' => 14,
                'city_id' => 46,
                'name' => 'Barito Utara',
                'created_at' => '2022-09-09 14:05:20',
                'updated_at' => '2022-09-09 14:05:20',
            ),
            192 => 
            array (
                'id' => 193,
                'province_id' => 14,
                'city_id' => 136,
                'name' => 'Gunung Mas',
                'created_at' => '2022-09-09 14:05:20',
                'updated_at' => '2022-09-09 14:05:20',
            ),
            193 => 
            array (
                'id' => 194,
                'province_id' => 14,
                'city_id' => 167,
                'name' => 'Kapuas',
                'created_at' => '2022-09-09 14:05:21',
                'updated_at' => '2022-09-09 14:05:21',
            ),
            194 => 
            array (
                'id' => 195,
                'province_id' => 14,
                'city_id' => 174,
                'name' => 'Katingan',
                'created_at' => '2022-09-09 14:05:21',
                'updated_at' => '2022-09-09 14:05:21',
            ),
            195 => 
            array (
                'id' => 196,
                'province_id' => 14,
                'city_id' => 205,
                'name' => 'Kotawaringin Barat',
                'created_at' => '2022-09-09 14:05:22',
                'updated_at' => '2022-09-09 14:05:22',
            ),
            196 => 
            array (
                'id' => 197,
                'province_id' => 14,
                'city_id' => 206,
                'name' => 'Kotawaringin Timur',
                'created_at' => '2022-09-09 14:05:22',
                'updated_at' => '2022-09-09 14:05:22',
            ),
            197 => 
            array (
                'id' => 198,
                'province_id' => 14,
                'city_id' => 221,
                'name' => 'Lamandau',
                'created_at' => '2022-09-09 14:05:23',
                'updated_at' => '2022-09-09 14:05:23',
            ),
            198 => 
            array (
                'id' => 199,
                'province_id' => 14,
                'city_id' => 296,
                'name' => 'Murung Raya',
                'created_at' => '2022-09-09 14:05:24',
                'updated_at' => '2022-09-09 14:05:24',
            ),
            199 => 
            array (
                'id' => 200,
                'province_id' => 14,
                'city_id' => 326,
                'name' => 'Palangka Raya',
                'created_at' => '2022-09-09 14:05:24',
                'updated_at' => '2022-09-09 14:05:24',
            ),
            200 => 
            array (
                'id' => 201,
                'province_id' => 14,
                'city_id' => 371,
                'name' => 'Pulang Pisau',
                'created_at' => '2022-09-09 14:05:25',
                'updated_at' => '2022-09-09 14:05:25',
            ),
            201 => 
            array (
                'id' => 202,
                'province_id' => 14,
                'city_id' => 405,
                'name' => 'Seruyan',
                'created_at' => '2022-09-09 14:05:25',
                'updated_at' => '2022-09-09 14:05:25',
            ),
            202 => 
            array (
                'id' => 203,
                'province_id' => 14,
                'city_id' => 432,
                'name' => 'Sukamara',
                'created_at' => '2022-09-09 14:05:26',
                'updated_at' => '2022-09-09 14:05:26',
            ),
            203 => 
            array (
                'id' => 204,
                'province_id' => 15,
                'city_id' => 19,
                'name' => 'Balikpapan',
                'created_at' => '2022-09-09 14:05:29',
                'updated_at' => '2022-09-09 14:05:29',
            ),
            204 => 
            array (
                'id' => 205,
                'province_id' => 15,
                'city_id' => 66,
                'name' => 'Berau',
                'created_at' => '2022-09-09 14:05:29',
                'updated_at' => '2022-09-09 14:05:29',
            ),
            205 => 
            array (
                'id' => 206,
                'province_id' => 15,
                'city_id' => 89,
                'name' => 'Bontang',
                'created_at' => '2022-09-09 14:05:30',
                'updated_at' => '2022-09-09 14:05:30',
            ),
            206 => 
            array (
                'id' => 207,
                'province_id' => 15,
                'city_id' => 214,
                'name' => 'Kutai Barat',
                'created_at' => '2022-09-09 14:05:31',
                'updated_at' => '2022-09-09 14:05:31',
            ),
            207 => 
            array (
                'id' => 208,
                'province_id' => 15,
                'city_id' => 215,
                'name' => 'Kutai Kartanegara',
                'created_at' => '2022-09-09 14:05:32',
                'updated_at' => '2022-09-09 14:05:32',
            ),
            208 => 
            array (
                'id' => 209,
                'province_id' => 15,
                'city_id' => 216,
                'name' => 'Kutai Timur',
                'created_at' => '2022-09-09 14:05:33',
                'updated_at' => '2022-09-09 14:05:33',
            ),
            209 => 
            array (
                'id' => 210,
                'province_id' => 15,
                'city_id' => 341,
                'name' => 'Paser',
                'created_at' => '2022-09-09 14:05:33',
                'updated_at' => '2022-09-09 14:05:33',
            ),
            210 => 
            array (
                'id' => 211,
                'province_id' => 15,
                'city_id' => 354,
                'name' => 'Penajam Paser Utara',
                'created_at' => '2022-09-09 14:05:34',
                'updated_at' => '2022-09-09 14:05:34',
            ),
            211 => 
            array (
                'id' => 212,
                'province_id' => 15,
                'city_id' => 387,
                'name' => 'Samarinda',
                'created_at' => '2022-09-09 14:05:37',
                'updated_at' => '2022-09-09 14:05:37',
            ),
            212 => 
            array (
                'id' => 213,
                'province_id' => 16,
                'city_id' => 96,
            'name' => 'Bulungan (Bulongan)',
                'created_at' => '2022-09-09 14:05:40',
                'updated_at' => '2022-09-09 14:05:40',
            ),
            213 => 
            array (
                'id' => 214,
                'province_id' => 16,
                'city_id' => 257,
                'name' => 'Malinau',
                'created_at' => '2022-09-09 14:05:40',
                'updated_at' => '2022-09-09 14:05:40',
            ),
            214 => 
            array (
                'id' => 215,
                'province_id' => 16,
                'city_id' => 311,
                'name' => 'Nunukan',
                'created_at' => '2022-09-09 14:05:40',
                'updated_at' => '2022-09-09 14:05:40',
            ),
            215 => 
            array (
                'id' => 216,
                'province_id' => 16,
                'city_id' => 450,
                'name' => 'Tana Tidung',
                'created_at' => '2022-09-09 14:05:41',
                'updated_at' => '2022-09-09 14:05:41',
            ),
            216 => 
            array (
                'id' => 217,
                'province_id' => 16,
                'city_id' => 467,
                'name' => 'Tarakan',
                'created_at' => '2022-09-09 14:05:41',
                'updated_at' => '2022-09-09 14:05:41',
            ),
            217 => 
            array (
                'id' => 218,
                'province_id' => 17,
                'city_id' => 48,
                'name' => 'Batam',
                'created_at' => '2022-09-09 14:05:43',
                'updated_at' => '2022-09-09 14:05:43',
            ),
            218 => 
            array (
                'id' => 219,
                'province_id' => 17,
                'city_id' => 71,
                'name' => 'Bintan',
                'created_at' => '2022-09-09 14:05:43',
                'updated_at' => '2022-09-09 14:05:43',
            ),
            219 => 
            array (
                'id' => 220,
                'province_id' => 17,
                'city_id' => 172,
                'name' => 'Karimun',
                'created_at' => '2022-09-09 14:05:43',
                'updated_at' => '2022-09-09 14:05:43',
            ),
            220 => 
            array (
                'id' => 221,
                'province_id' => 17,
                'city_id' => 184,
                'name' => 'Kepulauan Anambas',
                'created_at' => '2022-09-09 14:05:43',
                'updated_at' => '2022-09-09 14:05:43',
            ),
            221 => 
            array (
                'id' => 222,
                'province_id' => 17,
                'city_id' => 237,
                'name' => 'Lingga',
                'created_at' => '2022-09-09 14:05:43',
                'updated_at' => '2022-09-09 14:05:43',
            ),
            222 => 
            array (
                'id' => 223,
                'province_id' => 17,
                'city_id' => 302,
                'name' => 'Natuna',
                'created_at' => '2022-09-09 14:05:43',
                'updated_at' => '2022-09-09 14:05:43',
            ),
            223 => 
            array (
                'id' => 224,
                'province_id' => 17,
                'city_id' => 462,
                'name' => 'Tanjung Pinang',
                'created_at' => '2022-09-09 14:05:43',
                'updated_at' => '2022-09-09 14:05:43',
            ),
            224 => 
            array (
                'id' => 225,
                'province_id' => 18,
                'city_id' => 21,
                'name' => 'Bandar Lampung',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            225 => 
            array (
                'id' => 226,
                'province_id' => 18,
                'city_id' => 223,
                'name' => 'Lampung Barat',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            226 => 
            array (
                'id' => 227,
                'province_id' => 18,
                'city_id' => 224,
                'name' => 'Lampung Selatan',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            227 => 
            array (
                'id' => 228,
                'province_id' => 18,
                'city_id' => 225,
                'name' => 'Lampung Tengah',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            228 => 
            array (
                'id' => 229,
                'province_id' => 18,
                'city_id' => 226,
                'name' => 'Lampung Timur',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            229 => 
            array (
                'id' => 230,
                'province_id' => 18,
                'city_id' => 227,
                'name' => 'Lampung Utara',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            230 => 
            array (
                'id' => 231,
                'province_id' => 18,
                'city_id' => 282,
                'name' => 'Mesuji',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            231 => 
            array (
                'id' => 232,
                'province_id' => 18,
                'city_id' => 283,
                'name' => 'Metro',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            232 => 
            array (
                'id' => 233,
                'province_id' => 18,
                'city_id' => 355,
                'name' => 'Pesawaran',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            233 => 
            array (
                'id' => 234,
                'province_id' => 18,
                'city_id' => 356,
                'name' => 'Pesisir Barat',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            234 => 
            array (
                'id' => 235,
                'province_id' => 18,
                'city_id' => 368,
                'name' => 'Pringsewu',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            235 => 
            array (
                'id' => 236,
                'province_id' => 18,
                'city_id' => 458,
                'name' => 'Tanggamus',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            236 => 
            array (
                'id' => 237,
                'province_id' => 18,
                'city_id' => 490,
                'name' => 'Tulang Bawang',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            237 => 
            array (
                'id' => 238,
                'province_id' => 18,
                'city_id' => 491,
                'name' => 'Tulang Bawang Barat',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            238 => 
            array (
                'id' => 239,
                'province_id' => 18,
                'city_id' => 496,
                'name' => 'Way Kanan',
                'created_at' => '2022-09-09 14:05:46',
                'updated_at' => '2022-09-09 14:05:46',
            ),
            239 => 
            array (
                'id' => 240,
                'province_id' => 19,
                'city_id' => 14,
                'name' => 'Ambon',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            240 => 
            array (
                'id' => 241,
                'province_id' => 19,
                'city_id' => 99,
                'name' => 'Buru',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            241 => 
            array (
                'id' => 242,
                'province_id' => 19,
                'city_id' => 100,
                'name' => 'Buru Selatan',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            242 => 
            array (
                'id' => 243,
                'province_id' => 19,
                'city_id' => 185,
                'name' => 'Kepulauan Aru',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            243 => 
            array (
                'id' => 244,
                'province_id' => 19,
                'city_id' => 258,
                'name' => 'Maluku Barat Daya',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            244 => 
            array (
                'id' => 245,
                'province_id' => 19,
                'city_id' => 259,
                'name' => 'Maluku Tengah',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            245 => 
            array (
                'id' => 246,
                'province_id' => 19,
                'city_id' => 260,
                'name' => 'Maluku Tenggara',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            246 => 
            array (
                'id' => 247,
                'province_id' => 19,
                'city_id' => 261,
                'name' => 'Maluku Tenggara Barat',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            247 => 
            array (
                'id' => 248,
                'province_id' => 19,
                'city_id' => 400,
                'name' => 'Seram Bagian Barat',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            248 => 
            array (
                'id' => 249,
                'province_id' => 19,
                'city_id' => 401,
                'name' => 'Seram Bagian Timur',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            249 => 
            array (
                'id' => 250,
                'province_id' => 19,
                'city_id' => 488,
                'name' => 'Tual',
                'created_at' => '2022-09-09 14:05:49',
                'updated_at' => '2022-09-09 14:05:49',
            ),
            250 => 
            array (
                'id' => 251,
                'province_id' => 20,
                'city_id' => 138,
                'name' => 'Halmahera Barat',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            251 => 
            array (
                'id' => 252,
                'province_id' => 20,
                'city_id' => 139,
                'name' => 'Halmahera Selatan',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            252 => 
            array (
                'id' => 253,
                'province_id' => 20,
                'city_id' => 140,
                'name' => 'Halmahera Tengah',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            253 => 
            array (
                'id' => 254,
                'province_id' => 20,
                'city_id' => 141,
                'name' => 'Halmahera Timur',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            254 => 
            array (
                'id' => 255,
                'province_id' => 20,
                'city_id' => 142,
                'name' => 'Halmahera Utara',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            255 => 
            array (
                'id' => 256,
                'province_id' => 20,
                'city_id' => 191,
                'name' => 'Kepulauan Sula',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            256 => 
            array (
                'id' => 257,
                'province_id' => 20,
                'city_id' => 372,
                'name' => 'Pulau Morotai',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            257 => 
            array (
                'id' => 258,
                'province_id' => 20,
                'city_id' => 477,
                'name' => 'Ternate',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            258 => 
            array (
                'id' => 259,
                'province_id' => 20,
                'city_id' => 478,
                'name' => 'Tidore Kepulauan',
                'created_at' => '2022-09-09 14:05:51',
                'updated_at' => '2022-09-09 14:05:51',
            ),
            259 => 
            array (
                'id' => 260,
                'province_id' => 21,
                'city_id' => 1,
                'name' => 'Aceh Barat',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            260 => 
            array (
                'id' => 261,
                'province_id' => 21,
                'city_id' => 2,
                'name' => 'Aceh Barat Daya',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            261 => 
            array (
                'id' => 262,
                'province_id' => 21,
                'city_id' => 3,
                'name' => 'Aceh Besar',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            262 => 
            array (
                'id' => 263,
                'province_id' => 21,
                'city_id' => 4,
                'name' => 'Aceh Jaya',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            263 => 
            array (
                'id' => 264,
                'province_id' => 21,
                'city_id' => 5,
                'name' => 'Aceh Selatan',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            264 => 
            array (
                'id' => 265,
                'province_id' => 21,
                'city_id' => 6,
                'name' => 'Aceh Singkil',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            265 => 
            array (
                'id' => 266,
                'province_id' => 21,
                'city_id' => 7,
                'name' => 'Aceh Tamiang',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            266 => 
            array (
                'id' => 267,
                'province_id' => 21,
                'city_id' => 8,
                'name' => 'Aceh Tengah',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            267 => 
            array (
                'id' => 268,
                'province_id' => 21,
                'city_id' => 9,
                'name' => 'Aceh Tenggara',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            268 => 
            array (
                'id' => 269,
                'province_id' => 21,
                'city_id' => 10,
                'name' => 'Aceh Timur',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            269 => 
            array (
                'id' => 270,
                'province_id' => 21,
                'city_id' => 11,
                'name' => 'Aceh Utara',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            270 => 
            array (
                'id' => 271,
                'province_id' => 21,
                'city_id' => 20,
                'name' => 'Banda Aceh',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            271 => 
            array (
                'id' => 272,
                'province_id' => 21,
                'city_id' => 59,
                'name' => 'Bener Meriah',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            272 => 
            array (
                'id' => 273,
                'province_id' => 21,
                'city_id' => 72,
                'name' => 'Bireuen',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            273 => 
            array (
                'id' => 274,
                'province_id' => 21,
                'city_id' => 127,
                'name' => 'Gayo Lues',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            274 => 
            array (
                'id' => 275,
                'province_id' => 21,
                'city_id' => 230,
                'name' => 'Langsa',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            275 => 
            array (
                'id' => 276,
                'province_id' => 21,
                'city_id' => 235,
                'name' => 'Lhokseumawe',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            276 => 
            array (
                'id' => 277,
                'province_id' => 21,
                'city_id' => 300,
                'name' => 'Nagan Raya',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            277 => 
            array (
                'id' => 278,
                'province_id' => 21,
                'city_id' => 358,
                'name' => 'Pidie',
                'created_at' => '2022-09-09 14:05:53',
                'updated_at' => '2022-09-09 14:05:53',
            ),
            278 => 
            array (
                'id' => 279,
                'province_id' => 21,
                'city_id' => 359,
                'name' => 'Pidie Jaya',
                'created_at' => '2022-09-09 14:05:54',
                'updated_at' => '2022-09-09 14:05:54',
            ),
            279 => 
            array (
                'id' => 280,
                'province_id' => 21,
                'city_id' => 384,
                'name' => 'Sabang',
                'created_at' => '2022-09-09 14:05:54',
                'updated_at' => '2022-09-09 14:05:54',
            ),
            280 => 
            array (
                'id' => 281,
                'province_id' => 21,
                'city_id' => 414,
                'name' => 'Simeulue',
                'created_at' => '2022-09-09 14:05:54',
                'updated_at' => '2022-09-09 14:05:54',
            ),
            281 => 
            array (
                'id' => 282,
                'province_id' => 21,
                'city_id' => 429,
                'name' => 'Subulussalam',
                'created_at' => '2022-09-09 14:05:54',
                'updated_at' => '2022-09-09 14:05:54',
            ),
            282 => 
            array (
                'id' => 283,
                'province_id' => 22,
                'city_id' => 68,
                'name' => 'Bima',
                'created_at' => '2022-09-09 14:05:55',
                'updated_at' => '2022-09-09 14:05:55',
            ),
            283 => 
            array (
                'id' => 284,
                'province_id' => 22,
                'city_id' => 69,
                'name' => 'Bima',
                'created_at' => '2022-09-09 14:05:56',
                'updated_at' => '2022-09-09 14:05:56',
            ),
            284 => 
            array (
                'id' => 285,
                'province_id' => 22,
                'city_id' => 118,
                'name' => 'Dompu',
                'created_at' => '2022-09-09 14:05:56',
                'updated_at' => '2022-09-09 14:05:56',
            ),
            285 => 
            array (
                'id' => 286,
                'province_id' => 22,
                'city_id' => 238,
                'name' => 'Lombok Barat',
                'created_at' => '2022-09-09 14:05:57',
                'updated_at' => '2022-09-09 14:05:57',
            ),
            286 => 
            array (
                'id' => 287,
                'province_id' => 22,
                'city_id' => 239,
                'name' => 'Lombok Tengah',
                'created_at' => '2022-09-09 14:05:57',
                'updated_at' => '2022-09-09 14:05:57',
            ),
            287 => 
            array (
                'id' => 288,
                'province_id' => 22,
                'city_id' => 240,
                'name' => 'Lombok Timur',
                'created_at' => '2022-09-09 14:05:58',
                'updated_at' => '2022-09-09 14:05:58',
            ),
            288 => 
            array (
                'id' => 289,
                'province_id' => 22,
                'city_id' => 241,
                'name' => 'Lombok Utara',
                'created_at' => '2022-09-09 14:05:58',
                'updated_at' => '2022-09-09 14:05:58',
            ),
            289 => 
            array (
                'id' => 290,
                'province_id' => 22,
                'city_id' => 276,
                'name' => 'Mataram',
                'created_at' => '2022-09-09 14:05:58',
                'updated_at' => '2022-09-09 14:05:58',
            ),
            290 => 
            array (
                'id' => 291,
                'province_id' => 22,
                'city_id' => 438,
                'name' => 'Sumbawa',
                'created_at' => '2022-09-09 14:05:59',
                'updated_at' => '2022-09-09 14:05:59',
            ),
            291 => 
            array (
                'id' => 292,
                'province_id' => 22,
                'city_id' => 439,
                'name' => 'Sumbawa Barat',
                'created_at' => '2022-09-09 14:05:59',
                'updated_at' => '2022-09-09 14:05:59',
            ),
            292 => 
            array (
                'id' => 293,
                'province_id' => 23,
                'city_id' => 13,
                'name' => 'Alor',
                'created_at' => '2022-09-09 14:06:02',
                'updated_at' => '2022-09-09 14:06:02',
            ),
            293 => 
            array (
                'id' => 294,
                'province_id' => 23,
                'city_id' => 58,
                'name' => 'Belu',
                'created_at' => '2022-09-09 14:06:03',
                'updated_at' => '2022-09-09 14:06:03',
            ),
            294 => 
            array (
                'id' => 295,
                'province_id' => 23,
                'city_id' => 122,
                'name' => 'Ende',
                'created_at' => '2022-09-09 14:06:04',
                'updated_at' => '2022-09-09 14:06:04',
            ),
            295 => 
            array (
                'id' => 296,
                'province_id' => 23,
                'city_id' => 125,
                'name' => 'Flores Timur',
                'created_at' => '2022-09-09 14:06:04',
                'updated_at' => '2022-09-09 14:06:04',
            ),
            296 => 
            array (
                'id' => 297,
                'province_id' => 23,
                'city_id' => 212,
                'name' => 'Kupang',
                'created_at' => '2022-09-09 14:06:05',
                'updated_at' => '2022-09-09 14:06:05',
            ),
            297 => 
            array (
                'id' => 298,
                'province_id' => 23,
                'city_id' => 213,
                'name' => 'Kupang',
                'created_at' => '2022-09-09 14:06:06',
                'updated_at' => '2022-09-09 14:06:06',
            ),
            298 => 
            array (
                'id' => 299,
                'province_id' => 23,
                'city_id' => 234,
                'name' => 'Lembata',
                'created_at' => '2022-09-09 14:06:07',
                'updated_at' => '2022-09-09 14:06:07',
            ),
            299 => 
            array (
                'id' => 300,
                'province_id' => 23,
                'city_id' => 269,
                'name' => 'Manggarai',
                'created_at' => '2022-09-09 14:06:07',
                'updated_at' => '2022-09-09 14:06:07',
            ),
            300 => 
            array (
                'id' => 301,
                'province_id' => 23,
                'city_id' => 270,
                'name' => 'Manggarai Barat',
                'created_at' => '2022-09-09 14:06:08',
                'updated_at' => '2022-09-09 14:06:08',
            ),
            301 => 
            array (
                'id' => 302,
                'province_id' => 23,
                'city_id' => 271,
                'name' => 'Manggarai Timur',
                'created_at' => '2022-09-09 14:06:09',
                'updated_at' => '2022-09-09 14:06:09',
            ),
            302 => 
            array (
                'id' => 303,
                'province_id' => 23,
                'city_id' => 301,
                'name' => 'Nagekeo',
                'created_at' => '2022-09-09 14:06:10',
                'updated_at' => '2022-09-09 14:06:10',
            ),
            303 => 
            array (
                'id' => 304,
                'province_id' => 23,
                'city_id' => 304,
                'name' => 'Ngada',
                'created_at' => '2022-09-09 14:06:10',
                'updated_at' => '2022-09-09 14:06:10',
            ),
            304 => 
            array (
                'id' => 305,
                'province_id' => 23,
                'city_id' => 383,
                'name' => 'Rote Ndao',
                'created_at' => '2022-09-09 14:06:11',
                'updated_at' => '2022-09-09 14:06:11',
            ),
            305 => 
            array (
                'id' => 306,
                'province_id' => 23,
                'city_id' => 385,
                'name' => 'Sabu Raijua',
                'created_at' => '2022-09-09 14:06:11',
                'updated_at' => '2022-09-09 14:06:11',
            ),
            306 => 
            array (
                'id' => 307,
                'province_id' => 23,
                'city_id' => 412,
                'name' => 'Sikka',
                'created_at' => '2022-09-09 14:06:11',
                'updated_at' => '2022-09-09 14:06:11',
            ),
            307 => 
            array (
                'id' => 308,
                'province_id' => 23,
                'city_id' => 434,
                'name' => 'Sumba Barat',
                'created_at' => '2022-09-09 14:06:12',
                'updated_at' => '2022-09-09 14:06:12',
            ),
            308 => 
            array (
                'id' => 309,
                'province_id' => 23,
                'city_id' => 435,
                'name' => 'Sumba Barat Daya',
                'created_at' => '2022-09-09 14:06:12',
                'updated_at' => '2022-09-09 14:06:12',
            ),
            309 => 
            array (
                'id' => 310,
                'province_id' => 23,
                'city_id' => 436,
                'name' => 'Sumba Tengah',
                'created_at' => '2022-09-09 14:06:13',
                'updated_at' => '2022-09-09 14:06:13',
            ),
            310 => 
            array (
                'id' => 311,
                'province_id' => 23,
                'city_id' => 437,
                'name' => 'Sumba Timur',
                'created_at' => '2022-09-09 14:06:14',
                'updated_at' => '2022-09-09 14:06:14',
            ),
            311 => 
            array (
                'id' => 312,
                'province_id' => 23,
                'city_id' => 479,
                'name' => 'Timor Tengah Selatan',
                'created_at' => '2022-09-09 14:06:16',
                'updated_at' => '2022-09-09 14:06:16',
            ),
            312 => 
            array (
                'id' => 313,
                'province_id' => 23,
                'city_id' => 480,
                'name' => 'Timor Tengah Utara',
                'created_at' => '2022-09-09 14:06:17',
                'updated_at' => '2022-09-09 14:06:17',
            ),
            313 => 
            array (
                'id' => 314,
                'province_id' => 24,
                'city_id' => 16,
                'name' => 'Asmat',
                'created_at' => '2022-09-09 14:06:22',
                'updated_at' => '2022-09-09 14:06:22',
            ),
            314 => 
            array (
                'id' => 315,
                'province_id' => 24,
                'city_id' => 67,
                'name' => 'Biak Numfor',
                'created_at' => '2022-09-09 14:06:22',
                'updated_at' => '2022-09-09 14:06:22',
            ),
            315 => 
            array (
                'id' => 316,
                'province_id' => 24,
                'city_id' => 90,
                'name' => 'Boven Digoel',
                'created_at' => '2022-09-09 14:06:22',
                'updated_at' => '2022-09-09 14:06:22',
            ),
            316 => 
            array (
                'id' => 317,
                'province_id' => 24,
                'city_id' => 111,
            'name' => 'Deiyai (Deliyai)',
                'created_at' => '2022-09-09 14:06:23',
                'updated_at' => '2022-09-09 14:06:23',
            ),
            317 => 
            array (
                'id' => 318,
                'province_id' => 24,
                'city_id' => 117,
                'name' => 'Dogiyai',
                'created_at' => '2022-09-09 14:06:24',
                'updated_at' => '2022-09-09 14:06:24',
            ),
            318 => 
            array (
                'id' => 319,
                'province_id' => 24,
                'city_id' => 150,
                'name' => 'Intan Jaya',
                'created_at' => '2022-09-09 14:06:25',
                'updated_at' => '2022-09-09 14:06:25',
            ),
            319 => 
            array (
                'id' => 320,
                'province_id' => 24,
                'city_id' => 157,
                'name' => 'Jayapura',
                'created_at' => '2022-09-09 14:06:25',
                'updated_at' => '2022-09-09 14:06:25',
            ),
            320 => 
            array (
                'id' => 321,
                'province_id' => 24,
                'city_id' => 158,
                'name' => 'Jayapura',
                'created_at' => '2022-09-09 14:06:26',
                'updated_at' => '2022-09-09 14:06:26',
            ),
            321 => 
            array (
                'id' => 322,
                'province_id' => 24,
                'city_id' => 159,
                'name' => 'Jayawijaya',
                'created_at' => '2022-09-09 14:06:27',
                'updated_at' => '2022-09-09 14:06:27',
            ),
            322 => 
            array (
                'id' => 323,
                'province_id' => 24,
                'city_id' => 180,
                'name' => 'Keerom',
                'created_at' => '2022-09-09 14:06:28',
                'updated_at' => '2022-09-09 14:06:28',
            ),
            323 => 
            array (
                'id' => 324,
                'province_id' => 24,
                'city_id' => 193,
            'name' => 'Kepulauan Yapen (Yapen Waropen)',
                'created_at' => '2022-09-09 14:06:29',
                'updated_at' => '2022-09-09 14:06:29',
            ),
            324 => 
            array (
                'id' => 325,
                'province_id' => 24,
                'city_id' => 231,
                'name' => 'Lanny Jaya',
                'created_at' => '2022-09-09 14:06:30',
                'updated_at' => '2022-09-09 14:06:30',
            ),
            325 => 
            array (
                'id' => 326,
                'province_id' => 24,
                'city_id' => 263,
                'name' => 'Mamberamo Raya',
                'created_at' => '2022-09-09 14:06:30',
                'updated_at' => '2022-09-09 14:06:30',
            ),
            326 => 
            array (
                'id' => 327,
                'province_id' => 24,
                'city_id' => 264,
                'name' => 'Mamberamo Tengah',
                'created_at' => '2022-09-09 14:06:31',
                'updated_at' => '2022-09-09 14:06:31',
            ),
            327 => 
            array (
                'id' => 328,
                'province_id' => 24,
                'city_id' => 274,
                'name' => 'Mappi',
                'created_at' => '2022-09-09 14:06:31',
                'updated_at' => '2022-09-09 14:06:31',
            ),
            328 => 
            array (
                'id' => 329,
                'province_id' => 24,
                'city_id' => 281,
                'name' => 'Merauke',
                'created_at' => '2022-09-09 14:06:31',
                'updated_at' => '2022-09-09 14:06:31',
            ),
            329 => 
            array (
                'id' => 330,
                'province_id' => 24,
                'city_id' => 284,
                'name' => 'Mimika',
                'created_at' => '2022-09-09 14:06:31',
                'updated_at' => '2022-09-09 14:06:31',
            ),
            330 => 
            array (
                'id' => 331,
                'province_id' => 24,
                'city_id' => 299,
                'name' => 'Nabire',
                'created_at' => '2022-09-09 14:06:32',
                'updated_at' => '2022-09-09 14:06:32',
            ),
            331 => 
            array (
                'id' => 332,
                'province_id' => 24,
                'city_id' => 303,
                'name' => 'Nduga',
                'created_at' => '2022-09-09 14:06:33',
                'updated_at' => '2022-09-09 14:06:33',
            ),
            332 => 
            array (
                'id' => 333,
                'province_id' => 24,
                'city_id' => 335,
                'name' => 'Paniai',
                'created_at' => '2022-09-09 14:06:33',
                'updated_at' => '2022-09-09 14:06:33',
            ),
            333 => 
            array (
                'id' => 334,
                'province_id' => 24,
                'city_id' => 347,
                'name' => 'Pegunungan Bintang',
                'created_at' => '2022-09-09 14:06:35',
                'updated_at' => '2022-09-09 14:06:35',
            ),
            334 => 
            array (
                'id' => 335,
                'province_id' => 24,
                'city_id' => 373,
                'name' => 'Puncak',
                'created_at' => '2022-09-09 14:06:36',
                'updated_at' => '2022-09-09 14:06:36',
            ),
            335 => 
            array (
                'id' => 336,
                'province_id' => 24,
                'city_id' => 374,
                'name' => 'Puncak Jaya',
                'created_at' => '2022-09-09 14:06:37',
                'updated_at' => '2022-09-09 14:06:37',
            ),
            336 => 
            array (
                'id' => 337,
                'province_id' => 24,
                'city_id' => 392,
                'name' => 'Sarmi',
                'created_at' => '2022-09-09 14:06:37',
                'updated_at' => '2022-09-09 14:06:37',
            ),
            337 => 
            array (
                'id' => 338,
                'province_id' => 24,
                'city_id' => 443,
                'name' => 'Supiori',
                'created_at' => '2022-09-09 14:06:38',
                'updated_at' => '2022-09-09 14:06:38',
            ),
            338 => 
            array (
                'id' => 339,
                'province_id' => 24,
                'city_id' => 484,
                'name' => 'Tolikara',
                'created_at' => '2022-09-09 14:06:38',
                'updated_at' => '2022-09-09 14:06:38',
            ),
            339 => 
            array (
                'id' => 340,
                'province_id' => 24,
                'city_id' => 495,
                'name' => 'Waropen',
                'created_at' => '2022-09-09 14:06:39',
                'updated_at' => '2022-09-09 14:06:39',
            ),
            340 => 
            array (
                'id' => 341,
                'province_id' => 24,
                'city_id' => 499,
                'name' => 'Yahukimo',
                'created_at' => '2022-09-09 14:06:39',
                'updated_at' => '2022-09-09 14:06:39',
            ),
            341 => 
            array (
                'id' => 342,
                'province_id' => 24,
                'city_id' => 500,
                'name' => 'Yalimo',
                'created_at' => '2022-09-09 14:06:40',
                'updated_at' => '2022-09-09 14:06:40',
            ),
            342 => 
            array (
                'id' => 343,
                'province_id' => 25,
                'city_id' => 124,
                'name' => 'Fakfak',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            343 => 
            array (
                'id' => 344,
                'province_id' => 25,
                'city_id' => 165,
                'name' => 'Kaimana',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            344 => 
            array (
                'id' => 345,
                'province_id' => 25,
                'city_id' => 272,
                'name' => 'Manokwari',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            345 => 
            array (
                'id' => 346,
                'province_id' => 25,
                'city_id' => 273,
                'name' => 'Manokwari Selatan',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            346 => 
            array (
                'id' => 347,
                'province_id' => 25,
                'city_id' => 277,
                'name' => 'Maybrat',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            347 => 
            array (
                'id' => 348,
                'province_id' => 25,
                'city_id' => 346,
                'name' => 'Pegunungan Arfak',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            348 => 
            array (
                'id' => 349,
                'province_id' => 25,
                'city_id' => 378,
                'name' => 'Raja Ampat',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            349 => 
            array (
                'id' => 350,
                'province_id' => 25,
                'city_id' => 424,
                'name' => 'Sorong',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            350 => 
            array (
                'id' => 351,
                'province_id' => 25,
                'city_id' => 425,
                'name' => 'Sorong',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            351 => 
            array (
                'id' => 352,
                'province_id' => 25,
                'city_id' => 426,
                'name' => 'Sorong Selatan',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            352 => 
            array (
                'id' => 353,
                'province_id' => 25,
                'city_id' => 449,
                'name' => 'Tambrauw',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            353 => 
            array (
                'id' => 354,
                'province_id' => 25,
                'city_id' => 474,
                'name' => 'Teluk Bintuni',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            354 => 
            array (
                'id' => 355,
                'province_id' => 25,
                'city_id' => 475,
                'name' => 'Teluk Wondama',
                'created_at' => '2022-09-09 14:06:43',
                'updated_at' => '2022-09-09 14:06:43',
            ),
            355 => 
            array (
                'id' => 356,
                'province_id' => 26,
                'city_id' => 60,
                'name' => 'Bengkalis',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            356 => 
            array (
                'id' => 357,
                'province_id' => 26,
                'city_id' => 120,
                'name' => 'Dumai',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            357 => 
            array (
                'id' => 358,
                'province_id' => 26,
                'city_id' => 147,
                'name' => 'Indragiri Hilir',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            358 => 
            array (
                'id' => 359,
                'province_id' => 26,
                'city_id' => 148,
                'name' => 'Indragiri Hulu',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            359 => 
            array (
                'id' => 360,
                'province_id' => 26,
                'city_id' => 166,
                'name' => 'Kampar',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            360 => 
            array (
                'id' => 361,
                'province_id' => 26,
                'city_id' => 187,
                'name' => 'Kepulauan Meranti',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            361 => 
            array (
                'id' => 362,
                'province_id' => 26,
                'city_id' => 207,
                'name' => 'Kuantan Singingi',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            362 => 
            array (
                'id' => 363,
                'province_id' => 26,
                'city_id' => 350,
                'name' => 'Pekanbaru',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            363 => 
            array (
                'id' => 364,
                'province_id' => 26,
                'city_id' => 351,
                'name' => 'Pelalawan',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            364 => 
            array (
                'id' => 365,
                'province_id' => 26,
                'city_id' => 381,
                'name' => 'Rokan Hilir',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            365 => 
            array (
                'id' => 366,
                'province_id' => 26,
                'city_id' => 382,
                'name' => 'Rokan Hulu',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            366 => 
            array (
                'id' => 367,
                'province_id' => 26,
                'city_id' => 406,
                'name' => 'Siak',
                'created_at' => '2022-09-09 14:06:45',
                'updated_at' => '2022-09-09 14:06:45',
            ),
            367 => 
            array (
                'id' => 368,
                'province_id' => 27,
                'city_id' => 253,
                'name' => 'Majene',
                'created_at' => '2022-09-09 14:06:46',
                'updated_at' => '2022-09-09 14:06:46',
            ),
            368 => 
            array (
                'id' => 369,
                'province_id' => 27,
                'city_id' => 262,
                'name' => 'Mamasa',
                'created_at' => '2022-09-09 14:06:47',
                'updated_at' => '2022-09-09 14:06:47',
            ),
            369 => 
            array (
                'id' => 370,
                'province_id' => 27,
                'city_id' => 265,
                'name' => 'Mamuju',
                'created_at' => '2022-09-09 14:06:47',
                'updated_at' => '2022-09-09 14:06:47',
            ),
            370 => 
            array (
                'id' => 371,
                'province_id' => 27,
                'city_id' => 266,
                'name' => 'Mamuju Utara',
                'created_at' => '2022-09-09 14:06:47',
                'updated_at' => '2022-09-09 14:06:47',
            ),
            371 => 
            array (
                'id' => 372,
                'province_id' => 27,
                'city_id' => 362,
                'name' => 'Polewali Mandar',
                'created_at' => '2022-09-09 14:06:47',
                'updated_at' => '2022-09-09 14:06:47',
            ),
            372 => 
            array (
                'id' => 373,
                'province_id' => 28,
                'city_id' => 38,
                'name' => 'Bantaeng',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            373 => 
            array (
                'id' => 374,
                'province_id' => 28,
                'city_id' => 47,
                'name' => 'Barru',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            374 => 
            array (
                'id' => 375,
                'province_id' => 28,
                'city_id' => 87,
                'name' => 'Bone',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            375 => 
            array (
                'id' => 376,
                'province_id' => 28,
                'city_id' => 95,
                'name' => 'Bulukumba',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            376 => 
            array (
                'id' => 377,
                'province_id' => 28,
                'city_id' => 123,
                'name' => 'Enrekang',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            377 => 
            array (
                'id' => 378,
                'province_id' => 28,
                'city_id' => 132,
                'name' => 'Gowa',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            378 => 
            array (
                'id' => 379,
                'province_id' => 28,
                'city_id' => 162,
                'name' => 'Jeneponto',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            379 => 
            array (
                'id' => 380,
                'province_id' => 28,
                'city_id' => 244,
                'name' => 'Luwu',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            380 => 
            array (
                'id' => 381,
                'province_id' => 28,
                'city_id' => 245,
                'name' => 'Luwu Timur',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            381 => 
            array (
                'id' => 382,
                'province_id' => 28,
                'city_id' => 246,
                'name' => 'Luwu Utara',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            382 => 
            array (
                'id' => 383,
                'province_id' => 28,
                'city_id' => 254,
                'name' => 'Makassar',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            383 => 
            array (
                'id' => 384,
                'province_id' => 28,
                'city_id' => 275,
                'name' => 'Maros',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            384 => 
            array (
                'id' => 385,
                'province_id' => 28,
                'city_id' => 328,
                'name' => 'Palopo',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            385 => 
            array (
                'id' => 386,
                'province_id' => 28,
                'city_id' => 333,
                'name' => 'Pangkajene Kepulauan',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            386 => 
            array (
                'id' => 387,
                'province_id' => 28,
                'city_id' => 336,
                'name' => 'Parepare',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            387 => 
            array (
                'id' => 388,
                'province_id' => 28,
                'city_id' => 360,
                'name' => 'Pinrang',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            388 => 
            array (
                'id' => 389,
                'province_id' => 28,
                'city_id' => 396,
            'name' => 'Selayar (Kepulauan Selayar)',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            389 => 
            array (
                'id' => 390,
                'province_id' => 28,
                'city_id' => 408,
                'name' => 'Sidenreng Rappang/Rapang',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            390 => 
            array (
                'id' => 391,
                'province_id' => 28,
                'city_id' => 416,
                'name' => 'Sinjai',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            391 => 
            array (
                'id' => 392,
                'province_id' => 28,
                'city_id' => 423,
                'name' => 'Soppeng',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            392 => 
            array (
                'id' => 393,
                'province_id' => 28,
                'city_id' => 448,
                'name' => 'Takalar',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            393 => 
            array (
                'id' => 394,
                'province_id' => 28,
                'city_id' => 451,
                'name' => 'Tana Toraja',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            394 => 
            array (
                'id' => 395,
                'province_id' => 28,
                'city_id' => 486,
                'name' => 'Toraja Utara',
                'created_at' => '2022-09-09 14:06:48',
                'updated_at' => '2022-09-09 14:06:48',
            ),
            395 => 
            array (
                'id' => 396,
                'province_id' => 28,
                'city_id' => 493,
                'name' => 'Wajo',
                'created_at' => '2022-09-09 14:06:49',
                'updated_at' => '2022-09-09 14:06:49',
            ),
            396 => 
            array (
                'id' => 397,
                'province_id' => 29,
                'city_id' => 25,
                'name' => 'Banggai',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            397 => 
            array (
                'id' => 398,
                'province_id' => 29,
                'city_id' => 26,
                'name' => 'Banggai Kepulauan',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            398 => 
            array (
                'id' => 399,
                'province_id' => 29,
                'city_id' => 98,
                'name' => 'Buol',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            399 => 
            array (
                'id' => 400,
                'province_id' => 29,
                'city_id' => 119,
                'name' => 'Donggala',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            400 => 
            array (
                'id' => 401,
                'province_id' => 29,
                'city_id' => 291,
                'name' => 'Morowali',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            401 => 
            array (
                'id' => 402,
                'province_id' => 29,
                'city_id' => 329,
                'name' => 'Palu',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            402 => 
            array (
                'id' => 403,
                'province_id' => 29,
                'city_id' => 338,
                'name' => 'Parigi Moutong',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            403 => 
            array (
                'id' => 404,
                'province_id' => 29,
                'city_id' => 366,
                'name' => 'Poso',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            404 => 
            array (
                'id' => 405,
                'province_id' => 29,
                'city_id' => 410,
                'name' => 'Sigi',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            405 => 
            array (
                'id' => 406,
                'province_id' => 29,
                'city_id' => 482,
                'name' => 'Tojo Una-Una',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            406 => 
            array (
                'id' => 407,
                'province_id' => 29,
                'city_id' => 483,
                'name' => 'Toli-Toli',
                'created_at' => '2022-09-09 14:06:50',
                'updated_at' => '2022-09-09 14:06:50',
            ),
            407 => 
            array (
                'id' => 408,
                'province_id' => 30,
                'city_id' => 53,
                'name' => 'Bau-Bau',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            408 => 
            array (
                'id' => 409,
                'province_id' => 30,
                'city_id' => 85,
                'name' => 'Bombana',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            409 => 
            array (
                'id' => 410,
                'province_id' => 30,
                'city_id' => 101,
                'name' => 'Buton',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            410 => 
            array (
                'id' => 411,
                'province_id' => 30,
                'city_id' => 102,
                'name' => 'Buton Utara',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            411 => 
            array (
                'id' => 412,
                'province_id' => 30,
                'city_id' => 182,
                'name' => 'Kendari',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            412 => 
            array (
                'id' => 413,
                'province_id' => 30,
                'city_id' => 198,
                'name' => 'Kolaka',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            413 => 
            array (
                'id' => 414,
                'province_id' => 30,
                'city_id' => 199,
                'name' => 'Kolaka Utara',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            414 => 
            array (
                'id' => 415,
                'province_id' => 30,
                'city_id' => 200,
                'name' => 'Konawe',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            415 => 
            array (
                'id' => 416,
                'province_id' => 30,
                'city_id' => 201,
                'name' => 'Konawe Selatan',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            416 => 
            array (
                'id' => 417,
                'province_id' => 30,
                'city_id' => 202,
                'name' => 'Konawe Utara',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            417 => 
            array (
                'id' => 418,
                'province_id' => 30,
                'city_id' => 295,
                'name' => 'Muna',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            418 => 
            array (
                'id' => 419,
                'province_id' => 30,
                'city_id' => 494,
                'name' => 'Wakatobi',
                'created_at' => '2022-09-09 14:06:52',
                'updated_at' => '2022-09-09 14:06:52',
            ),
            419 => 
            array (
                'id' => 420,
                'province_id' => 31,
                'city_id' => 73,
                'name' => 'Bitung',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            420 => 
            array (
                'id' => 421,
                'province_id' => 31,
                'city_id' => 81,
            'name' => 'Bolaang Mongondow (Bolmong)',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            421 => 
            array (
                'id' => 422,
                'province_id' => 31,
                'city_id' => 82,
                'name' => 'Bolaang Mongondow Selatan',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            422 => 
            array (
                'id' => 423,
                'province_id' => 31,
                'city_id' => 83,
                'name' => 'Bolaang Mongondow Timur',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            423 => 
            array (
                'id' => 424,
                'province_id' => 31,
                'city_id' => 84,
                'name' => 'Bolaang Mongondow Utara',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            424 => 
            array (
                'id' => 425,
                'province_id' => 31,
                'city_id' => 188,
                'name' => 'Kepulauan Sangihe',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            425 => 
            array (
                'id' => 426,
                'province_id' => 31,
                'city_id' => 190,
            'name' => 'Kepulauan Siau Tagulandang Biaro (Sitaro)',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            426 => 
            array (
                'id' => 427,
                'province_id' => 31,
                'city_id' => 192,
                'name' => 'Kepulauan Talaud',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            427 => 
            array (
                'id' => 428,
                'province_id' => 31,
                'city_id' => 204,
                'name' => 'Kotamobagu',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            428 => 
            array (
                'id' => 429,
                'province_id' => 31,
                'city_id' => 267,
                'name' => 'Manado',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            429 => 
            array (
                'id' => 430,
                'province_id' => 31,
                'city_id' => 285,
                'name' => 'Minahasa',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            430 => 
            array (
                'id' => 431,
                'province_id' => 31,
                'city_id' => 286,
                'name' => 'Minahasa Selatan',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            431 => 
            array (
                'id' => 432,
                'province_id' => 31,
                'city_id' => 287,
                'name' => 'Minahasa Tenggara',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            432 => 
            array (
                'id' => 433,
                'province_id' => 31,
                'city_id' => 288,
                'name' => 'Minahasa Utara',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            433 => 
            array (
                'id' => 434,
                'province_id' => 31,
                'city_id' => 485,
                'name' => 'Tomohon',
                'created_at' => '2022-09-09 14:06:57',
                'updated_at' => '2022-09-09 14:06:57',
            ),
            434 => 
            array (
                'id' => 435,
                'province_id' => 32,
                'city_id' => 12,
                'name' => 'Agam',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            435 => 
            array (
                'id' => 436,
                'province_id' => 32,
                'city_id' => 93,
                'name' => 'Bukittinggi',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            436 => 
            array (
                'id' => 437,
                'province_id' => 32,
                'city_id' => 116,
                'name' => 'Dharmasraya',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            437 => 
            array (
                'id' => 438,
                'province_id' => 32,
                'city_id' => 186,
                'name' => 'Kepulauan Mentawai',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            438 => 
            array (
                'id' => 439,
                'province_id' => 32,
                'city_id' => 236,
                'name' => 'Lima Puluh Koto/Kota',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            439 => 
            array (
                'id' => 440,
                'province_id' => 32,
                'city_id' => 318,
                'name' => 'Padang',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            440 => 
            array (
                'id' => 441,
                'province_id' => 32,
                'city_id' => 321,
                'name' => 'Padang Panjang',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            441 => 
            array (
                'id' => 442,
                'province_id' => 32,
                'city_id' => 322,
                'name' => 'Padang Pariaman',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            442 => 
            array (
                'id' => 443,
                'province_id' => 32,
                'city_id' => 337,
                'name' => 'Pariaman',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            443 => 
            array (
                'id' => 444,
                'province_id' => 32,
                'city_id' => 339,
                'name' => 'Pasaman',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            444 => 
            array (
                'id' => 445,
                'province_id' => 32,
                'city_id' => 340,
                'name' => 'Pasaman Barat',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            445 => 
            array (
                'id' => 446,
                'province_id' => 32,
                'city_id' => 345,
                'name' => 'Payakumbuh',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            446 => 
            array (
                'id' => 447,
                'province_id' => 32,
                'city_id' => 357,
                'name' => 'Pesisir Selatan',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            447 => 
            array (
                'id' => 448,
                'province_id' => 32,
                'city_id' => 394,
                'name' => 'Sawah Lunto',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            448 => 
            array (
                'id' => 449,
                'province_id' => 32,
                'city_id' => 411,
            'name' => 'Sijunjung (Sawah Lunto Sijunjung)',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            449 => 
            array (
                'id' => 450,
                'province_id' => 32,
                'city_id' => 420,
                'name' => 'Solok',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            450 => 
            array (
                'id' => 451,
                'province_id' => 32,
                'city_id' => 421,
                'name' => 'Solok',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            451 => 
            array (
                'id' => 452,
                'province_id' => 32,
                'city_id' => 422,
                'name' => 'Solok Selatan',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            452 => 
            array (
                'id' => 453,
                'province_id' => 32,
                'city_id' => 453,
                'name' => 'Tanah Datar',
                'created_at' => '2022-09-09 14:06:59',
                'updated_at' => '2022-09-09 14:06:59',
            ),
            453 => 
            array (
                'id' => 454,
                'province_id' => 33,
                'city_id' => 40,
                'name' => 'Banyuasin',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            454 => 
            array (
                'id' => 455,
                'province_id' => 33,
                'city_id' => 121,
                'name' => 'Empat Lawang',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            455 => 
            array (
                'id' => 456,
                'province_id' => 33,
                'city_id' => 220,
                'name' => 'Lahat',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            456 => 
            array (
                'id' => 457,
                'province_id' => 33,
                'city_id' => 242,
                'name' => 'Lubuk Linggau',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            457 => 
            array (
                'id' => 458,
                'province_id' => 33,
                'city_id' => 292,
                'name' => 'Muara Enim',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            458 => 
            array (
                'id' => 459,
                'province_id' => 33,
                'city_id' => 297,
                'name' => 'Musi Banyuasin',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            459 => 
            array (
                'id' => 460,
                'province_id' => 33,
                'city_id' => 298,
                'name' => 'Musi Rawas',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            460 => 
            array (
                'id' => 461,
                'province_id' => 33,
                'city_id' => 312,
                'name' => 'Ogan Ilir',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            461 => 
            array (
                'id' => 462,
                'province_id' => 33,
                'city_id' => 313,
                'name' => 'Ogan Komering Ilir',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            462 => 
            array (
                'id' => 463,
                'province_id' => 33,
                'city_id' => 314,
                'name' => 'Ogan Komering Ulu',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            463 => 
            array (
                'id' => 464,
                'province_id' => 33,
                'city_id' => 315,
                'name' => 'Ogan Komering Ulu Selatan',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            464 => 
            array (
                'id' => 465,
                'province_id' => 33,
                'city_id' => 316,
                'name' => 'Ogan Komering Ulu Timur',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            465 => 
            array (
                'id' => 466,
                'province_id' => 33,
                'city_id' => 324,
                'name' => 'Pagar Alam',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            466 => 
            array (
                'id' => 467,
                'province_id' => 33,
                'city_id' => 327,
                'name' => 'Palembang',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            467 => 
            array (
                'id' => 468,
                'province_id' => 33,
                'city_id' => 367,
                'name' => 'Prabumulih',
                'created_at' => '2022-09-09 14:07:01',
                'updated_at' => '2022-09-09 14:07:01',
            ),
            468 => 
            array (
                'id' => 469,
                'province_id' => 34,
                'city_id' => 15,
                'name' => 'Asahan',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            469 => 
            array (
                'id' => 470,
                'province_id' => 34,
                'city_id' => 52,
                'name' => 'Batu Bara',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            470 => 
            array (
                'id' => 471,
                'province_id' => 34,
                'city_id' => 70,
                'name' => 'Binjai',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            471 => 
            array (
                'id' => 472,
                'province_id' => 34,
                'city_id' => 110,
                'name' => 'Dairi',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            472 => 
            array (
                'id' => 473,
                'province_id' => 34,
                'city_id' => 112,
                'name' => 'Deli Serdang',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            473 => 
            array (
                'id' => 474,
                'province_id' => 34,
                'city_id' => 137,
                'name' => 'Gunungsitoli',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            474 => 
            array (
                'id' => 475,
                'province_id' => 34,
                'city_id' => 146,
                'name' => 'Humbang Hasundutan',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            475 => 
            array (
                'id' => 476,
                'province_id' => 34,
                'city_id' => 173,
                'name' => 'Karo',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            476 => 
            array (
                'id' => 477,
                'province_id' => 34,
                'city_id' => 217,
                'name' => 'Labuhan Batu',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            477 => 
            array (
                'id' => 478,
                'province_id' => 34,
                'city_id' => 218,
                'name' => 'Labuhan Batu Selatan',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            478 => 
            array (
                'id' => 479,
                'province_id' => 34,
                'city_id' => 219,
                'name' => 'Labuhan Batu Utara',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            479 => 
            array (
                'id' => 480,
                'province_id' => 34,
                'city_id' => 229,
                'name' => 'Langkat',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            480 => 
            array (
                'id' => 481,
                'province_id' => 34,
                'city_id' => 268,
                'name' => 'Mandailing Natal',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            481 => 
            array (
                'id' => 482,
                'province_id' => 34,
                'city_id' => 278,
                'name' => 'Medan',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            482 => 
            array (
                'id' => 483,
                'province_id' => 34,
                'city_id' => 307,
                'name' => 'Nias',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            483 => 
            array (
                'id' => 484,
                'province_id' => 34,
                'city_id' => 308,
                'name' => 'Nias Barat',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            484 => 
            array (
                'id' => 485,
                'province_id' => 34,
                'city_id' => 309,
                'name' => 'Nias Selatan',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            485 => 
            array (
                'id' => 486,
                'province_id' => 34,
                'city_id' => 310,
                'name' => 'Nias Utara',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            486 => 
            array (
                'id' => 487,
                'province_id' => 34,
                'city_id' => 319,
                'name' => 'Padang Lawas',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            487 => 
            array (
                'id' => 488,
                'province_id' => 34,
                'city_id' => 320,
                'name' => 'Padang Lawas Utara',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            488 => 
            array (
                'id' => 489,
                'province_id' => 34,
                'city_id' => 323,
                'name' => 'Padang Sidempuan',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            489 => 
            array (
                'id' => 490,
                'province_id' => 34,
                'city_id' => 325,
                'name' => 'Pakpak Bharat',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            490 => 
            array (
                'id' => 491,
                'province_id' => 34,
                'city_id' => 353,
                'name' => 'Pematang Siantar',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            491 => 
            array (
                'id' => 492,
                'province_id' => 34,
                'city_id' => 389,
                'name' => 'Samosir',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            492 => 
            array (
                'id' => 493,
                'province_id' => 34,
                'city_id' => 404,
                'name' => 'Serdang Bedagai',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            493 => 
            array (
                'id' => 494,
                'province_id' => 34,
                'city_id' => 407,
                'name' => 'Sibolga',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            494 => 
            array (
                'id' => 495,
                'province_id' => 34,
                'city_id' => 413,
                'name' => 'Simalungun',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            495 => 
            array (
                'id' => 496,
                'province_id' => 34,
                'city_id' => 459,
                'name' => 'Tanjung Balai',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            496 => 
            array (
                'id' => 497,
                'province_id' => 34,
                'city_id' => 463,
                'name' => 'Tapanuli Selatan',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            497 => 
            array (
                'id' => 498,
                'province_id' => 34,
                'city_id' => 464,
                'name' => 'Tapanuli Tengah',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            498 => 
            array (
                'id' => 499,
                'province_id' => 34,
                'city_id' => 465,
                'name' => 'Tapanuli Utara',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
            499 => 
            array (
                'id' => 500,
                'province_id' => 34,
                'city_id' => 470,
                'name' => 'Tebing Tinggi',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'province_id' => 34,
                'city_id' => 481,
                'name' => 'Toba Samosir',
                'created_at' => '2022-09-09 14:07:03',
                'updated_at' => '2022-09-09 14:07:03',
            ),
        ));
        
        
    }
}