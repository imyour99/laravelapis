<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llx_collaboration_contract', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collaboration_id')->nullable();
            $table->foreign('collaboration_id')->references('id')->on('llx_collaboration')->onDelete('set null');
            $table->string('poste')->nullable();
            $table->string('contract_type')->nullable();
            $table->string('sub_contract_type')->nullable();


            $table->unsignedBigInteger('agence')->nullable();
            $table->foreign('agence')->references('id')->on('llx_agency')->onDelete('set null');

            $table->string('nni')->nullable();
            $table->string('habilitation')->nullable();
            $table->date('end_date_authorization')->nullable();
            $table->string('gross_hourly_rate')->nullable();
            $table->string('gross_monthly_salary')->nullable();

            $table->string('construction_card')->nullable();
            $table->string('benefits_kind')->nullable();
            $table->string('situation_before_hiring')->nullable();
            $table->string('diploma')->nullable();

            $table->unsignedBigInteger('team_lead_id')->nullable();
            $table->foreign('team_lead_id')->references('id')->on('users')->onDelete('set null');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llx_collaboration_contract');
    }
}
