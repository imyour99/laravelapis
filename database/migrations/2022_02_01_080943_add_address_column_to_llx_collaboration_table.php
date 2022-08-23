<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressColumnToLlxCollaborationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('llx_collaboration', function (Blueprint $table) {
            // $table->dropColumn('complément_d_adresse');
            // $table->dropColumn('téléphone');
            // $table->dropColumn('numero_de_securile_sociale');

            // $table->string('complement_d_adresse')->nullable();
            // $table->string('telephone')->nullable();
            // $table->string('numero_de_securile_sociale')->nullable();
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
