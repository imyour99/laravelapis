<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationDotationVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('llx_collaboration_dotation_vehicle')) {
            Schema::create('llx_collaboration_dotation_vehicle', function (Blueprint $table) {
                $table->id();

                $table->unsignedBigInteger('collaboration_id')->nullable();
                $table->foreign('collaboration_id')->references('id')->on('llx_collaboration')->onDelete('set null');
                $table->string('type_vehicle')->nullable();
                $table->string('obtained')->nullable();
                $table->string('model')->nullable();
                $table->string('number_plate')->nullable();

                $table->text('face')->nullable();
                $table->string('face_name')->nullable();

                $table->text('derriere')->nullable();
                $table->string('derriere_name')->nullable();

                $table->text('cote_droit')->nullable();
                $table->string('cote_droit_name')->nullable();

                $table->text('cote_gauche')->nullable();
                $table->string('cote_gauche_name')->nullable();

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaboration_dotation_vehicle');
    }
}
