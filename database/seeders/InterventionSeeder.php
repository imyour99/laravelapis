<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InterventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $interventions = [

            [
                'user_id' => 1,
                'client_id' => 1,
                'assignee_id' => 1,
                'schedule' => date('Y-m-d 08:00:00'),
                'status' => 3,
            ],
            [
                'user_id' => 1,
                'client_id' => 1,
                'assignee_id' => 1,
                'schedule' => date('Y-m-d 10:00:00'),
                'status' => 4,
            ],
            [
                'user_id' => 1,
                'client_id' => 1,
                'assignee_id' => 1,
                'schedule' => date('Y-m-d 14:00:00'),
                'status' => 4,
            ],
            [
                'user_id' => 1,
                'client_id' => 1,
                'assignee_id' => 1,
                'schedule' => date('Y-m-d 16:00:00'),
                'status' => 3,
            ],
            [
                'user_id' => 1,
                'client_id' => 1,
                'assignee_id' => 1,
                'schedule' => date('Y-m-d 20:00:00'),
                'status' => 4,
            ],

            [
                'user_id' => 2,
                'client_id' => 2,
                'assignee_id' => 2,
                'schedule' => date('Y-m-d 08:00:00'),
                'status' => 2,
            ],
            [
                'user_id' => 2,
                'client_id' => 2,
                'assignee_id' => 2,
                'schedule' => date('Y-m-d 10:00:00'),
                'status' => 3,
            ],
            [
                'user_id' => 2,
                'client_id' => 2,
                'assignee_id' => 2,
                'schedule' => date('Y-m-d 16:00:00'),
                'status' => 4,
            ],
            [
                'user_id' => 2,
                'client_id' => 2,
                'assignee_id' => 2,
                'schedule' => date('Y-m-d 18:00:00'),
                'status' => 4,
            ],
            [
                'user_id' => 2,
                'client_id' => 2,
                'assignee_id' => 2,
                'schedule' => date('Y-m-d 20:00:00'),
                'status' => 4,
            ],
            [
                'user_id' => 3,
                'client_id' => 3,
                'assignee_id' => 3,
                'schedule' => date('Y-m-d 08:00:00'),
                'status' => 3,
            ],
            [
                'user_id' => 3,
                'client_id' => 3,
                'assignee_id' => 3,
                'schedule' => date('Y-m-d 010:00:00'),
                'status' => 3,
            ],
            [
                'user_id' => 3,
                'client_id' => 3,
                'assignee_id' => 3,
                'schedule' => date('Y-m-d 12:00:00'),
                'status' => 3,
            ],
            [
                'user_id' => 3,
                'client_id' => 3,
                'assignee_id' => 3,
                'schedule' => date('Y-m-d 16:00:00'),
                'status' => 2,
            ],
            [
                'user_id' => 3,
                'client_id' => 3,
                'assignee_id' => 3,
                'schedule' => date('Y-m-d 20:00:00'),
                'status' => 2,
            ]

        ];

        DB::table('interventions')->insert($interventions);
    }
}
