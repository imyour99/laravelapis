<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollabotationFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llx_collaboration_formations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collaboration_id')->nullable();
            $table->foreign('collaboration_id')->references('id')->on('llx_collaboration')->onDelete('set null');
            $table->string('formation_name')->nullable();
            $table->date('date_obtention')->nullable();
            $table->date('end_date')->nullable();

            $table->string('permis_b')->nullable();
            $table->string('permis_eb')->nullable();
            $table->string('permis_c')->nullable();
            $table->string('permis_ec')->nullable();

            $table->text('img1')->nullable();
            $table->string('img1_name')->nullable();

            $table->text('img2')->nullable();
            $table->string('img2_name')->nullable();

            $table->text('img3')->nullable();
            $table->string('img3_name')->nullable();

            $table->text('img4')->nullable();
            $table->string('img4_name')->nullable();

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
        Schema::dropIfExists('llx_collaboration_formations');
    }
}
