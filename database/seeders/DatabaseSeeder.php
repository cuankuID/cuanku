<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use App\Models\Category;
use App\Models\ForumThread;
use App\Models\PricingTier;
use Faker\Factory as Faker;
use App\Models\InfoConsultant;
use Illuminate\Database\Seeder;
use App\Models\ConsultantOffice;
use App\Models\OrderConsultation;
use Database\Seeders\PostsTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\TeamsTableSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\CitiesTableSeeder;
use Database\Seeders\ProvincesTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\MethodConsultationTableSeeder;
use Database\Seeders\StatusConsultationTableSeeder;
use Database\Seeders\CategoryConsultationTableSeeder;
use Database\Seeders\ConsultantSpecialistsTableSeeder;


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

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'admin',
            'username' => 'superadmin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Superadmin123'),
            'role_id' => 3,
        ]);

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'farras arkan',
            'username' => 'farras.arkan',
            'email' => 'farkan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc1234567'),
            'role_id' => 2,
        ]);

        User::create([
            'uuid' => $faker->uuid(),
            'name' => 'arkan',
            'username' => 'arkan07',
            'email' => 'arkan@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Abc1234567'),
            'role_id' => 1,
        ]);

        ConsultantOffice::factory(10)->create();
        
        InfoConsultant::create([
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

        User::factory(10)->has(InfoConsultant::factory())->create();

        // $this->call(UsersTableSeeder::class);
        $this->call([
            TeamsTableSeeder::class,
            CategoriesTableSeeder::class,
            PostsTableSeeder::class,
            ProvincesTableSeeder::class,
            CitiesTableSeeder::class, 
            ConsultantSpecialistsTableSeeder::class,
            StatusConsultationTableSeeder::class,
            CategoryConsultationTableSeeder::class,
            MethodConsultationTableSeeder::class,
        ]);
    }
}
