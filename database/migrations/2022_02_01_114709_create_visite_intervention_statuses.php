<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisiteInterventionStatuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervention_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('intervention_statuses')->insert(
            [
                [
                    'name' => 'Tous'             
                ],
                [
                    'name' => 'A ne pas réaliser'             
                ],
                [
                    'name' => 'Stand by'             
                ],
                [
                    'name' => 'Réalisée'             
                ],
                [
                    'name' => 'Planifiée'             
                ],
                [
                    'name' => 'A planifier'             
                ]
            ]
        );

        Schema::create('visite_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('visite_statuses')->insert(
            [
                [
                    'name' => 'Tous'             
                ],
                [
                    'name' => 'A ne pas réaliser'             
                ],
                [
                    'name' => 'Stand by'             
                ],
                [
                    'name' => 'Réalisée'             
                ],
                [
                    'name' => 'Planifiée'             
                ],
                [
                    'name' => 'A planifier'             
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intervention_statuses');
        Schema::dropIfExists('visite_statuses');
    }
}
