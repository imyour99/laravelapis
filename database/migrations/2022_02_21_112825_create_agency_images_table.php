<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
class CreateAgencyImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_images', function (Blueprint $table) {
             $table->id();
            $table->string('pic_name');
            $table->string('pic_url');
            $table->string('pic_pos');
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
        Schema::dropIfExists('agency_images');
    }
}
