<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
//use App\Exports\UsersExport;
use App\Models\Client;
use App\Models\Interventions;
use App\Models\Visites;
use App\Imports\ClientImport;
use App\Models\Collaboration;
use Auth;

use Maatwebsite\Excel\Facades\Excel;
use Svg\Tag\Rect;

class ClientController extends Controller
{

    public function index()
    {
        //$quryGettingClint = DB::table('llx_client')->get();
        $collaborateurs = Collaboration::all();

        $markets = DB::table('markets')->get();
        $clientTypes = DB::table('client_types')->get();
        $interventionStatuses = DB::table('intervention_statuses')->get();
        $contractStatuses = DB::table('contract_status')->get();
        $producers = DB::table('producers')->get();
        $meterAccessibility = DB::table('meter_accessibility')->get();
        $appointmentNeed = DB::table('appointment_need')->get();
        $techniciens = DB::table('llx_collaboration')->where('status', 'active')->get();
        $inactiveTechniciens = DB::table('llx_collaboration')->where('status', 'inactive')->get();
        $interventionSpecifities = DB::table('intervention_specifities')->get();
        $notificationCriticalities = DB::table('notification_criticalities')->get();
        $notificationTypes = DB::table('notification_types')->get();
        $notificationStatus = DB::table('notification_status')->get();

        $filters = [
            'markets' => $markets,
            'client_types' => $clientTypes,
            'intervention_statuses' => $interventionStatuses,
            'contract_status' => $contractStatuses,
            'producers' => $producers,
            'meter_accessibility' => $meterAccessibility,
            'appointment_need' => $appointmentNeed,
            'techniciens' => $techniciens,
            'inactive_techniciens' => $inactiveTechniciens,
            'intervention_specifities' => $interventionSpecifities,
            'notification_criticalities' => $notificationCriticalities,
            'notification_types' => $notificationTypes,
            'notification_status' => $notificationStatus,
        ];

        $quryGettingClint = DB::table('llx_client');

        if (!empty(request('nom_name'))) {
            $quryGettingClint->whereRaw("(nom like '%" . request('nom_name') . "%')");
        }

        if (!empty(request('npdl'))) {
            $quryGettingClint->whereRaw("pdl like '%" . request('npdl') . "%'");
        }

        if (!empty(request('telephone'))) {
            $quryGettingClint->whereRaw("telephone like '%" . request('telephone') . "%'");
        }

        if (!empty(request('market'))) {
            $quryGettingClint->whereRaw("market = '" . request('market') . "'");
        }

        if (!empty(request('commune'))) {
            $quryGettingClint->whereRaw("commune like '%" . request('commune') . "%'");
        }

        if (!empty(request('address'))) {
            $quryGettingClint->whereRaw("adress like '%" . request('address') . "%'");
        }

        if (!empty(request('client_type'))) {
            $quryGettingClint->whereRaw("adress like '%" . request('client_type') . "%'");
        }

        if (!empty(request('intervention_status'))) {
            $quryGettingClint->whereRaw("intervention_status = " . request('intervention_status'));
        }

        if (!empty(request('contract_status'))) {
            $quryGettingClint->whereRaw("contract_status = " . request('contract_status'));
        }

        if (!empty(request('meter_accessibility'))) {
            $quryGettingClint->whereRaw("meter_accessibility = " . request('meter_accessibility'));
        }

        if (!empty(request('appointment_need'))) {
            $quryGettingClint->whereRaw("appointment_need = " . request('appointment_need'));
        }

        if (!empty(request('unsuccessful_contact'))) {
            $quryGettingClint->whereRaw("unsuccessful_contact_reasons = " . request('unsuccessful_contact'));
        }

        if (!empty(request('intervention_specifity'))) {
            $quryGettingClint->whereRaw("intervention_specifities = " . request('intervention_specifity'));
        }

        if (!empty(request('notification_criticalities'))) {
            $quryGettingClint->whereRaw("notification_criticalities = " . request('notification_criticalities'));
        }

        if (!empty(request('notification_types'))) {
            $quryGettingClint->whereRaw("notification_type = " . request('notification_types'));
        }

        if (!empty(request('notification_status'))) {
            $quryGettingClint->whereRaw("notification_status = " . request('notification_status'));
        }

        if (!empty(request('rappel_date_from'))) {
            $quryGettingClint->whereRaw("rappel_date_from >= '" . request('rappel_date_from') . "'");
        }

        if (!empty(request('rappel_date_to'))) {
            $quryGettingClint->whereRaw("rappel_date_to <= '" . request('rappel_date_to') . "'");
        }

        if (!empty(request('intervention_date_from'))) {
            $quryGettingClint->whereRaw("rappel_date_from >= '" . request('rappel_date_from') . "'");
        }

        if (!empty(request('intervention_date_to'))) {
            $quryGettingClint->whereRaw("rappel_date_to <= '" . request('rappel_date_to') . "'");
        }

        if (!empty(request('last_customer_date_from'))) {
            $quryGettingClint->whereRaw("rappel_date_from >= '" . request('rappel_date_from') . "'");
        }

        if (!empty(request('last_customer_date_to'))) {
            $quryGettingClint->whereRaw("rappel_date_to <= '" . request('rappel_date_to') . "'");
        }

        if (!empty(request('termination_date_from'))) {
            $quryGettingClint->whereRaw("rappel_date_from >= '" . request('rappel_date_from') . "'");
        }

        if (!empty(request('termination_date_to'))) {
            $quryGettingClint->whereRaw("rappel_date_to <= '" . request('rappel_date_to') . "'");
        }

        if (!empty(request('theoretical_date_from'))) {
            $quryGettingClint->whereRaw("rappel_date_from >= '" . request('rappel_date_from') . "'");
        }

        if (!empty(request('theoretical_date_to'))) {
            $quryGettingClint->whereRaw("rappel_date_to <= '" . request('rappel_date_to') . "'");
        }

        // exit;
        $quryGettingClint = $quryGettingClint->get();

        return view('client.clientsList', ['data' => $quryGettingClint, 'collaborateurs' => $collaborateurs, 'filters' => $filters, 'requests' => request()->all()]);
        //return view('clientsList');
    }

    //

    public function import(Request $request)
    {
        Excel::import(new ClientImport, request()->file('file'));

        return back();
    }

    public function ClientExport(Request $request)
    {
        $ClientData = Client::orderBy('id', 'DESC')->get();
        $ClientCount = count($ClientData);
        $fileName = 'clientReport.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $columns = array(
            'nom',
            'pdl',
            'telephone',
            'adress',
            'villa',
            'code',
            'title',
            'email',
            'dev_typed',
            'dev_duree',
            'dev_maille',
            'dev_contrat',
            'dev_du',
            'dev_au',
            'dev_numero',
            'dev_r_voie',
            'dev_zdd',
            'dev_code',
            'dev_commune',
            'dev_note',
            'dev_l_voie',
            'tech_categorie',
            'tech_tarif',
            'tech_puissance_souscrite',
            'tech_organe_de_coupure',
            'tech_produkteur',
            'tech_type',
            'tech_matricule',
            'tech_nbfils',
            'tech_num_de_serie',
            'tech_nature',
            'tech_marque',
            'tech_intensite',
            'tech_nbfils',
            'tech_plage',
            'latitude',
            'longitude',
            'status'
        );

        $callback = function () use ($ClientData, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($ClientData as $user) {
                $row['nom'] = $user->nom;
                $row['pdl'] = $user->pdl;
                $row['telephone'] = $user->telephone;
                $row['adress'] = $user->adress;
                $row['villa'] = $user->villa;
                $row['code'] = $user->code;
                $row['title'] = $user->title;
                $row['email'] = $user->email;
                $row['dev_typed'] = $user->dev_typed;
                $row['dev_duree'] = $user->dev_duree;
                $row['dev_maille'] = $user->dev_maille;
                $row['dev_contrat'] = $user->dev_contrat;
                $row['dev_du'] = $user->dev_du;
                $row['dev_au'] = $user->dev_au;
                $row['dev_numero'] = $user->dev_numero;
                $row['dev_r_voie'] = $user->dev_r_voie;
                $row['dev_zdd'] = $user->dev_zdd;
                $row['dev_code'] = $user->dev_code;
                $row['dev_commune'] = $user->dev_commune;
                $row['dev_note'] = $user->dev_note;
                $row['dev_l_voie'] = $user->dev_l_voie;
                $row['tech_categorie'] = $user->tech_categorie;
                $row['tech_tarif'] = $user->tech_tarif;
                $row['tech_puissance_souscrite'] = $user->tech_puissance_souscrite;
                $row['tech_organe_de_coupure'] = $user->tech_organe_de_coupure;
                $row['tech_produkteur'] = $user->tech_produkteur;
                $row['tech_type'] = $user->tech_type;
                $row['tech_matricule'] = $user->tech_matricule;
                $row['tech_nbfils'] = $user->tech_nbfils;
                $row['tech_num_de_serie'] = $user->tech_num_de_serie;
                $row['tech_nature'] = $user->tech_nature;
                $row['tech_marque'] = $user->tech_marque;
                $row['tech_intensite'] = $user->tech_intensite;
                $row['tech_nbfils'] = $user->tech_nbfils;
                $row['tech_plage'] = $user->tech_plage;
                $row['latitude'] = $user->latitude;
                $row['longitude'] = $user->longitude;
                $row['status'] = $user->status;

                fputcsv($file, array(
                    $row['nom'],
                    $row['pdl'],
                    $row['telephone'],
                    $row['adress'],
                    $row['villa'],
                    $row['code'],
                    $row['title'],
                    $row['email'],
                    $row['dev_typed'],
                    $row['dev_duree'],
                    $row['dev_maille'],
                    $row['dev_contrat'],
                    $row['dev_du'],
                    $row['dev_numero'],
                    $row['dev_r_voie'],
                    $row['dev_zdd'],
                    $row['dev_code'],
                    $row['dev_commune'],
                    $row['dev_note'],
                    $row['dev_l_voie'],
                    $row['tech_categorie'],
                    $row['tech_tarif'],
                    $row['tech_puissance_souscrite'],
                    $row['tech_organe_de_coupure'],
                    $row['tech_produkteur'],
                    $row['tech_type'],
                    $row['tech_matricule'],
                    $row['tech_nbfils'],
                    $row['tech_num_de_serie'],
                    $row['tech_nature'],
                    $row['tech_marque'],
                    $row['tech_intensite'],
                    $row['tech_nbfils'],
                    $row['tech_plage'],
                    $row['latitude'],
                    $row['longitude'],
                    $row['status']
                ));
            }


            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function getIntervention()
    {

        $clientID = request('clientID');
        $monday = request('monday');

        $sunday = date('Y-m-d', strtotime('sunday this week'));
        //echo $friday; exit;
        $client = Client::where('id', $clientID)->first()->toArray();
        $collaborateurs = Collaboration::all();
        $interventions = Interventions::select('llx_collaboration.nom', 'llx_collaboration.prenom', 'interventions.schedule')
            ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'interventions.assignee_id')
            ->whereRaw("client_id = " . $clientID . " and schedule >= '" . $monday . "' and schedule <= '" . $sunday . "'")
            ->get();

        $schedulesArr = [];

        foreach ($interventions as $intervention) {
            $schedulesArr[] = $intervention->schedule;
        }

        $data = [
            'clientData' => $client,
            'interventions' => $interventions,
            'schedules' => $schedulesArr,
            'collaborateurs' => $collaborateurs
        ];

        return $data;
    }

    public function saveIntervention(Request $request)
    {

        $schedule = request('dateVal') . ' ' . str_pad(request('dateTimeVal'), 2, 0, STR_PAD_LEFT) . ':00';
        $schedule = date('Y-m-d H:i:00', strtotime($schedule));

        $intervention = [
            'user_id' => Auth::id(),
            'client_id' => request('clientID'),
            'assignee_id' => request('assigneeID'),
            'schedule' => $schedule
        ];

        $exists = Interventions::where($intervention)->count();

        if ($exists == 0) {
            $intervention['created_at'] = date('Y-m-d H:i:s');
            $intervention['updated_at'] = date('Y-m-d H:i:s');
            Interventions::insert($intervention);
        } else {
            $intervention['updated_at'] = date('Y-m-d H:i:s');
            Interventions::where($intervention)->update($intervention);
        }

        $start = request('dateTimeVal');
        // $ampm = 'AM';
        // if ($start > 12) {
        //     $start = $start - 12;
        //     $ampm = 'PM';
        // }

        $startTime = request('dateTimeVal') . ':00';
        $endTime = (request('dateTimeVal') + 2) . ':00';

        $client = Client::where('id', request('clientID'))->first();
        $image = asset('public/assets/img/media/collab.png');

        if (!empty($client->image)) {
            $imagePath = public_path('assets/img/clients/' . $client->image);
            if (!is_dir($imagePath) && file_exists($imagePath)) {
                $image = $imagePath;
            }
        }

        $data = [
            'client' => $client,
            'image' => $image,
            'schedule_label' => date('l d F', strtotime(request('dateVal'))),
            // 'schedule_time' => $startTime . ' - ' . $endTime . ' ' . $ampm
            'schedule_time' => $startTime . ' - ' . $endTime
        ];

        return $data;
    }

    public function getVisite()
    {

        $clientID = request('clientID');
        $monday = request('monday');

        $sunday = date('Y-m-d', strtotime('sunday this week'));
        //echo $friday; exit;
        $client = Client::where('id', $clientID)->first()->toArray();
        $collaborateurs = Collaboration::all();
        $visites = Visites::select('llx_collaboration.nom', 'llx_collaboration.prenom', 'visites.schedule')
            ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'visites.assignee_id')
            ->whereRaw("client_id = " . $clientID . " and schedule >= '" . $monday . "' and schedule <= '" . $sunday . "'")
            ->get();

        $schedulesArr = [];

        foreach ($visites as $visite) {
            $schedulesArr[] = $visite->schedule;
        }

        $data = [
            'clientData' => $client,
            'visites' => $visites,
            'schedules' => $schedulesArr,
            'collaborateurs' => $collaborateurs
        ];

        return $data;
    }

    public function saveVisite()
    {

        $schedule = request('dateVal') . ' ' . str_pad(request('dateTimeVal'), 2, 0, STR_PAD_LEFT) . ':00';
        $schedule = date('Y-m-d H:i:00', strtotime($schedule));

        $visite = [
            'user_id' => Auth::id(),
            'client_id' => request('clientID'),
            'assignee_id' => request('assigneeID'),
            'schedule' => $schedule
        ];

        $exists = Visites::where($visite)->count();

        if ($exists == 0) {
            $visite['created_at'] = date('Y-m-d H:i:s');
            $visite['updated_at'] = date('Y-m-d H:i:s');
            Visites::insert($visite);
        } else {
            $visite['updated_at'] = date('Y-m-d H:i:s');
            Visites::where($visite)->update($visite);
        }

        $start = request('dateTimeVal');
        $ampm = 'AM';
        if ($start > 12) {
            $start = $start - 12;
            $ampm = 'PM';
        }

        $startTime = request('dateTimeVal') . ':00';
        $endTime = (request('dateTimeVal') + 2) . ':00';

        $client = Client::where('id', request('clientID'))->first();
        $image = asset('public/assets/img/media/collab.png');

        if (!empty($client->image)) {
            $imagePath = public_path('assets/img/clients/' . $client->image);
            if (!is_dir($imagePath) && file_exists($imagePath)) {
                $image = $imagePath;
            }
        }

        $data = [
            'client' => $client,
            'image' => $image,
            'schedule_label' => date('l d F', strtotime(request('dateVal'))),
            'schedule_time' => $startTime . ' - ' . $endTime . ' ' . $ampm
        ];

        return $data;
    }

    public function getInterventionStatus()
    {

        $statuses = DB::table('intervention_statuses')->get()->toArray();
        return $statuses;
    }

    public function getInterventionschedule(Request $request)
    {
        $client_id = $request->client_id;
        $statuses = DB::table('interventions')
        ->where('client_id',$client_id)
        ->get()->toArray();


        return $statuses;

    }

    public function getVisiteStatus()
    {

        $statuses = DB::table('visite_statuses')->get()->toArray();
        return $statuses;
    }

    public function saveClientStatus()
    {

        $clientID = request('client_id');
        $interventionstatus = request('interventionstatus');
        $visitestatus = request('visitestatus');
        $interventionComment = request('interventionComment');
        $visiteComment = request('visiteComment');
        $type = request('type');
        $intervention_schedule = request('interventionschedule');
        $visite_schedule = request('visiteschedule');

        if ($type == 'intervention') {
            $data = [

                'status' => $interventionstatus,
                'comment' => $interventionComment
            ];



            $interventions_table = DB::table('interventions')->where('client_id', $clientID)->where('schedule', $intervention_schedule)->first();

            $msg=array();
            if($interventions_table)
            {
                $interventions_update = DB::table('interventions')->where('client_id', $clientID)->where('schedule', $intervention_schedule)->update($data);

                $msg['cenas']="true";
                echo json_encode($msg);

            }
            else
            {
                $msg['cenas']="false";
                echo json_encode($msg);
            }

        }
        else
        {
            $data = [
                'status' => $visitestatus,
                'comment' => $visiteComment
            ];


            $visite_table = DB::table('visites')->where('client_id', $clientID)->where('schedule', $visite_schedule)->first();
            $msg=array();
            if($visite_table)
            {
                $interventions_update = DB::table('visites')->where('client_id', $clientID)->where('schedule', $visite_schedule)->update($data);

                $msg['cenas']="true";
                echo json_encode($msg);

            }
            else
            {
                $msg['cenas']="false";
                echo json_encode($msg);
            }

        }





    }

    public function inforamtion_pdl_save(Request $request)
    {
        $client_id = $request->client_id;

        $pdl = $request->pdl;
        $nom = $request->nom;
        $prenom = $request->prenom;
        $telephone  = $request->telephone;

        $telephone_portable2 = $request->telephone_portable2;
        $telephone_fixe = $request->telephone_fixe;
        $telephone_pro = $request->telephone_pro;
        $email = $request->email;
        $adress = $request->adress;
        $code = $request->code;
        $villa = $request->villa;

        $adress2 = $request->adress2;
        $code2 = $request->code2;
        $villa2 = $request->villa2;
        $telephone2 = $request->telephone2;
        $email2 = $request->email2;
        $observations = $request->observations;


        $markets_assigne_update = DB::table('llx_client')->where('id', $client_id)->update(
            [
                'pdl' => $pdl,
                'nom' => $nom,
                'prenom' => $prenom,
                'telephone' => $telephone,

                'telephone_portable2' => $telephone_portable2,
                'telephone_fixe' => $telephone_fixe,
                'telephone_pro' => $telephone_pro,
                'email' => $email,
                'adress' => $adress,
                'code' => $code,
                'villa' => $villa,


                'adress2' => $adress2,
                'code2' => $code2,
                'villa2' => $villa2,
                'telephone2' => $telephone2,
                'email2' => $email2,
                'observations' => $observations,




            ]
        );
    }


    public function deploiement_save(Request $request)
    {


        $client_id = $request->client_id;
        $type_intervention = $request->type_intervention;
        $dev_typed = $request->dev_typed;
        $dev_duree = $request->dev_duree;
        $dev_contrat = $request->dev_contrat;
        $dev_numero = $request->dev_numero;
        $dev_r_voie = $request->dev_r_voie;
        $dev_complement = $request->dev_complement;
        $dev_code = $request->dev_code;
        $dev_commune = $request->dev_commune;
        $tech_categorie = $request->tech_categorie;
        $dev_l_voie = $request->dev_l_voie;
        $dev_maille = $request->dev_maille;
        $dev_du = $request->dev_du;
        $dev_au = $request->dev_au;
        $dev_zdd = $request->dev_zdd;
        $dev_note = $request->dev_note;


        $markets_assigne_update = DB::table('llx_client')->where('id', $client_id)->update(
            [
                'type_intervention' => $type_intervention,
                'dev_typed' => $dev_typed,
                'dev_duree' => $dev_duree,
                'dev_contrat' => $dev_contrat,
                'dev_numero' => $dev_numero,
                'dev_r_voie' => $dev_r_voie,
                'dev_complement' => $dev_complement,
                'dev_code' => $dev_code,
                'dev_commune' => $dev_commune,
                'tech_categorie' => $tech_categorie,
                'dev_l_voie' => $dev_l_voie,
                'dev_maille' => $dev_maille,
                'dev_du' => $dev_du,
                'dev_au' => $dev_au,
                'dev_zdd' => $dev_zdd,
                'dev_note' => $dev_note,

            ]
        );


    }


    public function technique_save(Request $request)
    {


        $client_id = $request->client_id;
        $tech_categorie = $request->tech_categorie;
        $tech_tarif = $request->tech_tarif;
        $tech_puissance_souscrite = $request->tech_puissance_souscrite;
        $tech_organe_de_coupure = $request->tech_organe_de_coupure;
        $tech_produkteur = $request->tech_produkteur;
        $tech_type = $request->tech_type;
        $tech_matricule = $request->tech_matricule;
        $tech_nbfils = $request->tech_nbfils;
        $tech_num_de_serie = $request->tech_num_de_serie;
        $tech_nature = $request->tech_nature;
        $tech_marque = $request->tech_marque;
        $tech_intensite = $request->tech_intensite;
        $tech_plage = $request->tech_plage;



        $markets_assigne_update = DB::table('llx_client')->where('id', $client_id)->update(
            [
                'tech_categorie' => $tech_categorie,
                'tech_tarif' => $tech_tarif,
                'tech_puissance_souscrite' => $tech_puissance_souscrite,
                'tech_organe_de_coupure' => $tech_organe_de_coupure,
                'tech_produkteur' => $tech_produkteur,
                'tech_type' => $tech_type,
                'tech_matricule' => $tech_matricule,
                'tech_nbfils' => $tech_nbfils,
                'tech_num_de_serie' => $tech_num_de_serie,
                'tech_categorie' => $tech_categorie,
                'tech_nature' => $tech_nature,
                'tech_marque' => $tech_marque,
                'tech_intensite' => $tech_intensite,
                'tech_plage' => $tech_plage,


            ]
        );


    }


    public function market_function(Request $request)
    {
        $market_id = $request->market_id;
        $client_id = $request->client_id;


        $markets_assigne_update = DB::table('llx_client')->where('id', $client_id)->update(
            [
                'market' => $market_id,
            ]
        );


    }
    public function marche_add(Request $request)
    {
        $market = $request->market;
        $markets = DB::table('markets')->insert(
            array(
                'name'   =>  $market
            )
       );
       return back();
    }
}
