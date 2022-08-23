<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationLatLngsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llx_collaboration_lat_lng', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collaboration_id')->nullable();
            $table->foreign('collaboration_id')->references('id')->on('llx_collaboration')->onDelete('set null');
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
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
        Schema::dropIfExists('collaboration_lat_lngs');
    }
}
