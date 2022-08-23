<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdditionalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Amisha ITFAQ',
                'email' => 'amisha.developer@gmail.com',
                'role_id' => 4,
                'collaboration_id' => 1,
                'password' => Hash::make('123456789')
            ], [
                'name' => 'Ali ITFAQ',
                'email' => 'ali.shaikh@itfaq.global',
                'role_id' => 4,

                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@itfaq.global.com',
                'role_id' => 4,
                'collaboration_id' => 2,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Amisha Padsala',
                'email' => 'amisha.padsala@itfaq.global',
                'role_id' => 4,
                'collaboration_id' => 3,
                'password' => Hash::make('123456789')
            ],


            [
                'name' => 'Chloé Allaire',
                'email' => 'chloe@itfaq.global.com',
                'role_id' => 2,
                'collaboration_id' => 4,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Salomé André',
                'email' => 'salome@itfaq.global.com',
                'role_id' => 3,
                'collaboration_id' => 5,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Léa Arnaud',
                'email' => 'lea@bhavsar@itfaq.global.com',
                'role_id' => 3,
                'collaboration_id' => 6,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Juliette Arquette',
                'email' => 'juliette@itfaq.global.com',
                'role_id' => 3,
                'collaboration_id' => 7,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Camille Aubert',
                'email' => 'camille@itfaq.global.com',
                'role_id' => 2,
                'collaboration_id' => 8,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Zoé Augustin',
                'email' => 'zoe@itfaq.global.com',
                'role_id' => 2,
                'collaboration_id' => 9,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Adèle Babin',
                'email' => 'adele@itfaq.global.com',
                'role_id' => 3,
                'collaboration_id' => 10,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Agathe Babineaux',
                'email' => 'agathe@itfaq.global.com',
                'role_id' => 3,
                'collaboration_id' => 11,
                'password' => Hash::make('123456789')
            ],
            [
                'name' => 'Jeanne Barbier',
                'email' => 'jeanne@itfaq.global.com',
                'role_id' => 2,
                'collaboration_id' => 12,
                'password' => Hash::make('123456789')
            ]
        ];

        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
