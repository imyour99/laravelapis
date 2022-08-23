<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateLlxAgencyEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llx_agency_events', function (Blueprint $table) {
            $table->id();           
            $table->string('nom');
            $table->unsignedBigInteger('agency_id');
	    $table->foreign('agency_id')->references('id')->on('llx_agency');      
            $table->date('date_created')->default(Carbon::now());  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llx_agency_events');
    }
}
