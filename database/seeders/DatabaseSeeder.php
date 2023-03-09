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

        $this->call(RolesTableSeeder::class);
        $this->call(SubscriptionsTableSeeder::class);

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'admin',
            'username' => 'superadmin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Superadmin123'),
            'role_id' => 3,
            'subscription_id' => 3,
        ]);

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'farras arkan',
            'username' => 'farras.arkan',
            'email' => 'farkan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc1234567'),
            'role_id' => 2,
            'subscription_id' => 3,
        ]);

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'arkan',
            'username' => 'arkan07',
            'email' => 'arkan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc1234567'),
            'role_id' => 1,
            'subscription_id' => 3,
        ]);
        
        infoConsultant::create([
            'consultant_id' => 2,
            'office_id' => 1,
            'slug' => 'farras-arkan',
            'province' => $faker->state(),
            'city' => $faker->city(),
            'full_address' => $faker->streetAddress(), 
            'price' => '200000',
            'specialist' => 'Konsultan Akuntansi',
            'work_experience' => 5,
            'biography' => '<p>' . implode('<p></p>', $faker->paragraphs(mt_rand(3,6))) . '</p>'
        ]);

        User::factory(20)->has(infoConsultant::factory())->create();

        // Consultant::factory(10)->create();

        Post::factory(10)->create();

        ConsultantOffice::factory(20)->create();

        // $this->call(UsersTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ConsultantSpecialistsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
    }
}
