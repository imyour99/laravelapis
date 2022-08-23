<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Agency;
use App\Models\AgencyImage;
use Maatwebsite\Excel\Facades\Excel;

class AgencesController extends Controller {

    public function index() {
        // $quryGettingAgency = DB::table('llx_agency')->get();
        $quryGettingAgency = Agency::with('agencyevents', 'agencyPhoto', 'agencycomments')->get();
//        dd($quryGettingAgency);
        return view('agences.agences_list', ['data' => $quryGettingAgency]);
        //return view('agences.agences_list');
    }

    public function AgencyExport(Request $request) {
        $AgecyData = Agency::orderBy('id', 'DESC')->get();
        $AgencyCount = count($AgecyData);
        $fileName = 'AgencyReport.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $columns = array('Nom', 'Address', 'Code Postal', 'N-Agency',
            'Responsable', 'Name Responsable', 'Agence Name', 'Agence Address',
            'Agence city', 'Agence Tel', 'service client', 'Agence email',
            'Tel responsable', 'Responsable Email', 'status');
        $callback = function () use ($AgecyData, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);
            foreach ($AgecyData as $user) {
                $row['Nom'] = $user->agencenom;
                $row['Address'] = $user->agenceaddress;
                $row['Code Postal'] = $user->postal_code;
                $row['N Agency'] = $user->agencenom;
                $row['Responsable'] = $user->responsible;
                $row['Name Responsable'] = $user->responsible;
                $row['Agence Name'] = $user->agencenom;
                $row['Agence Address'] = $user->agenceaddress;
                $row['Agence city'] = $user->agencecity;
                $row['Agence Tel'] = $user->telagency;
                $row['service client'] = $user->telServiceclient;
                $row['Agence email'] = $user->emailagence;
                $row['Tel responsable'] = $user->telresponsible;
                $row['Responsable Email'] = $user->emailesponsible;
                $row['status'] = $user->status;

                fputcsv($file, array($row['Nom'], $row['Address'], $row['Code Postal'],
                    $row['N Agency'], $row['Responsable'], $row['Name Responsable'], $row['Agence Name'], $row['Agence Address'],
                    $row['Agence city'], $row['Agence Tel'], $row['service client'], $row['Agence email'],
                    $row['Tel responsable'], $row['Responsable Email'], $row['status']));
            }


            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function StoreAgency(Request $request){
        $agencyTable = Agency::create(['agencenom' => $request->nomDeagency,
                    'agenceaddress' => $request->agenceaddress,
                    'postal_code' => $request->postalCode,
                    'agencebat' => $request->agencebat,
                    'agencecity' => $request->agencyCity,
                    'responsible' => $request->NomDuresponsable,
                    'telagency' => $request->TelAgency,
                    'telServiceclient' => $request->TelServiceClinet,
                    'emailagence' => $request->agnecyEmail,
                    'telresponsible' => $request->ResponsbleTel,
                    'emailesponsible' => $request->emailResponsble,
                    'status' => 'active']);
        $id = $agencyTable->id;
        if ($request->hasFile('agencyImage1')) {
            $image_name = 'Agency_img1-' . time() . '.' . $request->agencyImage1->extension();
            $request->agencyImage1->move(public_path('/uploads/Agency_images'), $image_name);
            $agencyData = new AgencyImage();
            $agencyData->pic_name = $image_name;
            $agencyData->pic_url = $image_name;
            $agencyData->pic_pos = '1';
            $agencyData->agency_id = $id;
            $agencyData->save();
         }

        if ($request->hasFile('agencyImage2')) {
            $agencyData1 = new AgencyImage();
            $image_nameag2 = 'Agency_img2-' . time() . '.' . $request->agencyImage2->extension();
            $request->agencyImage2->move(public_path('/uploads/Agency_images'), $image_nameag2);
            $agencyData1->pic_name = $image_nameag2;
            $agencyData1->pic_url = $image_nameag2;
            $agencyData1->pic_pos = '2';
            $agencyData1->agency_id = $id;
            $agencyData1->save();
            $agencyData1->save();
        }
        if ($request->hasFile('agencyImage3')) {
            $image_nameag3 = 'Agency_img3-' . time() . '.' . $request->agencyImage3->extension();
            $request->agencyImage3->move(public_path('/uploads/Agency_images'), $image_nameag3);
            $agencyData2 = new AgencyImage();
            $agencyData2->pic_name = $image_nameag3;
            $agencyData2->pic_url = $image_nameag3;
            $agencyData2->pic_pos = '3';
            $agencyData2->agency_id = $id;
            //$agencyData2->save();
           $agencyData2->save();

        }
        return true;
    }



    public function agency_edit(Request $request)
    {


        $agent_id = $request->agent_id;
        $agencenom = $request->agencenom;
        $agenceaddress= $request->agenceaddress;
        $agencebat = $request->agencebat;
        $postal_code = $request->postal_code;
        $agencecity = $request->agencecity;
        $responsible = $request->responsible;
        $telagency = $request->telagency;
        $telServiceclient = $request->telServiceclient;
        $emailagence = $request->emailagence;
        $telresponsible = $request->telresponsible;
        $emailesponsible = $request->emailesponsible;

        $agency_edit = DB::table('llx_agency')->where('id', $agent_id)->update(
            [
                'agencenom' => $agencenom,
                'agenceaddress' => $agenceaddress,
                'agencebat' => $agencebat,
                'postal_code' => $postal_code,
                'agencecity' => $agencecity,
                'responsible' => $responsible,
                'telagency' => $telagency,
                'telServiceclient' => $telServiceclient,
                'emailagence' => $emailagence,
                'telresponsible' => $telresponsible,
                'emailesponsible' => $emailesponsible,
            ]
        );

    }

}
