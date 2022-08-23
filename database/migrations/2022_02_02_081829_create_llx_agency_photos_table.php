<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateLlxAgencyPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llx_agency_photos', function (Blueprint $table) {
            $table->id();
            $table->string('pic_name');
            $table->string('pic_url');
            $table->unsignedBigInteger('agency_id');
	    $table->foreign('agency_id')->references('id')->on('llx_agency');
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
        Schema::dropIfExists('llx_agency_photos');
    }
}
