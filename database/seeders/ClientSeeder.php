<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'nom' => 'Doe',
                'prenom' => 'Albert',
                'email' => 'albert@itfaq.global.com',
                'pdl' => '123',
                'telephone' => '123456789',
                'adress' => 'Lépaud',
                'villa' => 'France',
                'code' => '23170',
                'status' => 'active',
                'commune' => '',
                'technicien' => '',
                'title' => 'Miss',
                'image' => '',
                'intervention_status' => 5,
                'intervention_status_comment' => '',
                'visite_status' => 5,
                'visite_status_comment' => '',
                'market' => '3'
            ],
            [
                'nom' => 'Allaire',
                'prenom' => 'Arthur',
                'email' => 'arthur@itfaq.global.com',
                'pdl' => '123',
                'telephone' => '123456789',
                'adress' => 'Lépaud',
                'villa' => 'France',
                'code' => '23170',
                'status' => 'active',
                'commune' => '',
                'technicien' => '',
                'title' => 'Miss',
                'image' => '',
                'intervention_status' => 6,
                'intervention_status_comment' => '',
                'visite_status' => 6,
                'visite_status_comment' => '',
                'market' => '2'
            ],
            [
                'nom' => 'André',
                'prenom' => 'Blaise',
                'email' => 'blaise@itfaq.global.com',
                'pdl' => '123',
                'telephone' => '123456789',
                'adress' => 'Lépaud',
                'villa' => 'France',
                'code' => '23170',
                'status' => 'active',
                'commune' => '',
                'technicien' => '',
                'title' => 'Miss',
                'image' => '',
                'intervention_status' => 2,
                'intervention_status_comment' => '',
                'visite_status' => 2,
                'visite_status_comment' => '',
                'market' => '5'
            ],
            // [
            //     'nom' => 'Arnaud',
            //     'prenom' => 'Claude',
            //     'email' => 'claude@itfaq.global.com',
            //     'pdl' => '123',
            //     'telephone' => '123456789',
            //     'adress' => 'Lépaud',
            //     'villa' => 'France',
            //     'code' => '23170',
            //     'status' => 'active',
            //     'commune' => '',
            //     'technicien' => '',
            //     'title' => 'Miss',
            //     'image' => '',
            //     'intervention_status' => 4,
            //     'intervention_status_comment' => '',
            //     'visite_status' => 4,
            //     'visite_status_comment' => '',
            //     'market' => '7'
            // ],
            // [
            //     'nom' => 'Arquette',
            //     'prenom' => 'Jacques',
            //     'email' => 'jacques @itfaq.global.com',
            //     'pdl' => '123',
            //     'telephone' => '123456789',
            //     'adress' => 'Lépaud',
            //     'villa' => 'France',
            //     'code' => '23170',
            //     'status' => 'active',
            //     'commune' => '',
            //     'technicien' => '',
            //     'title' => 'Miss',
            //     'image' => '',
            //     'intervention_status' => 3,
            //     'intervention_status_comment' => '',
            //     'visite_status' => 3,
            //     'visite_status_comment' => '',
            //     'market' => '1'
            // ],
            // [
            //     'nom' => 'Camille',
            //     'prenom' => 'Jean',
            //     'email' => 'jean@itfaq.global.com',
            //     'pdl' => '123',
            //     'telephone' => '123456789',
            //     'adress' => 'Lépaud',
            //     'villa' => 'France',
            //     'code' => '23170',
            //     'status' => 'active',
            //     'commune' => '',
            //     'technicien' => '',
            //     'title' => 'Miss',
            //     'image' => '',
            //     'intervention_status' => 2,
            //     'intervention_status_comment' => '',
            //     'visite_status' => 2,
            //     'visite_status_comment' => '',
            //     'market' => '5'
            // ],
            // [
            //     'nom' => 'Zoé',
            //     'prenom' => 'Julien',
            //     'email' => 'julien@itfaq.global.com',
            //     'pdl' => '123',
            //     'telephone' => '123456789',
            //     'adress' => 'Lépaud',
            //     'villa' => 'France',
            //     'code' => '23170',
            //     'status' => 'active',
            //     'commune' => '',
            //     'technicien' => '',
            //     'title' => 'Miss',
            //     'image' => '',
            //     'intervention_status' => 6,
            //     'intervention_status_comment' => '',
            //     'visite_status' => 6,
            //     'visite_status_comment' => '',
            //     'market' => '8'
            // ],
            // [
            //     'nom' => 'Adèle',
            //     'prenom' => 'Raphael',
            //     'email' => 'raphael@itfaq.global.com',
            //     'pdl' => '123',
            //     'telephone' => '123456789',
            //     'adress' => 'Lépaud',
            //     'villa' => 'France',
            //     'code' => '23170',
            //     'status' => 'active',
            //     'commune' => '',
            //     'technicien' => '',
            //     'title' => 'Miss',
            //     'image' => '',
            //     'intervention_status' => 5,
            //     'intervention_status_comment' => '',
            //     'visite_status' => 5,
            //     'visite_status_comment' => '',
            //     'market' => '6'
            // ],
            // [
            //     'nom' => 'Agathe',
            //     'prenom' => 'René',
            //     'email' => 'rene@itfaq.global.com',
            //     'pdl' => '123',
            //     'telephone' => '123456789',
            //     'adress' => 'Lépaud',
            //     'villa' => 'France',
            //     'code' => '23170',
            //     'status' => 'active',
            //     'commune' => '',
            //     'technicien' => '',
            //     'title' => 'Miss',
            //     'image' => '',
            //     'intervention_status' => 6,
            //     'intervention_status_comment' => '',
            //     'visite_status' => 6,
            //     'visite_status_comment' => '',
            //     'market' => '8'
            // ],
            // [
            //     'nom' => 'Jeanne',
            //     'prenom' => 'Samuel',
            //     'email' => 'samuel@itfaq.global.com',
            //     'pdl' => '123',
            //     'telephone' => '123456789',
            //     'adress' => 'Lépaud',
            //     'villa' => 'France',
            //     'code' => '23170',
            //     'status' => 'active',
            //     'commune' => '',
            //     'technicien' => '',
            //     'title' => 'Miss',
            //     'image' => '',
            //     'intervention_status' => 5,
            //     'intervention_status_comment' => '',
            //     'visite_status' => 5,
            //     'visite_status_comment' => '',
            //     'market' => '9'
            // ],

        ];

        DB::table('llx_client')->insert($clients);


        // $faker = Faker::create();
        // foreach(range(1,30) as $value)
        // {
        //         DB::table('llx_client')->insert([
        //             'nom' => $faker->lastName,
        //             'prenom' => $faker->firstName,
        //             'email' => $faker->email,
        //             'pdl' => '123',
        //             'telephone' => $faker->tollFreePhoneNumber,
        //             'adress' => $faker->address,
        //             'villa' => $faker->streetName,
        //             'code' => $faker->postcode,
        //             'status' => 'active',
        //             'commune' => '',
        //             'technicien' => '',
        //             'title' => 'Miss',
        //             'image' => '',
        //             'intervention_status' => 5,
        //             'intervention_status_comment' => '',
        //             'visite_status' => 5,
        //             'visite_status_comment' => '',
        //             'market' => '9'
        //         ]);
        // }
    }
}
