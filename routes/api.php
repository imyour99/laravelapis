<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use \App\Http\Controllers\API\AuthenticationController;

Route::group(['prefix' => 'v1'], function () {
    Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'login'])->name('api.login');
    Route::post('forgot-password', [\App\Http\Controllers\API\AuthController::class, 'forgotPassword'])->name('password.forgot');
    Route::get('reset-password', [\App\Http\Controllers\API\AuthController::class, 'genResetMobileURL'])->name('password.reset.mobile.url');
    Route::post('reset-password', [\App\Http\Controllers\API\AuthController::class, 'resetPassword'])->name('password.reset');

    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('user', [\App\Http\Controllers\API\UserController::class, 'getUser'])->name('api.getUser');
        Route::post('logout', [\App\Http\Controllers\API\AuthController::class, 'logout'])->name('api.logout');

        Route::group(['prefix' => 'technicien'], function () {
            Route::get('intervention/{id}', [\App\Http\Controllers\API\InterventionController::class, 'getInterventionByID'])->name('intervention.getInterventionByID');
            Route::post('intervention/{id}/upload-pdf', [\App\Http\Controllers\API\InterventionController::class, 'uploadPDF'])->name('intervention.upload.pdf');
            Route::patch('intervention/{id}/update-status', [\App\Http\Controllers\API\InterventionController::class, 'updateInterventionStatus'])->name('intervention.updateInterventionStatus');
            Route::post('interventions', [\App\Http\Controllers\API\InterventionController::class, 'getAllInterventions'])->name('getInterventions.all');
            Route::post('interventions/stats/monthly', [\App\Http\Controllers\API\InterventionController::class, 'monthlyCountByStatus'])->name('interventions.stats.monthly');
            Route::post('interventions/map', [\App\Http\Controllers\API\InterventionController::class, 'getAllInterventionsForMap'])->name('getInterventions.all.map');
            Route::post('interventions/status', [\App\Http\Controllers\API\InterventionController::class, 'getInterventionsByStatus'])->name('getInterventions.bySatus');
            Route::post('interventions/date-range', [\App\Http\Controllers\API\InterventionController::class, 'getInterventionsByDateRange'])->name('getInterventions.byDateRange');
            Route::post('interventions/date-range/status', [\App\Http\Controllers\API\InterventionController::class, 'getInterventionsByDateRangeStatus'])->name('getInterventions.byDateRangeStatus');
            Route::post('interventions/status/date-range', [\App\Http\Controllers\API\InterventionController::class, 'getInterventionsByDateRangeStatus'])->name('getInterventions.byStatusDateRange');




        });

        // Tech_marque API here

        Route::get('client/tech_marque', [\App\Http\Controllers\API\InterventionController::class, 'tech_marque'])->name('get_tech_marque');
        Route::post('client/start_intervation', [\App\Http\Controllers\API\InterventionController::class, 'start_intervation'])->name('start_intervation');

        Route::post('client/end_intervation', [\App\Http\Controllers\API\InterventionController::class, 'end_intervation'])->name('end_intervation');



        Route::group(['prefix' => 'teamleader'], function () {
            Route::get('interventions/stats/status', [\App\Http\Controllers\API\TeamLeaderController::class, 'teamCountByStatus'])->name('teamleader.intervention.stats.status');
            Route::get('team-members', [\App\Http\Controllers\API\TeamLeaderController::class, 'teamMembers'])->name('teamleader.team.members');
        });
    });
});

