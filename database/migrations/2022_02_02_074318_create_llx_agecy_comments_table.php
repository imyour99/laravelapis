<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateLlxAgecyCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('llx_agency_comments', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('description');
            $table->unsignedBigInteger('agency_id');
	    $table->foreign('agency_id')->references('id')->on('llx_agency');
            $table->date('date_created')->default(Carbon::now());
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
        Schema::dropIfExists('llx_agency_comments');
    }
}
