<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
class CollaborationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collaborateurs = [
            [

                'profile_img' => '',
                'nom' => 'ITFAQ',
                'prenom' => 'Amisha',
                'email' => 'amisha.developer@gmail.com',
                'login' => 'amisha.developer@gmail.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Doe',
                'prenom' => 'John',
                'email' => 'johndoe@itfaq.global.com',
                'login' => 'johndoe@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [

                'profile_img' => '',
                'nom' => 'Padsala',
                'prenom' => 'Amisha',
                'email' => 'amisha.padsala@itfaq.global',
                'login' => 'amisha.padsala@itfaq.global',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Allaire',
                'prenom' => 'Chloé',
                'email' => 'chloe@itfaq.global.com',
                'login' => 'chloe@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'André',
                'prenom' => 'Salomé',
                'email' => 'salome@itfaq.global.com',
                'login' => 'salome@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Arnaud',
                'prenom' => 'Léa',
                'email' => 'lea@itfaq.global.com',
                'login' => 'lea@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Arquette',
                'prenom' => 'Juliette',
                'email' => 'juliette@itfaq.global.com',
                'login' => 'juliette@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Camille',
                'prenom' => 'Aubert',
                'email' => 'camille@itfaq.global.com',
                'login' => 'camille@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Zoé',
                'prenom' => 'Augustin',
                'email' => 'camille@itfaq.global.com',
                'login' => 'camille@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Adèle',
                'prenom' => 'Babin',
                'email' => 'camille@itfaq.global.com',
                'login' => 'camille@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Agathe',
                'prenom' => 'Babineaux',
                'email' => 'camille@itfaq.global.com',
                'login' => 'camille@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],
            [
                'profile_img' => '',
                'nom' => 'Jeanne',
                'prenom' => 'Barbier',
                'email' => 'camille@itfaq.global.com',
                'login' => 'camille@itfaq.global.com',
                'mot_de_passe' => Hash::make('123456789'),
                'confirmer_mot_de_passe' => Hash::make('123456789'),
                'code_postal' => '23170',
                'ville' => 'France',
                'portable' => 1234,
                'status' => 'active',
                'complément_d_adresse' => 'France',
                'adresse' => 'Lépaud',
                'telephone' => 123456789,
                'numero_de_securile_sociale' => 123456,
                'calendar_status' => 'Pending'
            ],

        ];

        DB::table('llx_collaboration')->insert($collaborateurs);



        $faker = Faker::create();
        foreach(range(1,100) as $value)
        {
                DB::table('llx_collaboration')->insert([
                    'profile_img' => '',
                    'nom' => $faker->lastName,
                    'prenom' => $faker->firstName,
                    'email' => $faker->email,
                    'login' => '',
                    'mot_de_passe' => Hash::make('123456789'),
                    'confirmer_mot_de_passe' => Hash::make('123456789'),
                    'code_postal' => $faker->postcode,
                    'ville' => $faker->streetName,
                    'portable' => 1234,
                    'status' => 'active',
                    'complément_d_adresse' => $faker->address,
                    'adresse' => $faker->address,
                    'telephone' =>$faker->tollFreePhoneNumber,
                    'numero_de_securile_sociale' => '',
                    'calendar_status' => 'Pending'
                ]);
        }




    }


}


