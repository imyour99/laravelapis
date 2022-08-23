<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketsAssigne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets_assigne', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('collaboration_id')->nullable();
            $table->foreign('collaboration_id')->references('id')->on('llx_collaboration')->onDelete('set null');

            $table->unsignedBigInteger('agency_id')->nullable();
            $table->foreign('agency_id')->references('id')->on('llx_agency')->onDelete('set null');

            $table->string('markets')->nullable();

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
        Schema::dropIfExists('markets_assigne');
    }
}
