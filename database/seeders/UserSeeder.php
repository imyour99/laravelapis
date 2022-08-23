<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
            [
                'id' => 1,
                'name' => 'Super Admin',
                'email' => 'sa@itfaq.global',
                'password' => Hash::make('password'),
                'email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'role_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Super Admin',
                'email' => 'viraj.bhavsar@itfaq.global',
                'role_id' => 1,
                'password' => Hash::make('123456789'),
            ],
            [
                'id' => 3,
                'name' => 'Super Admin',
                'email' => 'z.djebaili@imc-telecom.fr',
                'role_id' => 1,
                'password' => Hash::make('123456789'),
            ],
            [
                'id' => 4,
                'name' => 'Ali TL',
                'email' => 'teamleader@itfaq.gloabal',
                'role_id' => 5,
                'password' => Hash::make('123456789'),
            ],
            [
                'id' => 5,
                'name' => 'Team Leader 2',
                'email' => 'teamleader2@itfaq.gloabal',
                'role_id' => 5,
                'password' => Hash::make('123456789'),
            ],
            [
                'id' => 6,
                'name' => 'Team Leader 3',
                'email' => 'teamleader3@itfaq.gloabal',
                'role_id' => 5,
                'password' => Hash::make('123456789'),
            ],


        ];

        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
