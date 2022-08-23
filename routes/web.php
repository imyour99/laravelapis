<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientNotfcnController;
use App\Http\Controllers\AdminPlanningController;
use App\Http\Controllers\AgencesController;
use App\Http\Controllers\LlxAgecyCommentController;
use App\Http\Controllers\LlxAgencyPhotosController;
use App\Http\Controllers\ClientMapController;
use App\Http\Controllers\CollaborationController;
use App\Http\Controllers\CollaborationMapController;
use App\Http\Controllers\StatistiquesController;
use App\Http\Controllers\TechnicianController;
use App\Http\Middleware\CustomAuth;
use Illuminate\Support\Facades\Auth;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', [AdminController::class, 'login_view'])->name('auth.login');
Route::post('auth', [AdminController::class, 'admin_login'])->name('auth');

Route::post('recover_pw_post', [AdminController::class, 'recover_pw_post'])->name('recover_pw_post');

Route::get('password-reset/{token}', [AdminController::class, 'password_reset'])->name('password_reset');
Route::post('password-reset', [AdminController::class, 'password_reset_post'])->name('password_reset_post');

// Route::get('/login',[AdminController::class, 'index']);
// Route::post('/admin_login', [AdminController::class, 'admin_login'])->name('admin_login');
Route::post('EmailVerify', [AdminController::class, 'EmailVerify'])->name('EmailVerify');

Route::group(['middleware' => "auth"], function () {

    Route::post('search', [AdminPlanningController::class, 'search'])->name('search');

    Route::post('administrationList_create', [AdminController::class, 'administrationList_create'])->name('administrationList.create');
    Route::get('user_list_search', [AdminController::class, 'user_list_search'])->name('user_list_search');

    Route::match(['get', 'post'], 'clientsList', [ClientController::class, 'index'])->name('clientsList');
    Route::post('get-intervention', [ClientController::class, 'getIntervention'])->name('getIntervention');
    Route::get('get-intervention-status', [ClientController::class, 'getInterventionStatus'])->name('getInterventionStatus');
    Route::get('get-intervention-schedule', [ClientController::class, 'getInterventionschedule'])->name('getInterventionschedule');
    Route::post('save-intervention-plan', [ClientController::class, 'saveIntervention'])->name('saveIntervention');
    Route::post('save-client-status', [ClientController::class, 'saveClientStatus'])->name('saveClientStatus');
    Route::get('unset-collab-session/{collab_id}', [AdminPlanningController::class, 'unsetCollabSession'])->name('unsetCollabSession');
    Route::post('set-collaborateur-calendar-status', [AdminPlanningController::class, 'setCollaborateurCalendarStatus'])->name('setCollaborateurCalendarStatus');
    Route::get('export-schedules', [AdminPlanningController::class, 'exportSchedules'])->name('exportSchedules');

    Route::post('get-visite', [ClientController::class, 'getVisite'])->name('getVisite');
    Route::get('get-visite-status', [ClientController::class, 'getVisiteStatus'])->name('getVisiteStatus');
    Route::post('save-visite-plan', [ClientController::class, 'saveVisite'])->name('saveVisite');


    Route::post('client/deploiement', [ClientController::class, 'deploiement_save'])->name('client.deploiement');
    Route::post('client/technique', [ClientController::class, 'technique_save'])->name('client.technique');
    Route::post('client/market_function', [ClientController::class, 'market_function'])->name('client.market_function');
    Route::post('client/marche_add', [ClientController::class, 'marche_add'])->name('client.marche_add');
    Route::post('client/myPdl', [ClientController::class, 'inforamtion_pdl_save'])->name('client.myPdl');

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('AdminPlanning/{type?}', [AdminPlanningController::class, 'index'])->name('AdminPlanning');
    Route::get('AdminPlanning_map/{type?}', [AdminPlanningController::class, 'map'])->name('AdminPlanning_map');


    // Route::post('set-collab-session/{collab_id}', [AdminPlanningController::class, 'setCollabSession'])->name('setCollabSession');
    Route::post('set-collab-session', [AdminPlanningController::class, 'setCollabSession'])->name('setCollabSession');
    Route::get('/ClientsMap', [ClientMapController::class, 'index'])->name('ClientsMap');
    Route::get('Techniciens', [TechnicianController::class, 'index'])->name('Techniciens');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    //    import export file
    Route::get('importExportView', [ClientController::class, 'importExportView']);
    Route::get('ClientExport', [ClientController::class, 'ClientExport'])->name('ClientExport');
    Route::get('ExportNotifctn', [ClientNotfcnController::class, 'ExportNotifctn'])->name('ExportNotifctn');
    Route::get('EmployeeExport', [TechnicianController::class, 'EmployeeExport'])->name('EmployeeExport');
    Route::post('EmployeeImport', [TechnicianController::class, 'EmployeeImport'])->name('EmployeeImport');
    Route::post('import', [ClientController::class, 'import'])->name('import');
    Route::get('agences', [AgencesController::class, 'index'])->name('agences');
    Route::get('AgencyExport', [AgencesController::class, 'AgencyExport'])->name('AgencyExport');

    Route::POST('SubmitAgency', [AgencesController::class, 'StoreAgency'])->name('StoreAgency');

    Route::post('SubmitAgencyCmments', [LlxAgecyCommentController::class, 'StoreAgencyComments'])->name('StoreAgencyComments');

    Route::post('StoreAgencyPieceJoints', [LlxAgencyPhotosController::class, 'StoreAgencyPieceJoints'])->name('StoreAgencyPieceJoints');
    Route::post('StoreAgencySecondPiece', [LlxAgencyPhotosController::class, 'StoreAgencySecondPiece'])->name('StoreAgencySecondPiece');
    Route::post('StoreAgencyFirstPiece', [LlxAgencyPhotosController::class, 'StoreAgencyFirstPiece'])->name('StoreAgencyFirstPiece');


    Route::post('agency/agency_photo_img_delete', [LlxAgencyPhotosController::class, 'collabotation_formation_img_delete'])->name('agency.photo_img_delete');
    Route::post('agency/agency_edit', [AgencesController::class, 'agency_edit'])->name('agence.edit');


    // Collaboration Index & map
    Route::get('collaboration_search', [CollaborationController::class, 'search'])->name('collaboration_search');


    Route::get('collaboration', [CollaborationController::class, 'index'])->name('collaboration');


    Route::get('collaboration/collaboration_create', [CollaborationController::class, 'index'])->name('collaboration_adds');
    Route::get('collaboration_map', [CollaborationMapController::class, 'colla_map'])->name('collabotation.map');

    // general add and edit
    Route::post('collabotation/general', [CollaborationController::class, 'collabotation_general'])->name('collabotation.general');
    Route::post('collabotation/general_edit', [CollaborationController::class, 'collabotation_general_edit'])->name('collabotation.general_edit');

    // donnees add & edit
    Route::post('collabotation/donnees_personelles', [CollaborationController::class, 'collabotation_donnees_personelles'])->name('collabotation.donnees_personelles');
    Route::post('collabotation/donnees_personelles_edit', [CollaborationController::class, 'collabotation_donnees_personelles_edit'])->name('collabotation.donnees_personelles_edit');

    // dotation add & edit
    Route::post('collabotation/dotation', [CollaborationController::class, 'collabotation_materiel'])->name('collabotation.dotation_materiel');

    // contact add & edit
    Route::post('collabotation/contact', [CollaborationController::class, 'collabotation_contact'])->name('collabotation.contact');
    Route::post('collabotation/contact_edit', [CollaborationController::class, 'collabotation_contact_edit'])->name('collabotation.contact_edit');

    // formations add & edit
    Route::post('collabotation/formations', [CollaborationController::class, 'collabotation_formations'])->name('collabotation.formations');
    Route::post('collabotation/contact_edit', [CollaborationController::class, 'collabotation_contact_edit'])->name('collabotation.contact_edit');

    Route::post('collabotation/formation_popup_edit', [CollaborationController::class, 'collabotation_formation_popup_edit'])->name('collabotation.formation_popup_edit');

    // formations Delete
    Route::post('collabotation/formation_delete', [CollaborationController::class, 'collabotation_formation_delete'])->name('collabotation.formation_delete');

    Route::post('collabotation/formation_img_delete', [CollaborationController::class, 'collabotation_formation_img_delete'])->name('collabotation.formation_img_delete');


    Route::get('collabotation/satistiques_search', [CollaborationController::class, 'satistiques_search'])->name('collabotation.satistiques_search');


    // DOtation Materiel Add & Edit ,Delete
    Route::post('collabotation/dotation_materiel', [CollaborationController::class, 'collabotation_materiel'])->name('collabotation.dotation_materiel');
    Route::post('collabotation/dotation_materiel_popup_edit', [CollaborationController::class, 'collabotation_dotation_materiel_popup_edit'])->name('collabotation.dotation_materiel_popup_edit');

    Route::post('collabotation/materiel_delete', [CollaborationController::class, 'collabotation_materiel_delete'])->name('collabotation.materiel_delete');
    Route::post('collabotation/dotation_materiel_img_delete', [CollaborationController::class, 'collabotation_dotation_materiel_img_delete'])->name('collabotation.dotation_materiel_img_delete');


    // Dotation Informatique  Edit & Delete
    Route::post('collabotation/dotation_informatique_popup_edit', [CollaborationController::class, 'collabotation_dotation_informatique_popup_edit'])->name('collabotation.dotation_informatique_popup_edit');

    Route::post('collabotation/informatique_delete', [CollaborationController::class, 'collabotation_informatique_delete'])->name('collabotation.informatique_delete');
    Route::post('collabotation/dotation_informatique_img_delete', [CollaborationController::class, 'collabotation_dotation_informatique_img_delete'])->name('collabotation.dotation_informatique_img_delete');

    // Dotation Vehicle  Edit & Delete
    Route::post('collabotation/dotation_vehicle_popup_edit', [CollaborationController::class, 'collabotation_dotation_vehicle_popup_edit'])->name('collabotation.dotation_vehicle_popup_edit');

    Route::post('collabotation/vehicle_delete', [CollaborationController::class, 'collabotation_vehicle_delete'])->name('collabotation.vehicle_delete');
    Route::post('collabotation/dotation_vehicle_img_delete', [CollaborationController::class, 'collabotation_dotation_vehicle_img_delete'])->name('collabotation.dotation_vehicle_img_delete');


    // Edit collaboration
    // Route::get('collaboration/{id}/données_personelles', [CollaborationController::class, 'index']);
    Route::get('collaboration/{id}/{type}', [CollaborationController::class, 'index']);
    Route::get('collaboration/{id}/general', [CollaborationController::class, 'index']);



    Route::get('collaboration/general_edit/{id}/données_personelles', [CollaborationController::class, 'index']);
    Route::get('collaboration/{id}/formations', [CollaborationController::class, 'index']);

    // Export Collaboration
    Route::get('collaboration/EmployeeExport', [CollaborationController::class, 'EmployeeExport'])->name('collaboration.EmployeeExport');

    Route::get('collaboration/dotation/materielExport/{id}', [CollaborationController::class, 'materielExport']);
    Route::get('collaboration/dotation/InformatiqueExport/{id}', [CollaborationController::class, 'InformatiqueExport']);
    Route::get('collaboration/dotation/vehiculeExport/{id}', [CollaborationController::class, 'vehiculeExport']);


    // Collaboration status notification on / off
    Route::post('collaboration/notify_status', [CollaborationController::class, 'notify_status'])->name('collaboration.notify_status');

    Route::get('AdministrationList', [AdminController::class, 'AdministrationList'])->name('AdministrationList');



    Route::post('collaboration/absence/collaboration_search', [CollaborationController::class, 'collaboration_search'])->name('collaboration.absence.collaboration_search');


    // Absences Add,Edit & Img Delete
    Route::post('collabotation/absences_ecarts/absences', [CollaborationController::class, 'collabotation_absences'])->name('collabotation.absences_ecarts.absences');

    Route::post('collabotation/absences_ecarts/absences_edit', [CollaborationController::class, 'collabotation_absences_edit'])->name('collabotation.absences_edit');

    Route::post('collabotation/dotation_abs_img_delete', [CollaborationController::class, 'collabotation_dotation_abs_img_delete'])->name('collabotation.dotation_abs_img_delete');


    // ecarts Add ,Edit & Img Delete
    Route::post('collabotation/absences_ecarts/ecarts', [CollaborationController::class, 'collabotation_ecarts'])->name('collabotation.absences_ecarts.ecarts');

    Route::post('collabotation/absences_ecarts/ecart_edit', [CollaborationController::class, 'collabotation_ecart_edit'])->name('collabotation.ecart_edit');

    Route::post('collabotation/dotation_ecart_img_delete', [CollaborationController::class, 'collabotation_dotation_ecart_img_delete'])->name('collabotation.dotation_ecart_img_delete');


    Route::post('collabotation/absences_datefilter', [CollaborationController::class, 'absences_datefilter'])->name('absences.datefilter');
    Route::post('collabotation/absences_datefilter_to', [CollaborationController::class, 'absences_datefilter_to'])->name('absences.datefilter_to');

    Route::get('notification', [ClientNotfcnController::class, 'index'])->name('notification');
    Route::post('AddNotification', [ClientNotfcnController::class, 'AddNotification'])->name('AddNotification');
});

    Route::post('collabotation/absences_datefilter_to_calc', [CollaborationController::class, 'absences_datefilter_to_calc'])->name('absences.datefilter_to_calc');


    Route::post('collabotation/ecarts_datefilter_to', [CollaborationController::class, 'ecarts_datefilter_to'])->name('ecarts.datefilter_to');


    Route::post('collaboration/markets_assigne_insert', [CollaborationController::class, 'markets_assigne_insert'])->name('markets_assigne_insert');




    Route::get('statistiques', [StatistiquesController::class, 'statistiques'])->name('statistiques');


    Route::get('collaboration_team_leader/{team_leader_id}', [CollaborationController::class, 'team_leader'])->name('team_leader');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
