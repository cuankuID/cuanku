<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Role;
use App\Models\Team;
use App\Models\OrderConsultation;
use App\Models\StatusConsultation;
use App\Models\CategoryConsultation;
use App\Models\ConsultantOffice;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        StatusConsultation::create([
            'name' => 'Requesting'
        ]);

        StatusConsultation::create([
            'name' => 'Waiting Payment'
        ]);

        StatusConsultation::create([
            'name' => 'Accepted'
        ]);

        StatusConsultation::create([
            'name' => 'Finished'
        ]);

        CategoryConsultation::create([
            'name' => 'Standard',
            'price' => 0
        ]);
        CategoryConsultation::create([
            'name' => 'Premium',
            'price' => 20000
        ]);

        Role::create([
            'name' => 'User'
        ]);

        Role::create([
            'name' => 'Consultant'
        ]);

        Role::create([
            'name' => 'Admin'
        ]);

        User::create([
            'name' => 'admin',
            'username' => 'superadmin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Superadmin123'),
            'role_id' => 3,
        ]);

        User::create([
            'name' => 'farras arkan',
            'username' => 'farkan',
            'email' => 'farkan@gmail.com',
            'password' => bcrypt('Abc1234567'),
            'role_id' => 2,
        ]);

        User::create([
            'name' => 'arkan',
            'username' => 'arkan07',
            'email' => 'arkan@gmail.com',
            'password' => bcrypt('Abc1234567'),
            'role_id' => 1,
        ]);

        User::factory(10)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        ConsultantOffice::create([
            'name' => 'Gedung B FMIPA',
            'lat' => -7.5583906,
            'long' => 110.8571914
        ]);

        ConsultantOffice::create([
            'name' => 'Masjid FMIPA UNS',
            'lat' => -7.5583879,
            'long' => 110.8560889
        ]);

        Post::factory(10)->create();

        Team::factory(4)->create();

        OrderConsultation::factory(10)->create();
    }
}
