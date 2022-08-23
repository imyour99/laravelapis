<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Carbon;

class LlxTechnician extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   if (!Schema::hasTable('llx_notification')) {
            Schema::create('llx_technician', function (Blueprint $table) {
                $table->id();
                $table->string('nom');
                $table->text('prenom')->nullable();
                $table->text('type')->nullable();
                $table->string('poste')->nullable();
                $table->string('address')->nullable();
                $table->string('ville')->nullable();
                $table->string('status')->nullable();
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
        Schema::dropIfExists('llx_technician');
    }
}
