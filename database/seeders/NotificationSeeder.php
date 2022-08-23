<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NotificationSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $i = 1;
        $notification = [
            [
                'nature' => 'Nature',
                'pdl' => 'address',
                'collaborator' => '',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        for ($i = 1; $i <= 5; $i++) {
            $agecy_i = DB::table('llx_notification')->insert($notification);
        }


    }

}
