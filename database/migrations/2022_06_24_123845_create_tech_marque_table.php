<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTechMarqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_marque', function (Blueprint $table) {
            $table->id();
            $table->string('tech_marque_name')->nullable();
            $table->timestamps();
        });

        DB::table('tech_marque')->insert([
            'id' => 1,
            'tech_marque_name' => 'ACTARIS',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 2,
            'tech_marque_name' => 'ARNOULD',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 3,
            'tech_marque_name' => 'B.F.M',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 4,
            'tech_marque_name' => 'BACO',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 5,
            'tech_marque_name' => 'CCE',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 6,
            'tech_marque_name' => 'CHANDOS',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 7,
            'tech_marque_name' => 'FAE',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 8,
            'tech_marque_name' => 'GARDY',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 9,
            'tech_marque_name' => 'GENERAL ELECTRIC',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 10,
            'tech_marque_name' => 'HAGER (GE)',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 11,
            'tech_marque_name' => 'HAGER (LEGRAND)',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 12,
            'tech_marque_name' => 'IES',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 13,
            'tech_marque_name' => 'ITRON (LEGRAND)',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 14,
            'tech_marque_name' => 'LANDIS ET GYR',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 15,
            'tech_marque_name' => 'MERLIN GERIN',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 16,
            'tech_marque_name' => 'SCHLUMBERGER',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 17,
            'tech_marque_name' => 'SCHNEIDER ELECTRIQUE',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 18,
            'tech_marque_name' => 'THOMSON',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 19,
            'tech_marque_name' => 'EATON',
        ]);
        DB::table('tech_marque')->insert([
            'id' => 20,
            'tech_marque_name' => 'AUTRE',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tech_marque');
    }
}
