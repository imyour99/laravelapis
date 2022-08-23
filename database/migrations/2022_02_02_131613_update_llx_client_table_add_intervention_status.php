<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLlxClientTableAddInterventionStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('llx_client', function($table) {
            $table->string('intervention_status')->nullable();
            $table->string('intervention_status_comment')->nullable();
            $table->string('visite_status')->nullable();
            $table->string('visite_status_comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
