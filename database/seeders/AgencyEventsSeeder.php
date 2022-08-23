<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class AgencyEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
     $i=1;
      for($i=1;$i<=10;$i++){
        $agecy = [
            [
                'nom' => 'chandra',
                'agency_id' => $i,               
                'date_created' =>date('Y-m-d H:i:s'),
            ],
            
             


        ];
       
        $agecy_i = DB::table('llx_agency_events')->insert($agecy);
        }
    }
}
