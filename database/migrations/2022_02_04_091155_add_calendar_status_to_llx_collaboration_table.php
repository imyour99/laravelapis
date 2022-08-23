<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCalendarStatusToLlxCollaborationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('llx_collaboration', function (Blueprint $table) {
            $table->enum('calendar_status',['Pending','Valider','Figer','Enchanger','Optimiser','Rafraichir','Afficher les tra jets'])->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('llx_collaboration', function (Blueprint $table) {
            //
        });
    }
}
