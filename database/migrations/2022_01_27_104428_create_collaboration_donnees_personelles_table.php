+<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationDonneesPersonellesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('llx_collaboration_donnees')) {
            Schema::create('llx_collaboration_donnees', function (Blueprint $table) {
                $table->id();

                $table->unsignedBigInteger('collaboration_id')->nullable();
                $table->foreign('collaboration_id')->references('id')->on('llx_collaboration')->onDelete('set null');

                $table->string('social_security_number')->nullable();
                $table->string('groupe_sanguin')->nullable();
                $table->string('nom')->nullable();
                $table->string('prenom')->nullable();
                $table->string('contact')->nullable();
                $table->string('mutuelle_status')->nullable();
                $table->string('adults_insurance')->nullable();
                $table->string('children_insurance')->nullable();
                $table->string('antecedent_medicaux')->nullable();
                $table->string('taille_tShirt')->nullable();
                $table->string('taille_pantalon')->nullable();
                $table->string('taille_chaussures')->nullable();
                $table->string('taille_veste')->nullable();
                $table->string('taille_parka')->nullable();
                $table->string('taille_casque')->nullable();

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
        Schema::dropIfExists('collaboration_donnees_personelles');
    }
}
