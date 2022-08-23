<?php

namespace App\Http\Controllers;

use App\Models\Collaboration;
use App\Models\CollaborationAbsences;
use App\Models\CollaborationContact;
use App\Models\CollaborationDonneesPersonelles;
use App\Models\CollaborationDotationComputer;
use App\Models\CollaborationDotationEquipment;
use App\Models\CollaborationDotationVehicle;
use App\Models\CollaborationEcarts;
use App\Models\CollaborationFormations;
use App\Models\CollabotationFormations;
use App\Models\MarketsAssigne;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use PhpParser\Node\Expr\FuncCall;
use PDF;


class CollaborationController extends Controller
{
    //




    public function index($id = 0, $type = 'general', Request $request)
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
            $formations = CollaborationFormations::where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
        }

        $contacts = [];
        if (!empty($id)) {
            $contacts = CollaborationContact::where('collaboration_id', $id)->first();
        }


        $donation_materiels = [];
        if (!empty($id)) {
            $donation_materiels = DB::table('llx_collaboration_dotation_equipment')->where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
        }

        $donation_informatique = [];
        if (!empty($id)) {
            $donation_informatique = DB::table('llx_collaboration_dotation_computer')->where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
        }

        $donation_vehicle = [];
        if (!empty($id)) {
            $donation_vehicle = DB::table('llx_collaboration_dotation_vehicle')->where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
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


        $interventions_success =  DB::table('interventions')->select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(schedule) as month_name")
        )
        ->whereYear('schedule', date('Y'))
        ->groupBy('month_name')
        ->where('status','4')
        ->where('assignee_id',$id)
        ->get();


        $interventions_ko =  DB::table('interventions')->select(
            DB::raw("(COUNT(*)) as count"),
            DB::raw("MONTHNAME(schedule) as month_name")
        )
        ->whereYear('schedule', date('Y'))
        ->groupBy('month_name')
        ->where('status','2')
        ->where('assignee_id',$id)
        ->get();








        return view('collaboration.collaboration_index', compact('collabotations', 'general', 'personal_data', 'formations', 'contacts', 'contact_agencies', 'donation_materiels', 'donation_informatique', 'donation_vehicle', 'absences', 'ecarts','interventions_success','interventions_ko'));
    }


    public function satistiques_search(Request $request)
    {

            $year = $request->satistiques_year;
            $month = $request->satistiques_month;
            $id = $request->collaboration_id;

                $interventions_success =  DB::table('interventions')->select(
                    DB::raw("(COUNT(*)) as count"),
                    DB::raw("MONTHNAME(schedule) as month_name")
                )
                ->whereMonth('schedule', date($month))
                ->WhereYear('schedule', date($year))
                ->groupBy('month_name')
                ->where('status','4')
                ->where('assignee_id',$id)
                ->get()->toArray();





                $interventions_ko =  DB::table('interventions')->select(
                    DB::raw("(COUNT(*)) as count"),
                    DB::raw("MONTHNAME(schedule) as month_name")
                )
                ->whereMonth('schedule', date($month))
                ->whereYear('schedule', date($year))
                ->groupBy('month_name')
                ->where('status','2')
                ->where('assignee_id',$id)
                ->get();



                $data = [
                    // manager report

                    'interventions_success' => $interventions_success,
                    'interventions_ko' => $interventions_ko,

                ];


                return response()->json(['data' => $data]);








    }


    public function search(Request $request)
    {


        $search_filter = $request->search_filter;

        if($search_filter)
        {
            $collabotations = Collaboration::where('nom', 'like', "%$search_filter%")
            ->orWhere('prenom','like',"%$search_filter%")
            ->orWhere('email','like',"%$search_filter%")
            ->orderBy('id', 'DESC')->get();
        }
        elseif($request->statut)
        {
            if($request->statut == 'active')
            {
                $collabotations = Collaboration::where('status', 'active')->orderBy('id', 'DESC')->get();
            }
            else
            {
                $collabotations = Collaboration::where('status', 'inactive')->orderBy('id', 'DESC')->get();
            }
        }
        elseif($request->join_selected_values)
        {

            $ids = explode(",",$request->join_selected_values);

            if($ids != '')
            {
                $collabotations = DB::table('llx_collaboration_contract')

                ->join('llx_collaboration', 'llx_collaboration.id', 'llx_collaboration_contract.collaboration_id')
                ->select('llx_collaboration_contract.collaboration_id','llx_collaboration_contract.agence','llx_collaboration.*')
                ->whereIn('agence',$ids)->get();

            }
            else
            {
                $collabotations = Collaboration::orderBy('id', 'DESC')->get();
            }



        }




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
            $formations = CollaborationFormations::where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
        }

        $contacts = [];
        if (!empty($id)) {
            $contacts = CollaborationContact::where('collaboration_id', $id)->first();
        }


        $donation_materiels = [];
        if (!empty($id)) {
            $donation_materiels = DB::table('llx_collaboration_dotation_equipment')->where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
        }

        $donation_informatique = [];
        if (!empty($id)) {
            $donation_informatique = DB::table('llx_collaboration_dotation_computer')->where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
        }

        $donation_vehicle = [];
        if (!empty($id)) {
            $donation_vehicle = DB::table('llx_collaboration_dotation_vehicle')->where('collaboration_id', $id)->orderBy('id', 'DESC')->get();
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


        if ($request->ajax()) {

            if(isset($collabotations) && count($collabotations) > 0 )
            {

                return \Response::json(\View::make('collaboration.collaboration_list_ajax', compact('collabotations', 'general', 'personal_data', 'formations', 'contacts', 'contact_agencies', 'donation_materiels', 'donation_informatique', 'donation_vehicle', 'absences', 'ecarts'))->render());
            }
            else
            {

                $collabotations = [];
                return \Response::json(\View::make('collaboration.collaboration_list_ajax', compact('collabotations', 'general', 'personal_data', 'formations', 'contacts', 'contact_agencies', 'donation_materiels', 'donation_informatique', 'donation_vehicle', 'absences', 'ecarts'))->render());
            }

        }


        return view('collaboration.collaboration_index', compact('collabotations', 'general', 'personal_data', 'formations', 'contacts', 'contact_agencies', 'donation_materiels', 'donation_informatique', 'donation_vehicle', 'absences', 'ecarts'));
    }


    // Collaboration General Tab Insert
    public function collabotation_general(Request $request)
    {

        if ($request->hasFile('profile_img')) {
            $image_name = 'profile_img-' . time() . '.' . $request->profile_img->extension();
            $request->profile_img->move(public_path('/uploads/profile_images'), $image_name);
        } else {
            $image_name = '';
        }

        $Collabotation = new Collaboration();
        $Collabotation->profile_img = $image_name;
        $Collabotation->nom = $request->nom;
        $Collabotation->prenom = $request->prénom;
        $Collabotation->login = $request->login;
        $Collabotation->email = $request->email;
        $Collabotation->mot_de_passe = Hash::make($request->mot_de_passe);
        $Collabotation->confirmer_mot_de_passe = Hash::make($request->confirmer_mot_de_passe);
        $Collabotation->adresse = $request->adresse;

        $Collabotation->complément_d_adresse = $request->complément_d_adresse;
        $Collabotation->code_postal = $request->code_postal;
        $Collabotation->ville = $request->ville;
        $Collabotation->telephone = $request->telephone;
        $Collabotation->portable = $request->portable;
        $Collabotation->numero_de_securile_sociale = $request->numero_de_securile_sociale;

        $colla = $Collabotation->save();
        if($colla)
        {
            $users = new User();
            $users->collaboration_id = $Collabotation->id;
            $users->name = $request->nom .' '.$request->prénom;
            $users->email = $request->email;
            $users->password = Hash::make($request->mot_de_passe);
            $users->role_id = '4';
            $users->telephone = $request->telephone;
            $users->status = 'active';
            $users->save();
        }



        $id = $Collabotation->id;


        return redirect('/collaboration/' . $id . '/données_personelles')->with('success', 'General Added Succesfully');
    }

    // Collaboration Donnees Tab Insert
    public function collabotation_donnees_personelles(Request $request)
    {

        $collaboration_id = $request->collaboration_id;

        if($collaboration_id != 'collaboration_create')
        {
            $social_security_number = $request->social_security_number;

            $Collabotation_donnees = new CollaborationDonneesPersonelles();
            $Collabotation_donnees->collaboration_id = $collaboration_id;


            $Collabotation_donnees->social_security_number = $social_security_number;
            $Collabotation_donnees->groupe_sanguin = $request->groupe_sanguin;
            $Collabotation_donnees->nom = $request->nom;
            $Collabotation_donnees->prenom = $request->prenom;
            $Collabotation_donnees->contact = $request->contact;
            $Collabotation_donnees->mutuelle_status = $request->mutuelle_status;
            $Collabotation_donnees->adults_insurance = $request->adults_insurance;
            $Collabotation_donnees->children_insurance = $request->children_insurance;
            $Collabotation_donnees->antecedent_medicaux = $request->antecedent_medicaux;
            $Collabotation_donnees->taille_tShirt = $request->taille_tShirt;
            $Collabotation_donnees->taille_pantalon = $request->taille_pantalon;
            $Collabotation_donnees->taille_chaussures = $request->taille_chaussures;
            $Collabotation_donnees->taille_veste = $request->taille_veste;
            $Collabotation_donnees->taille_parka = $request->taille_parka;
            $Collabotation_donnees->taille_casque = $request->taille_casque;


            $Collabotation_donnees->save();

            $id = $Collabotation_donnees->collaboration_id;

            return redirect('/collaboration/' . $id . '/formations')->with('success', 'General Added Succesfully');
        }
        else
        {
            return redirect()->back()->withErrors("Oh, s'il vous plaît, classez le premier onglet général.");
        }

    }

    // Collaboration Contact Tab Insert
    public function collabotation_contact(Request $request)
    {


        $collaboration_id = $request->collaboration_id;

        if($collaboration_id != 'collaboration_create')
        {

            $poste = $request->poste;
            $agence = $request->agence;
            $nni = $request->nni;
            $habilitation = $request->habilitation;

            $end_date_authorization_old =  $request->end_date_authorization;
            $end_date_authorization = Carbon::parse($end_date_authorization_old)->format('Y-m-d');


            $contract_type = $request->contract_type;
            $sub_contract_type = $request->sub_contract_type;
            $gross_hourly_rate = $request->gross_hourly_rate;
            $gross_monthly_salary = $request->gross_monthly_salary;

            $construction_card = $request->construction_card;
            $benefits_kind = $request->benefits_kind;
            $situation_before_hiring = $request->situation_before_hiring;
            $diploma = $request->diploma;
            $team_lead_id = $request->team_lead_id;


            $Collabotation_contact = new CollaborationContact();

            $Collabotation_contact->collaboration_id = $collaboration_id;
            $Collabotation_contact->poste = $poste;
            $Collabotation_contact->agence = $agence;
            $Collabotation_contact->nni = $nni;
            $Collabotation_contact->habilitation = $habilitation;
            $Collabotation_contact->end_date_authorization = $end_date_authorization;

            $Collabotation_contact->contract_type = $contract_type;
            $Collabotation_contact->sub_contract_type = $sub_contract_type;
            $Collabotation_contact->gross_hourly_rate = $gross_hourly_rate;
            $Collabotation_contact->gross_monthly_salary = $gross_monthly_salary;

            $Collabotation_contact->construction_card = $construction_card;
            $Collabotation_contact->benefits_kind = $benefits_kind;
            $Collabotation_contact->situation_before_hiring = $situation_before_hiring;
            $Collabotation_contact->diploma = $diploma;
            $Collabotation_contact->team_lead_id = $team_lead_id;



            $Collabotation_contact->save();

            $id = $Collabotation_contact->collaboration_id;

            $sql = DB::table('llx_collaboration_contract')
            ->where('construction_card','undefined')
            ->update(array('construction_card' => ''));

            return redirect('/collaboration/' . $id . '/contact')->with('success', 'General Added Succesfully');
        }
        else{
            return redirect()->back()->withErrors("Oh, s'il vous plaît, classez le premier onglet général.");
        }
    }

    // Collaboration Formation Tab Insert
    public function collabotation_formations(Request $request)
    {

        $collaboration_id = $request->collaboration_id;

        if($collaboration_id != 'collaboration_create')
        {
            $formation_name = $request->formation_name;
            // $date_obtention = $request->date_obtention;
            // $end_date = $request->end_date;


            $date_obtention_old = $request->date_obtention;
            $date_obtention = Carbon::parse($date_obtention_old)->format('Y-m-d');

            $end_date_old =  $request->end_date;
            $end_date = Carbon::parse($end_date_old)->format('Y-m-d');

            $permis_b = $request->permis_b;
            $permis_eb = $request->permis_eb;
            $permis_c = $request->permis_c;
            $permis_ec = $request->permis_ec;


            if ($request->hasFile('img1')) {
                $img1 = 'formation-img1-' . time() . '.' . $request->img1->extension();
                $request->img1->move(public_path('/uploads/formation'), $img1);
            } else {
                $img1 = '';
            }
            $img1_name = $request->img1_name;

            if ($request->hasFile('img2')) {
                $img2 = 'formation-img2-' . time() . '.' . $request->img2->extension();
                $request->img2->move(public_path('/uploads/formation'), $img2);
            } else {
                $img2 = '';
            }
            $img2_name = $request->img2_name;

            if ($request->hasFile('img3')) {
                $img3 = 'formation-img3-' . time() . '.' . $request->img3->extension();
                $request->img3->move(public_path('/uploads/formation'), $img3);
            } else {
                $img3 = '';
            }
            $img3_name = $request->img3_name;

            if ($request->hasFile('img4')) {
                $img4 = 'formation-img4' . time() . '.' . $request->img4->extension();
                $request->img4->move(public_path('/uploads/formation'), $img4);
            } else {
                $img4 = '';
            }
            $img4_name = $request->img4_name;


            $Collabotation_formations = new CollaborationFormations();

            $Collabotation_formations->collaboration_id = $collaboration_id;
            $Collabotation_formations->formation_name = $formation_name;
            $Collabotation_formations->date_obtention = $date_obtention;
            $Collabotation_formations->end_date = $end_date;

            $Collabotation_formations->permis_b = $permis_b;
            $Collabotation_formations->permis_eb = $permis_eb;
            $Collabotation_formations->permis_c = $permis_c;
            $Collabotation_formations->permis_ec = $permis_ec;

            $Collabotation_formations->img1 = $img1;
            $Collabotation_formations->img1_name = $img1_name;

            $Collabotation_formations->img2 = $img2;
            $Collabotation_formations->img2_name = $img2_name;

            $Collabotation_formations->img3 = $img3;
            $Collabotation_formations->img3_name = $img3_name;

            $Collabotation_formations->img4 = $img4;
            $Collabotation_formations->img4_name = $img4_name;


            $Collabotation_formations->save();
            $id = $Collabotation_formations->collaboration_id;


            $sql = DB::table('llx_collaboration_formations')
            ->where('permis_b','undefined')
            ->update(array('permis_b' => ''));


            $sql = DB::table('llx_collaboration_formations')
            ->where('permis_eb','undefined')
            ->update(array('permis_eb' => ''));

            $sql = DB::table('llx_collaboration_formations')
            ->where('permis_c','undefined')
            ->update(array('permis_c' => ''));

            $sql = DB::table('llx_collaboration_formations')
            ->where('permis_ec','undefined')
            ->update(array('permis_ec' => ''));

            $img1 = (!empty($img1)) ? '1' : '0';
            $img2 = (!empty($img2)) ? '1' : '0';
            $img3 = (!empty($img3)) ? '1' : '0';
            $img4 = (!empty($img4)) ? '1' : '0';

            $output2 = '';
            $output2 .= $formation_name;

            $data = array(
                'dates' => $output2
            );


            echo json_encode($data);

            // return response()->json(['success'=> $Collabotation_formations]);

           // return redirect('/collaboration/' . $id . '/formations')->with('success', 'General Added Succesfully');
        }
        else
        {
            return redirect()->back()->withErrors("Oh, s'il vous plaît, classez le premier onglet général.");
        }

    }


    // Collaboration Dotation Tab Insert

    public function collabotation_materiel(Request $request)
    {


        $collaboration_id = $request->collaboration_id;

        if($collaboration_id != 'collaboration_create')
        {


            if ($request->dotation_type == "material")
            {
                $validated = $request->validate([
                    'obtained_material' => 'required',
                ],
                [
                 'obtained_material.required'=> 'Le champ matériel obtenu est obligatoire.', // custom message
                ]);
                $materiel_name = $request->materiel_name;


                $obtained_material_old = $request->obtained_material;
                $obtained_material = Carbon::parse($obtained_material_old)->format('Y-m-d');

                $img1_material = $request->img1_material;
                $img1_material_name = $request->img1_material_name;

                $img2_material = $request->img2_material;
                $img2_material_name = $request->img2_material_name;

                $img3_material = $request->img3_material;
                $img3_material_name = $request->img3_material_name;

                $img4_material = $request->img4_material;
                $img4_material_name = $request->img4_material_name;

                $Collabotation_Equip = new CollaborationDotationEquipment();

                $Collabotation_Equip->collaboration_id = $collaboration_id;
                $Collabotation_Equip->materiel_name = $materiel_name;
                $Collabotation_Equip->obtained = $obtained_material;

                if ($request->hasFile('img1_material')) {
                    $img1_material = 'materiel-img1-' . time() . '.' . $img1_material->extension();
                    $request->img1_material->move(public_path('/uploads/materiel'), $img1_material);
                } else {
                    $img1_material = '';
                }
                $Collabotation_Equip->img1 = $img1_material;
                $Collabotation_Equip->img1_name = $img1_material_name;


                if ($request->hasFile('img2_material')) {
                    $img2_material = 'materiel-img2-' . time() . '.' . $img2_material->extension();
                    $request->img2_material->move(public_path('/uploads/materiel'), $img2_material);
                } else {
                    $img2_material = '';
                }
                $Collabotation_Equip->img2 = $img2_material;
                $Collabotation_Equip->img2_name = $img2_material_name;


                if ($request->hasFile('img3_material')) {
                    $img3_material = 'materiel-img3-' . time() . '.' . $img3_material->extension();
                    $request->img3_material->move(public_path('/uploads/materiel'), $img3_material);
                } else {
                    $img3_material = '';
                }
                $Collabotation_Equip->img3 = $img3_material;
                $Collabotation_Equip->img3_name = $img3_material_name;


                if ($request->hasFile('img4_material')) {
                    $img4_material = 'materiel-img4-' . time() . '.' . $img4_material->extension();
                    $request->img4_material->move(public_path('/uploads/materiel'), $img4_material);
                } else {
                    $img4_material = '';
                }
                $Collabotation_Equip->img4 = $img4_material;
                $Collabotation_Equip->img4_name = $img4_material_name;




                $Collabotation_Equip->save();
                $id = $collaboration_id;

                $output2 = '';
                $output2 .= $materiel_name;

                $data = array(
                    'dates' => $output2
                );


                echo json_encode($data);
                // return redirect('/collaboration/' . $id . '/dotation')->with('success', 'General Added Succesfully');
            }
            if ($request->dotation_type == "information")
            {

                $validated = $request->validate([
                    'obtained_information' => 'required',
                ],
                [
                    'obtained_material.required'=> 'Le champ matériel obtenu est obligatoire.', // custom message
                   ]);

                $materiel_name_information = $request->materiel_name_information;

                $obtained_information_old = $request->obtained_information;
                $obtained_information = Carbon::parse($obtained_information_old)->format('Y-m-d');

                $img1_information = $request->img1_information;
                $img1_information_name = $request->img1_information_name;

                $img2_information = $request->img2_information;
                $img2_information_name = $request->img2_information_name;

                $img3_information = $request->img3_information;
                $img3_information_name = $request->img3_information_name;

                $img4_information = $request->img4_information;
                $img4_information_name = $request->img4_information_name;

                $Collabotation_Comp = new CollaborationDotationComputer();

                $Collabotation_Comp->collaboration_id = $collaboration_id;
                $Collabotation_Comp->materiel_name = $materiel_name_information;
                $Collabotation_Comp->obtained = $obtained_information;

                if ($request->hasFile('img1_information')) {
                    $img1_information = 'information-img1-' . time() . '.' . $img1_information->extension();
                    $request->img1_information->move(public_path('/uploads/information'), $img1_information);
                } else {
                    $img1_information = '';
                }
                $Collabotation_Comp->img1 = $img1_information;
                $Collabotation_Comp->img1_name = $img1_information_name;


                if ($request->hasFile('img2_information')) {
                    $img2_information = 'information-img2-' . time() . '.' . $img2_information->extension();
                    $request->img2_information->move(public_path('/uploads/information'), $img2_information);
                } else {
                    $img2_information = '';
                }
                $Collabotation_Comp->img2 = $img2_information;
                $Collabotation_Comp->img2_name = $img2_information_name;


                if ($request->hasFile('img3_information')) {
                    $img3_information = 'information-img3-' . time() . '.' . $img3_information->extension();
                    $request->img3_information->move(public_path('/uploads/information'), $img3_information);
                } else {
                    $img3_information = '';
                }
                $Collabotation_Comp->img3 = $img3_information;
                $Collabotation_Comp->img3_name = $img3_information_name;

                if ($request->hasFile('img4_information')) {
                    $img4_information = 'information-img4-' . time() . '.' . $img4_information->extension();
                    $request->img4_information->move(public_path('/uploads/information'), $img4_information);
                } else {
                    $img4_information = '';
                }
                $Collabotation_Comp->img4 = $img4_information;
                $Collabotation_Comp->img4_name = $img4_information_name;



                $Collabotation_Comp->save();


                $id = $collaboration_id;


                $output2 = '';
                $output2 .= $materiel_name_information;

                $data = array(
                    'dates' => $output2
                );
                echo json_encode($data);
                // return redirect('/collaboration/' . $id . '/dotation')->with('success', 'General Added Succesfully');
            }
            if ($request->dotation_type == "vehicle")
            {
                $validated = $request->validate([
                    'obtained_vehicle' => 'required',
                ],[
                    'obtained_material.required'=> 'Le champ matériel obtenu est obligatoire.', // custom message
                   ]);

                $type_vehicle = $request->type_vehicle;
                $model = $request->model;

                $obtained_vehicle_old = $request->obtained_vehicle;
                $obtained_vehicle = Carbon::parse($obtained_vehicle_old)->format('Y-m-d');

                $number_plate = $request->number_plate;

                $img1_vehicle_name = $request->img1_vehicle_name;
                $img1_vehicle = $request->img1_vehicle;

                $img2_vehicle_name = $request->img2_vehicle_name;
                $img2_vehicle = $request->img2_vehicle;

                $img3_vehicle_name = $request->img3_vehicle_name;
                $img3_vehicle = $request->img3_vehicle;

                $img4_vehicle_name = $request->img4_vehicle_name;
                $img4_vehicle = $request->img4_vehicle;



                $Collabotation_Vehi = new CollaborationDotationVehicle();

                $Collabotation_Vehi->collaboration_id = $collaboration_id;
                $Collabotation_Vehi->type_vehicle = $type_vehicle;
                $Collabotation_Vehi->model = $model;
                $Collabotation_Vehi->obtained = $obtained_vehicle;
                $Collabotation_Vehi->number_plate = $number_plate;

                if ($request->hasFile('img1_vehicle')) {
                    $img1_vehicle = 'vehicle-img1-' . time() . '.' . $img1_vehicle->extension();
                    $request->img1_vehicle->move(public_path('/uploads/vehi'), $img1_vehicle);
                } else {
                    $img1_vehicle = '';
                }

                if ($request->hasFile('img2_vehicle')) {
                    $img2_vehicle = 'vehicle-img2-' . time() . '.' . $img2_vehicle->extension();
                    $request->img2_vehicle->move(public_path('/uploads/vehi'), $img2_vehicle);
                } else {
                    $img2_vehicle = '';
                }

                if ($request->hasFile('img3_vehicle')) {
                    $img3_vehicle = 'vehicle-img3-' . time() . '.' . $img3_vehicle->extension();
                    $request->img3_vehicle->move(public_path('/uploads/vehi'), $img3_vehicle);
                } else {
                    $img3_vehicle = '';
                }

                if ($request->hasFile('img4_vehicle')) {
                    $img4_vehicle = 'vehicle-img4-' . time() . '.' . $img4_vehicle->extension();
                    $request->img4_vehicle->move(public_path('/uploads/vehi'), $img4_vehicle);
                } else {
                    $img4_vehicle = '';
                }

                $Collabotation_Vehi->face = $img1_vehicle;
                $Collabotation_Vehi->face_name = $img1_vehicle_name;

                $Collabotation_Vehi->derriere = $img2_vehicle;
                $Collabotation_Vehi->derriere_name = $img2_vehicle_name;

                $Collabotation_Vehi->cote_droit = $img3_vehicle;
                $Collabotation_Vehi->cote_droit_name = $img3_vehicle_name;

                $Collabotation_Vehi->cote_gauche = $img4_vehicle;
                $Collabotation_Vehi->cote_gauche_name = $img4_vehicle_name;


                $Collabotation_Vehi->save();


                $id = $collaboration_id;

                $output2 = '';
                $output2 .= $type_vehicle;

                $data = array(
                    'dates' => $output2
                );

                echo json_encode($data);


                // return redirect('/collaboration/' . $id . '/dotation')->with('success', 'General Added Succesfully');
            }
        }
        else
        {
            return redirect()->back()->withErrors("Oh, s'il vous plaît, classez le premier onglet général.");
        }
    }


    // Collaboration Formation Tab Edit
    public function collabotation_formation_popup_edit(Request $request)
    {

        $collaboration_id = $request->collaboration_id;
        $formation_id = $request->formation_id;
        $formation_name = $request->formation_name;

        // $date_obtention = $request->date_obtention;
        // $end_date = $request->end_date;

        $date_obtention_old = $request->date_obtention;
        $date_obtention = Carbon::parse($date_obtention_old)->format('Y-m-d');

        $end_date_old =  $request->end_date;
        $end_date = Carbon::parse($end_date_old)->format('Y-m-d');


        if ($request->hasFile('img1')) {
            $img1 = 'formation-img1' . time() . '.' . $request->img1->extension();
            $request->img1->move(public_path('/uploads/formation'), $img1);
        } else {
            $img1 = $request->img1;
        }

        if ($request->hasFile('img2')) {
            $img2 = 'formation-img2' . time() . '.' . $request->img2->extension();
            $request->img2->move(public_path('/uploads/formation'), $img2);
        } else {
            $img2 = $request->img2;
        }

        if ($request->hasFile('img3')) {
            $img3 = 'formation-img3' . time() . '.' . $request->img3->extension();
            $request->img3->move(public_path('/uploads/formation'), $img3);
        } else {
            $img3 = $request->img3;
        }

        if ($request->hasFile('img4')) {
            $img4 = 'formation-img4' . time() . '.' . $request->img4->extension();
            $request->img4->move(public_path('/uploads/formation'), $img4);
        } else {
            $img4 = $request->img4;
        }

        $qry = DB::table('llx_collaboration_formations')->where('id', $formation_id)->where('collaboration_id', $collaboration_id)->update(
            [
                'img1' => $img1,
                'img2' => $img2,
                'img3' => $img3,
                'img4' => $img4,
                'formation_name' => $formation_name,
                'date_obtention' => $date_obtention,
                'end_date' => $end_date
            ]


        );

        $id = $collaboration_id;
        return redirect('/collaboration/' . $id . '/formations')->with('success', 'General Added Succesfully');
    }


    public function collabotation_dotation_materiel_popup_edit(Request $request)
    {


        $collaboration_id = $request->collaboration_id;
        $materiel_id = $request->materiel_id;
        $materiel_name = $request->materiel_name;

        $obtained_old = $request->obtained;
        $obtained = Carbon::parse($obtained_old)->format('Y-m-d');

        if ($request->hasFile('img1')) {
            $img1 = 'materiel-img1' . time() . '.' . $request->img1->extension();
            $request->img1->move(public_path('/uploads/materiel'), $img1);
        } else {
            $img1 = $request->img1;
        }

        if ($request->hasFile('img2')) {
            $img2 = 'materiel-img2' . time() . '.' . $request->img2->extension();
            $request->img2->move(public_path('/uploads/materiel'), $img2);
        } else {
            $img2 = $request->img2;
        }

        if ($request->hasFile('img3')) {
            $img3 = 'materiel-img3' . time() . '.' . $request->img3->extension();
            $request->img3->move(public_path('/uploads/materiel'), $img3);
        } else {
            $img3 = $request->img3;
        }

        if ($request->hasFile('img4')) {
            $img4 = 'materiel-img4' . time() . '.' . $request->img4->extension();
            $request->img4->move(public_path('/uploads/materiel'), $img4);
        } else {
            $img4 = $request->img4;
        }

        $qry = DB::table('llx_collaboration_dotation_equipment')->where('id', $materiel_id)->where('collaboration_id', $collaboration_id)->update(
            [
                'img1' => $img1,
                'img2' => $img2,
                'img3' => $img3,
                'img4' => $img4,
                'materiel_name' => $materiel_name,
                'obtained' => $obtained
            ]


        );

        $id = $collaboration_id;
        return redirect('/collaboration/' . $id . '/dotation')->with('success', 'General Added Succesfully');
    }


    public function collabotation_dotation_informatique_popup_edit(Request $request)
    {

        $collaboration_id = $request->collaboration_id;
        $informatique_id = $request->informatique_id;
        $materiel_name = $request->materiel_name;

        $obtained_old = $request->obtained;
        $obtained = Carbon::parse($obtained_old)->format('Y-m-d');


        if ($request->hasFile('img1')) {
            $img1 = 'information-img1' . time() . '.' . $request->img1->extension();
            $request->img1->move(public_path('/uploads/information'), $img1);
        } else {
            $img1 = $request->img1;
        }

        if ($request->hasFile('img2')) {
            $img2 = 'information-img2' . time() . '.' . $request->img2->extension();
            $request->img2->move(public_path('/uploads/information'), $img2);
        } else {
            $img2 = $request->img2;
        }

        if ($request->hasFile('img3')) {
            $img3 = 'information-img3' . time() . '.' . $request->img3->extension();
            $request->img3->move(public_path('/uploads/information'), $img3);
        } else {
            $img3 = $request->img3;
        }

        if ($request->hasFile('img4')) {
            $img4 = 'information-img4' . time() . '.' . $request->img4->extension();
            $request->img4->move(public_path('/uploads/information'), $img4);
        } else {
            $img4 = $request->img4;
        }

        $qry = DB::table('llx_collaboration_dotation_computer')->where('id', $informatique_id)->where('collaboration_id', $collaboration_id)->update(
            [
                'img1' => $img1,
                'img2' => $img2,
                'img3' => $img3,
                'img4' => $img4,
                'materiel_name' => $materiel_name,
                'obtained' => $obtained
            ]


        );

        $id = $collaboration_id;
        return redirect('/collaboration/' . $id . '/dotation')->with('success', 'General Added Succesfully');
    }


    public function collabotation_dotation_vehicle_popup_edit(Request $request)
    {

        $collaboration_id = $request->collaboration_id;
        $vehicle_id = $request->vehicle_id;
        $type_vehicle = $request->type_vehicle;
        $obtained_old = $request->obtained;
        $obtained = Carbon::parse($obtained_old)->format('Y-m-d');
        $number_plate = $request->number_plate;
        $model = $request->model;

        if ($request->hasFile('face')) {
            $face = 'vehicle-face' . time() . '.' . $request->face->extension();
            $request->face->move(public_path('/uploads/vehi'), $face);
        } else {
            $face = $request->face;
        }

        if ($request->hasFile('derriere')) {
            $derriere = 'vehicle-derriere' . time() . '.' . $request->derriere->extension();
            $request->derriere->move(public_path('/uploads/vehi'), $derriere);
        } else {
            $derriere = $request->derriere;
        }

        if ($request->hasFile('cote_droit')) {
            $cote_droit = 'vehicle-cote_droit' . time() . '.' . $request->cote_droit->extension();
            $request->cote_droit->move(public_path('/uploads/vehi'), $cote_droit);
        } else {
            $cote_droit = $request->cote_droit;
        }

        if ($request->hasFile('cote_gauche')) {
            $cote_gauche = 'vehicle-cote_gauche' . time() . '.' . $request->cote_gauche->extension();
            $request->cote_gauche->move(public_path('/uploads/vehi'), $cote_gauche);
        } else {
            $cote_gauche = $request->cote_gauche;
        }


        $qry = DB::table('llx_collaboration_dotation_vehicle')->where('id', $vehicle_id)->where('collaboration_id', $collaboration_id)->update(
            [
                'face' => $face,
                'derriere' => $derriere,
                'cote_droit' => $cote_droit,
                'cote_gauche' => $cote_gauche,

                'type_vehicle' => $type_vehicle,
                'obtained' => $obtained,
                'number_plate' => $number_plate,
                'obtained' => $obtained,
                'model' => $model,

            ]


        );

        $id = $collaboration_id;
        return redirect('/collaboration/' . $id . '/dotation')->with('success', 'General Added Succesfully');
    }

    // Collaboration General Tab Edit
    public function collabotation_general_edit(Request $request)
    {

        $collaboration_id = $request->collaboration_id;
        $collabotations_edit = DB::table('llx_collaboration')->where('id', $collaboration_id)->first();

        if ($request->hasFile('profile_img')) {

            if ($collabotations_edit->profile_img) {
                $old_path = public_path() . '/uploads/profile_images/' . $collabotations_edit->profile_img;
                if (File::exists($old_path)) {
                    File::delete($old_path);
                }
            }
            $image_name = 'profile_img-' . time() . '.' . $request->profile_img->extension();
            $request->profile_img->move(public_path('/uploads/profile_images/'), $image_name);
        } else {
            $image_name = $request->profile_img;
        }

        $nom = $request->nom;
        $prenom = $request->prénom;
        $login = $request->login;
        $email = $request->email;
        $mot_de_passe = Hash::make($request->mot_de_passe);
        $confirmer_mot_de_passe = Hash::make($request->confirmer_mot_de_passe);
        $adresse = $request->adresse;

        $complément_d_adresse = $request->complément_d_adresse;
        $code_postal = $request->code_postal;
        $ville = $request->ville;
        $telephone = $request->telephone;
        $portable = $request->portable;
        $numero_de_securile_sociale = $request->numero_de_securile_sociale;


        $qry = DB::table('llx_collaboration')->where('id', $collaboration_id)->update(
            [
                'profile_img' => $image_name,
                'nom' => $nom,
                'prenom' => $prenom,
                'login' => $login,
                'email' => $email,
                'mot_de_passe' => $mot_de_passe,
                'confirmer_mot_de_passe' => $confirmer_mot_de_passe,
                'complément_d_adresse' => $complément_d_adresse,
                'adresse' => $adresse,
                'code_postal' => $code_postal,
                'ville' => $ville,
                'telephone' => $telephone,
                'portable' => $portable,
                'numero_de_securile_sociale' => $numero_de_securile_sociale
            ]


        );
        $qry = DB::table('users')->where('collaboration_id', $collaboration_id)->update(
            [
                'name' => $nom.' '.$prenom,
                'email' => $email,
                'password' => $mot_de_passe,
                'telephone' => $telephone,
                'role_id' => '4'
            ]


        );

        return redirect('/collaboration/' . $collaboration_id . '/données_personelles')->with('success', 'General Updated');
    }


    // Collaboration Donnees Tab Edit
    public function collabotation_donnees_personelles_edit(Request $request)
    {


        $collaboration_id = $request->collaboration_id;

        $social_security_number = $request->social_security_number;
        $groupe_sanguin = $request->groupe_sanguin;
        $nom = $request->nom;
        $prenom = $request->prenom;
        $contact = $request->contact;
        $mutuelle_status = $request->mutuelle_status;
        $adults_insurance = $request->adults_insurance;
        $children_insurance = $request->children_insurance;
        $antecedent_medicaux = $request->antecedent_medicaux;
        $taille_tShirt = $request->taille_tShirt;
        $taille_pantalon = $request->taille_pantalon;
        $taille_chaussures = $request->taille_chaussures;
        $taille_veste = $request->taille_veste;
        $taille_parka = $request->taille_parka;
        $taille_casque = $request->taille_casque;

        $qry = DB::table('llx_collaboration_donnees')->where('collaboration_id', $collaboration_id)->update(
            [
                'groupe_sanguin' => $groupe_sanguin,
                'social_security_number' => $social_security_number,
                'nom' => $nom,
                'prenom' => $prenom,
                'contact' => $contact,
                'mutuelle_status' => $mutuelle_status,
                'adults_insurance' => $adults_insurance,
                'children_insurance' => $children_insurance,
                'antecedent_medicaux' => $antecedent_medicaux,
                'taille_tShirt' => $taille_tShirt,
                'taille_pantalon' => $taille_pantalon,
                'taille_chaussures' => $taille_chaussures,
                'taille_veste' => $taille_veste,
                'taille_parka' => $taille_parka,
                'taille_casque' => $taille_casque,

            ]
        );

        return redirect('/collaboration/' . $collaboration_id . '/formations')->with('success', 'General Updated');
    }


    // Collaboration Contact Tab Edit
    public function collabotation_contact_edit(Request $request)
    {


        $collaboration_id = $request->collaboration_id;
        $poste = $request->poste;
        $agence = $request->agence;
        $nni = $request->nni;
        $habilitation = $request->habilitation;
        $end_date_authorization1 = $request->end_date_authorization;
        $end_date_authorization = Carbon::parse($end_date_authorization1)->format('Y-m-d');


        $contract_type = $request->contract_type;
        $sub_contract_type = $request->sub_contract_type;
        $gross_hourly_rate = $request->gross_hourly_rate;
        $gross_monthly_salary = $request->gross_monthly_salary;

        $construction_card = $request->construction_card;
        $benefits_kind = $request->benefits_kind;
        $situation_before_hiring = $request->situation_before_hiring;
        $diploma = $request->diploma;
        $team_lead_id = $request->team_lead_id;

        $qry = DB::table('llx_collaboration_contract')->where('collaboration_id', $collaboration_id)->update(
            [
                'poste' => $poste,
                'agence' => $agence,
                'nni' => $nni,
                'habilitation' => $habilitation,
                'end_date_authorization' => $end_date_authorization,

                'contract_type' => $contract_type,
                'sub_contract_type' => $sub_contract_type,
                'gross_hourly_rate' => $gross_hourly_rate,
                'gross_monthly_salary' => $gross_monthly_salary,

                'construction_card' => $construction_card,
                'benefits_kind' => $benefits_kind,
                'situation_before_hiring' => $situation_before_hiring,
                'diploma' => $diploma,
                'team_lead_id' => $team_lead_id,

            ]


        );
        return redirect('/collaboration/' . $collaboration_id . '/contact')->with('success', 'General Updated');
        //return redirect('/collaboration/general_edit/'.$collaboration_id.'/données_personelles')->with('success','General Updated');


    }


    // Collaboration Formation  Tab Delete
    public function collabotation_formation_delete(Request $request)
    {

        $formation_id = $request->formation_id;
        $res = DB::table('llx_collaboration_formations')->where('id', $formation_id)->delete();

        return response()->json(['success' => $res]);
    }

    // Collaboration Formation Tab Edit
    public function collabotation_formation_img_delete(Request $request)
    {

        $formation_id = $request->formation_id;
        if ($request->img1) {
            $res = DB::table('llx_collaboration_formations')->where('id', $formation_id)->update(
                [
                    'img1' => NULL,
                ]
            );
        } elseif ($request->img2) {
            $res = DB::table('llx_collaboration_formations')->where('id', $formation_id)->update(
                [
                    'img2' => NULL,
                ]
            );
        } elseif ($request->img3) {
            $res = DB::table('llx_collaboration_formations')->where('id', $formation_id)->update(
                [
                    'img3' => NULL,
                ]
            );
        } elseif ($request->img4) {
            $res = DB::table('llx_collaboration_formations')->where('id', $formation_id)->update(
                [
                    'img4' => NULL,
                ]
            );
        } else {
        }
    }


    // Collaboration Formation Tab Edit
    public function collabotation_dotation_materiel_img_delete(Request $request)
    {

        $materiel_id = $request->materiel_id;
        if ($request->img1) {
            $res = DB::table('llx_collaboration_dotation_equipment')->where('id', $materiel_id)->update(
                [
                    'img1' => NULL,
                ]
            );
        }
        elseif ($request->img2) {
            $res = DB::table('llx_collaboration_dotation_equipment')->where('id', $materiel_id)->update(
                [
                    'img2' => NULL,
                ]
            );
        }
        elseif ($request->img3) {
            $res = DB::table('llx_collaboration_dotation_equipment')->where('id', $materiel_id)->update(
                [
                    'img3' => NULL,
                ]
            );
        }
        elseif ($request->img4) {
            $res = DB::table('llx_collaboration_dotation_equipment')->where('id', $materiel_id)->update(
                [
                    'img4' => NULL,
                ]
            );
        }
    }

    public function collabotation_materiel_delete(Request $request)
    {

        $materiel_id = $request->materiel_id;
        $res = DB::table('llx_collaboration_dotation_equipment')->where('id', $materiel_id)->delete();
    }


    public function collabotation_dotation_informatique_img_delete(Request $request)
    {

        $informatique_id = $request->informatique_id;
        if ($request->img1) {
            $res = DB::table('llx_collaboration_dotation_computer')->where('id', $informatique_id)->update(
                [
                    'img1' => NULL,
                ]
            );
        } elseif ($request->img2) {
            $res = DB::table('llx_collaboration_dotation_computer')->where('id', $informatique_id)->update(
                [
                    'img2' => NULL,
                ]
            );
        }
        elseif ($request->img3) {
            $res = DB::table('llx_collaboration_dotation_computer')->where('id', $informatique_id)->update(
                [
                    'img3' => NULL,
                ]
            );
        }
        elseif ($request->img4) {
            $res = DB::table('llx_collaboration_dotation_computer')->where('id', $informatique_id)->update(
                [
                    'img4' => NULL,
                ]
            );
        }
    }

    public function collabotation_informatique_delete(Request $request)
    {

        $informatique_id = $request->informatique_id;
        $res = DB::table('llx_collaboration_dotation_computer')->where('id', $informatique_id)->delete();
    }


    public function collabotation_dotation_vehicle_img_delete(Request $request)
    {
        $vehicle_id = $request->vehicle_id;
        if ($request->img1) {
            $res = DB::table('llx_collaboration_dotation_vehicle')->where('id', $vehicle_id)->update(
                [
                    'face' => NULL,
                ]
            );
        }
        if ($request->img2) {
            $res = DB::table('llx_collaboration_dotation_vehicle')->where('id', $vehicle_id)->update(
                [
                    'derriere' => NULL,
                ]
            );
        }
        if ($request->img3) {
            $res = DB::table('llx_collaboration_dotation_vehicle')->where('id', $vehicle_id)->update(
                [
                    'cote_droit' => NULL,
                ]
            );
        }
        if ($request->img4) {
            $res = DB::table('llx_collaboration_dotation_vehicle')->where('id', $vehicle_id)->update(
                [
                    'cote_gauche' => NULL,
                ]
            );
        }
    }


    public function collabotation_vehicle_delete(Request $request)
    {
        $vehicle_id = $request->vehicle_id;
        $res = DB::table('llx_collaboration_dotation_vehicle')->where('id', $vehicle_id)->delete();
    }


    // Collaboration Export

    public function EmployeeExport(Request $request)
    {

        $collaborationData = Collaboration::orderBy('id', 'DESC')->get();
        $EmpCount = count($collaborationData);
        $fileName = 'collaboration.csv';
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $columns = array('nom', 'prenom', 'login', 'email', 'code_postal', 'telephone');

        $callback = function () use ($collaborationData, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($collaborationData as $colla) {
                $row['nom'] = $colla->nom;
                $row['prenom'] = $colla->prenom;
                $row['login'] = $colla->login;
                $row['email'] = $colla->email;
                $row['code_postal'] = $colla->code_postal;
                $row['telephone'] = $colla->telephone;

                fputcsv($file, array($row['nom'], $row['prenom'], $row['login'], $row['email'], $row['code_postal'], $row['telephone']));
            }


            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    //Collaboration Dotation materielExport
    public function materielExport($id,Request $request)
    {
        $materiel_ids = explode(',', $request->ids);

        $collaboration_id = $id;

        $donation_materiels = [];
        foreach ($materiel_ids as $materiel_id) {
            $selectedmate = DB::table('llx_collaboration_dotation_equipment')
                    ->where('collaboration_id', $collaboration_id)
                    ->where('id',$materiel_id)
                    ->orderBy('id', 'DESC')->first();
            array_push($donation_materiels,$selectedmate);
        }


            $pdf = PDF::loadView('collaboration.pdf_export.materiel_pdf', compact('donation_materiels'));
            $pdf->setPaper('A4', 'portrait');
            return $pdf->download('dotation_materiel.pdf');



    }

    //Collaboration Dotation materielExport
    public function InformatiqueExport($id,Request $request)
    {

        $materiel_ids = explode(',', $request->ids);
        $collaboration_id = $id;

        $donation_informatique = [];
        foreach ($materiel_ids as $materiel_id) {
            $selectedmate = DB::table('llx_collaboration_dotation_computer')
                ->where('collaboration_id', $id)
                ->where('id',$materiel_id)
                ->first();

            array_push($donation_informatique,$selectedmate);
        }

        $pdf = PDF::loadView('collaboration.pdf_export.informatique_pdf', compact('donation_informatique'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->download('dotation_informatique.pdf');


    }

    public function vehiculeExport($id,Request $request)
    {
        $materiel_ids = explode(',', $request->ids);
        $collaboration_id = $id;

        $donation_vehicle = [];

        foreach ($materiel_ids as $materiel_id) {
            $selectedmate = DB::table('llx_collaboration_dotation_vehicle')
                ->where('collaboration_id', $id)
                ->where('id',$materiel_id)
                ->first();

            array_push($donation_vehicle,$selectedmate);
        }

            $pdf = PDF::loadView('collaboration.pdf_export.vehicle_pdf', compact('donation_vehicle'));
            $pdf->setPaper('A4', 'portrait');
            return $pdf->download('dotation_vehicle.pdf');

    }


    // Collaboration Status ACtive/Inactive
    public function notify_status(Request $request)
    {
        if ($request->notify_status == '') {
            $request->notify_status = 'inactive';
        }
        if ($request->notify_status == 'on') {
            $request->notify_status = 'active';
        }

        $sql = DB::table('llx_collaboration')->where('id', $request->collaboration_id)->update(array('status' => $request->notify_status));

        if ($sql) {
            echo "done";
        }
    }


    // Add Collaboration Absences Tab
    public function collabotation_absences(Request $request)
    {

        // $recurrences = [

        //     'weekly'    => [
        //         'times'     => 52,
        //         'function'  => 'addWeek'
        //     ],
        //     'monthly'    => [
        //         'times'     => 12,
        //         'function'  => 'addMonth'
        //     ]
        // ];
        // $recurrence = $request->recurrence;
        // for($i = 0; $i < $recurrences['times']; $i++)
        //         {
        //             $request->events()->create([

        //                 'recurrence'    => $request->recurrence,
        //             ]);
        //         }

        $collaboration_id = $request->collaboration_id;
        $motif = $request->motif;
        $debut_date = $request->debut_date;
        $debut_time = $request->debut_time;
        $fin_date = $request->fin_date;
        $fin_time = $request->fin_time;
        $description = $request->description;
        $repeter = $request->repeter;
        $recurrence = $request->recurrence;
        $notier = $request->notier;
        $img1absences = $request->img1absences;
        $img1absences_name = $request->img1absences_name;

        $img2absences = $request->img2absences;
        $img2absences_name = $request->img2absences_name;

        $img3absences = $request->img3absences;
        $img3absences_name = $request->img3absences_name;

        $img4absences = $request->img4absences;
        $img4absences_name = $request->img4absences_name;

        if ($request->hasFile('img1absences')) {
            $img1absences = 'absences-img1-' . time() . '.' . $request->img1absences->extension();
            $request->img1absences->move(public_path('/uploads/absences'), $img1absences);
        } else {
            $img1absences = '';
        }


        if ($request->hasFile('img2absences')) {
            $img2absences = 'absences-img2-' . time() . '.' . $request->img2absences->extension();
            $request->img2absences->move(public_path('/uploads/absences'), $img2absences);
        } else {
            $img2absences = '';
        }


        if ($request->hasFile('img3absences')) {
            $img3absences = 'absences-img3-' . time() . '.' . $request->img3absences->extension();
            $request->img3absences->move(public_path('/uploads/absences'), $img3absences);
        } else {
            $img3absences = '';
        }


        if ($request->hasFile('img4absences')) {
            $img4absences = 'absences-img4-' . time() . '.' . $request->img4absences->extension();
            $request->img4absences->move(public_path('/uploads/absences'), $img4absences);
        } else {
            $img4absences = '';
        }

        $collaboration_absences = new CollaborationAbsences();
        $collaboration_absences->collaboration_id = $collaboration_id;

        $collaboration_absences->motif = $motif;
        $collaboration_absences->debut_date = $debut_date;
        $collaboration_absences->debut_time = $debut_time;
        $collaboration_absences->fin_date = $fin_date;
        $collaboration_absences->fin_time = $fin_time;
        $collaboration_absences->description = $description;
        $collaboration_absences->repeter = $repeter;
        $collaboration_absences->recurrence = $recurrence;
        $collaboration_absences->notifier = $notier;
        $collaboration_absences->img1_name = $img1absences_name;
        $collaboration_absences->img1 = $img1absences;

        $collaboration_absences->img2_name = $img2absences_name;
        $collaboration_absences->img2 = $img2absences;

        $collaboration_absences->img3_name = $img3absences_name;
        $collaboration_absences->img3 = $img3absences;

        $collaboration_absences->img4_name = $img4absences_name;
        $collaboration_absences->img4 = $img4absences;


        $collaboration_absences->save();

        $id = $collaboration_id;

        $output2 = '';
        $output2 .= $debut_date;
        $output2 .= " au ";
        $output2 .= $fin_date;

        $data = array(
            'dates' => $output2
        );
        echo json_encode($data);
    }

    // Collaboration Absences Edit
    public function collabotation_absences_edit(Request $request)
    {


        $absences_id = $request->absences_id;
        $collaboration_id = $request->collaboration_id;
        $motif = $request->motif;
        $debut_date = $request->debut_date;
        $debut_time = $request->debut_time;

        $fin_date = $request->fin_date;
        $fin_time = $request->fin_time;
        $description = $request->description;

        $img1_name = $request->img1_name;

        if ($request->hasFile('img1')) {
            $img1 = 'absences-img1' . time() . '.' . $request->img1->extension();
            $request->img1->move(public_path('/uploads/absences'), $img1);
        } else {
            $img1 = $request->img1;
        }


        $img2_name = $request->img2_name;

        if ($request->hasFile('img2')) {
            $img2 = 'absences-img2' . time() . '.' . $request->img2->extension();
            $request->img2->move(public_path('/uploads/absences'), $img2);
        } else {
            $img2 = $request->img2;
        }


        $img3_name = $request->img3_name;

        if ($request->hasFile('img3')) {
            $img3 = 'absences-img3' . time() . '.' . $request->img3->extension();
            $request->img1->move(public_path('/uploads/absences'), $img3);
        } else {
            $img3 = $request->img3;
        }

        $img4_name = $request->img4_name;

        if ($request->hasFile('img4')) {
            $img4 = 'absences-img4' . time() . '.' . $request->img4->extension();
            $request->img4->move(public_path('/uploads/absences'), $img4);
        } else {
            $img4 = $request->img4;
        }


        $sql = DB::table('collaboration_absences')->where('id', $absences_id)->update(
            array(
                'motif' => $motif,
                'debut_date' => $debut_date,
                'debut_time' => $debut_time,
                'fin_date' => $fin_date,
                'fin_time' => $fin_time,
                'description' => $description,
                'img1' => $img1,
                'img1_name' => $img1_name,
                'img2' => $img2,
                'img2_name' => $img2_name,
                'img3' => $img3,
                'img3_name' => $img3_name,
                'img4' => $img4,
                'img4_name' => $img4_name
            )
        );


        return redirect('/collaboration/' . $collaboration_id . '/absences_ecarts')->with('success', 'General Updated');
    }

    public function collabotation_dotation_abs_img_delete(Request $request)
    {

        $id = $request->abs_id;

        if ($request->img1) {
            $res = DB::table('collaboration_absences')->where('id', $id)->update(
                [
                    'img1' => NULL,
                ]
            );
        }

        if ($request->img2) {
            $res = DB::table('collaboration_absences')->where('id', $id)->update(
                [
                    'img2' => NULL,
                ]
            );
        }
        if ($request->img3) {
            $res = DB::table('collaboration_absences')->where('id', $id)->update(
                [
                    'img3' => NULL,
                ]
            );
        }
        if ($request->img4) {
            $res = DB::table('collaboration_absences')->where('id', $id)->update(
                [
                    'img4' => NULL,
                ]
            );
        }
    }


    // collaboration Search in Collaboration Absences Tab
    public function collaboration_search(Request $request)
    {

        $seach_query = $request->queries;


        if ($seach_query) {
            $collaborations = DB::table('llx_collaboration')
                ->where('nom', 'like', '%' . $seach_query . '%')
                ->orWhere('prenom', 'like', '%' . $seach_query . '%')
                ->get();
            $output = '';
            foreach ($collaborations as $collaboration) {
                $output .= '<label class="ckbox my-2"><input type="checkbox"><span>' . $collaboration->nom . ' ' . $collaboration->prenom . '</span></label>';
            }
        } else {
            $collaborations = DB::table('llx_collaboration')->orderBy('id', 'DESC')->get();
            $output = '';
            foreach ($collaborations as $colla) {

                $output .= '<label class="ckbox my-2"><input type="checkbox"><span>' . $colla->nom . ' ' . $colla->prenom . '</span></label>';
            }
        }
        $data = array(
            'records' => $output
        );

        echo json_encode($data);
    }


    public function collabotation_ecarts(Request $request)
    {

        $collaboration_id = $request->collaboration_id;
        $motif = $request->motif;
        $debut_date = $request->debut_date;
        $debut_time = $request->debut_time;
        $fin_date = $request->fin_date;
        $fin_time = $request->fin_time;
        $description = $request->description;
        $repeter = $request->repeter;
        $recurrence = $request->recurrence;
        $notier = $request->notier;
        $img1ecart = $request->img1ecart;
        $img1ecart_name = $request->img1ecart_name;

        $img2ecart = $request->img2ecart;
        $img2ecart_name = $request->img2ecart_name;

        $img3ecart = $request->img3ecart;
        $img3ecart_name = $request->img3ecart_name;

        $img4ecart = $request->img4ecart;
        $img4ecart_name = $request->img4ecart_name;


        if ($request->hasFile('img1ecart')) {
            $img1ecart = 'ecart-img1-' . time() . '.' . $request->img1ecart->extension();
            $request->img1ecart->move(public_path('/uploads/ecart'), $img1ecart);
        } else {
            $img1ecart = '';
        }

        if ($request->hasFile('img2ecart')) {
            $img2ecart = 'ecart-img2-' . time() . '.' . $request->img2ecart->extension();
            $request->img2ecart->move(public_path('/uploads/ecart'), $img2ecart);
        } else {
            $img2ecart = '';
        }


        if ($request->hasFile('img3ecart')) {
            $img3ecart = 'ecart-img3-' . time() . '.' . $request->img3ecart->extension();
            $request->img3ecart->move(public_path('/uploads/ecart'), $img3ecart);
        } else {
            $img3ecart = '';
        }


        if ($request->hasFile('img4ecart')) {
            $img4ecart = 'ecart-img4-' . time() . '.' . $request->img4ecart->extension();
            $request->img4ecart->move(public_path('/uploads/ecart'), $img4ecart);
        } else {
            $img4ecart = '';
        }

        $collaboration_absences = new CollaborationEcarts();
        $collaboration_absences->collaboration_id = $collaboration_id;

        $collaboration_absences->motif = $motif;
        $collaboration_absences->debut_date = $debut_date;
        $collaboration_absences->debut_time = $debut_time;
        $collaboration_absences->fin_date = $fin_date;
        $collaboration_absences->fin_time = $fin_time;
        $collaboration_absences->description = $description;
        $collaboration_absences->repeter = $repeter;
        $collaboration_absences->notifier = $notier;
        $collaboration_absences->recurrence = $recurrence;

        $collaboration_absences->img1_name = $img1ecart_name;
        $collaboration_absences->img1 = $img1ecart;

        $collaboration_absences->img2_name = $img2ecart_name;
        $collaboration_absences->img2 = $img2ecart;

        $collaboration_absences->img3_name = $img3ecart_name;
        $collaboration_absences->img3 = $img3ecart;

        $collaboration_absences->img4_name = $img4ecart_name;
        $collaboration_absences->img4 = $img4ecart;

        $collaboration_absences->save();

        $id = $collaboration_id;

        $output2 = '';
        $output2 .= $debut_date;
        $output2 .= " au ";
        $output2 .= $fin_date;

        $data = array(
            'dates' => $output2
        );
        echo json_encode($data);
    }

    public function collabotation_ecart_edit(Request $request)
    {

        $ecart_id = $request->ecart_id;
        $collaboration_id = $request->collaboration_id;
        $motif = $request->motif;
        $debut_date = $request->debut_date;
        $debut_time = $request->debut_time;

        $fin_date = $request->fin_date;
        $fin_time = $request->fin_time;
        $description = $request->description;

        $img1_name = $request->img1_name;

        if ($request->hasFile('img1')) {
            $img1 = 'ecart-img1' . time() . '.' . $request->img1->extension();
            $request->img1->move(public_path('/uploads/ecart'), $img1);
        } else {
            $img1 = $request->img1;
        }

        $img2_name = $request->img2_name;

        if ($request->hasFile('img2')) {
            $img2 = 'ecart-img2' . time() . '.' . $request->img2->extension();
            $request->img2->move(public_path('/uploads/ecart'), $img2);
        } else {
            $img2 = $request->img2;
        }


        $img3_name = $request->img3_name;

        if ($request->hasFile('img3')) {
            $img3 = 'ecart-img3' . time() . '.' . $request->img3->extension();
            $request->img3->move(public_path('/uploads/ecart'), $img3);
        } else {
            $img3 = $request->img3;
        }


        $img4_name = $request->img4_name;

        if ($request->hasFile('img4')) {
            $img4 = 'ecart-img4' . time() . '.' . $request->img4->extension();
            $request->img4->move(public_path('/uploads/ecart'), $img4);
        } else {
            $img4 = $request->img4;
        }


        $sql = DB::table('collaboration_ecarts')->where('id', $ecart_id)->update(
            array(
                'motif' => $motif,
                'debut_date' => $debut_date,
                'debut_time' => $debut_time,
                'fin_date' => $fin_date,
                'fin_time' => $fin_time,
                'description' => $description,
                'img1' => $img1,
                'img1_name' => $img1_name,
                'img2' => $img2,
                'img2_name' => $img2_name,
                'img3' => $img3,
                'img3_name' => $img3_name,
                'img4' => $img4,
                'img4_name' => $img4_name
            )
        );


        return redirect('/collaboration/' . $collaboration_id . '/absences_ecarts')->with('success', 'General Updated');
    }

    public function collabotation_dotation_ecart_img_delete(Request $request)
    {

        $id = $request->ecart_id;

        if ($request->img1) {
            $res = DB::table('collaboration_ecarts')->where('id', $id)->update(
                [
                    'img1' => NULL,
                ]
            );
        }


        if ($request->img2) {
            $res = DB::table('collaboration_ecarts')->where('id', $id)->update(
                [
                    'img2' => NULL,
                ]
            );
        }


        if ($request->img3) {
            $res = DB::table('collaboration_ecarts')->where('id', $id)->update(
                [
                    'img3' => NULL,
                ]
            );
        }


        if ($request->img4) {
            $res = DB::table('collaboration_ecarts')->where('id', $id)->update(
                [
                    'img4' => NULL,
                ]
            );
        }
    }


    // public function absences_datefilter(Request $request)
    // {
    //     $collaboration_id = $request->collaboration_id;
    //     $absences_from = $request->absences_from;
    //     $absences_to = $request->absences_to;

    //     if($absences_from)
    //     {
    //         $absences = DB::table('collaboration_absences')->where('debut_date',$absences_from)->orderBy('id', 'DESC')->get();
    //     }

    //     if ($request->ajax())
    //         {
    //             return \Response::json(\View::make('collaboration.absences_ecarts_popup.ajax_absences', compact('absences','collaboration_id'))->render());
    //         }

    // }

    public function absences_datefilter_to(Request $request)
    {
        $collaboration_id = $request->collaboration_id;
        $absences_from = $request->absences_from;
        $absences_to = $request->absences_to;
        $motifs = $request->motifs;
        if ($motifs == 'all' && $absences_from == null && $absences_to == null) {
            $absences = DB::table('collaboration_absences')
                ->where('collaboration_id', $collaboration_id)
                ->orderBy('id', 'DESC')->get();
        } elseif ($motifs == 'all' && $absences_from != null && $absences_to != null) {
            $absences = DB::table('collaboration_absences')->where('collaboration_id', $collaboration_id)->whereBetween('debut_date', [$absences_from, $absences_to])->orderBy('id', 'DESC')->get();
        } elseif ($motifs != 'all' && $motifs) {
            $absences = DB::table('collaboration_absences')
                ->where('collaboration_id', $collaboration_id)
                ->where('motif', $motifs)
                ->orderBy('id', 'DESC')->get();
        } else {
            $absences = DB::table('collaboration_absences')
                ->where('collaboration_id', $collaboration_id)
                ->where('motif', $motifs)
                ->whereBetween('debut_date', [$absences_from, $absences_to])
                ->orderBy('id', 'DESC')->get();
        }


        if ($request->ajax()) {
            return \Response::json(\View::make('collaboration.absences_ecarts_popup.ajax_absences', compact('absences', 'collaboration_id'))->render());
        }
    }

    public function absences_datefilter_to_calc(Request $request)
    {
        $collaboration_id = $request->collaboration_id;
        $absences_from = $request->absences_from;
        $absences_to = $request->absences_to;
        $motifs = $request->motifs;





        if ($motifs == 'all' && $absences_from == null && $absences_to == null) {
            $absences = DB::table('collaboration_absences')
                ->where('collaboration_id', $collaboration_id)
                ->orderBy('id', 'DESC')->get();
        }
        elseif( $motifs == 'all' && $absences_from != ''  && $absences_to != '')
        {
            $absences = DB::table('collaboration_absences')->where('collaboration_id',$collaboration_id)->whereBetween('debut_date',[$absences_from,$absences_to])->orderBy('id', 'DESC')->get();

        }
        elseif( $motifs != 'all' && $motifs)
        {
            $absences = DB::table('collaboration_absences')
                ->where('collaboration_id',$collaboration_id)
                ->where('motif',$motifs)
                ->orderBy('id', 'DESC')->get();
        }


        else
        {
            $absences = DB::table('collaboration_absences')
                ->where('collaboration_id',$collaboration_id)
                ->where('motif',$motifs)
                ->whereBetween('debut_date',[$absences_from,$absences_to])
                ->orderBy('id', 'DESC')->get();


        }


        if ($request->ajax())
        {
                return \Response::json(\View::make('collaboration.collaboration_calc_view', compact('absences','collaboration_id'))->render());
        }
    }



    public function ecarts_datefilter_to(Request $request)
    {


        $collaboration_id = $request->collaboration_id;
        $ecarts_from = $request->ecarts_from;
        $motifs = $request->motifs;




        if( $motifs == 'all' && $ecarts_from != null)
        {
            $ecarts = DB::table('collaboration_ecarts')
                    ->where('collaboration_id',$collaboration_id)
                    ->where('debut_date',$ecarts_from)
                    ->orderBy('id', 'DESC')->get();


        }
        elseif($motifs && $motifs != 'all' && $ecarts_from == null)
        {
            $ecarts = DB::table('collaboration_ecarts')
                ->where('collaboration_id',$collaboration_id)
                ->where('motif',$motifs)
                ->orderBy('id', 'DESC')->get();
        }
        elseif( $motifs == 'all' && $ecarts_from == null)
        {
            $ecarts = DB::table('collaboration_ecarts')
                ->where('collaboration_id',$collaboration_id)
                ->orderBy('id', 'DESC')->get();
        }

        else
        {

            $ecarts = DB::table('collaboration_ecarts')
                ->where('collaboration_id',$collaboration_id)
                ->where('motif',$motifs)
                ->where('debut_date',$ecarts_from)
                ->orderBy('id', 'DESC')->get();
        }




        if ($request->ajax())
        {
            return \Response::json(\View::make('collaboration.absences_ecarts_popup.ajax_ecarts', compact('ecarts','collaboration_id'))->render());
        }
    }



    public function markets_assigne_insert(Request  $request)
    {


        $markets = $request->join_market_selected_values;
        $collaboration_id = $request->collaboration_id;
        $agency_id =$request->agency_id;


        $markets_assigne = DB::table('markets_assigne')->where('collaboration_id',$collaboration_id)->first();

        if($markets_assigne)
        {
            $markets_assigne_update = DB::table('markets_assigne')->where('collaboration_id', $collaboration_id)->update(
                [
                    'markets' => $markets,
                    'agency_id' => $agency_id
                ]
            );
        }
        else
        {


            DB::table('markets_assigne')->insert(
                array(
                       'collaboration_id'     =>   $collaboration_id,
                       'agency_id' => $agency_id,
                       'markets'   =>  $markets
                )
           );
        }

    }


    public function team_leader($team_leader_id)
    {
        $tl = DB::table('llx_collaboration_contract')
            ->select('llx_collaboration_contract.collaboration_id',
                'llx_collaboration_contract.team_lead_id',
                'llx_collaboration.nom as collaboration_nom',
                'llx_collaboration.prenom as collaboration_prenom',
            )
            ->leftJoin('llx_collaboration','llx_collaboration_contract.collaboration_id','=','llx_collaboration.id')
            ->where(['llx_collaboration_contract.team_lead_id' => $team_leader_id])
            ->get();

            dd($tl);
    }


}
