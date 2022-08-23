<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Set the path of your .sql file

        $this->call([
            UserRoleSeeder::class,
            UserSeeder::class,

            AgencySeeder::class,
            AgencyEventsSeeder::class,
            AgencyComment::class,

            CollaborationSeeder::class,

            NotificationSeeder::class,

            AdditionalUserSeeder::class,

            ClientSeeder::class,

            Collaboration_lat_lng_Seeder::class,

            InterventionSeeder::class,

            VisiteSeeder::class,

            OAuthClientsTableSeeder::class,
            OAuthPersonalAccessClientsTableSeeder::class,

        ]);





        // \App\Models\User::factory(10)->create();
    }
}
