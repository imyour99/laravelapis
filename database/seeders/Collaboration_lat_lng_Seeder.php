<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Collaboration_lat_lng_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $collaborateurs = [
            [
                'collaboration_id' => '1',
                'lat' => '48.86194',
                'lng' => '2.33871',

            ],
            [
                'collaboration_id' => '2',
                'lat' => '48.8608027',
                'lng' => '2.3411235',
            ],
            [
                'collaboration_id' => '3',
                'lat' => '48.86171411510604',
                'lng' => '2.3368646370285164',
            ],
            [
                'collaboration_id' => '4',
                'lat' => '48.861431779419185',
                'lng' => '2.3377443909834166',
            ],
            [
                'collaboration_id' => '5',
                'lat' => '48.86125532506425',
                'lng' => '2.3375727276207225',
            ],
            [
                'collaboration_id' => '6',
                'lat' => '48.86155880260119',
                'lng' => '2.33921423570126',
            ],
            [
                'collaboration_id' => '7',
                'lat' => '48.86134705334673',
                'lng' => '2.339289325666643',
            ],
            [
                'collaboration_id' => '8',
                'lat' => '48.860291',
                'lng' => '2.340320',
            ],
            [
                'collaboration_id' => '9',
                'lat' => '48.859900',
                'lng' => '2.338796',
            ],
            [
                'collaboration_id' => '10',
                'lat' => '48.860371',
                'lng' => '2.334058',
            ],

        ];

        DB::table('llx_collaboration_lat_lng')->insert($collaborateurs);
    }
}
