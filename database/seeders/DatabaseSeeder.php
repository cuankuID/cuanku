<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Role;
use App\Models\Team;
use App\Models\OrderConsultation;
use App\Models\ConsultantOffice;
use App\Models\ForumThread;
use App\Models\InfoConsultant;
use App\Models\PricingTier;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $this->call([
            LocationsSeeder::class,
            StatusConsultationTableSeeder::class,
            CategoryConsultationTableSeeder::class,
            SpecialistSeeder::class,
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

        PricingTier::create([
            'name' => 'Free',
            'price' => '0'
        ]);

        PricingTier::create([
            'name' => 'Premium',
            'price' => '50000'
        ]);

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'admin',
            'username' => 'superadmin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Superadmin123'),
            'role_id' => 3,
            'pricing_tier_id' => 2,
        ]);

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'farras arkan',
            'username' => 'farkan',
            'email' => 'farkan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc1234567'),
            'role_id' => 2,
            'pricing_tier_id' => 2,
        ]);

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'arkan',
            'username' => 'arkan07',
            'email' => 'arkan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc1234567'),
            'role_id' => 1,
            'pricing_tier_id' => 1,
        ]);

        User::factory(20)->has(infoConsultant::factory())->create();

        // Consultant::factory(10)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(10)->create();

        Team::factory(4)->create();

        OrderConsultation::factory(10)->create();

        ConsultantOffice::factory(20)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
