<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collaboration;
use App\Models\Interventions;
use App\Models\Visites;
use App\Models\Client;
use DB;
use Illuminate\Support\Facades\Session;

class AdminPlanningController extends Controller
{

    public function index()
    {
        $collaborations = DB::table('llx_collaboration')->limit('3')->get();

        $collaborateurs = DB::table('llx_collaboration')->get();

        return view('admin_planning.admin_planning_calendar', compact('collaborations','collaborateurs'));
    }


    public function setCollabSession(Request $request)
    {

        $collab_id = $request->collab_id;

        $type = $request->type;
        $date = $request->date;


        $collaborations = DB::table('llx_collaboration')->whereIn('id',explode(",",$collab_id))->get();

        if($type == 'intervention' || $type == '')
        {
            if ($request->ajax()) {
                return \Response::json(\View::make('admin_planning.admin_planning_intervention_ajax', compact('collaborations'))->render());
            }
            return view('admin_planning.admin_planning_intervention', compact('collaborations'));
        }
        else
        {
            if ($request->ajax()) {
                return \Response::json(\View::make('admin_planning.admin_planning_visite_ajax', compact('collaborations'))->render());
            }
            return view('admin_planning.admin_planning_visite', compact('collaborations'));
        }


    }


    public function setCollaborateurCalendarStatus()
    {

        $collabIds = request('collab_ids');
        $status = request('status');

        $collabIdsArr = [];
        if (!empty($collabIds))
            $collabIdsArr = explode(',', $collabIds);

        foreach ($collabIdsArr as $collabId) {
            Collaboration::where('id', $collabId)->update(['calendar_status' => $status]);
        }

        echo 1;
        return;
    }

    public function search(Request $request)
    {

        $search = $request->search;
        $type = $request->type;
        $date = $request->date;

        $collaborations = DB::table('llx_collaboration')
            ->where('nom' ,'like', "%$search%")->get();




        if($type == 'intervention' || $type == '')
        {
            if ($request->ajax()) {
                return \Response::json(\View::make('admin_planning.admin_planning_intervention_ajax', compact('collaborations'))->render());
            }
            return view('admin_planning.admin_planning_intervention', compact('collaborations'));
        }
        else
        {
            if ($request->ajax()) {
                return \Response::json(\View::make('admin_planning.admin_planning_visite_ajax', compact('collaborations'))->render());
            }
            return view('admin_planning.admin_planning_visite', compact('collaborations'));
        }

        return view('admin_planning.admin_planning_calendar', compact('collaborations'));
    }

    public function exportSchedules(Request $request)
    {
        $records = session('records');
        $currentDate = session('current_date');
        $search = session('search');
        $type = session('schedule_type');

        // echo $type; exit;

        if ($type == 'intervention') {
            $where = "date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "'";

            if (!empty($search)) {
                $where = "date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' AND (LOWER(llx_collaboration.prenom) like '%" . strtolower($search) . "%' OR LOWER(llx_collaboration.nom) like '%" . strtolower($search) . "%')";
            }

            //echo $where; exit;

            $scheduleData = Interventions::selectRaw('interventions.id,llx_client.prenom as client_firstname,llx_client.nom as client_lastname,llx_client.nom as client_lastname,llx_collaboration.nom,llx_collaboration.prenom,interventions.schedule,intervention_statuses.name as status')
                ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'interventions.assignee_id')
                ->leftJoin('llx_client', 'llx_client.id', 'interventions.client_id')
                ->leftJoin('intervention_statuses', 'intervention_statuses.id', 'llx_client.intervention_status')
                ->whereRaw($where)
                ->distinct()
                ->get();
            $fileName = 'interventionReport-' . $currentDate . '.csv';
        } else {
            $where = "date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "'";

            if (!empty($search)) {
                $where = "date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' AND (LOWER(llx_collaboration.prenom) like '%" . strtolower($search) . "%' OR LOWER(llx_collaboration.nom) like '%" . strtolower($search) . "%')";
            }
            $scheduleData = Visites::selectRaw('visites.id,llx_client.prenom as client_firstname,llx_client.nom as client_lastname,llx_collaboration.nom,llx_collaboration.prenom,llx_client.adress,visites.schedule,visite_statuses.name as status')
                ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'visites.assignee_id')
                ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                ->leftJoin('visite_statuses', 'visite_statuses.id', 'llx_client.visite_status')
                ->whereRaw($where)
                ->distinct()
                ->get();
            $fileName = 'visiteReport-' . $currentDate . '.csv';
        }

        $scheduleCount = count($scheduleData);

        // echo '<pre>';
        // print_r($scheduleData);
        // exit;

        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $columns = array('ID', 'Client', 'Collaborateur', 'Type', 'Schedule', 'Status');

        $callback = function () use ($scheduleData, $columns) {

            $file = fopen('php://output', 'w');

            fputcsv($file, $columns);

            foreach ($scheduleData as $schedule) {
                $row['ID'] = $schedule->id;
                $row['Client'] = $schedule->client_firstname . ' ' . $schedule->client_lastname;
                $row['Collaborateur'] = $schedule->prenom . ' ' . $schedule->nom;
                $row['Type'] = $schedule->type;
                $row['Schedule'] = $schedule->schedule;
                $row['Status'] = $schedule->status;

                fputcsv($file, array($row['ID'], $row['Client'], $row['Collaborateur'], $row['Type'], $row['Schedule'], $row['Status']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function unsetCollabSession($collab_id)
    {

        $records = session('records');

        if (!empty($records[$collab_id]))
            unset($records[$collab_id]);

        session(['records' => $records]);

        return;
    }


    public function map($type = 'visite')
    {

        $currentDate = date('Y-m-d');

        if (!empty(request('date'))) {
            $currentDate = request('date');
        }

        session(['current_date' => $currentDate]);
        session(['schedule_type' => $type]);

        $collaborateurs = Collaboration::all();

        $recordClients = Client::where('status', 'active')->get();
        $nonAffectes = [];
        foreach ($recordClients as $client) {

            $dateTimes = [
                date('Y-m-d 00:00:00'),
                date('Y-m-d 02:00:00'),
                date('Y-m-d 04:00:00'),
                date('Y-m-d 06:00:00'),
                date('Y-m-d 08:00:00'),
                date('Y-m-d 10:00:00'),
                date('Y-m-d 12:00:00'),
                date('Y-m-d 14:00:00'),
                date('Y-m-d 16:00:00'),
                date('Y-m-d 18:00:00'),
                date('Y-m-d 20:00:00')
            ];

            foreach ($dateTimes as $k => $dateTime) {

                if ($type == 'intervention') {
                    $recordCount = Interventions::select('interventions.*', 'llx_client.adress')
                        ->leftJoin('llx_client', 'llx_client.id', 'interventions.client_id')
                        ->whereRaw("schedule = '" . $dateTime . "'")->count();
                } else {
                    $recordCount = Visites::select('visites.*', 'llx_client.adress')
                        ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                        ->whereRaw("schedule = '" . $dateTime . "'")->count();
                }

                if ($recordCount > 0) {
                    unset($dateTimes[$k]);
                }
            }

            $nonAffectes[] = [
                'client_id' => $client->id,
                'client_address' => $client->adress,
                'client_nom' => $client->nom,
                'client_tel' => $client->telephone,
                'client_nonschedules' => $dateTimes,
            ];
        }

        $records = session('records');

        if (empty($records)) {

            if ($type == 'intervention') {
                $collabUsers = Interventions::select('interventions.assignee_id')
                    ->leftJoin('llx_client', 'llx_client.id', 'interventions.client_id')
                    ->whereRaw("date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "'")->get();
            } else {
                $collabUsers = Visites::select('visites.assignee_id')
                    ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                    ->whereRaw("date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "'")->get();

                // echo '<pre>';
                // print_r($collabUsers);
                // exit;
            }

            // echo count($collabUsers); exit;
            foreach ($collabUsers as $collabUser) {
                Self::setCollabSession($collabUser->assignee_id);
            }
        } else {
            $collabIds = array_keys($records);

            foreach ($collabIds as $collabId) {
                Self::setCollabSession($collabId);
            }
        }

        $records = session('records');

        //setCollabSession($collab_id)

        // echo '<pre>';
        // print_r($records);
        // exit;

        $interventions = session('interventions');
        $visites = session('visites');

        // echo '<pre>';
        // print_r($records);
        // exit;
        $success = 0;
        $semiKO = 0;
        $KO = 0;

        if(!empty($records)){
            foreach($records as $record){
                if ($type == 'visite') {
                    // $success = 0;
                    // $semiKO = 0;
                    // $KO = 0;
                    //$interventions = session('interventions');
                    $visites = $record['visites'];

                    if (!empty($visites)) {

                        foreach ($visites as $visite) {
                            //echo $visites['intervention_status']; exit;
                            if ($visite['visite_status'] == 4) {
                                $success++;
                            }

                            if ($visite['visite_status'] == 3) {
                                $semiKO++;
                            }

                            if ($visite['visite_status'] == 2) {
                                $KO++;
                            }
                        }
                    }
                } else {

                    $interventions = $record['interventions'];
                    if (!empty($interventions)) {
                        foreach ($interventions as $intervention) {
                            //echo $intervention['intervention_status']; exit;
                            if ($intervention['intervention_status'] == 4) {
                                $success++;
                            }

                            if ($intervention['intervention_status'] == 3) {
                                $semiKO++;
                            }

                            if ($intervention['intervention_status'] == 2) {
                                $KO++;
                            }
                        }
                    }
                }
            }
        }


        if($success > 1) $success--;
        if($semiKO > 1) $semiKO--;
        if($KO > 1) $KO--;

        // $interventions = session('interventions');
        // $visites = session('visites');

        // echo '<pre>';
        // print_r(session('interventions_collabs'));
        // exit;
        // echo $type; exit;
        // echo '<pre>';
        // print_r($records);
        // exit;
        $data = [
            'type' => $type,
            'collaborateurs' => $collaborateurs,
            'records' => $records,
            'interventions_collabs' => session('interventions_collabs'),
            'visites_collabs' => session('visites_collabs'),
            // 'interventions' => $interventions,
            // 'visites' => $visites,
            'non_affectes' => $nonAffectes,
            'success' => $success,
            'semiKO' => $semiKO,
            'KO' => $KO,
        ];

        return view('admin_planning.map.admin_planning_map', $data);
    }
}
