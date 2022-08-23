<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;


class LlxNotification extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('llx_notification')) {
            Schema::create('llx_notification', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('client_id')->nullable();
                $table->foreign('client_id')->references('id')->on('llx_client')->onDelete('cascade');

                $table->string('nature');
                $table->text('criticality')->nullable();
                $table->text('collaborator')->nullable();
                $table->text('description')->nullable();
                $table->text('pdl')->nullable();
                $table->string('img1')->nullable();
                $table->string('img2')->nullable();
                $table->string('img3')->nullable();
                $table->string('img4')->nullable();
                $table->enum('status', array('active', 'inactive'))->default('active');
                $table->date('created_at')->default(Carbon::now());
                $table->date('updated_at')->default(Carbon::now());
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
        Schema::dropIfExists('llx_notification');
    }
}
