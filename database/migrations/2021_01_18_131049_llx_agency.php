<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LlxAgency extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('llx_agency')) {
            Schema::create('llx_agency', function (Blueprint $table) {
                $table->id();
                $table->string('agencenom')->nullable;
                $table->string('agenceaddress');
                $table->string('agencebat');
                $table->string('agencecity');
                $table->string('postal_code');
                $table->string('responsible');
                $table->string('telagency');
                $table->string('telServiceclient');
                $table->string('emailagence');
                $table->string('telresponsible');
                $table->string('emailesponsible');
                $table->enum('status',['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('llx_agency');
    }
}
