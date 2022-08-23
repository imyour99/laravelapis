<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientFilters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('markets')) {
            Schema::create('markets', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->timestamps();
            });


            DB::table('markets')->insert(
                [
                    // [
                    //     'name' => 'Tous'
                    // ],
                    [
                        'name' => 'V3A Annecy Pays de Gex'
                    ],
                    [
                        'name' => 'V3A H Savoie Nord'
                    ],
                    [
                        'name' => 'V3A Paris RDN 9-18'
                    ],
                    [
                        'name' => 'V3B 10 DR PYL SAT LANDES'
                    ],
                    [
                        'name' => 'V3B PARIS SE1-4-5-12-13-14'
                    ],
                    [
                        'name' => 'V3B SAT 5 Nievre'
                    ],
                    [
                        'name' => 'V3B SAT 6 Yonne'
                    ],
                    [
                        'name' => 'V3E CAZ AM DiffusR'
                    ],
                    [
                        'name' => 'V3E CAZ VAR DiffusR Grip'
                    ]
                ]
            );
        }
        Schema::table('llx_client', function($table) {
            // $table->string('market')->nullable();
            $table->unsignedBigInteger('market')->nullable();
            $table->foreign('market')->references('id')->on('markets')->onDelete('set null');

            $table->string('client_type')->nullable();
            $table->string('contract_status')->nullable();
            $table->string('commune')->nullable();
            $table->string('producers')->nullable();
            $table->string('meter_accessibility')->nullable();
            $table->string('appointment_need')->nullable();
            $table->string('unsuccessful_contact_reasons')->nullable();
            $table->string('intervention_specifities')->nullable();
            $table->string('notification_criticalities')->nullable();
            $table->string('notification_type')->nullable();
            $table->string('notification_status')->nullable();
            $table->string('technicien')->nullable();
            $table->string('rappel_date_from')->nullable();
            $table->string('rappel_date_to')->nullable();
            $table->string('intervention_date_from')->nullable();
            $table->string('intervention_date_to')->nullable();
            $table->string('last_customer_date_from')->nullable();
            $table->string('last_customer_date_to')->nullable();
            $table->string('termination_date_from')->nullable();
            $table->string('termination_date_to')->nullable();
            $table->string('theoretical_date_from')->nullable();
            $table->string('theoretical_date_to')->nullable();

        });


        if (!Schema::hasTable('client_types')) {
            Schema::create('client_types', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->timestamps();
            });

            DB::table('client_types')->insert(
                [
                    [
                        'name' => 'Particulier'
                    ],
                    [
                        'name' => 'Professionnel'
                    ]
                ]
            );
        }

        if (!Schema::hasTable('contract_status')) {
            Schema::create('contract_status', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->timestamps();
            });


            DB::table('contract_status')->insert(
                [
                    [
                        'name' => 'Actif'
                    ],
                    [
                        'name' => 'Inactif'
                    ]
                ]
            );

        }

        if (!Schema::hasTable('producers')) {
            Schema::create('producers', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable();
                $table->timestamps();
            });


            DB::table('producers')->insert(
                [
                    [
                        'name' => 'Producteurs'
                    ],
                    [
                        'name' => 'Consommateur'
                    ]
                ]
            );
        }

        Schema::create('meter_accessibility', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });


        DB::table('meter_accessibility')->insert(
            [
                [
                    'name' => 'Accessible'
                ],
                [
                    'name' => 'Inaccessible'
                ]
            ]
        );

        Schema::create('appointment_need', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });


        DB::table('appointment_need')->insert(
            [
                [
                    'name' => 'Yes'
                ],
                [
                    'name' => 'No'
                ]
            ]
        );

        Schema::create('unsuccessful_contact_reasons', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });


        DB::table('unsuccessful_contact_reasons')->insert(
            [
                [
                    'name' => 'Tous'
                ],
                [
                    'name' => 'Injoignable 1'
                ],
                [
                    'name' => 'Injoignable 2'
                ],
                [
                    'name' => 'Injoignable 3'
                ],
                [
                    'name' => 'Injoignable 4'
                ],
                [
                    'name' => 'Injoignable 5'
                ],
                [
                    'name' => 'Injoignable 6'
                ],
                [
                    'name' => 'Injoignable 7'
                ],
                [
                    'name' => 'Injoignable 8'
                ],
                [
                    'name' => 'Injoignable 9'
                ],
                [
                    'name' => 'Injoignable 10'
                ],
                [
                    'name' => 'Injoignable 11'
                ],
                [
                    'name' => 'Injoignable 12'
                ],
                [
                    'name' => 'Porte à porte'
                ],
                [
                    'name' => 'Injoignable définitif'
                ],
                [
                    'name' => 'Echange d\'informations'
                ],
                [
                    'name' => 'Refus client'
                ],
                [
                    'name' => 'Refus réitéré'
                ],
                [
                    'name' => 'Refus définitif'
                ],
                [
                    'name' => 'Anomalies coordonnées'
                ]
            ]
        );

        Schema::create('intervention_specifities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });


        DB::table('intervention_specifities')->insert(
            [
                [
                    'name' => 'Tous'
                ],
                [
                    'name' => 'Aucune'
                ],
                [
                    'name' => 'GRIP-Manœuvre CCFC Bas'
                ],
                [
                    'name' => 'GRIP-Manœuvre CCFC Haut'
                ],
                [
                    'name' => 'GRIP-Manœuvre CCFC Très haut'
                ],
                [
                    'name' => 'GRIP-Pose CCFC Haut'
                ],
                [
                    'name' => 'GRIP-Pose CCFC Bas'
                ],
                [
                    'name' => 'GRIP-Pose CCFC Très Haut'
                ],
                [
                    'name' => 'GRIP- Tempo double contact sec'
                ],
                [
                    'name' => 'GRIP-CCPI bois amiante'
                ]

            ]
        );

        Schema::create('notification_criticalities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });


        DB::table('notification_criticalities')->insert(
            [
                [
                    'name' => 'U1'
                ],
                [
                    'name' => 'U2'
                ],
                [
                    'name' => 'U3'
                ],
                [
                    'name' => 'U4'
                ],
                [
                    'name' => 'Basse'
                ],
                [
                    'name' => 'Normale'
                ],
                [
                    'name' => 'Haute'
                ],
                [
                    'name' => 'Critique'
                ]
            ]
        );

        Schema::create('notification_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });


        DB::table('notification_types')->insert(
            [
                [
                    'name' => 'Tous'
                ],
                [
                    'name' => 'Aucune'
                ],
                [
                    'name' => 'Autre demande'
                ],
                [
                    'name' => 'Demande de remise en conformité'
                ],
                [
                    'name' => 'Changement de commande'
                ],
                [
                    'name' => 'Changement de nom de client'
                ],
                [
                    'name' => 'CR KO GRIP'
                ],
                [
                    'name' => 'CR KO hors GRIP'
                ],
                [
                    'name' => 'Non-conformité'
                ],
                [
                    'name' => 'Changement spécificité'
                ],
                [
                    'name' => 'Demande d\'action'
                ],
                [
                    'name' => 'Annulation de rendez-vous'
                ],
                [
                    'name' => 'Demande de modification de spécificité'
                ],
                [
                    'name' => 'Demande de pose'
                ],
                [
                    'name' => 'Réclamation client'
                ],
                [
                    'name' => 'Accord client suite refuse de pose'
                ],
                [
                    'name' => 'Demande de recevabilité'
                ],
                [
                    'name' => 'Demande de complément d\'information '
                ]
            ]
        );


        Schema::create('notification_status', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });


        DB::table('notification_status')->insert(
            [
                [
                    'name' => 'Tous'
                ],
                [
                    'name' => 'Aucune'
                ],
                [
                    'name' => 'A traiter par l\'externe'
                ],
                [
                    'name' => 'Levée'
                ]
            ]
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('market');
        Schema::dropIfExists('client_type');
        Schema::dropIfExists('contract_status');
        Schema::dropIfExists('producers');
        Schema::dropIfExists('meter_accessibility');
        Schema::dropIfExists('appointment_need');
        Schema::dropIfExists('unsuccessful_contact_reasons');
        Schema::dropIfExists('intervention_specifities');
        Schema::dropIfExists('notification_criticalities');
        Schema::dropIfExists('notification_type');
        Schema::dropIfExists('notification_status');

    }
}
