<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;
class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $i=1;
        for($i=1;$i<=10;$i++)
        {
            $agecy = [
                [
                    'agencenom' => 'Agency '.$i,
                    'agenceaddress' => 'address',
                    'agencebat' => 'Dummyagencebat',
                    'agencecity' => 'Dubai',
                    'postal_code' => '345345',
                    'responsible' => 'admin',
                    'telagency' => '345234535',
                    'telServiceclient' => 'kkp',
                    'emailagence' =>'email@gmail.com',
                    'telresponsible' => '4563456345',
                    'emailesponsible' => 'res@gmail.com',
                    'status' =>'active',
                    'created_at' =>date('Y-m-d H:i:s'),
                    'updated_at' =>date('Y-m-d H:i:s'),
                ],

            ];

            $agecy_i = DB::table('llx_agency')->insert($agecy);
        }



        //
    }
}
