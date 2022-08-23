<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['role' => 'Super admin', 'status' => 1, 'created_at' => date("Y-m-d h:i:s")],
            ['role' => 'Controller', 'status' => 1, 'created_at' => date("Y-m-d h:i:s")],
            ['role' => 'Planner', 'status' => 1, 'created_at' => date("Y-m-d h:i:s")],
            ['role' => 'Collaborateurs', 'status' => 1, 'created_at' => date("Y-m-d h:i:s")],
            ['role' => 'Team Leader', 'status' => 1, 'created_at' => date("Y-m-d h:i:s")],
        ];
        DB::table('roles')->insert($roles);
    }
}
