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

    public function index($type = 'visite')
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

        return view('admin_planning.admin_planning_calendar', $data);
    }

    public function setCollabSession($collab_id)
    {
        //echo 'test'; exit;
        $visitesCollabs = null;

        $records = session('records');
        $collab_ids = session('collab_ids');

        $collab_ids[] = $collab_id;

        session(['collab_ids' => $collab_ids]);

        $currentDate = session('current_date');
        // echo $currentDate; exit;
        $type = session('schedule_type');

        if (empty($records)) $records = [];

        $interventionsCollabs = Interventions::select(DB::raw('llx_client.id as client_id'), 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_collaboration.id', 'llx_collaboration.nom', 'llx_collaboration.prenom', 'llx_collaboration.adresse', 'llx_collaboration.status', 'llx_collaboration.profile_img')
            ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'interventions.assignee_id')
            ->leftJoin('llx_client', 'llx_client.id', 'interventions.client_id')
            ->whereRaw("date_format(schedule,'%Y-%m-%d') = '" . $currentDate  . "' and schedule > '".$currentDate." 06:00:00'")
            ->distinct()
            ->get()
            ->toArray();

        $visitesCollabs = Visites::select(DB::raw('llx_client.id as client_id'), 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_collaboration.id', 'llx_collaboration.nom', 'llx_collaboration.prenom', 'llx_collaboration.adresse', 'llx_collaboration.status', 'llx_collaboration.profile_img')
                ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'visites.assignee_id')
                ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                ->whereRaw("date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' and schedule > '".$currentDate." 06:00:00'")
                ->distinct()
                ->get()
                ->toArray();

        $interventions = Interventions::select('interventions.user_id', 'interventions.client_id', 'interventions.assignee_id', 'interventions.schedule', DB::raw('llx_client.id as client_id'), 'llx_client.intervention_status', 'llx_client.pdl', 'llx_client.nom', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
            ->leftJoin('llx_client', 'llx_client.id', 'interventions.client_id')
            ->whereRaw("assignee_id = " . $collab_id . " and date_format(schedule,'%Y-%m-%d') = '" . $currentDate  . "' and schedule > '".$currentDate." 06:00:00'")
            ->orderBy('schedule', 'asc')
            ->distinct()
            ->get()
            ->toArray();

        $visites = Visites::select('visites.user_id', 'visites.client_id', 'visites.assignee_id', 'visites.schedule', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
            ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
            ->whereRaw("assignee_id = " . $collab_id . " and date_format(schedule,'%Y-%m-%d') = '" . $currentDate  . "' and schedule > '".$currentDate." 06:00:00'")
            ->orderBy('schedule', 'asc')
            ->distinct()
            ->get()
            ->toArray();



        // echo '<pre>';
        // print_r($visites);
        // exit;

        // $visites = Visites::select('visites.*', DB::raw('llx_client.id as client_id'), 'llx_client.nom', 'llx_client.pdl', 'llx_client.adress', 'llx_client.status', 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_client.image')
        //     ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
        //     ->whereRaw("assignee_id = " . $collab_id . " and date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "'")
        //     ->orderBy('schedule', 'asc')
        //     ->get()
        //     ->toArray();

        if ($type == 'intervention') {
            $collabDataArr = $interventions;

            $statusKONotRealise = 0;
            $statusKOCLient = 0;
            $statusRealised = 0;
            $statusPastFuture = 0;

            foreach ($collabDataArr as $collabData) {
                if ($collabData['intervention_status'] == 2)
                    $statusKONotRealise++;
                if ($collabData['intervention_status'] == 3)
                    $statusKOCLient++;
                if ($collabData['intervention_status'] == 4)
                    $statusRealised++;
                if ($collabData['intervention_status'] == 5 || $collabData['intervention_status'] == 6)
                    $statusPastFuture++;
            }
        } else {
            $collabDataArr = $visites;

            $statusKONotRealise = 0;
            $statusKOCLient = 0;
            $statusRealised = 0;
            $statusPastFuture = 0;

            foreach ($collabDataArr as $collabData) {
                if ($collabData['visite_status'] == 2)
                    $statusKONotRealise++;
                if ($collabData['visite_status'] == 3)
                    $statusKOCLient++;
                if ($collabData['visite_status'] == 4)
                    $statusRealised++;
                if ($collabData['visite_status'] == 5 || $collabData['visite_status'] == 6)
                    $statusPastFuture++;
            }
        }

        if($statusKONotRealise > 1) $statusKONotRealise--;
        if($statusKOCLient > 1) $statusKOCLient--;
        if($statusRealised > 1) $statusRealised--;
        if($statusPastFuture > 1) $statusPastFuture--;

        $records[$collab_id] = [
            'collaborateurs' => Collaboration::where('id', $collab_id)->first()->toArray(),
            'interventions' => $interventions,
            'visites' => $visites,
            'statusKONotRealise' => $statusKONotRealise,
            'statusKOCLient' => $statusKOCLient,
            'statusRealised' => $statusRealised,
            'statusPastFuture' => $statusPastFuture
        ];


        if (!empty(session('search'))) {

            $search = session('search');
            $collab_ids = array_keys($records);

            $filteredCollabs = Collaboration::whereRaw("LOWER(prenom) like '%" . strtolower($search) . "%' OR LOWER(nom) like '%" . strtolower($search) . "%'")->get()->toArray();
            $filteredCollabIds = array_column($filteredCollabs, 'id');

            foreach ($collab_ids as $k => $collabId) {
                if (!in_array($collabId, $filteredCollabIds)) {
                    unset($records[$k]);
                }
            }

            $interventionsCollabs = Interventions::select(DB::raw('llx_client.id as client_id'), 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_collaboration.id', 'llx_collaboration.nom', 'llx_collaboration.prenom', 'llx_collaboration.adresse', 'llx_collaboration.status', 'llx_collaboration.profile_img')
                ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'interventions.assignee_id')
                ->leftJoin('llx_client', 'llx_client.id', 'interventions.client_id')
                ->whereRaw("date_format(schedule,'%Y-%m-%d') = '" . $currentDate . " and schedule > '".$currentDate." 06:00:00' AND (LOWER(prenom) like '%" . strtolower($search) . "%' OR LOWER(nom) like '%" . strtolower($search) . "%')")
                ->distinct()
                ->get()
                ->toArray();

            $visitesCollabs = Visites::select(DB::raw('llx_client.id as client_id'), 'llx_client.intervention_status', 'llx_client.visite_status', 'llx_collaboration.id', 'llx_collaboration.nom', 'llx_collaboration.prenom', 'llx_collaboration.adresse', 'llx_collaboration.status', 'llx_collaboration.profile_img')
                ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'visites.assignee_id')
                ->leftJoin('llx_client', 'llx_client.id', 'visites.client_id')
                ->whereRaw("date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' and schedule > '".$currentDate." 06:00:00' AND (LOWER(prenom) like '%" . strtolower($search) . "%' OR LOWER(nom) like '%" . strtolower($search) . "%')")
                ->distinct()
                ->get()
                ->toArray();
        }

        session(['interventions_collabs' => $interventionsCollabs, 'visites_collabs' => $visitesCollabs]);
        session(['records' => $records]);
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
        $records = session('records');
        $currentDate = session('current_date');

        if (empty($records)) return;

        $collab_ids = array_keys($records);

        $filteredCollabs = Collaboration::whereRaw("LOWER(prenom) like '%" . strtolower($search) . "%' OR LOWER(nom) like '%" . strtolower($search) . "%'")->get()->toArray();
        $filteredCollabIds = array_column($filteredCollabs, 'id');

        foreach ($collab_ids as $k => $collabId) {
            if (!in_array($collabId, $filteredCollabIds)) {
                unset($records[$collabId]);
                unset($collab_ids[$k]);
            }
        }

        $interventionsCollabs = Interventions::select('llx_collaboration.id', 'llx_collaboration.nom', 'llx_collaboration.prenom', 'llx_collaboration.adresse', 'llx_collaboration.status', 'llx_collaboration.profile_img')
            ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'interventions.assignee_id')


            ->whereRaw("date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' AND (LOWER(llx_collaboration.prenom) like '%" . strtolower($search) . "%' OR LOWER(llx_collaboration.nom) like '%" . strtolower($search) . "%')")
            ->distinct()
            ->get()
            ->toArray();

        $visitesCollabs = Visites::select('llx_collaboration.id', 'llx_collaboration.nom', 'llx_collaboration.prenom', 'llx_collaboration.adresse', 'llx_collaboration.status', 'llx_collaboration.profile_img')
            ->leftJoin('llx_collaboration', 'llx_collaboration.id', 'visites.assignee_id')
            ->whereRaw("date_format(schedule,'%Y-%m-%d') = '" . $currentDate . "' AND (LOWER(llx_collaboration.prenom) like '%" . strtolower($search) . "%' OR LOWER(llx_collaboration.nom) like '%" . strtolower($search) . "%')")
            ->distinct()
            ->get()
            ->toArray();

        session(['records' => $records]);
        // session(['search' => $search]);
        session(['collab_ids' => $collab_ids]);

        return redirect()->back();
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
