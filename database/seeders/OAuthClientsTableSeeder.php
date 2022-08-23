<?php

namespace Database\Seeders;

use Laravel\Passport\Client;
use Illuminate\Database\Seeder;

class OAuthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $oauthClients = [
            [
                'id'                     => '96093dde-8163-47a9-835f-f62ba23c86a8',
                'user_id'                => null,
                'name'                   => 'IMC Personal Access Client',
                'secret'                 => 'wAQIG92vPZSOcw4jh2cuY6xifVXFcfRgFzuCF4Rm',
                'provider'               => null,
                'redirect'               => getenv('APP_URL') ?: 'http://localhost',
                'personal_access_client' => true,
                'password_client'        => false,
                'revoked'                => false,
                'created_at'             => '2022-04-11 15:36:08',
                'updated_at'             => '2022-04-11 15:36:08',
            ],
            [
                'id'                     => '96094d90-2a95-4e6c-834d-5ba6d62873b3',
                'user_id'                => null,
                'name'                   => 'IMC Password Grant Client',
                'secret'                 => 'oJsux36pvMGn92CfYW16fS8PvMbVxZ7VejAMhDCt',
                'provider'               => 'users',
                'redirect'               => getenv('APP_URL') ?: 'http://localhost',
                'personal_access_client' => false,
                'password_client'        => true,
                'revoked'                => false,
                'created_at'             => '2022-04-11 15:36:08',
                'updated_at'             => '2022-04-11 15:36:08',
            ],
            [
                'id'                     => '96097d77-2556-401f-9de8-a5486e486197',
                'user_id'                => null,
                'name'                   => 'IMC Mobile App Password Grant Client',
                'secret'                 => '4luhHMb0p8WEQd8Y3LekhW6FpgdGB601dShOTjEu',
                'provider'               => 'users',
                'redirect'               => getenv('APP_URL') ?: 'http://localhost',
                'personal_access_client' => false,
                'password_client'        => true,
                'revoked'                => false,
                'created_at'             => '2022-04-11 16:33:58',
                'updated_at'             => '2022-04-11 16:33:58',
            ],
            [
                'id'                     => '96094e97-4d43-4b3e-8440-953e861334c9',
                'user_id'                => null,
                'name'                   => 'IMC ClientCredentials Grant Client',
                'secret'                 => 'LAtgOYN7zwJzikhlCvZ2BQjHpw9ly6B3Fq02qQkn',
                'provider'               => null,
                'redirect'               => '',
                'personal_access_client' => false,
                'password_client'        => false,
                'revoked'                => false,
                'created_at'             => '2022-04-11 15:36:08',
                'updated_at'             => '2022-04-11 15:36:08',
            ],
        ];

        foreach ($oauthClients as $oauthClient) {
            Client::updateOrCreate(['id' => $oauthClient['id']], $oauthClient);
        }

    }
}
