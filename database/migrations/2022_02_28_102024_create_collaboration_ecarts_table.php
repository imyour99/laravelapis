<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationEcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaboration_ecarts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('collaboration_id')->nullable();
            $table->foreign('collaboration_id')->references('id')->on('llx_collaboration')->onDelete('set null');
            $table->string('motif')->nullable();

            $table->string('debut_date')->nullable();
            $table->string('debut_time')->nullable();
            $table->string('fin_date')->nullable();
            $table->string('fin_time')->nullable();
            $table->enum('repeter', array('true', 'false'))->default('false');
            $table->string('notifier')->nullable();
            $table->string('recurrence')->nullable();
            $table->text('description')->nullable();
            $table->string('img1')->nullable();
            $table->string('img1_name')->nullable();

            $table->string('img2')->nullable();
            $table->string('img2_name')->nullable();

            $table->string('img3')->nullable();
            $table->string('img3_name')->nullable();

            $table->string('img4')->nullable();
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
        Schema::dropIfExists('collaboration_ecarts');
    }
}
