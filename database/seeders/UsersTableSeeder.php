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
                'name' => 'admin',
                'username' => 'superadmin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2022-07-07 09:37:11',
                'password' => '$2y$10$3msB3h.l2XRSpJdN4Y.zcuUH7smd58n.ksmY7AIkVaZ0x3ScGcYTW',
                'status' => 1,
                'role_id' => 3,
                'remember_token' => NULL,
                'created_at' => '2022-07-07 09:37:11',
                'updated_at' => '2022-07-07 09:37:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'farras arkan',
                'username' => 'farkan',
                'email' => 'farkan@gmail.com',
                'email_verified_at' => '2022-07-07 09:37:11',
                'password' => '$2y$10$7KrO/lT/DPKDlqseKcEcxeslil4r0RG1EE0Adc6fAVkyhDA.g/UJi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => NULL,
                'created_at' => '2022-07-07 09:37:11',
                'updated_at' => '2022-07-07 09:37:11',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'arkan',
                'username' => 'arkan07',
                'email' => 'arkan@gmail.com',
                'email_verified_at' => '2022-07-07 09:37:11',
                'password' => '$2y$10$.eWZ16jOt4Ee3h/bG2KW4.of/O3Gt./aOgdSg/QrFkVEU2doihI7S',
                'status' => 1,
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2022-07-07 09:37:12',
                'updated_at' => '2022-07-07 09:37:12',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ulya Nurul Puspita S.E.',
                'username' => 'hasanah.kadir',
                'email' => 'ibun85@example.com',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'rjlFggFxIf',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Nadine Palastri',
                'username' => 'karen.saputra',
                'email' => 'sari.prayoga@example.org',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'o5VvzYfV2f',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Anggabaya Hardiansyah',
                'username' => 'wulan.mayasari',
                'email' => 'gada.winarsih@example.net',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'rQkWZGaqi6',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Titin Prastuti M.Kom.',
                'username' => 'edison23',
                'email' => 'saptono.parman@example.com',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'ou6g1y4CMl',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Lukman Marbun S.Pt',
                'username' => 'labuh.mayasari',
                'email' => 'winarno.kiandra@example.net',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'wWLzzAo0rj',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Lulut Ganda Anggriawan',
                'username' => 'dlaksmiwati',
                'email' => 'elaksita@example.org',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => '0EclSF6gzx',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Fitria Kasiyah Hariyah',
                'username' => 'viswahyudi',
                'email' => 'amalia07@example.net',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'odBvf9Y8yX',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Usman Ramadan',
                'username' => 'jprasasta',
                'email' => 'salsabila16@example.net',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'V0g4YHardQ',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Puspa Aryani',
                'username' => 'xpratiwi',
                'email' => 'vivi.halimah@example.net',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'vWpyMa8vXP',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Candra Marpaung',
                'username' => 'yessi68',
                'email' => 'oardianto@example.net',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'rjV47hmm9X',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Saadat Hidayat',
                'username' => 'usamah.fitriani',
                'email' => 'jinawi.napitupulu@example.org',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'sR7okjwGHj',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Suci Siti Novitasari S.Kom',
                'username' => 'firmansyah.halima',
                'email' => 'jarwadi.purnawati@example.org',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => '1xwigbBmik',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Olivia Julia Melani S.T.',
                'username' => 'hardi.widiastuti',
                'email' => 'legawa.hariyah@example.org',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'AWOHf3E4f6',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Bagus Manullang',
                'username' => 'irma59',
                'email' => 'daliman.pranowo@example.com',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'RuCkpW3S07',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Balijan Okto Utama S.Kom',
                'username' => 'tarihoran.rangga',
                'email' => 'enasyiah@example.org',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'WDMgYkp2X2',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Purwa Elon Utama S.Pd',
                'username' => 'padmasari.adiarja',
                'email' => 'kuswandari.dinda@example.net',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'mBdUv55Lvq',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Vino Budiyanto',
                'username' => 'ewibisono',
                'email' => 'atmaja.iswahyudi@example.org',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'fYM5kksXhb',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Hani Fujiati',
                'username' => 'prastuti.tedi',
                'email' => 'mkusmawati@example.net',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'KVLf5QUtmN',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Kenes Koko Mahendra',
                'username' => 'laras.gunarto',
                'email' => 'wardaya82@example.com',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'CUifVRUTCD',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Mumpuni Santoso',
                'username' => 'janet53',
                'email' => 'xutami@example.com',
                'email_verified_at' => '2022-07-07 09:37:14',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'status' => 1,
                'role_id' => 2,
                'remember_token' => 'WIm3ePInNa',
                'created_at' => '2022-07-07 09:37:14',
                'updated_at' => '2022-07-07 09:37:14',
            ),
        ));
        
        
    }
}