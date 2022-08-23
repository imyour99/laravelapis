<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationDotationMateriel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('llx_collaboration_dotation_equipment')) {
            Schema::create('llx_collaboration_dotation_equipment', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('collaboration_id')->nullable();
                $table->foreign('collaboration_id')->references('id')->on('llx_collaboration')->onDelete('set null');
                $table->string('materiel_name')->nullable;
                $table->date('obtained')->nullable;

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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaboration_dotation_materiel');
    }
}
