<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laravel\Passport\PersonalAccessClient;

class OAuthPersonalAccessClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $oauthPersonalAccessClients = [
            [
                'id'         => 1,
                'client_id'  => '96093dde-8163-47a9-835f-f62ba23c86a8',
                'created_at' => '2022-04-11 13:36:08',
                'updated_at' => '2022-04-11 13:36:08',
            ],
        ];

        foreach ($oauthPersonalAccessClients as $oauthPersonalAccessClient) {
            PersonalAccessClient::updateOrCreate(
                ['id' => $oauthPersonalAccessClient['id']], $oauthPersonalAccessClient
            );
        }

    }
}
