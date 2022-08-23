<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlxClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llx_client', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('pdl')->nullable();
            $table->string('telephone')->nullable();
            $table->integer('telephone_portable')->nullable();
            $table->integer('telephone_portable2')->nullable();
            $table->integer('telephone_fixe')->nullable();
            $table->integer('telephone_pro')->nullable();
            $table->text('adress')->nullable();
            $table->text('villa')->nullable();
            $table->string('code')->nullable();

            $table->text('adress2')->nullable();
            $table->text('code2')->nullable();
            $table->text('villa2')->nullable();
            $table->integer('telephone2')->nullable();
            $table->text('email2')->nullable();
            $table->text('observations')->nullable();

            //$table->string('title')->nullable();
            $table->string('type_intervention')->nullable();
            $table->string('dev_typed')->nullable();
            $table->string('dev_duree')->nullable();
            $table->string('dev_maille')->nullable();
            $table->string('dev_contrat')->nullable();
            $table->string('dev_du')->nullable();
            $table->string('dev_au')->nullable();
            $table->string('dev_numero')->nullable();
            $table->string('dev_r_voie')->nullable();
            $table->string('dev_complement')->nullable();
            $table->string('dev_zdd')->nullable();
            $table->string('dev_code')->nullable();
            $table->string('dev_commune')->nullable();
            $table->string('dev_note')->nullable();
            $table->string('dev_l_voie')->nullable();
            $table->string('tech_categorie')->nullable();
            $table->string('tech_tarif')->nullable();
            $table->string('tech_puissance_souscrite')->nullable();
            $table->string('tech_organe_de_coupure')->nullable();
            $table->string('tech_produkteur')->nullable();
            $table->string('tech_type')->nullable();
            $table->string('tech_matricule')->nullable();
            $table->string('tech_nbfils')->nullable();
            $table->string('tech_num_de_serie')->nullable();
            $table->string('tech_nature')->nullable();
            $table->string('tech_marque')->nullable();
            $table->string('tech_intensite')->nullable();
            $table->string('tech_plage')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('llx_client');
    }
}
