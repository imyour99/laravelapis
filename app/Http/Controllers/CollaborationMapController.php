<?php

namespace App\Http\Controllers;

use App\Models\Collaboration;
use App\Models\Collaboration_lat_lng;
use App\Models\CollaborationContact;
use App\Models\CollaborationDonneesPersonelles;
use App\Models\CollaborationFormations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CollaborationMapController extends Controller
{
    //

    public function colla_map()
    {

        $collabotations = Collaboration::orderBy('id', 'DESC')->get();

        $general = [];
        if (!empty($id)) {
            $general = Collaboration::find($id);
        }

        $personal_data = [];
        if (!empty($id)) {
            $personal_data = CollaborationDonneesPersonelles::where('collaboration_id', $id)->first();
        }

        $formations = [];
        if (!empty($id)) {
            $formations = CollaborationFormations::where('collaboration_id', $id)->get();
        }

        $contacts = [];
        if (!empty($id)) {
            $contacts = CollaborationContact::where('collaboration_id', $id)->first();
        }


        $donation_materiels = [];
        if (!empty($id)) {
            $donation_materiels = DB::table('llx_collaboration_dotation_equipment')->where('collaboration_id', $id)->get();
        }

        $donation_informatique = [];
        if (!empty($id)) {
            $donation_informatique = DB::table('llx_collaboration_dotation_computer')->where('collaboration_id', $id)->get();
        }

        $donation_vehicle = [];
        if (!empty($id)) {
            $donation_vehicle = DB::table('llx_collaboration_dotation_vehicle')->where('collaboration_id', $id)->get();
        }

        $absences = [];
        if (!empty($id)) {
            $absences = DB::table('collaboration_absences')->where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
        }

        $ecarts = [];
        if (!empty($id)) {
            $ecarts = DB::table('collaboration_ecarts')->where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
        }

        $contact_agencies = DB::table('llx_agency')->get();

        if (!empty($id)) {
            $interventions_success =  DB::table('interventions')->select(
                DB::raw("(COUNT(*)) as count"),
                DB::raw("MONTHNAME(schedule) as month_name")
            )
            ->whereYear('schedule', date('Y'))
            ->groupBy('month_name')
            ->where('status','4')
            ->where('assignee_id',$id)
            ->get();
        }
        else
        {
            $interventions_success = '';
        }

        if (!empty($id)) {
        $interventions_ko =  DB::table('interventions')->select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(schedule) as month_name")
        )
        ->whereYear('schedule', date('Y'))
        ->groupBy('month_name')
        ->where('status','2')
        ->where('assignee_id',$id)
        ->get();
        }
        else
        {
            $interventions_ko= '';
        }


        $collabotations_maps = Collaboration_lat_lng::get();

        return view('collaboration.map.collaboration_map', compact('collabotations', 'general', 'personal_data', 'formations', 'contacts', 'contact_agencies', 'donation_materiels', 'donation_informatique', 'donation_vehicle','absences', 'ecarts','collabotations_maps','interventions_success','interventions_ko'));
    }
}
