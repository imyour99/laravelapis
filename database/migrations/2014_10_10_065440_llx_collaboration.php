<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LlxCollaboration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('llx_collaboration')) {
            Schema::create('llx_collaboration', function (Blueprint $table) {
                $table->id();
                $table->string('profile_img')->nullable();
                $table->string('nom')->nullable();
                $table->string('prenom')->nullable();
                $table->string('login')->nullable();
                $table->string('email')->nullable();
                $table->string('mot_de_passe')->nullable();
                $table->string('confirmer_mot_de_passe')->nullable();
                $table->string('adresse')->nullable();
                $table->string('complément_d_adresse')->nullable();
                $table->string('code_postal')->nullable();
                $table->string('ville')->nullable();
                $table->string('telephone')->nullable();
                $table->string('portable')->nullable();
                $table->string('numero_de_securile_sociale')->nullable();
                $table->enum('status', array('active', 'inactive'))->default('active');


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
        Schema::dropIfExists('llx_collaboration');
    }
}
