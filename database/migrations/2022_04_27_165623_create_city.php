<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city', function (Blueprint $table) {
            $table->id();
            $table->string('city_name')->nullable();
            $table->timestamps();
        });

        DB::table('city')->insert([
            'id' => 1,
            'city_name' => 'Paris',
        ]);
        DB::table('city')->insert([
            'id' => 2,
            'city_name' => 'Marseille',
        ]);
        DB::table('city')->insert([
            'id' => 3,
            'city_name' => 'Lyon',
        ]);
        DB::table('city')->insert([
            'id' => 4,
            'city_name' => 'Toulouse',
        ]);
        DB::table('city')->insert([
            'id' => 5,
            'city_name' => 'Nice',
        ]);
        DB::table('city')->insert([
            'id' => 6,
            'city_name' => 'Nantes',
        ]);
        DB::table('city')->insert([
            'id' => 7,
            'city_name' => 'Montpellier',
        ]);
        DB::table('city')->insert([
            'id' => 8,
            'city_name' => 'Strasbourg',
        ]);
        DB::table('city')->insert([
            'id' => 9,
            'city_name' => 'Bordeaux',
        ]);
        DB::table('city')->insert([
            'id' => 10,
            'city_name' => 'Lille',
        ]);
        DB::table('city')->insert([
            'id' => 11,
            'city_name' => 'Rennes',
        ]);
        DB::table('city')->insert([
            'id' => 12,
            'city_name' => 'Reims',
        ]);
        DB::table('city')->insert([
            'id' => 13,
            'city_name' => 'Toulon',
        ]);
        DB::table('city')->insert([
            'id' => 14,
            'city_name' => 'Saint-Étienne',
        ]);
        DB::table('city')->insert([
            'id' => 15,
            'city_name' => 'Le Havre',
        ]);
        DB::table('city')->insert([
            'id' => 16,
            'city_name' => 'Grenoble',
        ]);
        DB::table('city')->insert([
            'id' => 17,
            'city_name' => 'Villeurbanne',
        ]);
        DB::table('city')->insert([
            'id' => 18,
            'city_name' => 'Dijon',
        ]);
        DB::table('city')->insert([
            'id' => 19,
            'city_name' => 'Angers',
        ]);
        DB::table('city')->insert([
            'id' => 20,
            'city_name' => 'Nîmes',
        ]);
        DB::table('city')->insert([
            'id' => 21,
            'city_name' => 'Clermont-Ferrand',
        ]);
        DB::table('city')->insert([
            'id' => 22,
            'city_name' => 'Le Mans',
        ]);
        DB::table('city')->insert([
            'id' => 23,
            'city_name' => 'Aix-en-Provence',
        ]);
        DB::table('city')->insert([
            'id' => 24,
            'city_name' => 'Brest',
        ]);
        DB::table('city')->insert([
            'id' => 25,
            'city_name' => 'Boulogne-Billancourt',
        ]);
        DB::table('city')->insert([
            'id' => 26,
            'city_name' => 'Tours',
        ]);
        DB::table('city')->insert([
            'id' => 27,
            'city_name' => 'Amiens',
        ]);
        DB::table('city')->insert([
            'id' => 28,
            'city_name' => 'Limoges',
        ]);
        DB::table('city')->insert([
            'id' => 29,
            'city_name' => 'Annecy',
        ]);
        DB::table('city')->insert([
            'id' => 30,
            'city_name' => 'Montreuil',
        ]);
        DB::table('city')->insert([
            'id' => 31,
            'city_name' => 'Saint-Denis',
        ]);
        DB::table('city')->insert([
            'id' => 32,
            'city_name' => 'Perpignan',
        ]);
        DB::table('city')->insert([
            'id' => 33,
            'city_name' => 'Orléans',
        ]);
        DB::table('city')->insert([
            'id' => 34,
            'city_name' => 'Besançon',
        ]);
        DB::table('city')->insert([
            'id' => 35,
            'city_name' => 'Metz',
        ]);
        DB::table('city')->insert([
            'id' => 36,
            'city_name' => 'Argenteuil',
        ]);
        DB::table('city')->insert([
            'id' => 37,
            'city_name' => 'Rouen',
        ]);
        DB::table('city')->insert([
            'id' => 38,
            'city_name' => 'Mulhouse',
        ]);
        DB::table('city')->insert([
            'id' => 39,
            'city_name' => 'Nancy',
        ]);
        DB::table('city')->insert([
            'id' => 40,
            'city_name' => 'Caen',
        ]);
        DB::table('city')->insert([
            'id' => 41,
            'city_name' => 'Courbevoic',
        ]);
        DB::table('city')->insert([
            'id' => 42,
            'city_name' => 'Roubaix',
        ]);
        DB::table('city')->insert([
            'id' => 43,
            'city_name' => 'Nanterre',
        ]);
        DB::table('city')->insert([
            'id' => 44,
            'city_name' => 'Tourcoing',
        ]);
        DB::table('city')->insert([
            'id' => 45,
            'city_name' => 'Vitry-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 46,
            'city_name' => 'Créteil',
        ]);
        DB::table('city')->insert([
            'id' => 47,
            'city_name' => 'Aubervilliers',
        ]);
        DB::table('city')->insert([
            'id' => 48,
            'city_name' => 'Colombes',
        ]);
        DB::table('city')->insert([
            'id' => 49,
            'city_name' => 'Levallois-Perret',
        ]);
        DB::table('city')->insert([
            'id' => 50,
            'city_name' => 'Aulnay-sous-Bois',
        ]);
        DB::table('city')->insert([
            'id' => 51,
            'city_name' => 'Poitiers',
        ]);
        DB::table('city')->insert([
            'id' => 52,
            'city_name' => 'Versailles',
        ]);
        DB::table('city')->insert([
            'id' => 53,
            'city_name' => 'Clichy',
        ]);
        DB::table('city')->insert([
            'id' => 54,
            'city_name' => 'Issy-les-Moulineaux',
        ]);
        DB::table('city')->insert([
            'id' => 55,
            'city_name' => 'Champigny-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 56,
            'city_name' => 'Rueil-Malmaison',
        ]);
        DB::table('city')->insert([
            'id' => 57,
            'city_name' => 'Saint-Maur-des-Fossés',
        ]);
        DB::table('city')->insert([
            'id' => 58,
            'city_name' => 'Drancy',
        ]);
        DB::table('city')->insert([
            'id' => 59,
            'city_name' => 'La Rochelle',
        ]);
        DB::table('city')->insert([
            'id' => 60,
            'city_name' => 'Pau',
        ]);
        DB::table('city')->insert([
            'id' => 61,
            'city_name' => 'Cannes',
        ]);
        DB::table('city')->insert([
            'id' => 62,
            'city_name' => 'Montrouge',
        ]);
        DB::table('city')->insert([
            'id' => 63,
            'city_name' => 'Antibes',
        ]);
        DB::table('city')->insert([
            'id' => 64,
            'city_name' => 'Vincennes',
        ]);
        DB::table('city')->insert([
            'id' => 65,
            'city_name' => 'Calais',
        ]);
        DB::table('city')->insert([
            'id' => 66,
            'city_name' => 'Ivry-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 67,
            'city_name' => 'Neuilly-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 68,
            'city_name' => 'Noisy-le-Grand',
        ]);
        DB::table('city')->insert([
            'id' => 69,
            'city_name' => 'Cergy',
        ]);
        DB::table('city')->insert([
            'id' => 70,
            'city_name' => 'Ajaccio',
        ]);
        DB::table('city')->insert([
            'id' => 71,
            'city_name' => 'Vénissieux',
        ]);
        DB::table('city')->insert([
            'id' => 72,
            'city_name' => 'Pantin',
        ]);
        DB::table('city')->insert([
            'id' => 73,
            'city_name' => 'Antony',
        ]);
        DB::table('city')->insert([
            'id' => 74,
            'city_name' => 'Épinay-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 75,
            'city_name' => 'Troyes',
        ]);
        DB::table('city')->insert([
            'id' => 76,
            'city_name' => 'Maisons-Alfort',
        ]);
        DB::table('city')->insert([
            'id' => 77,
            'city_name' => 'Sarcelles',
        ]);
        DB::table('city')->insert([
            'id' => 78,
            'city_name' => 'La Seyne-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 79,
            'city_name' => 'Villejuif',
        ]);
        DB::table('city')->insert([
            'id' => 80,
            'city_name' => 'Le Blanc-Mesnil',
        ]);
        DB::table('city')->insert([
            'id' => 81,
            'city_name' => 'Bondy',
        ]);
        DB::table('city')->insert([
            'id' => 82,
            'city_name' => 'Cherbourg',
        ]);
        DB::table('city')->insert([
            'id' => 83,
            'city_name' => 'Suresnes',
        ]);
        DB::table('city')->insert([
            'id' => 84,
            'city_name' => 'Saint-Ouen',
        ]);
        DB::table('city')->insert([
            'id' => 85,
            'city_name' => 'Bobigny',
        ]);
        DB::table('city')->insert([
            'id' => 86,
            'city_name' => 'Chambéry',
        ]);
        DB::table('city')->insert([
            'id' => 87,
            'city_name' => 'Fontenay-sous-Bois',
        ]);
        DB::table('city')->insert([
            'id' => 88,
            'city_name' => 'Puteaux',
        ]);
        DB::table('city')->insert([
            'id' => 89,
            'city_name' => 'Lorient',
        ]);
        DB::table('city')->insert([
            'id' => 90,
            'city_name' => 'Évry',
        ]);
        DB::table('city')->insert([
            'id' => 91,
            'city_name' => 'Alfortville',
        ]);
        DB::table('city')->insert([
            'id' => 92,
            'city_name' => 'Meaux',
        ]);
        DB::table('city')->insert([
            'id' => 93,
            'city_name' => 'Clamart',
        ]);
        DB::table('city')->insert([
            'id' => 94,
            'city_name' => 'Chelles',
        ]);
        DB::table('city')->insert([
            'id' => 95,
            'city_name' => 'Sartrouville',
        ]);
        DB::table('city')->insert([
            'id' => 96,
            'city_name' => 'Sevran',
        ]);
        DB::table('city')->insert([
            'id' => 97,
            'city_name' => 'Saint-Quentin',
        ]);
        DB::table('city')->insert([
            'id' => 98,
            'city_name' => 'Massy',
        ]);
        DB::table('city')->insert([
            'id' => 99,
            'city_name' => 'Corbeil-Essonnes',
        ]);
        DB::table('city')->insert([
            'id' => 100,
            'city_name' => 'Choisy-le-Roi',
        ]);
        DB::table('city')->insert([
            'id' => 101,
            'city_name' => 'Cagnes-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 102,
            'city_name' => 'Rosny-sous-Bois',
        ]);
        DB::table('city')->insert([
            'id' => 103,
            'city_name' => 'Bayonne',
        ]);
        DB::table('city')->insert([
            'id' => 104,
            'city_name' => 'Vaulx-en-Velin',
        ]);
        DB::table('city')->insert([
            'id' => 105,
            'city_name' => 'Noisy-le-Sec',
        ]);
        DB::table('city')->insert([
            'id' => 106,
            'city_name' => 'La Garenne-Colombes',
        ]);
        DB::table('city')->insert([
            'id' => 107,
            'city_name' => 'Gennevilliers',
        ]);
        DB::table('city')->insert([
            'id' => 108,
            'city_name' => 'Livry-Gargan',
        ]);
        DB::table('city')->insert([
            'id' => 109,
            'city_name' => 'Garges-lès-Gonesse',
        ]);
        DB::table('city')->insert([
            'id' => 110,
            'city_name' => 'Bagneux',
        ]);
        DB::table('city')->insert([
            'id' => 111,
            'city_name' => 'Bastia',
        ]);
        DB::table('city')->insert([
            'id' => 112,
            'city_name' => 'Meudon',
        ]);
        DB::table('city')->insert([
            'id' => 113,
            'city_name' => 'La Courneuve',
        ]);
        DB::table('city')->insert([
            'id' => 114,
            'city_name' => 'Belfort',
        ]);
        DB::table('city')->insert([
            'id' => 115,
            'city_name' => 'Bagnolet',
        ]);
        DB::table('city')->insert([
            'id' => 116,
            'city_name' => 'Châtillon',
        ]);
        DB::table('city')->insert([
            'id' => 117,
            'city_name' => 'Mantes-la-Jolie',
        ]);
        DB::table('city')->insert([
            'id' => 118,
            'city_name' => 'Malakoff',
        ]);
        DB::table('city')->insert([
            'id' => 119,
            'city_name' => 'Talence',
        ]);
        DB::table('city')->insert([
            'id' => 120,
            'city_name' => 'Chalon-sur-Saône',
        ]);
        DB::table('city')->insert([
            'id' => 121,
            'city_name' => 'Charenton-le-Pont',
        ]);
        DB::table('city')->insert([
            'id' => 122,
            'city_name' => 'Caluire-et-Cuire',
        ]);
        DB::table('city')->insert([
            'id' => 123,
            'city_name' => 'Le Cannet',
        ]);
        DB::table('city')->insert([
            'id' => 124,
            'city_name' => 'Valenciennes',
        ]);
        DB::table('city')->insert([
            'id' => 125,
            'city_name' => 'Bron',
        ]);
        DB::table('city')->insert([
            'id' => 126,
            'city_name' => 'Bois-Colombes',
        ]);
        DB::table('city')->insert([
            'id' => 127,
            'city_name' => 'Saint-Brieuc',
        ]);
        DB::table('city')->insert([
            'id' => 128,
            'city_name' => 'Vanves',
        ]);
        DB::table('city')->insert([
            'id' => 129,
            'city_name' => 'Stains',
        ]);
        DB::table('city')->insert([
            'id' => 130,
            'city_name' => 'Boulogne-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 131,
            'city_name' => 'Rezé',
        ]);
        DB::table('city')->insert([
            'id' => 132,
            'city_name' => 'Gagny',
        ]);
        DB::table('city')->insert([
            'id' => 133,
            'city_name' => 'Tarbes',
        ]);
        DB::table('city')->insert([
            'id' => 134,
            'city_name' => 'Arras',
        ]);
        DB::table('city')->insert([
            'id' => 135,
            'city_name' => 'Melun',
        ]);
        DB::table('city')->insert([
            'id' => 136,
            'city_name' => 'Nogent-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 137,
            'city_name' => 'Wattrelos',
        ]);
        DB::table('city')->insert([
            'id' => 138,
            'city_name' => 'Le Kremlin-Bicêtre',
        ]);
        DB::table('city')->insert([
            'id' => 139,
            'city_name' => 'Annemasse',
        ]);
        DB::table('city')->insert([
            'id' => 140,
            'city_name' => 'Franconville',
        ]);
        DB::table('city')->insert([
            'id' => 141,
            'city_name' => 'Saint-Martin-d’Hères',
        ]);
        DB::table('city')->insert([
            'id' => 142,
            'city_name' => 'Le Perreux-Sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 143,
            'city_name' => 'Le Pré-Saint-Gervais',
        ]);
        DB::table('city')->insert([
            'id' => 144,
            'city_name' => 'Cachan',
        ]);
        DB::table('city')->insert([
            'id' => 145,
            'city_name' => 'Savigny-sur-Orge',
        ]);
        DB::table('city')->insert([
            'id' => 146,
            'city_name' => 'Douai',
        ]);
        DB::table('city')->insert([
            'id' => 147,
            'city_name' => 'Échirolles',
        ]);
        DB::table('city')->insert([
            'id' => 148,
            'city_name' => 'Marcq-en-Baroeul',
        ]);
        DB::table('city')->insert([
            'id' => 149,
            'city_name' => 'Poissy',
        ]);
        DB::table('city')->insert([
            'id' => 150,
            'city_name' => 'Neuilly-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 151,
            'city_name' => 'Villepinte',
        ]);
        DB::table('city')->insert([
            'id' => 152,
            'city_name' => 'Chartres',
        ]);
        DB::table('city')->insert([
            'id' => 153,
            'city_name' => 'Villefranche-sur-Saône',
        ]);
        DB::table('city')->insert([
            'id' => 154,
            'city_name' => 'Sainte-Geneviève-des-Bois',
        ]);
        DB::table('city')->insert([
            'id' => 155,
            'city_name' => 'Pierrefitte-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 156,
            'city_name' => 'Houilles',
        ]);
        DB::table('city')->insert([
            'id' => 157,
            'city_name' => 'Les Lilas',
        ]);
        DB::table('city')->insert([
            'id' => 158,
            'city_name' => 'Châtenay-Malabry',
        ]);
        DB::table('city')->insert([
            'id' => 159,
            'city_name' => 'L’Haÿ-les-Roses',
        ]);
        DB::table('city')->insert([
            'id' => 160,
            'city_name' => 'Conflans-Sainte-Honorine',
        ]);
        DB::table('city')->insert([
            'id' => 161,
            'city_name' => 'Athis-Mons',
        ]);
        DB::table('city')->insert([
            'id' => 162,
            'city_name' => 'Creil',
        ]);
        DB::table('city')->insert([
            'id' => 163,
            'city_name' => 'Palaiseau',
        ]);
        DB::table('city')->insert([
            'id' => 164,
            'city_name' => 'Villeneuve-Saint-Georges',
        ]);
        DB::table('city')->insert([
            'id' => 165,
            'city_name' => 'Le Plessis-Robinson',
        ]);
        DB::table('city')->insert([
            'id' => 166,
            'city_name' => 'Bezons',
        ]);
        DB::table('city')->insert([
            'id' => 167,
            'city_name' => 'Villemomble',
        ]);
        DB::table('city')->insert([
            'id' => 168,
            'city_name' => 'Thonon-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 169,
            'city_name' => 'Schiltigheim',
        ]);
        DB::table('city')->insert([
            'id' => 170,
            'city_name' => 'Saint-Mandé',
        ]);
        DB::table('city')->insert([
            'id' => 171,
            'city_name' => 'Romainville',
        ]);
        DB::table('city')->insert([
            'id' => 172,
            'city_name' => 'Clichy-sous-Bois',
        ]);
        DB::table('city')->insert([
            'id' => 173,
            'city_name' => 'Chatou',
        ]);
        DB::table('city')->insert([
            'id' => 174,
            'city_name' => 'Fresnes',
        ]);
        DB::table('city')->insert([
            'id' => 175,
            'city_name' => 'Roanne',
        ]);
        DB::table('city')->insert([
            'id' => 176,
            'city_name' => 'Ermont',
        ]);
        DB::table('city')->insert([
            'id' => 177,
            'city_name' => 'Agen',
        ]);
        DB::table('city')->insert([
            'id' => 178,
            'city_name' => 'Pontoise',
        ]);
        DB::table('city')->insert([
            'id' => 179,
            'city_name' => 'Viry-Châtillon',
        ]);
        DB::table('city')->insert([
            'id' => 180,
            'city_name' => 'Les Mureaux',
        ]);
        DB::table('city')->insert([
            'id' => 181,
            'city_name' => 'Fontenay-aux-Roses',
        ]);
        DB::table('city')->insert([
            'id' => 182,
            'city_name' => 'Montigny-le-Bretonneux',
        ]);
        DB::table('city')->insert([
            'id' => 183,
            'city_name' => 'Villiers-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 184,
            'city_name' => 'Vigneux-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 185,
            'city_name' => 'Gentilly',
        ]);
        DB::table('city')->insert([
            'id' => 186,
            'city_name' => 'Trappes',
        ]);
        DB::table('city')->insert([
            'id' => 187,
            'city_name' => 'Thiais',
        ]);
        DB::table('city')->insert([
            'id' => 188,
            'city_name' => 'Lens',
        ]);
        DB::table('city')->insert([
            'id' => 189,
            'city_name' => 'Le Chesnay',
        ]);
        DB::table('city')->insert([
            'id' => 190,
            'city_name' => 'Grigny',
        ]);
        DB::table('city')->insert([
            'id' => 191,
            'city_name' => 'Saint-Cloud',
        ]);
        DB::table('city')->insert([
            'id' => 192,
            'city_name' => 'Goussainville',
        ]);
        DB::table('city')->insert([
            'id' => 193,
            'city_name' => 'Vandœuvre-lès-Nancy',
        ]);
        DB::table('city')->insert([
            'id' => 194,
            'city_name' => 'Périgueux',
        ]);
        DB::table('city')->insert([
            'id' => 195,
            'city_name' => 'Ris-Orangis',
        ]);
        DB::table('city')->insert([
            'id' => 196,
            'city_name' => 'Sotteville-lès-Rouen',
        ]);
        DB::table('city')->insert([
            'id' => 197,
            'city_name' => 'Liévin',
        ]);
        DB::table('city')->insert([
            'id' => 198,
            'city_name' => 'Bègles',
        ]);
        DB::table('city')->insert([
            'id' => 199,
            'city_name' => 'Oullins',
        ]);
        DB::table('city')->insert([
            'id' => 200,
            'city_name' => 'Rillieux-la-Pape',
        ]);
        DB::table('city')->insert([
            'id' => 201,
            'city_name' => 'Menton',
        ]);
        DB::table('city')->insert([
            'id' => 202,
            'city_name' => 'Aix-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 203,
            'city_name' => 'Yerres',
        ]);
        DB::table('city')->insert([
            'id' => 204,
            'city_name' => 'Savigny-le-Temple',
        ]);
        DB::table('city')->insert([
            'id' => 205,
            'city_name' => 'Montfermeil',
        ]);
        DB::table('city')->insert([
            'id' => 206,
            'city_name' => 'Les Pavillons-sous-Bois',
        ]);
        DB::table('city')->insert([
            'id' => 207,
            'city_name' => 'Sannois',
        ]);
        DB::table('city')->insert([
            'id' => 208,
            'city_name' => 'Bourg-la-Reine',
        ]);
        DB::table('city')->insert([
            'id' => 209,
            'city_name' => 'Villiers-le-Bel',
        ]);
        DB::table('city')->insert([
            'id' => 210,
            'city_name' => 'Lambersart',
        ]);
        DB::table('city')->insert([
            'id' => 211,
            'city_name' => 'Limeil-Brévannes',
        ]);
        DB::table('city')->insert([
            'id' => 212,
            'city_name' => 'Guyancourt',
        ]);
        DB::table('city')->insert([
            'id' => 213,
            'city_name' => 'Villeneuve-la-Garenne',
        ]);
        DB::table('city')->insert([
            'id' => 214,
            'city_name' => 'Saint-Laurent-du-Var',
        ]);
        DB::table('city')->insert([
            'id' => 215,
            'city_name' => 'Arcueil',
        ]);
        DB::table('city')->insert([
            'id' => 216,
            'city_name' => 'Lomme',
        ]);
        DB::table('city')->insert([
            'id' => 217,
            'city_name' => 'Dieppe',
        ]);
        DB::table('city')->insert([
            'id' => 218,
            'city_name' => 'Soissons',
        ]);
        DB::table('city')->insert([
            'id' => 219,
            'city_name' => 'Eaubonne',
        ]);
        DB::table('city')->insert([
            'id' => 220,
            'city_name' => 'Cenon',
        ]);
        DB::table('city')->insert([
            'id' => 221,
            'city_name' => 'Saint-Sébastien-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 222,
            'city_name' => 'La Madeleine',
        ]);
        DB::table('city')->insert([
            'id' => 223,
            'city_name' => 'Villeparisis',
        ]);
        DB::table('city')->insert([
            'id' => 224,
            'city_name' => 'Sucy-en-Brie',
        ]);
        DB::table('city')->insert([
            'id' => 225,
            'city_name' => 'Saint-Gratien',
        ]);
        DB::table('city')->insert([
            'id' => 226,
            'city_name' => 'Sèvres',
        ]);
        DB::table('city')->insert([
            'id' => 227,
            'city_name' => 'Brunoy',
        ]);
        DB::table('city')->insert([
            'id' => 228,
            'city_name' => 'Vallauris',
        ]);
        DB::table('city')->insert([
            'id' => 229,
            'city_name' => 'Taverny',
        ]);
        DB::table('city')->insert([
            'id' => 230,
            'city_name' => 'Vichy',
        ]);
        DB::table('city')->insert([
            'id' => 231,
            'city_name' => 'Champs-Sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 232,
            'city_name' => 'Bussy-Saint-Georges',
        ]);
        DB::table('city')->insert([
            'id' => 233,
            'city_name' => 'Armentières',
        ]);
        DB::table('city')->insert([
            'id' => 234,
            'city_name' => 'Élancourt',
        ]);
        DB::table('city')->insert([
            'id' => 235,
            'city_name' => 'Le Bouscat',
        ]);
        DB::table('city')->insert([
            'id' => 236,
            'city_name' => 'Mons-en-Baroeul',
        ]);
        DB::table('city')->insert([
            'id' => 237,
            'city_name' => 'Alençon',
        ]);
        DB::table('city')->insert([
            'id' => 238,
            'city_name' => 'Le Grand-Quevilly',
        ]);
        DB::table('city')->insert([
            'id' => 239,
            'city_name' => 'Deuil-la-Barre',
        ]);
        DB::table('city')->insert([
            'id' => 240,
            'city_name' => 'Joinville-le-Pont',
        ]);
        DB::table('city')->insert([
            'id' => 241,
            'city_name' => 'Béthune',
        ]);
        DB::table('city')->insert([
            'id' => 242,
            'city_name' => 'Biarritz',
        ]);
        DB::table('city')->insert([
            'id' => 243,
            'city_name' => 'Cormeilles-en-Parisis',
        ]);
        DB::table('city')->insert([
            'id' => 244,
            'city_name' => 'Orly',
        ]);
        DB::table('city')->insert([
            'id' => 245,
            'city_name' => 'Le Petit-Quevilly',
        ]);
        DB::table('city')->insert([
            'id' => 246,
            'city_name' => 'Maisons-Laffitte',
        ]);
        DB::table('city')->insert([
            'id' => 247,
            'city_name' => 'Neuilly-Plaisance',
        ]);
        DB::table('city')->insert([
            'id' => 248,
            'city_name' => 'Montigny-lès-Cormeilles',
        ]);
        DB::table('city')->insert([
            'id' => 249,
            'city_name' => 'Chaville',
        ]);
        DB::table('city')->insert([
            'id' => 250,
            'city_name' => 'Rodez',
        ]);
        DB::table('city')->insert([
            'id' => 251,
            'city_name' => 'Fontaine',
        ]);
        DB::table('city')->insert([
            'id' => 252,
            'city_name' => 'Lormont',
        ]);
        DB::table('city')->insert([
            'id' => 253,
            'city_name' => 'Eysines',
        ]);
        DB::table('city')->insert([
            'id' => 254,
            'city_name' => 'Torcy',
        ]);
        DB::table('city')->insert([
            'id' => 255,
            'city_name' => 'Montgeron',
        ]);
        DB::table('city')->insert([
            'id' => 256,
            'city_name' => 'Croix',
        ]);
        DB::table('city')->insert([
            'id' => 257,
            'city_name' => 'Montmorency',
        ]);
        DB::table('city')->insert([
            'id' => 258,
            'city_name' => 'Loos',
        ]);
        DB::table('city')->insert([
            'id' => 259,
            'city_name' => 'Sainte-Foy-lès-Lyon',
        ]);
        DB::table('city')->insert([
            'id' => 260,
            'city_name' => 'Morsang-sur-Orge',
        ]);
        DB::table('city')->insert([
            'id' => 261,
            'city_name' => 'Longjumeau',
        ]);
        DB::table('city')->insert([
            'id' => 262,
            'city_name' => 'Tassin-la-Demi-Lune',
        ]);
        DB::table('city')->insert([
            'id' => 263,
            'city_name' => 'Vélizy-Villacoublay',
        ]);
        DB::table('city')->insert([
            'id' => 264,
            'city_name' => 'Sceaux',
        ]);
        DB::table('city')->insert([
            'id' => 265,
            'city_name' => 'Le Mée-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 266,
            'city_name' => 'Montigny-lès-Metz',
        ]);
        DB::table('city')->insert([
            'id' => 267,
            'city_name' => 'Hérouville-Saint-Clair',
        ]);
        DB::table('city')->insert([
            'id' => 268,
            'city_name' => 'Le Plessis-Trévise',
        ]);
        DB::table('city')->insert([
            'id' => 269,
            'city_name' => 'Juvisy-sur-Orge',
        ]);
        DB::table('city')->insert([
            'id' => 270,
            'city_name' => 'Chevilly-Larue',
        ]);
        DB::table('city')->insert([
            'id' => 271,
            'city_name' => 'Saint-Pol-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 272,
            'city_name' => 'La Celle-Saint-Cloud',
        ]);
        DB::table('city')->insert([
            'id' => 273,
            'city_name' => 'Garches',
        ]);
        DB::table('city')->insert([
            'id' => 274,
            'city_name' => 'Dammarie-lè-Lys',
        ]);
        DB::table('city')->insert([
            'id' => 275,
            'city_name' => 'Hellemmes-Lille',
        ]);
        DB::table('city')->insert([
            'id' => 276,
            'city_name' => 'Le Bourget',
        ]);
        DB::table('city')->insert([
            'id' => 277,
            'city_name' => 'Mantes-la-Ville',
        ]);
        DB::table('city')->insert([
            'id' => 278,
            'city_name' => 'Saint-Maurice',
        ]);
        DB::table('city')->insert([
            'id' => 279,
            'city_name' => 'Villeneuve-le-Roi',
        ]);
        DB::table('city')->insert([
            'id' => 280,
            'city_name' => 'Saint-Michel-sur-Orge',
        ]);
        DB::table('city')->insert([
            'id' => 281,
            'city_name' => 'Wasquehal',
        ]);
        DB::table('city')->insert([
            'id' => 282,
            'city_name' => 'Chilly-Mazarin',
        ]);
        DB::table('city')->insert([
            'id' => 283,
            'city_name' => 'Achères',
        ]);
        DB::table('city')->insert([
            'id' => 284,
            'city_name' => 'Coudekerque-Branche',
        ]);
        DB::table('city')->insert([
            'id' => 285,
            'city_name' => 'Fleury-les-Aubrais',
        ]);
        DB::table('city')->insert([
            'id' => 286,
            'city_name' => 'Ronchin',
        ]);
        DB::table('city')->insert([
            'id' => 287,
            'city_name' => 'Nogent-sur-Oise',
        ]);
        DB::table('city')->insert([
            'id' => 288,
            'city_name' => 'Montereau-faut-Yonne',
        ]);
        DB::table('city')->insert([
            'id' => 289,
            'city_name' => 'Soisy-sous-Montmorency',
        ]);
        DB::table('city')->insert([
            'id' => 290,
            'city_name' => 'Saint-Cyr-l’École',
        ]);
        DB::table('city')->insert([
            'id' => 291,
            'city_name' => 'Saint-Fons',
        ]);
        DB::table('city')->insert([
            'id' => 292,
            'city_name' => 'Lingolsheim',
        ]);
        DB::table('city')->insert([
            'id' => 293,
            'city_name' => 'Cran-Gévrier',
        ]);
        DB::table('city')->insert([
            'id' => 294,
            'city_name' => 'Fâches-Thumesnil',
        ]);
        DB::table('city')->insert([
            'id' => 295,
            'city_name' => 'Éragny',
        ]);
        DB::table('city')->insert([
            'id' => 296,
            'city_name' => 'Bry-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 297,
            'city_name' => 'Moulins',
        ]);
        DB::table('city')->insert([
            'id' => 298,
            'city_name' => 'Chamalières',
        ]);
        DB::table('city')->insert([
            'id' => 299,
            'city_name' => 'Mont-Saint-Aignan',
        ]);
        DB::table('city')->insert([
            'id' => 300,
            'city_name' => 'Chennevières-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 301,
            'city_name' => 'Le Pecq',
        ]);
        DB::table('city')->insert([
            'id' => 302,
            'city_name' => 'Vauréal',
        ]);
        DB::table('city')->insert([
            'id' => 303,
            'city_name' => 'Bonneuil-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 304,
            'city_name' => 'Le Raincy',
        ]);
        DB::table('city')->insert([
            'id' => 305,
            'city_name' => 'Viroflay',
        ]);
        DB::table('city')->insert([
            'id' => 306,
            'city_name' => 'Bischheim',
        ]);
        DB::table('city')->insert([
            'id' => 307,
            'city_name' => 'Écully',
        ]);
        DB::table('city')->insert([
            'id' => 308,
            'city_name' => 'Les Clayes-sous-Bois',
        ]);
        DB::table('city')->insert([
            'id' => 309,
            'city_name' => 'Maurepas',
        ]);
        DB::table('city')->insert([
            'id' => 310,
            'city_name' => 'Floirac',
        ]);
        DB::table('city')->insert([
            'id' => 311,
            'city_name' => 'Lons-le-Saunier',
        ]);
        DB::table('city')->insert([
            'id' => 312,
            'city_name' => 'Arnouville-lès-Gonesse',
        ]);
        DB::table('city')->insert([
            'id' => 313,
            'city_name' => 'Noisiel',
        ]);
        DB::table('city')->insert([
            'id' => 314,
            'city_name' => 'Saint-Jean-de-la-Ruelle',
        ]);
        DB::table('city')->insert([
            'id' => 315,
            'city_name' => 'Le Vésinet',
        ]);
        DB::table('city')->insert([
            'id' => 316,
            'city_name' => 'Montmagny',
        ]);
        DB::table('city')->insert([
            'id' => 317,
            'city_name' => 'Hendaye',
        ]);
        DB::table('city')->insert([
            'id' => 318,
            'city_name' => 'Saint-Leu-la-Forêt',
        ]);
        DB::table('city')->insert([
            'id' => 319,
            'city_name' => 'Marly-le-Roi',
        ]);
        DB::table('city')->insert([
            'id' => 320,
            'city_name' => 'Jouy-le-Moutier',
        ]);
        DB::table('city')->insert([
            'id' => 321,
            'city_name' => 'Carrières-sous-Poissy',
        ]);
        DB::table('city')->insert([
            'id' => 322,
            'city_name' => 'Lognes',
        ]);
        DB::table('city')->insert([
            'id' => 323,
            'city_name' => 'Beausoleil',
        ]);
        DB::table('city')->insert([
            'id' => 324,
            'city_name' => 'Montargis',
        ]);
        DB::table('city')->insert([
            'id' => 325,
            'city_name' => 'Bois-d’Arcy',
        ]);
        DB::table('city')->insert([
            'id' => 326,
            'city_name' => 'Carrières-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 327,
            'city_name' => 'Lucé',
        ]);
        DB::table('city')->insert([
            'id' => 328,
            'city_name' => 'Enghien-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 329,
            'city_name' => 'Valenton',
        ]);
        DB::table('city')->insert([
            'id' => 330,
            'city_name' => 'Lys-lès-Lannoy',
        ]);
        DB::table('city')->insert([
            'id' => 331,
            'city_name' => 'Haubourdin',
        ]);
        DB::table('city')->insert([
            'id' => 332,
            'city_name' => 'Longwy',
        ]);
        DB::table('city')->insert([
            'id' => 333,
            'city_name' => 'Saint-Brice-sous-Forêt',
        ]);
        DB::table('city')->insert([
            'id' => 334,
            'city_name' => 'Avon',
        ]);
        DB::table('city')->insert([
            'id' => 335,
            'city_name' => 'Rive-de-Gier',
        ]);
        DB::table('city')->insert([
            'id' => 336,
            'city_name' => 'Wattignies',
        ]);
        DB::table('city')->insert([
            'id' => 337,
            'city_name' => 'Saint-André',
        ]);
        DB::table('city')->insert([
            'id' => 338,
            'city_name' => 'Montesson',
        ]);
        DB::table('city')->insert([
            'id' => 339,
            'city_name' => 'Anzin',
        ]);
        DB::table('city')->insert([
            'id' => 340,
            'city_name' => 'Ramonville-Saint-Agne',
        ]);
        DB::table('city')->insert([
            'id' => 341,
            'city_name' => 'Courcouronnes',
        ]);
        DB::table('city')->insert([
            'id' => 342,
            'city_name' => 'Mouvaux',
        ]);
        DB::table('city')->insert([
            'id' => 343,
            'city_name' => 'Morangis',
        ]);
        DB::table('city')->insert([
            'id' => 344,
            'city_name' => 'Fleury-Mérogis',
        ]);
        DB::table('city')->insert([
            'id' => 345,
            'city_name' => 'Persan',
        ]);
        DB::table('city')->insert([
            'id' => 346,
            'city_name' => 'Fontenay-le-Fleury',
        ]);
        DB::table('city')->insert([
            'id' => 347,
            'city_name' => 'Auray',
        ]);
        DB::table('city')->insert([
            'id' => 348,
            'city_name' => 'Épinay-sous-Sénart',
        ]);
        DB::table('city')->insert([
            'id' => 349,
            'city_name' => 'Vaires-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 350,
            'city_name' => 'Voisins-le-Bretonneux',
        ]);
        DB::table('city')->insert([
            'id' => 351,
            'city_name' => 'Arpajon',
        ]);
        DB::table('city')->insert([
            'id' => 352,
            'city_name' => 'Billère',
        ]);
        DB::table('city')->insert([
            'id' => 353,
            'city_name' => 'Saint-Max',
        ]);
        DB::table('city')->insert([
            'id' => 354,
            'city_name' => 'Montévrain',
        ]);
        DB::table('city')->insert([
            'id' => 355,
            'city_name' => 'Saint-André-les-Vergers',
        ]);
        DB::table('city')->insert([
            'id' => 356,
            'city_name' => 'Stiring-Wendel',
        ]);
        DB::table('city')->insert([
            'id' => 357,
            'city_name' => 'Hœnheim',
        ]);
        DB::table('city')->insert([
            'id' => 358,
            'city_name' => 'Ville-d’Avray',
        ]);
        DB::table('city')->insert([
            'id' => 359,
            'city_name' => 'Talant',
        ]);
        DB::table('city')->insert([
            'id' => 360,
            'city_name' => 'Déville-lès-Rouen',
        ]);
        DB::table('city')->insert([
            'id' => 361,
            'city_name' => 'Épinay-sur-Orge',
        ]);
        DB::table('city')->insert([
            'id' => 362,
            'city_name' => 'Craponne',
        ]);
        DB::table('city')->insert([
            'id' => 363,
            'city_name' => 'Dugny',
        ]);
        DB::table('city')->insert([
            'id' => 364,
            'city_name' => 'Beaumont',
        ]);
        DB::table('city')->insert([
            'id' => 365,
            'city_name' => 'Ormesson-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 366,
            'city_name' => 'Chanteloup-les-Vignes',
        ]);
        DB::table('city')->insert([
            'id' => 367,
            'city_name' => 'Maromme',
        ]);
        DB::table('city')->insert([
            'id' => 368,
            'city_name' => 'Montigny-en-Gohelle',
        ]);
        DB::table('city')->insert([
            'id' => 369,
            'city_name' => 'Jarville-la-Malgrange',
        ]);
        DB::table('city')->insert([
            'id' => 370,
            'city_name' => 'Crosne',
        ]);
        DB::table('city')->insert([
            'id' => 371,
            'city_name' => 'Gaillard',
        ]);
        DB::table('city')->insert([
            'id' => 372,
            'city_name' => 'Caudebec-lès-Elbeuf',
        ]);
        DB::table('city')->insert([
            'id' => 373,
            'city_name' => 'Pierre-Bénite',
        ]);
        DB::table('city')->insert([
            'id' => 374,
            'city_name' => 'Tinqueux',
        ]);
        DB::table('city')->insert([
            'id' => 375,
            'city_name' => 'L’Île-Saint-Denis',
        ]);
        DB::table('city')->insert([
            'id' => 376,
            'city_name' => 'Avranches',
        ]);
        DB::table('city')->insert([
            'id' => 377,
            'city_name' => 'Marquette-lès-Lille',
        ]);
        DB::table('city')->insert([
            'id' => 378,
            'city_name' => 'Fosses',
        ]);
        DB::table('city')->insert([
            'id' => 379,
            'city_name' => 'Croissy-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 380,
            'city_name' => 'Igny',
        ]);
        DB::table('city')->insert([
            'id' => 381,
            'city_name' => 'Sallaumines',
        ]);
        DB::table('city')->insert([
            'id' => 382,
            'city_name' => 'Eybens',
        ]);
        DB::table('city')->insert([
            'id' => 383,
            'city_name' => 'Neuville-lès-Dieppe',
        ]);
        DB::table('city')->insert([
            'id' => 384,
            'city_name' => 'Bougival',
        ]);
        DB::table('city')->insert([
            'id' => 385,
            'city_name' => 'Ferney-Voltaire',
        ]);
        DB::table('city')->insert([
            'id' => 386,
            'city_name' => 'Bures-sur-Yvette',
        ]);
        DB::table('city')->insert([
            'id' => 387,
            'city_name' => 'Bihorel',
        ]);
        DB::table('city')->insert([
            'id' => 388,
            'city_name' => 'Le Plessis-Bouchard',
        ]);
        DB::table('city')->insert([
            'id' => 389,
            'city_name' => 'Beauchamp',
        ]);
        DB::table('city')->insert([
            'id' => 390,
            'city_name' => 'Le Portel',
        ]);
        DB::table('city')->insert([
            'id' => 391,
            'city_name' => 'Vaucresson',
        ]);
        DB::table('city')->insert([
            'id' => 392,
            'city_name' => 'Groslay',
        ]);
        DB::table('city')->insert([
            'id' => 393,
            'city_name' => 'Ambilly',
        ]);
        DB::table('city')->insert([
            'id' => 394,
            'city_name' => 'Évian-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 395,
            'city_name' => 'Pérenchies',
        ]);
        DB::table('city')->insert([
            'id' => 396,
            'city_name' => 'Billy-Montigny',
        ]);
        DB::table('city')->insert([
            'id' => 397,
            'city_name' => 'Ablon-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 398,
            'city_name' => 'Gournay-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 399,
            'city_name' => 'Meythet',
        ]);
        DB::table('city')->insert([
            'id' => 400,
            'city_name' => 'Aucamville',
        ]);
        DB::table('city')->insert([
            'id' => 401,
            'city_name' => 'Sainte-Adresse',
        ]);
        DB::table('city')->insert([
            'id' => 402,
            'city_name' => 'Boussy-Saint-Antoine',
        ]);
        DB::table('city')->insert([
            'id' => 403,
            'city_name' => 'Terrenoire',
        ]);
        DB::table('city')->insert([
            'id' => 404,
            'city_name' => 'Carbon-Blanc',
        ]);
        DB::table('city')->insert([
            'id' => 405,
            'city_name' => 'La Verrière',
        ]);
        DB::table('city')->insert([
            'id' => 406,
            'city_name' => 'La Ville-du-Bois',
        ]);
        DB::table('city')->insert([
            'id' => 407,
            'city_name' => 'Fontaines-sur-Saône',
        ]);
        DB::table('city')->insert([
            'id' => 408,
            'city_name' => 'Villemoisson-sur-Orge',
        ]);
        DB::table('city')->insert([
            'id' => 409,
            'city_name' => 'La Mulatière',
        ]);
        DB::table('city')->insert([
            'id' => 410,
            'city_name' => 'Montlhéry',
        ]);
        DB::table('city')->insert([
            'id' => 411,
            'city_name' => 'Talange',
        ]);
        DB::table('city')->insert([
            'id' => 412,
            'city_name' => 'Huningue',
        ]);
        DB::table('city')->insert([
            'id' => 413,
            'city_name' => 'Sathonay-Camp',
        ]);
        DB::table('city')->insert([
            'id' => 414,
            'city_name' => 'Le Port-Marly',
        ]);
        DB::table('city')->insert([
            'id' => 415,
            'city_name' => 'Beuvrages',
        ]);
        DB::table('city')->insert([
            'id' => 416,
            'city_name' => 'Guingamp',
        ]);
        DB::table('city')->insert([
            'id' => 417,
            'city_name' => 'Grenay',
        ]);
        DB::table('city')->insert([
            'id' => 418,
            'city_name' => 'Jœuf',
        ]);
        DB::table('city')->insert([
            'id' => 419,
            'city_name' => 'Palavas-les-Flots',
        ]);
        DB::table('city')->insert([
            'id' => 420,
            'city_name' => 'Esbly',
        ]);
        DB::table('city')->insert([
            'id' => 421,
            'city_name' => 'Pont-de-Chéruy',
        ]);
        DB::table('city')->insert([
            'id' => 422,
            'city_name' => 'Champagne-au-Mont-d’Or',
        ]);
        DB::table('city')->insert([
            'id' => 423,
            'city_name' => 'Avignon',
        ]);
        DB::table('city')->insert([
            'id' => 424,
            'city_name' => 'Dunkerque',
        ]);
        DB::table('city')->insert([
            'id' => 425,
            'city_name' => 'Béziers',
        ]);
        DB::table('city')->insert([
            'id' => 426,
            'city_name' => 'Mérignac',
        ]);
        DB::table('city')->insert([
            'id' => 427,
            'city_name' => 'Saint-Nazaire',
        ]);
        DB::table('city')->insert([
            'id' => 428,
            'city_name' => 'Colmar',
        ]);
        DB::table('city')->insert([
            'id' => 429,
            'city_name' => 'Valence',
        ]);
        DB::table('city')->insert([
            'id' => 430,
            'city_name' => 'Pessac',
        ]);
        DB::table('city')->insert([
            'id' => 431,
            'city_name' => 'Bourges',
        ]);
        DB::table('city')->insert([
            'id' => 432,
            'city_name' => 'Quimper',
        ]);
        DB::table('city')->insert([
            'id' => 433,
            'city_name' => 'Montauban',
        ]);
        DB::table('city')->insert([
            'id' => 434,
            'city_name' => 'Niort',
        ]);
        DB::table('city')->insert([
            'id' => 435,
            'city_name' => 'Beauvais',
        ]);
        DB::table('city')->insert([
            'id' => 436,
            'city_name' => 'Narbonne',
        ]);
        DB::table('city')->insert([
            'id' => 437,
            'city_name' => 'Hyères',
        ]);
        DB::table('city')->insert([
            'id' => 438,
            'city_name' => 'La Roche-sur-Yon',
        ]);
        DB::table('city')->insert([
            'id' => 439,
            'city_name' => 'Vannes',
        ]);
        DB::table('city')->insert([
            'id' => 440,
            'city_name' => 'Cholet',
        ]);
        DB::table('city')->insert([
            'id' => 441,
            'city_name' => 'Fréjus',
        ]);
        DB::table('city')->insert([
            'id' => 442,
            'city_name' => 'Arles',
        ]);
        DB::table('city')->insert([
            'id' => 443,
            'city_name' => 'Laval',
        ]);
        DB::table('city')->insert([
            'id' => 444,
            'city_name' => 'Albi',
        ]);
        DB::table('city')->insert([
            'id' => 445,
            'city_name' => 'Grasse',
        ]);
        DB::table('city')->insert([
            'id' => 446,
            'city_name' => 'Martigues',
        ]);
        DB::table('city')->insert([
            'id' => 447,
            'city_name' => 'Évreux',
        ]);
        DB::table('city')->insert([
            'id' => 448,
            'city_name' => 'Saint-Priest',
        ]);
        DB::table('city')->insert([
            'id' => 449,
            'city_name' => 'Aubagne',
        ]);
        DB::table('city')->insert([
            'id' => 450,
            'city_name' => 'Saint-Herblain',
        ]);
        DB::table('city')->insert([
            'id' => 451,
            'city_name' => 'Charleville-Mézières',
        ]);
        DB::table('city')->insert([
            'id' => 452,
            'city_name' => 'Saint-Malo',
        ]);
        DB::table('city')->insert([
            'id' => 453,
            'city_name' => 'Brive-la-Gaillarde',
        ]);
        DB::table('city')->insert([
            'id' => 454,
            'city_name' => 'Carcassonne',
        ]);
        DB::table('city')->insert([
            'id' => 455,
            'city_name' => 'Blois',
        ]);
        DB::table('city')->insert([
            'id' => 456,
            'city_name' => 'Salon-de-Provence',
        ]);
        DB::table('city')->insert([
            'id' => 457,
            'city_name' => 'Châlons-en-Champagne',
        ]);
        DB::table('city')->insert([
            'id' => 458,
            'city_name' => 'Sète',
        ]);
        DB::table('city')->insert([
            'id' => 459,
            'city_name' => 'Châteauroux',
        ]);
        DB::table('city')->insert([
            'id' => 460,
            'city_name' => 'Istres',
        ]);
        DB::table('city')->insert([
            'id' => 461,
            'city_name' => 'Angoulême',
        ]);
        DB::table('city')->insert([
            'id' => 462,
            'city_name' => 'Bourg-en-Bresse',
        ]);
        DB::table('city')->insert([
            'id' => 463,
            'city_name' => 'Alès',
        ]);
        DB::table('city')->insert([
            'id' => 464,
            'city_name' => 'Castres',
        ]);
        DB::table('city')->insert([
            'id' => 465,
            'city_name' => 'Saint-Germain-en-Laye',
        ]);
        DB::table('city')->insert([
            'id' => 466,
            'city_name' => 'Compiègne',
        ]);
        DB::table('city')->insert([
            'id' => 467,
            'city_name' => 'Thionville',
        ]);
        DB::table('city')->insert([
            'id' => 468,
            'city_name' => 'Anglet',
        ]);
        DB::table('city')->insert([
            'id' => 469,
            'city_name' => 'Colomiers',
        ]);
        DB::table('city')->insert([
            'id' => 470,
            'city_name' => 'Gap',
        ]);
        DB::table('city')->insert([
            'id' => 471,
            'city_name' => 'Montélimar',
        ]);
        DB::table('city')->insert([
            'id' => 472,
            'city_name' => 'Draguignan',
        ]);
        DB::table('city')->insert([
            'id' => 473,
            'city_name' => 'Joué-lés-Tours',
        ]);
        DB::table('city')->insert([
            'id' => 474,
            'city_name' => 'Villenave-d’Ornon',
        ]);
        DB::table('city')->insert([
            'id' => 475,
            'city_name' => 'Montluçon',
        ]);
        DB::table('city')->insert([
            'id' => 476,
            'city_name' => 'La Ciotat',
        ]);
        DB::table('city')->insert([
            'id' => 477,
            'city_name' => 'Saint-Raphaël',
        ]);
        DB::table('city')->insert([
            'id' => 478,
            'city_name' => 'Meyzieu',
        ]);
        DB::table('city')->insert([
            'id' => 479,
            'city_name' => 'Saint-Chamond',
        ]);
        DB::table('city')->insert([
            'id' => 480,
            'city_name' => 'Auxerre',
        ]);
        DB::table('city')->insert([
            'id' => 481,
            'city_name' => 'Nevers',
        ]);
        DB::table('city')->insert([
            'id' => 482,
            'city_name' => 'Mâcon',
        ]);
        DB::table('city')->insert([
            'id' => 483,
            'city_name' => 'Haguenau',
        ]);
        DB::table('city')->insert([
            'id' => 484,
            'city_name' => 'Six-Fours-les-Plages',
        ]);
        DB::table('city')->insert([
            'id' => 485,
            'city_name' => 'Cambrai',
        ]);
        DB::table('city')->insert([
            'id' => 486,
            'city_name' => 'Marignane',
        ]);
        DB::table('city')->insert([
            'id' => 487,
            'city_name' => 'Romans-sur-Isère',
        ]);
        DB::table('city')->insert([
            'id' => 488,
            'city_name' => 'Vitrolles',
        ]);
        DB::table('city')->insert([
            'id' => 489,
            'city_name' => 'Épinal',
        ]);
        DB::table('city')->insert([
            'id' => 490,
            'city_name' => 'Plaisir',
        ]);
        DB::table('city')->insert([
            'id' => 491,
            'city_name' => 'Châtellerault',
        ]);
        DB::table('city')->insert([
            'id' => 492,
            'city_name' => 'Dreux',
        ]);
        DB::table('city')->insert([
            'id' => 493,
            'city_name' => 'Saint-Médard-en-Jalles',
        ]);
        DB::table('city')->insert([
            'id' => 494,
            'city_name' => 'Maubeuge',
        ]);
        DB::table('city')->insert([
            'id' => 495,
            'city_name' => 'Vienne',
        ]);
        DB::table('city')->insert([
            'id' => 496,
            'city_name' => 'Draveil',
        ]);
        DB::table('city')->insert([
            'id' => 497,
            'city_name' => 'Mont-de-Marsan',
        ]);
        DB::table('city')->insert([
            'id' => 498,
            'city_name' => 'Décines-Charpieu',
        ]);
        DB::table('city')->insert([
            'id' => 499,
            'city_name' => 'Saint-Étienne-du-Rouvray',
        ]);
        DB::table('city')->insert([
            'id' => 500,
            'city_name' => 'Bourgoin-Jallieu',
        ]);
        DB::table('city')->insert([
            'id' => 501,
            'city_name' => 'Agde',
        ]);
        DB::table('city')->insert([
            'id' => 502,
            'city_name' => 'Carpentras',
        ]);
        DB::table('city')->insert([
            'id' => 503,
            'city_name' => 'Orange',
        ]);
        DB::table('city')->insert([
            'id' => 504,
            'city_name' => 'Tournefeuille',
        ]);
        DB::table('city')->insert([
            'id' => 505,
            'city_name' => 'Brétigny-sur-Orge',
        ]);
        DB::table('city')->insert([
            'id' => 506,
            'city_name' => 'Illkirch-Graffenstaden',
        ]);
        DB::table('city')->insert([
            'id' => 507,
            'city_name' => 'Orvault',
        ]);
        DB::table('city')->insert([
            'id' => 508,
            'city_name' => 'Sens',
        ]);
        DB::table('city')->insert([
            'id' => 509,
            'city_name' => 'Miramas',
        ]);
        DB::table('city')->insert([
            'id' => 510,
            'city_name' => 'Rambouillet',
        ]);
        DB::table('city')->insert([
            'id' => 511,
            'city_name' => 'Montbéliard',
        ]);
        DB::table('city')->insert([
            'id' => 512,
            'city_name' => 'Lunel',
        ]);
        DB::table('city')->insert([
            'id' => 513,
            'city_name' => 'Gonesse',
        ]);
        DB::table('city')->insert([
            'id' => 514,
            'city_name' => 'Bergerac',
        ]);
        DB::table('city')->insert([
            'id' => 515,
            'city_name' => 'Hénin-Beaumont',
        ]);
        DB::table('city')->insert([
            'id' => 516,
            'city_name' => 'Gradignan',
        ]);
        DB::table('city')->insert([
            'id' => 517,
            'city_name' => 'La Garde',
        ]);
        DB::table('city')->insert([
            'id' => 518,
            'city_name' => 'Saumur',
        ]);
        DB::table('city')->insert([
            'id' => 519,
            'city_name' => 'Cavaillon',
        ]);
        DB::table('city')->insert([
            'id' => 520,
            'city_name' => 'Blagnac',
        ]);
        DB::table('city')->insert([
            'id' => 521,
            'city_name' => 'Aurillac',
        ]);
        DB::table('city')->insert([
            'id' => 522,
            'city_name' => 'La Teste-de-Buch',
        ]);
        DB::table('city')->insert([
            'id' => 523,
            'city_name' => 'Saint-Ouen-l’Aumône',
        ]);
        DB::table('city')->insert([
            'id' => 524,
            'city_name' => 'Vierzon',
        ]);
        DB::table('city')->insert([
            'id' => 525,
            'city_name' => 'Étampes',
        ]);
        DB::table('city')->insert([
            'id' => 526,
            'city_name' => 'Vertou',
        ]);
        DB::table('city')->insert([
            'id' => 527,
            'city_name' => 'Saintes',
        ]);
        DB::table('city')->insert([
            'id' => 528,
            'city_name' => 'Libourne',
        ]);
        DB::table('city')->insert([
            'id' => 529,
            'city_name' => 'La Valette-du-Var',
        ]);
        DB::table('city')->insert([
            'id' => 530,
            'city_name' => 'Laon',
        ]);
        DB::table('city')->insert([
            'id' => 531,
            'city_name' => 'Muret',
        ]);
        DB::table('city')->insert([
            'id' => 532,
            'city_name' => 'Rochefort',
        ]);
        DB::table('city')->insert([
            'id' => 533,
            'city_name' => 'Roissy-en-Brie',
        ]);
        DB::table('city')->insert([
            'id' => 534,
            'city_name' => 'Vernon',
        ]);
        DB::table('city')->insert([
            'id' => 535,
            'city_name' => 'Dole',
        ]);
        DB::table('city')->insert([
            'id' => 536,
            'city_name' => 'Lanester',
        ]);
        DB::table('city')->insert([
            'id' => 537,
            'city_name' => 'Saint-Dizier',
        ]);
        DB::table('city')->insert([
            'id' => 538,
            'city_name' => 'Grande-Synthe',
        ]);
        DB::table('city')->insert([
            'id' => 539,
            'city_name' => 'Castelnau-le-Lez',
        ]);
        DB::table('city')->insert([
            'id' => 540,
            'city_name' => 'Abbeville',
        ]);
        DB::table('city')->insert([
            'id' => 541,
            'city_name' => 'Frontignan',
        ]);
        DB::table('city')->insert([
            'id' => 542,
            'city_name' => 'Combs-la-Ville',
        ]);
        DB::table('city')->insert([
            'id' => 543,
            'city_name' => 'Épernay',
        ]);
        DB::table('city')->insert([
            'id' => 544,
            'city_name' => 'Gif-sur-Yvette',
        ]);
        DB::table('city')->insert([
            'id' => 545,
            'city_name' => 'Olivet',
        ]);
        DB::table('city')->insert([
            'id' => 546,
            'city_name' => 'Forbach',
        ]);
        DB::table('city')->insert([
            'id' => 547,
            'city_name' => 'Oyonnax',
        ]);
        DB::table('city')->insert([
            'id' => 548,
            'city_name' => 'Saint-Louis',
        ]);
        DB::table('city')->insert([
            'id' => 549,
            'city_name' => 'Manosque',
        ]);
        DB::table('city')->insert([
            'id' => 550,
            'city_name' => 'Seynod',
        ]);
        DB::table('city')->insert([
            'id' => 551,
            'city_name' => 'Le Creusot',
        ]);
        DB::table('city')->insert([
            'id' => 552,
            'city_name' => 'Annecy-le-Vieux',
        ]);
        DB::table('city')->insert([
            'id' => 553,
            'city_name' => 'Saint-Genis-Laval',
        ]);
        DB::table('city')->insert([
            'id' => 554,
            'city_name' => 'Saint-Jean-de-Braye',
        ]);
        DB::table('city')->insert([
            'id' => 555,
            'city_name' => 'Mandelieu-la-Napoule',
        ]);
        DB::table('city')->insert([
            'id' => 556,
            'city_name' => 'Auch',
        ]);
        DB::table('city')->insert([
            'id' => 557,
            'city_name' => 'Fougères',
        ]);
        DB::table('city')->insert([
            'id' => 558,
            'city_name' => 'Halluin',
        ]);
        DB::table('city')->insert([
            'id' => 559,
            'city_name' => 'Chaumont',
        ]);
        DB::table('city')->insert([
            'id' => 560,
            'city_name' => 'Couëron',
        ]);
        DB::table('city')->insert([
            'id' => 561,
            'city_name' => 'Villeneuve-sur-Lot',
        ]);
        DB::table('city')->insert([
            'id' => 562,
            'city_name' => 'Hazebrouck',
        ]);
        DB::table('city')->insert([
            'id' => 563,
            'city_name' => 'Gardanne',
        ]);
        DB::table('city')->insert([
            'id' => 564,
            'city_name' => 'Millau',
        ]);
        DB::table('city')->insert([
            'id' => 565,
            'city_name' => 'Les Pennes-Mirabeau',
        ]);
        DB::table('city')->insert([
            'id' => 566,
            'city_name' => 'Gujan-Mestras',
        ]);
        DB::table('city')->insert([
            'id' => 567,
            'city_name' => 'Dax',
        ]);
        DB::table('city')->insert([
            'id' => 568,
            'city_name' => 'Lisieux',
        ]);
        DB::table('city')->insert([
            'id' => 569,
            'city_name' => 'Denain',
        ]);
        DB::table('city')->insert([
            'id' => 570,
            'city_name' => 'Sarreguemines',
        ]);
        DB::table('city')->insert([
            'id' => 571,
            'city_name' => 'Ozoir-la-Ferrière',
        ]);
        DB::table('city')->insert([
            'id' => 572,
            'city_name' => 'Beaune',
        ]);
        DB::table('city')->insert([
            'id' => 573,
            'city_name' => 'Givors',
        ]);
        DB::table('city')->insert([
            'id' => 574,
            'city_name' => 'Allauch',
        ]);
        DB::table('city')->insert([
            'id' => 575,
            'city_name' => 'Cournon-d’Auvergne',
        ]);
        DB::table('city')->insert([
            'id' => 576,
            'city_name' => 'Challans',
        ]);
        DB::table('city')->insert([
            'id' => 577,
            'city_name' => 'Voiron',
        ]);
        DB::table('city')->insert([
            'id' => 578,
            'city_name' => 'Mitry-Mory',
        ]);
        DB::table('city')->insert([
            'id' => 579,
            'city_name' => 'Bourg-lès-Valence',
        ]);
        DB::table('city')->insert([
            'id' => 580,
            'city_name' => 'Pertuis',
        ]);
        DB::table('city')->insert([
            'id' => 581,
            'city_name' => 'Hem',
        ]);
        DB::table('city')->insert([
            'id' => 582,
            'city_name' => 'Lannion',
        ]);
        DB::table('city')->insert([
            'id' => 583,
            'city_name' => 'Carquefou',
        ]);
        DB::table('city')->insert([
            'id' => 584,
            'city_name' => 'Villefontaine',
        ]);
        DB::table('city')->insert([
            'id' => 585,
            'city_name' => 'Albertville',
        ]);
        DB::table('city')->insert([
            'id' => 586,
            'city_name' => 'Bouguenais',
        ]);
        DB::table('city')->insert([
            'id' => 587,
            'city_name' => 'Mougins',
        ]);
        DB::table('city')->insert([
            'id' => 588,
            'city_name' => 'Cahors',
        ]);
        DB::table('city')->insert([
            'id' => 589,
            'city_name' => 'Le Puy-en-Velay',
        ]);
        DB::table('city')->insert([
            'id' => 590,
            'city_name' => 'Saint-Dié-des-Vosges',
        ]);
        DB::table('city')->insert([
            'id' => 591,
            'city_name' => 'L’Isle-sur-la-Sorgue',
        ]);
        DB::table('city')->insert([
            'id' => 592,
            'city_name' => 'La Chapelle-sur-Erdre',
        ]);
        DB::table('city')->insert([
            'id' => 593,
            'city_name' => 'Concarneau',
        ]);
        DB::table('city')->insert([
            'id' => 594,
            'city_name' => 'Saint-Lô',
        ]);
        DB::table('city')->insert([
            'id' => 595,
            'city_name' => 'Bressuire',
        ]);
        DB::table('city')->insert([
            'id' => 596,
            'city_name' => 'Cognac',
        ]);
        DB::table('city')->insert([
            'id' => 597,
            'city_name' => 'Sélestat',
        ]);
        DB::table('city')->insert([
            'id' => 598,
            'city_name' => 'Cugnaux',
        ]);
        DB::table('city')->insert([
            'id' => 599,
            'city_name' => 'Riom',
        ]);
        DB::table('city')->insert([
            'id' => 600,
            'city_name' => 'Bruges',
        ]);
        DB::table('city')->insert([
            'id' => 601,
            'city_name' => 'Plaisance-du-Touch',
        ]);
        DB::table('city')->insert([
            'id' => 602,
            'city_name' => 'Fécamp',
        ]);
        DB::table('city')->insert([
            'id' => 603,
            'city_name' => 'Royan',
        ]);
        DB::table('city')->insert([
            'id' => 604,
            'city_name' => 'Sorgues',
        ]);
        DB::table('city')->insert([
            'id' => 605,
            'city_name' => 'Brie-Comte-Robert',
        ]);
        DB::table('city')->insert([
            'id' => 606,
            'city_name' => 'Vence',
        ]);
        DB::table('city')->insert([
            'id' => 607,
            'city_name' => 'Bruz',
        ]);
        DB::table('city')->insert([
            'id' => 608,
            'city_name' => 'Moissy-Cramayel',
        ]);
        DB::table('city')->insert([
            'id' => 609,
            'city_name' => 'Lunéville',
        ]);
        DB::table('city')->insert([
            'id' => 610,
            'city_name' => 'Louviers',
        ]);
        DB::table('city')->insert([
            'id' => 611,
            'city_name' => 'La Crau',
        ]);
        DB::table('city')->insert([
            'id' => 612,
            'city_name' => 'Montceau-les-Mines',
        ]);
        DB::table('city')->insert([
            'id' => 613,
            'city_name' => 'Avion',
        ]);
        DB::table('city')->insert([
            'id' => 614,
            'city_name' => 'Le Pontet',
        ]);
        DB::table('city')->insert([
            'id' => 615,
            'city_name' => 'Meylan',
        ]);
        DB::table('city')->insert([
            'id' => 616,
            'city_name' => 'Osny',
        ]);
        DB::table('city')->insert([
            'id' => 617,
            'city_name' => 'Vitré',
        ]);
        DB::table('city')->insert([
            'id' => 618,
            'city_name' => 'Bagnols-sur-Cèze',
        ]);
        DB::table('city')->insert([
            'id' => 619,
            'city_name' => 'Limay',
        ]);
        DB::table('city')->insert([
            'id' => 620,
            'city_name' => 'Cluses',
        ]);
        DB::table('city')->insert([
            'id' => 621,
            'city_name' => 'Firminy',
        ]);
        DB::table('city')->insert([
            'id' => 622,
            'city_name' => 'Boissy-Saint-Léger',
        ]);
        DB::table('city')->insert([
            'id' => 623,
            'city_name' => 'Ploemeur',
        ]);
        DB::table('city')->insert([
            'id' => 624,
            'city_name' => 'Carvin',
        ]);
        DB::table('city')->insert([
            'id' => 625,
            'city_name' => 'Port-de-Bouc',
        ]);
        DB::table('city')->insert([
            'id' => 626,
            'city_name' => 'Châteauneuf-les-Martigues',
        ]);
        DB::table('city')->insert([
            'id' => 627,
            'city_name' => 'L’Isle-d’Abeau',
        ]);
        DB::table('city')->insert([
            'id' => 628,
            'city_name' => 'Marmande',
        ]);
        DB::table('city')->insert([
            'id' => 629,
            'city_name' => 'Cesson-Sévigné',
        ]);
        DB::table('city')->insert([
            'id' => 630,
            'city_name' => 'Orsay',
        ]);
        DB::table('city')->insert([
            'id' => 631,
            'city_name' => 'Yutz',
        ]);
        DB::table('city')->insert([
            'id' => 632,
            'city_name' => 'Pontarlier',
        ]);
        DB::table('city')->insert([
            'id' => 633,
            'city_name' => 'Verdun',
        ]);
        DB::table('city')->insert([
            'id' => 634,
            'city_name' => 'Verneuil-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 635,
            'city_name' => 'Brignoles',
        ]);
        DB::table('city')->insert([
            'id' => 636,
            'city_name' => 'Sanary-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 637,
            'city_name' => 'Balma',
        ]);
        DB::table('city')->insert([
            'id' => 638,
            'city_name' => 'Lattes',
        ]);
        DB::table('city')->insert([
            'id' => 639,
            'city_name' => 'Domont',
        ]);
        DB::table('city')->insert([
            'id' => 640,
            'city_name' => 'Saint-Égrève',
        ]);
        DB::table('city')->insert([
            'id' => 641,
            'city_name' => 'Ambarès-et-Lagrave',
        ]);
        DB::table('city')->insert([
            'id' => 642,
            'city_name' => 'Elbeuf',
        ]);
        DB::table('city')->insert([
            'id' => 643,
            'city_name' => 'Hayange',
        ]);
        DB::table('city')->insert([
            'id' => 644,
            'city_name' => 'Sedan',
        ]);
        DB::table('city')->insert([
            'id' => 645,
            'city_name' => 'Saran',
        ]);
        DB::table('city')->insert([
            'id' => 646,
            'city_name' => 'Saint-Cyr-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 647,
            'city_name' => 'Saint-Pierre-des-Corps',
        ]);
        DB::table('city')->insert([
            'id' => 648,
            'city_name' => 'Landerneau',
        ]);
        DB::table('city')->insert([
            'id' => 649,
            'city_name' => 'Cestas',
        ]);
        DB::table('city')->insert([
            'id' => 650,
            'city_name' => 'Mauguio',
        ]);
        DB::table('city')->insert([
            'id' => 651,
            'city_name' => 'Annonay',
        ]);
        DB::table('city')->insert([
            'id' => 652,
            'city_name' => 'Saint-Julien-en-Genevois',
        ]);
        DB::table('city')->insert([
            'id' => 653,
            'city_name' => 'Tourlaville',
        ]);
        DB::table('city')->insert([
            'id' => 654,
            'city_name' => 'Sin-le-Noble',
        ]);
        DB::table('city')->insert([
            'id' => 655,
            'city_name' => 'Escoublac',
        ]);
        DB::table('city')->insert([
            'id' => 656,
            'city_name' => 'Saint-Maximin-la-Sainte-Baume',
        ]);
        DB::table('city')->insert([
            'id' => 657,
            'city_name' => 'Vendôme',
        ]);
        DB::table('city')->insert([
            'id' => 658,
            'city_name' => 'Sallanches',
        ]);
        DB::table('city')->insert([
            'id' => 659,
            'city_name' => 'Hennebont',
        ]);
        DB::table('city')->insert([
            'id' => 660,
            'city_name' => 'Illzach',
        ]);
        DB::table('city')->insert([
            'id' => 661,
            'city_name' => 'Vesoul',
        ]);
        DB::table('city')->insert([
            'id' => 662,
            'city_name' => 'Montbrison',
        ]);
        DB::table('city')->insert([
            'id' => 663,
            'city_name' => 'Villeneuve-Loubet',
        ]);
        DB::table('city')->insert([
            'id' => 664,
            'city_name' => 'Sainte-Luce-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 665,
            'city_name' => 'Saint-Amand-les-Eaux',
        ]);
        DB::table('city')->insert([
            'id' => 666,
            'city_name' => 'Digne-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 667,
            'city_name' => 'Châteaurenard',
        ]);
        DB::table('city')->insert([
            'id' => 668,
            'city_name' => 'Verrières-le-Buisson',
        ]);
        DB::table('city')->insert([
            'id' => 669,
            'city_name' => 'Francheville',
        ]);
        DB::table('city')->insert([
            'id' => 670,
            'city_name' => 'Montivilliers',
        ]);
        DB::table('city')->insert([
            'id' => 671,
            'city_name' => 'Les Herbiers',
        ]);
        DB::table('city')->insert([
            'id' => 672,
            'city_name' => 'Guérande',
        ]);
        DB::table('city')->insert([
            'id' => 673,
            'city_name' => 'Rumilly',
        ]);
        DB::table('city')->insert([
            'id' => 674,
            'city_name' => 'Château-Thierry',
        ]);
        DB::table('city')->insert([
            'id' => 675,
            'city_name' => 'Les Sables-d’Olonne',
        ]);
        DB::table('city')->insert([
            'id' => 676,
            'city_name' => 'Chenôve',
        ]);
        DB::table('city')->insert([
            'id' => 677,
            'city_name' => 'Coulommiers',
        ]);
        DB::table('city')->insert([
            'id' => 678,
            'city_name' => 'Saint-Avertin',
        ]);
        DB::table('city')->insert([
            'id' => 679,
            'city_name' => 'Villers-lès-Nancy',
        ]);
        DB::table('city')->insert([
            'id' => 680,
            'city_name' => 'Mennecy',
        ]);
        DB::table('city')->insert([
            'id' => 681,
            'city_name' => 'Issoire',
        ]);
        DB::table('city')->insert([
            'id' => 682,
            'city_name' => 'Toul',
        ]);
        DB::table('city')->insert([
            'id' => 683,
            'city_name' => 'Blanquefort',
        ]);
        DB::table('city')->insert([
            'id' => 684,
            'city_name' => 'Trélazé',
        ]);
        DB::table('city')->insert([
            'id' => 685,
            'city_name' => 'Pamiers',
        ]);
        DB::table('city')->insert([
            'id' => 686,
            'city_name' => 'Bois-Guillaume',
        ]);
        DB::table('city')->insert([
            'id' => 687,
            'city_name' => 'Dinan',
        ]);
        DB::table('city')->insert([
            'id' => 688,
            'city_name' => 'Beaucaire',
        ]);
        DB::table('city')->insert([
            'id' => 689,
            'city_name' => 'Saint-Avold',
        ]);
        DB::table('city')->insert([
            'id' => 690,
            'city_name' => 'Hautmont',
        ]);
        DB::table('city')->insert([
            'id' => 691,
            'city_name' => 'Fos-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 692,
            'city_name' => 'Pornic',
        ]);
        DB::table('city')->insert([
            'id' => 693,
            'city_name' => 'Crépy-en-Valois',
        ]);
        DB::table('city')->insert([
            'id' => 694,
            'city_name' => 'Gaillac',
        ]);
        DB::table('city')->insert([
            'id' => 695,
            'city_name' => 'Saint-Omer',
        ]);
        DB::table('city')->insert([
            'id' => 696,
            'city_name' => 'Caudry',
        ]);
        DB::table('city')->insert([
            'id' => 697,
            'city_name' => 'Senlis',
        ]);
        DB::table('city')->insert([
            'id' => 698,
            'city_name' => 'Fontainebleau',
        ]);
        DB::table('city')->insert([
            'id' => 699,
            'city_name' => 'Castanet-Tolosan',
        ]);
        DB::table('city')->insert([
            'id' => 700,
            'city_name' => 'Outreau',
        ]);
        DB::table('city')->insert([
            'id' => 701,
            'city_name' => 'Pontivy',
        ]);
        DB::table('city')->insert([
            'id' => 702,
            'city_name' => 'Flers',
        ]);
        DB::table('city')->insert([
            'id' => 703,
            'city_name' => 'Bouc-Bel-Air',
        ]);
        DB::table('city')->insert([
            'id' => 704,
            'city_name' => 'Saint-Rambert',
        ]);
        DB::table('city')->insert([
            'id' => 705,
            'city_name' => 'Tarascon',
        ]);
        DB::table('city')->insert([
            'id' => 706,
            'city_name' => 'Olonne-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 707,
            'city_name' => 'Fameck',
        ]);
        DB::table('city')->insert([
            'id' => 708,
            'city_name' => 'Bailleul',
        ]);
        DB::table('city')->insert([
            'id' => 709,
            'city_name' => 'Bar-le-Duc',
        ]);
        DB::table('city')->insert([
            'id' => 710,
            'city_name' => 'Morlaix',
        ]);
        DB::table('city')->insert([
            'id' => 711,
            'city_name' => 'Tulle',
        ]);
        DB::table('city')->insert([
            'id' => 712,
            'city_name' => 'Wittenheim',
        ]);
        DB::table('city')->insert([
            'id' => 713,
            'city_name' => 'Kingersheim',
        ]);
        DB::table('city')->insert([
            'id' => 714,
            'city_name' => 'Méru',
        ]);
        DB::table('city')->insert([
            'id' => 715,
            'city_name' => 'Laxou',
        ]);
        DB::table('city')->insert([
            'id' => 716,
            'city_name' => 'Guipavas',
        ]);
        DB::table('city')->insert([
            'id' => 717,
            'city_name' => 'La Flèche',
        ]);
        DB::table('city')->insert([
            'id' => 718,
            'city_name' => 'Pont-à-Mousson',
        ]);
        DB::table('city')->insert([
            'id' => 719,
            'city_name' => 'Thouars',
        ]);
        DB::table('city')->insert([
            'id' => 720,
            'city_name' => 'Canteleu',
        ]);
        DB::table('city')->insert([
            'id' => 721,
            'city_name' => 'Andrésy',
        ]);
        DB::table('city')->insert([
            'id' => 722,
            'city_name' => 'Saint-Fargeau',
        ]);
        DB::table('city')->insert([
            'id' => 723,
            'city_name' => 'Woippy',
        ]);
        DB::table('city')->insert([
            'id' => 724,
            'city_name' => 'Avrillé',
        ]);
        DB::table('city')->insert([
            'id' => 725,
            'city_name' => 'Saint-Jean-de-Luz',
        ]);
        DB::table('city')->insert([
            'id' => 726,
            'city_name' => 'Lons',
        ]);
        DB::table('city')->insert([
            'id' => 727,
            'city_name' => 'Romilly-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 728,
            'city_name' => 'Château-d’Olonne',
        ]);
        DB::table('city')->insert([
            'id' => 729,
            'city_name' => 'Audincourt',
        ]);
        DB::table('city')->insert([
            'id' => 730,
            'city_name' => 'Bayeux',
        ]);
        DB::table('city')->insert([
            'id' => 731,
            'city_name' => 'Saint-Brevin-les-Pins',
        ]);
        DB::table('city')->insert([
            'id' => 732,
            'city_name' => 'Mions',
        ]);
        DB::table('city')->insert([
            'id' => 733,
            'city_name' => 'Rixheim',
        ]);
        DB::table('city')->insert([
            'id' => 734,
            'city_name' => 'Ambérieu-en-Bugey',
        ]);
        DB::table('city')->insert([
            'id' => 735,
            'city_name' => 'Roquebrune-sur-Argens',
        ]);
        DB::table('city')->insert([
            'id' => 736,
            'city_name' => 'Montataire',
        ]);
        DB::table('city')->insert([
            'id' => 737,
            'city_name' => 'Berck-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 738,
            'city_name' => 'Saint-Jacques-de-la-Lande',
        ]);
        DB::table('city')->insert([
            'id' => 739,
            'city_name' => 'Plérin',
        ]);
        DB::table('city')->insert([
            'id' => 740,
            'city_name' => 'Roncq',
        ]);
        DB::table('city')->insert([
            'id' => 741,
            'city_name' => 'Saint-Genis-Pouilly',
        ]);
        DB::table('city')->insert([
            'id' => 742,
            'city_name' => 'Douarnenez',
        ]);
        DB::table('city')->insert([
            'id' => 743,
            'city_name' => 'Lieusaint',
        ]);
        DB::table('city')->insert([
            'id' => 744,
            'city_name' => 'Argentan',
        ]);
        DB::table('city')->insert([
            'id' => 745,
            'city_name' => 'Riedisheim',
        ]);
        DB::table('city')->insert([
            'id' => 746,
            'city_name' => 'Ollioules',
        ]);
        DB::table('city')->insert([
            'id' => 747,
            'city_name' => 'Sainte-Maxime',
        ]);
        DB::table('city')->insert([
            'id' => 748,
            'city_name' => 'Ostwald',
        ]);
        DB::table('city')->insert([
            'id' => 749,
            'city_name' => 'Tergnier',
        ]);
        DB::table('city')->insert([
            'id' => 750,
            'city_name' => 'Castelsarrasin',
        ]);
        DB::table('city')->insert([
            'id' => 751,
            'city_name' => 'Biscarrosse',
        ]);
        DB::table('city')->insert([
            'id' => 752,
            'city_name' => 'Noyon',
        ]);
        DB::table('city')->insert([
            'id' => 753,
            'city_name' => 'Valbonne',
        ]);
        DB::table('city')->insert([
            'id' => 754,
            'city_name' => 'Gien',
        ]);
        DB::table('city')->insert([
            'id' => 755,
            'city_name' => 'Saint-Gilles',
        ]);
        DB::table('city')->insert([
            'id' => 756,
            'city_name' => 'Granville',
        ]);
        DB::table('city')->insert([
            'id' => 757,
            'city_name' => 'Berre-l’Étang',
        ]);
        DB::table('city')->insert([
            'id' => 758,
            'city_name' => 'Châlette-sur-Loing',
        ]);
        DB::table('city')->insert([
            'id' => 759,
            'city_name' => 'Bollène',
        ]);
        DB::table('city')->insert([
            'id' => 760,
            'city_name' => 'Pierrelatte',
        ]);
        DB::table('city')->insert([
            'id' => 761,
            'city_name' => 'Bully-les-Mines',
        ]);
        DB::table('city')->insert([
            'id' => 762,
            'city_name' => 'Fontenay-le-Comte',
        ]);
        DB::table('city')->insert([
            'id' => 763,
            'city_name' => 'Saint-Paul-lès-Dax',
        ]);
        DB::table('city')->insert([
            'id' => 764,
            'city_name' => 'Saint-Martin-de-Crau',
        ]);
        DB::table('city')->insert([
            'id' => 765,
            'city_name' => 'Plougastel-Daoulas',
        ]);
        DB::table('city')->insert([
            'id' => 766,
            'city_name' => 'Marly',
        ]);
        DB::table('city')->insert([
            'id' => 767,
            'city_name' => 'Genas',
        ]);
        DB::table('city')->insert([
            'id' => 768,
            'city_name' => 'Lourdes',
        ]);
        DB::table('city')->insert([
            'id' => 769,
            'city_name' => 'Vitry-le-François',
        ]);
        DB::table('city')->insert([
            'id' => 770,
            'city_name' => 'Creutzwald',
        ]);
        DB::table('city')->insert([
            'id' => 771,
            'city_name' => 'Vernouillet',
        ]);
        DB::table('city')->insert([
            'id' => 772,
            'city_name' => 'Châteaudun',
        ]);
        DB::table('city')->insert([
            'id' => 773,
            'city_name' => 'Mayenne',
        ]);
        DB::table('city')->insert([
            'id' => 774,
            'city_name' => 'Gex',
        ]);
        DB::table('city')->insert([
            'id' => 775,
            'city_name' => 'Saint-Orens-de-Gameville',
        ]);
        DB::table('city')->insert([
            'id' => 776,
            'city_name' => 'Harnes',
        ]);
        DB::table('city')->insert([
            'id' => 777,
            'city_name' => 'Les Ponts-de-Cé',
        ]);
        DB::table('city')->insert([
            'id' => 778,
            'city_name' => 'Pont-Sainte-Maxence',
        ]);
        DB::table('city')->insert([
            'id' => 779,
            'city_name' => 'Le Relecq-Kerhuon',
        ]);
        DB::table('city')->insert([
            'id' => 780,
            'city_name' => 'Amilly',
        ]);
        DB::table('city')->insert([
            'id' => 781,
            'city_name' => 'Nemours',
        ]);
        DB::table('city')->insert([
            'id' => 782,
            'city_name' => 'Guéret',
        ]);
        DB::table('city')->insert([
            'id' => 783,
            'city_name' => 'Autun',
        ]);
        DB::table('city')->insert([
            'id' => 784,
            'city_name' => 'Plouzané',
        ]);
        DB::table('city')->insert([
            'id' => 785,
            'city_name' => 'Moissac',
        ]);
        DB::table('city')->insert([
            'id' => 786,
            'city_name' => 'Bischwiller',
        ]);
        DB::table('city')->insert([
            'id' => 787,
            'city_name' => 'Aubergenville',
        ]);
        DB::table('city')->insert([
            'id' => 788,
            'city_name' => 'Carros',
        ]);
        DB::table('city')->insert([
            'id' => 789,
            'city_name' => 'Comines',
        ]);
        DB::table('city')->insert([
            'id' => 790,
            'city_name' => 'La Queue-en-Brie',
        ]);
        DB::table('city')->insert([
            'id' => 791,
            'city_name' => 'Monteux',
        ]);
        DB::table('city')->insert([
            'id' => 792,
            'city_name' => 'Somain',
        ]);
        DB::table('city')->insert([
            'id' => 793,
            'city_name' => 'Yzeure',
        ]);
        DB::table('city')->insert([
            'id' => 794,
            'city_name' => 'Yvetot',
        ]);
        DB::table('city')->insert([
            'id' => 795,
            'city_name' => 'Barentin',
        ]);
        DB::table('city')->insert([
            'id' => 796,
            'city_name' => 'L’Union',
        ]);
        DB::table('city')->insert([
            'id' => 797,
            'city_name' => 'Noeux-les-Mines',
        ]);
        DB::table('city')->insert([
            'id' => 798,
            'city_name' => 'Seclin',
        ]);
        DB::table('city')->insert([
            'id' => 799,
            'city_name' => 'Aubenas',
        ]);
        DB::table('city')->insert([
            'id' => 800,
            'city_name' => 'Villecresnes',
        ]);
        DB::table('city')->insert([
            'id' => 801,
            'city_name' => 'Arcachon',
        ]);
        DB::table('city')->insert([
            'id' => 802,
            'city_name' => 'Sarrebourg',
        ]);
        DB::table('city')->insert([
            'id' => 803,
            'city_name' => 'Cusset',
        ]);
        DB::table('city')->insert([
            'id' => 804,
            'city_name' => 'Claye-Souilly',
        ]);
        DB::table('city')->insert([
            'id' => 805,
            'city_name' => 'Auriol',
        ]);
        DB::table('city')->insert([
            'id' => 806,
            'city_name' => 'La Chapelle-Saint-Luc',
        ]);
        DB::table('city')->insert([
            'id' => 807,
            'city_name' => 'Bonneville',
        ]);
        DB::table('city')->insert([
            'id' => 808,
            'city_name' => 'Graulhet',
        ]);
        DB::table('city')->insert([
            'id' => 809,
            'city_name' => 'Amboise',
        ]);
        DB::table('city')->insert([
            'id' => 810,
            'city_name' => 'Bruay-sur-l’Escaut',
        ]);
        DB::table('city')->insert([
            'id' => 811,
            'city_name' => 'Tarnos',
        ]);
        DB::table('city')->insert([
            'id' => 812,
            'city_name' => 'Triel-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 813,
            'city_name' => 'Le Chambon-Feugerolles',
        ]);
        DB::table('city')->insert([
            'id' => 814,
            'city_name' => 'Méricourt',
        ]);
        DB::table('city')->insert([
            'id' => 815,
            'city_name' => 'Ifs',
        ]);
        DB::table('city')->insert([
            'id' => 816,
            'city_name' => 'Raismes',
        ]);
        DB::table('city')->insert([
            'id' => 817,
            'city_name' => 'Plan-de-Cuques',
        ]);
        DB::table('city')->insert([
            'id' => 818,
            'city_name' => 'Brignais',
        ]);
        DB::table('city')->insert([
            'id' => 819,
            'city_name' => 'Provins',
        ]);
        DB::table('city')->insert([
            'id' => 820,
            'city_name' => 'Maizières-lès-Metz',
        ]);
        DB::table('city')->insert([
            'id' => 821,
            'city_name' => 'L’Isle-Adam',
        ]);
        DB::table('city')->insert([
            'id' => 822,
            'city_name' => 'Rognac',
        ]);
        DB::table('city')->insert([
            'id' => 823,
            'city_name' => 'Saint-Jean',
        ]);
        DB::table('city')->insert([
            'id' => 824,
            'city_name' => 'Florange',
        ]);
        DB::table('city')->insert([
            'id' => 825,
            'city_name' => 'Lamballe',
        ]);
        DB::table('city')->insert([
            'id' => 826,
            'city_name' => 'Canet-en-Roussillon',
        ]);
        DB::table('city')->insert([
            'id' => 827,
            'city_name' => 'Andernos-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 828,
            'city_name' => 'Saint-Estève',
        ]);
        DB::table('city')->insert([
            'id' => 829,
            'city_name' => 'Fonsorbes',
        ]);
        DB::table('city')->insert([
            'id' => 830,
            'city_name' => 'Chauny',
        ]);
        DB::table('city')->insert([
            'id' => 831,
            'city_name' => 'Oissel',
        ]);
        DB::table('city')->insert([
            'id' => 832,
            'city_name' => 'Saint-Germain-lès-Arpajon',
        ]);
        DB::table('city')->insert([
            'id' => 833,
            'city_name' => 'Quimperlé',
        ]);
        DB::table('city')->insert([
            'id' => 834,
            'city_name' => 'Saint-André-de-Cubzac',
        ]);
        DB::table('city')->insert([
            'id' => 835,
            'city_name' => 'Le Haillan',
        ]);
        DB::table('city')->insert([
            'id' => 836,
            'city_name' => 'Mende',
        ]);
        DB::table('city')->insert([
            'id' => 837,
            'city_name' => 'Bolbec',
        ]);
        DB::table('city')->insert([
            'id' => 838,
            'city_name' => 'Le Pont-de-Claix',
        ]);
        DB::table('city')->insert([
            'id' => 839,
            'city_name' => 'Sablé-sur-Sarthe',
        ]);
        DB::table('city')->insert([
            'id' => 840,
            'city_name' => 'Betton',
        ]);
        DB::table('city')->insert([
            'id' => 841,
            'city_name' => 'Villeneuve-lès-Avignon',
        ]);
        DB::table('city')->insert([
            'id' => 842,
            'city_name' => 'Juvignac',
        ]);
        DB::table('city')->insert([
            'id' => 843,
            'city_name' => 'Gisors',
        ]);
        DB::table('city')->insert([
            'id' => 844,
            'city_name' => 'Châteaubriant',
        ]);
        DB::table('city')->insert([
            'id' => 845,
            'city_name' => 'Mèze',
        ]);
        DB::table('city')->insert([
            'id' => 846,
            'city_name' => 'Pont-du-Château',
        ]);
        DB::table('city')->insert([
            'id' => 847,
            'city_name' => 'Chambray-lès-Tours',
        ]);
        DB::table('city')->insert([
            'id' => 848,
            'city_name' => 'Vidauban',
        ]);
        DB::table('city')->insert([
            'id' => 849,
            'city_name' => 'La Motte-Servolex',
        ]);
        DB::table('city')->insert([
            'id' => 850,
            'city_name' => 'Saint-Saulve',
        ]);
        DB::table('city')->insert([
            'id' => 851,
            'city_name' => 'Thorigny-sur-Marne',
        ]);
        DB::table('city')->insert([
            'id' => 852,
            'city_name' => 'Saint-Avé',
        ]);
        DB::table('city')->insert([
            'id' => 853,
            'city_name' => 'Château-Gontier',
        ]);
        DB::table('city')->insert([
            'id' => 854,
            'city_name' => 'Fourmies',
        ]);
        DB::table('city')->insert([
            'id' => 855,
            'city_name' => 'Castelnaudary',
        ]);
        DB::table('city')->insert([
            'id' => 856,
            'city_name' => 'Bellegarde-sur-Valserine',
        ]);
        DB::table('city')->insert([
            'id' => 857,
            'city_name' => 'Pacé',
        ]);
        DB::table('city')->insert([
            'id' => 858,
            'city_name' => 'Guebwiller',
        ]);
        DB::table('city')->insert([
            'id' => 859,
            'city_name' => 'Cesson',
        ]);
        DB::table('city')->insert([
            'id' => 860,
            'city_name' => 'Solliès-Pont',
        ]);
        DB::table('city')->insert([
            'id' => 861,
            'city_name' => 'Aubière',
        ]);
        DB::table('city')->insert([
            'id' => 862,
            'city_name' => 'Auchel',
        ]);
        DB::table('city')->insert([
            'id' => 863,
            'city_name' => 'Saint-Cyr-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 864,
            'city_name' => 'Vedène',
        ]);
        DB::table('city')->insert([
            'id' => 865,
            'city_name' => 'Sassenage',
        ]);
        DB::table('city')->insert([
            'id' => 866,
            'city_name' => 'Chevigny-Saint-Sauveur',
        ]);
        DB::table('city')->insert([
            'id' => 867,
            'city_name' => 'Saint-Martin-Boulogne',
        ]);
        DB::table('city')->insert([
            'id' => 868,
            'city_name' => 'Castelginest',
        ]);
        DB::table('city')->insert([
            'id' => 869,
            'city_name' => 'Corbas',
        ]);
        DB::table('city')->insert([
            'id' => 870,
            'city_name' => 'Thiers',
        ]);
        DB::table('city')->insert([
            'id' => 871,
            'city_name' => 'Villefranche-de-Rouergue',
        ]);
        DB::table('city')->insert([
            'id' => 872,
            'city_name' => 'Valentigney',
        ]);
        DB::table('city')->insert([
            'id' => 873,
            'city_name' => 'Villepreux',
        ]);
        DB::table('city')->insert([
            'id' => 874,
            'city_name' => 'Saint-Gaudens',
        ]);
        DB::table('city')->insert([
            'id' => 875,
            'city_name' => 'Mainvilliers',
        ]);
        DB::table('city')->insert([
            'id' => 876,
            'city_name' => 'Longuenesse',
        ]);
        DB::table('city')->insert([
            'id' => 877,
            'city_name' => 'Issoudun',
        ]);
        DB::table('city')->insert([
            'id' => 878,
            'city_name' => 'Cogolin',
        ]);
        DB::table('city')->insert([
            'id' => 879,
            'city_name' => 'Villebon-sur-Yvette',
        ]);
        DB::table('city')->insert([
            'id' => 880,
            'city_name' => 'Cernay',
        ]);
        DB::table('city')->insert([
            'id' => 881,
            'city_name' => 'Villeneuve-Tolosane',
        ]);
        DB::table('city')->insert([
            'id' => 882,
            'city_name' => 'Onet Village',
        ]);
        DB::table('city')->insert([
            'id' => 883,
            'city_name' => 'Clermont',
        ]);
        DB::table('city')->insert([
            'id' => 884,
            'city_name' => 'Vaux-le-Pénil',
        ]);
        DB::table('city')->insert([
            'id' => 885,
            'city_name' => 'Ploufragan',
        ]);
        DB::table('city')->insert([
            'id' => 886,
            'city_name' => 'Neuville-en-Ferrain',
        ]);
        DB::table('city')->insert([
            'id' => 887,
            'city_name' => 'Guidel',
        ]);
        DB::table('city')->insert([
            'id' => 888,
            'city_name' => 'Saint-Pierre-du-Perray',
        ]);
        DB::table('city')->insert([
            'id' => 889,
            'city_name' => 'Porto-Vecchio',
        ]);
        DB::table('city')->insert([
            'id' => 890,
            'city_name' => 'Pornichet',
        ]);
        DB::table('city')->insert([
            'id' => 891,
            'city_name' => 'La Roche-sur-Foron',
        ]);
        DB::table('city')->insert([
            'id' => 892,
            'city_name' => 'Obernai',
        ]);
        DB::table('city')->insert([
            'id' => 893,
            'city_name' => 'Cuers',
        ]);
        DB::table('city')->insert([
            'id' => 894,
            'city_name' => 'Sainte-Savine',
        ]);
        DB::table('city')->insert([
            'id' => 895,
            'city_name' => 'Étaples',
        ]);
        DB::table('city')->insert([
            'id' => 896,
            'city_name' => 'Courrières',
        ]);
        DB::table('city')->insert([
            'id' => 897,
            'city_name' => 'Darnétal',
        ]);
        DB::table('city')->insert([
            'id' => 898,
            'city_name' => 'Vauvert',
        ]);
        DB::table('city')->insert([
            'id' => 899,
            'city_name' => 'Saverne',
        ]);
        DB::table('city')->insert([
            'id' => 900,
            'city_name' => 'Aniche',
        ]);
        DB::table('city')->insert([
            'id' => 901,
            'city_name' => 'Allonnes',
        ]);
        DB::table('city')->insert([
            'id' => 902,
            'city_name' => 'Chantilly',
        ]);
        DB::table('city')->insert([
            'id' => 903,
            'city_name' => 'Septèmes-les-Vallons',
        ]);
        DB::table('city')->insert([
            'id' => 904,
            'city_name' => 'Annoeullin',
        ]);
        DB::table('city')->insert([
            'id' => 905,
            'city_name' => 'Vernouillet',
        ]);
        DB::table('city')->insert([
            'id' => 906,
            'city_name' => 'Oignies',
        ]);
        DB::table('city')->insert([
            'id' => 907,
            'city_name' => 'Gravelines',
        ]);
        DB::table('city')->insert([
            'id' => 908,
            'city_name' => 'La Riche',
        ]);
        DB::table('city')->insert([
            'id' => 909,
            'city_name' => 'Ézanville',
        ]);
        DB::table('city')->insert([
            'id' => 910,
            'city_name' => 'Wambrechies',
        ]);
        DB::table('city')->insert([
            'id' => 911,
            'city_name' => 'Lézignan-Corbières',
        ]);
        DB::table('city')->insert([
            'id' => 912,
            'city_name' => 'Saint-Cyprien',
        ]);
        DB::table('city')->insert([
            'id' => 913,
            'city_name' => 'Panazol',
        ]);
        DB::table('city')->insert([
            'id' => 914,
            'city_name' => 'Amnéville',
        ]);
        DB::table('city')->insert([
            'id' => 915,
            'city_name' => 'Pfastatt',
        ]);
        DB::table('city')->insert([
            'id' => 916,
            'city_name' => 'Briançon',
        ]);
        DB::table('city')->insert([
            'id' => 917,
            'city_name' => 'Maxéville',
        ]);
        DB::table('city')->insert([
            'id' => 918,
            'city_name' => 'Saint-Junien',
        ]);
        DB::table('city')->insert([
            'id' => 919,
            'city_name' => 'Riorges',
        ]);
        DB::table('city')->insert([
            'id' => 920,
            'city_name' => 'Dinard',
        ]);
        DB::table('city')->insert([
            'id' => 921,
            'city_name' => 'Douchy-les-Mines',
        ]);
        DB::table('city')->insert([
            'id' => 922,
            'city_name' => 'Saint-Hilaire-de-Riez',
        ]);
        DB::table('city')->insert([
            'id' => 923,
            'city_name' => 'Chassieu',
        ]);
        DB::table('city')->insert([
            'id' => 924,
            'city_name' => 'Portes-lès-Valence',
        ]);
        DB::table('city')->insert([
            'id' => 925,
            'city_name' => 'Louvres',
        ]);
        DB::table('city')->insert([
            'id' => 926,
            'city_name' => 'Grigny',
        ]);
        DB::table('city')->insert([
            'id' => 927,
            'city_name' => 'La Chapelle-Saint-Mesmin',
        ]);
        DB::table('city')->insert([
            'id' => 928,
            'city_name' => 'Tarare',
        ]);
        DB::table('city')->insert([
            'id' => 929,
            'city_name' => 'Passy',
        ]);
        DB::table('city')->insert([
            'id' => 930,
            'city_name' => 'Dammartin-en-Goële',
        ]);
        DB::table('city')->insert([
            'id' => 931,
            'city_name' => 'Chantepie',
        ]);
        DB::table('city')->insert([
            'id' => 932,
            'city_name' => 'Villerupt',
        ]);
        DB::table('city')->insert([
            'id' => 933,
            'city_name' => 'Vieux-Condé',
        ]);
        DB::table('city')->insert([
            'id' => 934,
            'city_name' => 'Le Pradet',
        ]);
        DB::table('city')->insert([
            'id' => 935,
            'city_name' => 'Montlouis-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 936,
            'city_name' => 'Saint-Jean-de-Védas',
        ]);
        DB::table('city')->insert([
            'id' => 937,
            'city_name' => 'Beaumont-sur-Oise',
        ]);
        DB::table('city')->insert([
            'id' => 938,
            'city_name' => 'Apt',
        ]);
        DB::table('city')->insert([
            'id' => 939,
            'city_name' => 'Le Luc',
        ]);
        DB::table('city')->insert([
            'id' => 940,
            'city_name' => 'Vire',
        ]);
        DB::table('city')->insert([
            'id' => 941,
            'city_name' => 'Jeumont',
        ]);
        DB::table('city')->insert([
            'id' => 942,
            'city_name' => 'Cabestany',
        ]);
        DB::table('city')->insert([
            'id' => 943,
            'city_name' => 'Bondoufle',
        ]);
        DB::table('city')->insert([
            'id' => 944,
            'city_name' => 'Héricourt',
        ]);
        DB::table('city')->insert([
            'id' => 945,
            'city_name' => 'Buxerolles',
        ]);
        DB::table('city')->insert([
            'id' => 946,
            'city_name' => 'Leers',
        ]);
        DB::table('city')->insert([
            'id' => 947,
            'city_name' => 'Parthenay',
        ]);
        DB::table('city')->insert([
            'id' => 948,
            'city_name' => 'Biganos',
        ]);
        DB::table('city')->insert([
            'id' => 949,
            'city_name' => 'Tournon-sur-Rhône',
        ]);
        DB::table('city')->insert([
            'id' => 950,
            'city_name' => 'Marly',
        ]);
        DB::table('city')->insert([
            'id' => 951,
            'city_name' => 'Guilherand',
        ]);
        DB::table('city')->insert([
            'id' => 952,
            'city_name' => 'Thouaré-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 953,
            'city_name' => 'Marck',
        ]);
        DB::table('city')->insert([
            'id' => 954,
            'city_name' => 'Mondeville',
        ]);
        DB::table('city')->insert([
            'id' => 955,
            'city_name' => 'Saint-Laurent-de-la-Salanque',
        ]);
        DB::table('city')->insert([
            'id' => 956,
            'city_name' => 'Chambly',
        ]);
        DB::table('city')->insert([
            'id' => 957,
            'city_name' => 'Pontchâteau',
        ]);
        DB::table('city')->insert([
            'id' => 958,
            'city_name' => 'Pont-Saint-Esprit',
        ]);
        DB::table('city')->insert([
            'id' => 959,
            'city_name' => 'Gerzat',
        ]);
        DB::table('city')->insert([
            'id' => 960,
            'city_name' => 'Pélissanne',
        ]);
        DB::table('city')->insert([
            'id' => 961,
            'city_name' => 'Villers-Cotterêts',
        ]);
        DB::table('city')->insert([
            'id' => 962,
            'city_name' => 'Hagondange',
        ]);
        DB::table('city')->insert([
            'id' => 963,
            'city_name' => 'Erstein',
        ]);
        DB::table('city')->insert([
            'id' => 964,
            'city_name' => 'Ville-la-Grand',
        ]);
        DB::table('city')->insert([
            'id' => 965,
            'city_name' => 'Le Crès',
        ]);
        DB::table('city')->insert([
            'id' => 966,
            'city_name' => 'Feyzin',
        ]);
        DB::table('city')->insert([
            'id' => 967,
            'city_name' => 'Dourdan',
        ]);
        DB::table('city')->insert([
            'id' => 968,
            'city_name' => 'Serris',
        ]);
        DB::table('city')->insert([
            'id' => 969,
            'city_name' => 'Lavaur',
        ]);
        DB::table('city')->insert([
            'id' => 970,
            'city_name' => 'Fontaine-lès-Dijon',
        ]);
        DB::table('city')->insert([
            'id' => 971,
            'city_name' => 'Méry-sur-Oise',
        ]);
        DB::table('city')->insert([
            'id' => 972,
            'city_name' => 'Le Taillan-Médoc',
        ]);
        DB::table('city')->insert([
            'id' => 973,
            'city_name' => 'Oloron-Sainte-Marie',
        ]);
        DB::table('city')->insert([
            'id' => 974,
            'city_name' => 'Magny-le-Hongre',
        ]);
        DB::table('city')->insert([
            'id' => 975,
            'city_name' => 'Wittelsheim',
        ]);
        DB::table('city')->insert([
            'id' => 976,
            'city_name' => 'Octeville',
        ]);
        DB::table('city')->insert([
            'id' => 977,
            'city_name' => 'Quincy-sous-Sénart',
        ]);
        DB::table('city')->insert([
            'id' => 978,
            'city_name' => 'Orthez',
        ]);
        DB::table('city')->insert([
            'id' => 979,
            'city_name' => 'Bourg-de-Péage',
        ]);
        DB::table('city')->insert([
            'id' => 980,
            'city_name' => 'Bondues',
        ]);
        DB::table('city')->insert([
            'id' => 981,
            'city_name' => 'Léognan',
        ]);
        DB::table('city')->insert([
            'id' => 982,
            'city_name' => 'Gignac-la-Nerthe',
        ]);
        DB::table('city')->insert([
            'id' => 983,
            'city_name' => 'Fondettes',
        ]);
        DB::table('city')->insert([
            'id' => 984,
            'city_name' => 'Rombas',
        ]);
        DB::table('city')->insert([
            'id' => 985,
            'city_name' => 'La Trinité',
        ]);
        DB::table('city')->insert([
            'id' => 986,
            'city_name' => 'Trets',
        ]);
        DB::table('city')->insert([
            'id' => 987,
            'city_name' => 'Mouans-Sartoux',
        ]);
        DB::table('city')->insert([
            'id' => 988,
            'city_name' => 'Urrugne',
        ]);
        DB::table('city')->insert([
            'id' => 989,
            'city_name' => 'Villeneuve-lès-Maguelone',
        ]);
        DB::table('city')->insert([
            'id' => 990,
            'city_name' => 'Escaudain',
        ]);
        DB::table('city')->insert([
            'id' => 991,
            'city_name' => 'Saint-Gély-du-Fesc',
        ]);
        DB::table('city')->insert([
            'id' => 992,
            'city_name' => 'Dombasle-sur-Meurthe',
        ]);
        DB::table('city')->insert([
            'id' => 993,
            'city_name' => 'Argelès-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 994,
            'city_name' => 'La Ferté-sous-Jouarre',
        ]);
        DB::table('city')->insert([
            'id' => 995,
            'city_name' => 'Albert',
        ]);
        DB::table('city')->insert([
            'id' => 996,
            'city_name' => 'La Londe-les-Maures',
        ]);
        DB::table('city')->insert([
            'id' => 997,
            'city_name' => 'Pérols',
        ]);
        DB::table('city')->insert([
            'id' => 998,
            'city_name' => 'Fuveau',
        ]);
        DB::table('city')->insert([
            'id' => 999,
            'city_name' => 'Mios',
        ]);
        DB::table('city')->insert([
            'id' => 1000,
            'city_name' => 'La Farlède',
        ]);
        DB::table('city')->insert([
            'id' => 1001,
            'city_name' => 'Tomblaine',
        ]);
        DB::table('city')->insert([
            'id' => 1002,
            'city_name' => 'Miribel',
        ]);
        DB::table('city')->insert([
            'id' => 1003,
            'city_name' => 'Limoux',
        ]);
        DB::table('city')->insert([
            'id' => 1004,
            'city_name' => 'Portet-sur-Garonne',
        ]);
        DB::table('city')->insert([
            'id' => 1005,
            'city_name' => 'Quétigny',
        ]);
        DB::table('city')->insert([
            'id' => 1006,
            'city_name' => 'Harfleur',
        ]);
        DB::table('city')->insert([
            'id' => 1007,
            'city_name' => 'Roche-la-Molière',
        ]);
        DB::table('city')->insert([
            'id' => 1008,
            'city_name' => 'Biot',
        ]);
        DB::table('city')->insert([
            'id' => 1009,
            'city_name' => 'Bernay',
        ]);
        DB::table('city')->insert([
            'id' => 1010,
            'city_name' => 'Essey-lès-Nancy',
        ]);
        DB::table('city')->insert([
            'id' => 1011,
            'city_name' => 'Saint-Grégoire',
        ]);
        DB::table('city')->insert([
            'id' => 1012,
            'city_name' => 'Carmaux',
        ]);
        DB::table('city')->insert([
            'id' => 1013,
            'city_name' => 'Frouzins',
        ]);
        DB::table('city')->insert([
            'id' => 1014,
            'city_name' => 'Brumath',
        ]);
        DB::table('city')->insert([
            'id' => 1015,
            'city_name' => 'Soyaux',
        ]);
        DB::table('city')->insert([
            'id' => 1016,
            'city_name' => 'Rouvroy',
        ]);
        DB::table('city')->insert([
            'id' => 1017,
            'city_name' => 'Grand-Couronne',
        ]);
        DB::table('city')->insert([
            'id' => 1018,
            'city_name' => 'Lillers',
        ]);
        DB::table('city')->insert([
            'id' => 1019,
            'city_name' => 'Vétraz-Monthoux',
        ]);
        DB::table('city')->insert([
            'id' => 1020,
            'city_name' => 'Wingles',
        ]);
        DB::table('city')->insert([
            'id' => 1021,
            'city_name' => 'Pithiviers',
        ]);
        DB::table('city')->insert([
            'id' => 1022,
            'city_name' => 'Launaguet',
        ]);
        DB::table('city')->insert([
            'id' => 1023,
            'city_name' => 'Carqueiranne',
        ]);
        DB::table('city')->insert([
            'id' => 1024,
            'city_name' => 'Molsheim',
        ]);
        DB::table('city')->insert([
            'id' => 1025,
            'city_name' => 'Le Passage',
        ]);
        DB::table('city')->insert([
            'id' => 1026,
            'city_name' => 'Ouistreham',
        ]);
        DB::table('city')->insert([
            'id' => 1027,
            'city_name' => 'Mazamet',
        ]);
        DB::table('city')->insert([
            'id' => 1028,
            'city_name' => 'Pernes-les-Fontaines',
        ]);
        DB::table('city')->insert([
            'id' => 1029,
            'city_name' => 'Saint-Loubès',
        ]);
        DB::table('city')->insert([
            'id' => 1030,
            'city_name' => 'Auterive',
        ]);
        DB::table('city')->insert([
            'id' => 1031,
            'city_name' => 'Condé-sur-l’Escaut',
        ]);
        DB::table('city')->insert([
            'id' => 1032,
            'city_name' => 'Cabriès',
        ]);
        DB::table('city')->insert([
            'id' => 1033,
            'city_name' => 'Lescar',
        ]);
        DB::table('city')->insert([
            'id' => 1034,
            'city_name' => 'Arques',
        ]);
        DB::table('city')->insert([
            'id' => 1035,
            'city_name' => 'Divonne-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 1036,
            'city_name' => 'Aire-sur-la-Lys',
        ]);
        DB::table('city')->insert([
            'id' => 1037,
            'city_name' => 'Le Beausset',
        ]);
        DB::table('city')->insert([
            'id' => 1038,
            'city_name' => 'Figeac',
        ]);
        DB::table('city')->insert([
            'id' => 1039,
            'city_name' => 'Nogent-le-Rotrou',
        ]);
        DB::table('city')->insert([
            'id' => 1040,
            'city_name' => 'Saint-Amand-Montrond',
        ]);
        DB::table('city')->insert([
            'id' => 1041,
            'city_name' => 'Saint-Pierre-du-Mont',
        ]);
        DB::table('city')->insert([
            'id' => 1042,
            'city_name' => 'Mont-Saint-Martin',
        ]);
        DB::table('city')->insert([
            'id' => 1043,
            'city_name' => 'Blain',
        ]);
        DB::table('city')->insert([
            'id' => 1044,
            'city_name' => 'Fouesnant',
        ]);
        DB::table('city')->insert([
            'id' => 1045,
            'city_name' => 'Saint-Jean-le-Blanc',
        ]);
        DB::table('city')->insert([
            'id' => 1046,
            'city_name' => 'Aytré',
        ]);
        DB::table('city')->insert([
            'id' => 1047,
            'city_name' => 'Ploërmel',
        ]);
        DB::table('city')->insert([
            'id' => 1048,
            'city_name' => 'Merville',
        ]);
        DB::table('city')->insert([
            'id' => 1049,
            'city_name' => 'Lambesc',
        ]);
        DB::table('city')->insert([
            'id' => 1050,
            'city_name' => 'Boucau',
        ]);
        DB::table('city')->insert([
            'id' => 1051,
            'city_name' => 'Saint-Doulchard',
        ]);
        DB::table('city')->insert([
            'id' => 1052,
            'city_name' => 'Foix',
        ]);
        DB::table('city')->insert([
            'id' => 1053,
            'city_name' => 'Saint-Rémy-de-Provence',
        ]);
        DB::table('city')->insert([
            'id' => 1054,
            'city_name' => 'Saint-Lys',
        ]);
        DB::table('city')->insert([
            'id' => 1055,
            'city_name' => 'Pia',
        ]);
        DB::table('city')->insert([
            'id' => 1056,
            'city_name' => 'Cosne sur Loire',
        ]);
        DB::table('city')->insert([
            'id' => 1057,
            'city_name' => 'Magny-les-Hameaux',
        ]);
        DB::table('city')->insert([
            'id' => 1058,
            'city_name' => 'Beuvry',
        ]);
        DB::table('city')->insert([
            'id' => 1059,
            'city_name' => 'Revel',
        ]);
        DB::table('city')->insert([
            'id' => 1060,
            'city_name' => 'Luçon',
        ]);
        DB::table('city')->insert([
            'id' => 1061,
            'city_name' => 'Pierrelaye',
        ]);
        DB::table('city')->insert([
            'id' => 1062,
            'city_name' => 'La Salvetat-Saint-Gilles',
        ]);
        DB::table('city')->insert([
            'id' => 1063,
            'city_name' => 'La Tour-du-Pin',
        ]);
        DB::table('city')->insert([
            'id' => 1064,
            'city_name' => 'Veauche',
        ]);
        DB::table('city')->insert([
            'id' => 1065,
            'city_name' => 'Artigues-près-Bordeaux',
        ]);
        DB::table('city')->insert([
            'id' => 1066,
            'city_name' => 'Saint-Barthélemy-d’Anjou',
        ]);
        DB::table('city')->insert([
            'id' => 1067,
            'city_name' => 'Aizenay',
        ]);
        DB::table('city')->insert([
            'id' => 1068,
            'city_name' => 'Margny-lès-Compiègne',
        ]);
        DB::table('city')->insert([
            'id' => 1069,
            'city_name' => 'Treillières',
        ]);
        DB::table('city')->insert([
            'id' => 1070,
            'city_name' => 'Souffelweyersheim',
        ]);
        DB::table('city')->insert([
            'id' => 1071,
            'city_name' => 'Aulnoye-Aymeries',
        ]);
        DB::table('city')->insert([
            'id' => 1072,
            'city_name' => 'Marspich',
        ]);
        DB::table('city')->insert([
            'id' => 1073,
            'city_name' => 'Redon',
        ]);
        DB::table('city')->insert([
            'id' => 1074,
            'city_name' => 'Basse-Goulaine',
        ]);
        DB::table('city')->insert([
            'id' => 1075,
            'city_name' => 'Ussel',
        ]);
        DB::table('city')->insert([
            'id' => 1076,
            'city_name' => 'La Ravoire',
        ]);
        DB::table('city')->insert([
            'id' => 1077,
            'city_name' => 'Ingré',
        ]);
        DB::table('city')->insert([
            'id' => 1078,
            'city_name' => 'Loudéac',
        ]);
        DB::table('city')->insert([
            'id' => 1079,
            'city_name' => 'Léguevin',
        ]);
        DB::table('city')->insert([
            'id' => 1080,
            'city_name' => 'Saint-Aubin-lès-Elbeuf',
        ]);
        DB::table('city')->insert([
            'id' => 1081,
            'city_name' => 'Seysses',
        ]);
        DB::table('city')->insert([
            'id' => 1082,
            'city_name' => 'Joigny',
        ]);
        DB::table('city')->insert([
            'id' => 1083,
            'city_name' => 'Irigny',
        ]);
        DB::table('city')->insert([
            'id' => 1084,
            'city_name' => 'Lesquin',
        ]);
        DB::table('city')->insert([
            'id' => 1085,
            'city_name' => 'Couzeix',
        ]);
        DB::table('city')->insert([
            'id' => 1086,
            'city_name' => 'Scionzier',
        ]);
        DB::table('city')->insert([
            'id' => 1087,
            'city_name' => 'Golbey',
        ]);
        DB::table('city')->insert([
            'id' => 1088,
            'city_name' => 'Landivisiau',
        ]);
        DB::table('city')->insert([
            'id' => 1089,
            'city_name' => 'Saint-Sulpice-la-Pointe',
        ]);
        DB::table('city')->insert([
            'id' => 1090,
            'city_name' => 'Saint-Pierre-lès-Elbeuf',
        ]);
        DB::table('city')->insert([
            'id' => 1091,
            'city_name' => 'Libercourt',
        ]);
        DB::table('city')->insert([
            'id' => 1092,
            'city_name' => 'Cébazat',
        ]);
        DB::table('city')->insert([
            'id' => 1093,
            'city_name' => 'Breuillet',
        ]);
        DB::table('city')->insert([
            'id' => 1094,
            'city_name' => 'Valréas',
        ]);
        DB::table('city')->insert([
            'id' => 1095,
            'city_name' => 'La Grande-Motte',
        ]);
        DB::table('city')->insert([
            'id' => 1096,
            'city_name' => 'Paray-le-Monial',
        ]);
        DB::table('city')->insert([
            'id' => 1097,
            'city_name' => 'Voreppe',
        ]);
        DB::table('city')->insert([
            'id' => 1098,
            'city_name' => 'Orchies',
        ]);
        DB::table('city')->insert([
            'id' => 1099,
            'city_name' => 'Coulaines',
        ]);
        DB::table('city')->insert([
            'id' => 1100,
            'city_name' => 'Elne',
        ]);
        DB::table('city')->insert([
            'id' => 1101,
            'city_name' => 'Belley',
        ]);
        DB::table('city')->insert([
            'id' => 1102,
            'city_name' => 'Gonfreville-l’Orcher',
        ]);
        DB::table('city')->insert([
            'id' => 1103,
            'city_name' => 'Onnaing',
        ]);
        DB::table('city')->insert([
            'id' => 1104,
            'city_name' => 'Le Mesnil-Esnard',
        ]);
        DB::table('city')->insert([
            'id' => 1105,
            'city_name' => 'Larmor-Plage',
        ]);
        DB::table('city')->insert([
            'id' => 1106,
            'city_name' => 'La Chapelle d’Armentières',
        ]);
        DB::table('city')->insert([
            'id' => 1107,
            'city_name' => 'Lillebonne',
        ]);
        DB::table('city')->insert([
            'id' => 1108,
            'city_name' => 'La Ferté-Bernard',
        ]);
        DB::table('city')->insert([
            'id' => 1109,
            'city_name' => 'Le Muy',
        ]);
        DB::table('city')->insert([
            'id' => 1110,
            'city_name' => 'Gouvieux',
        ]);
        DB::table('city')->insert([
            'id' => 1111,
            'city_name' => 'Lamorlaye',
        ]);
        DB::table('city')->insert([
            'id' => 1112,
            'city_name' => 'Séné',
        ]);
        DB::table('city')->insert([
            'id' => 1113,
            'city_name' => 'Morières-lès-Avignon',
        ]);
        DB::table('city')->insert([
            'id' => 1114,
            'city_name' => 'Unieux',
        ]);
        DB::table('city')->insert([
            'id' => 1115,
            'city_name' => 'Le Rheu',
        ]);
        DB::table('city')->insert([
            'id' => 1116,
            'city_name' => 'Bandol',
        ]);
        DB::table('city')->insert([
            'id' => 1117,
            'city_name' => 'Livron-sur-Drôme',
        ]);
        DB::table('city')->insert([
            'id' => 1118,
            'city_name' => 'Parempuyre',
        ]);
        DB::table('city')->insert([
            'id' => 1119,
            'city_name' => 'Périgny',
        ]);
        DB::table('city')->insert([
            'id' => 1120,
            'city_name' => 'Tonneins',
        ]);
        DB::table('city')->insert([
            'id' => 1121,
            'city_name' => 'Les Sorinières',
        ]);
        DB::table('city')->insert([
            'id' => 1122,
            'city_name' => 'Cappelle-la-Grande',
        ]);
        DB::table('city')->insert([
            'id' => 1123,
            'city_name' => 'Isbergues',
        ]);
        DB::table('city')->insert([
            'id' => 1124,
            'city_name' => 'Pont-Audemer',
        ]);
        DB::table('city')->insert([
            'id' => 1125,
            'city_name' => 'Vendin-le-Vieil',
        ]);
        DB::table('city')->insert([
            'id' => 1126,
            'city_name' => 'Villars',
        ]);
        DB::table('city')->insert([
            'id' => 1127,
            'city_name' => 'Courcelles-les-Lens',
        ]);
        DB::table('city')->insert([
            'id' => 1128,
            'city_name' => 'Vallet',
        ]);
        DB::table('city')->insert([
            'id' => 1129,
            'city_name' => 'Le Petit-Couronne',
        ]);
        DB::table('city')->insert([
            'id' => 1130,
            'city_name' => 'Chaponost',
        ]);
        DB::table('city')->insert([
            'id' => 1131,
            'city_name' => 'Capbreton',
        ]);
        DB::table('city')->insert([
            'id' => 1132,
            'city_name' => 'Dardilly',
        ]);
        DB::table('city')->insert([
            'id' => 1133,
            'city_name' => 'La Fare-les-Oliviers',
        ]);
        DB::table('city')->insert([
            'id' => 1134,
            'city_name' => 'Le Thor',
        ]);
        DB::table('city')->insert([
            'id' => 1135,
            'city_name' => 'Clermont-l’Hérault',
        ]);
        DB::table('city')->insert([
            'id' => 1136,
            'city_name' => 'Lempdes',
        ]);
        DB::table('city')->insert([
            'id' => 1137,
            'city_name' => 'Saint-Paul-Trois-Châteaux',
        ]);
        DB::table('city')->insert([
            'id' => 1138,
            'city_name' => 'Saint-Claude',
        ]);
        DB::table('city')->insert([
            'id' => 1139,
            'city_name' => 'Roquevaire',
        ]);
        DB::table('city')->insert([
            'id' => 1140,
            'city_name' => 'Savenay',
        ]);
        DB::table('city')->insert([
            'id' => 1141,
            'city_name' => 'Longvic',
        ]);
        DB::table('city')->insert([
            'id' => 1142,
            'city_name' => 'Notre-Dame-de-Gravenchon',
        ]);
        DB::table('city')->insert([
            'id' => 1143,
            'city_name' => 'Achicourt',
        ]);
        DB::table('city')->insert([
            'id' => 1144,
            'city_name' => 'Malzéville',
        ]);
        DB::table('city')->insert([
            'id' => 1145,
            'city_name' => 'Gretz-Armainvilliers',
        ]);
        DB::table('city')->insert([
            'id' => 1146,
            'city_name' => 'Chécy',
        ]);
        DB::table('city')->insert([
            'id' => 1147,
            'city_name' => 'Roussillon',
        ]);
        DB::table('city')->insert([
            'id' => 1148,
            'city_name' => 'Tournan-en-Brie',
        ]);
        DB::table('city')->insert([
            'id' => 1149,
            'city_name' => 'Thorigné-Fouillard',
        ]);
        DB::table('city')->insert([
            'id' => 1150,
            'city_name' => 'Saint-Philbert-de-Grand-Lieu',
        ]);
        DB::table('city')->insert([
            'id' => 1151,
            'city_name' => 'Lorgues',
        ]);
        DB::table('city')->insert([
            'id' => 1152,
            'city_name' => 'Waziers',
        ]);
        DB::table('city')->insert([
            'id' => 1153,
            'city_name' => 'Nangis',
        ]);
        DB::table('city')->insert([
            'id' => 1154,
            'city_name' => 'Grabels',
        ]);
        DB::table('city')->insert([
            'id' => 1155,
            'city_name' => 'Coutances',
        ]);
        DB::table('city')->insert([
            'id' => 1156,
            'city_name' => 'Le Teil',
        ]);
        DB::table('city')->insert([
            'id' => 1157,
            'city_name' => 'Émerainville',
        ]);
        DB::table('city')->insert([
            'id' => 1158,
            'city_name' => 'Bellerive-sur-Allier',
        ]);
        DB::table('city')->insert([
            'id' => 1159,
            'city_name' => 'Merlebach',
        ]);
        DB::table('city')->insert([
            'id' => 1160,
            'city_name' => 'Quéven',
        ]);
        DB::table('city')->insert([
            'id' => 1161,
            'city_name' => 'L’Isle-Jourdain',
        ]);
        DB::table('city')->insert([
            'id' => 1162,
            'city_name' => 'Grenade',
        ]);
        DB::table('city')->insert([
            'id' => 1163,
            'city_name' => 'Lançon-Provence',
        ]);
        DB::table('city')->insert([
            'id' => 1164,
            'city_name' => 'Hirson',
        ]);
        DB::table('city')->insert([
            'id' => 1165,
            'city_name' => 'Rivesaltes',
        ]);
        DB::table('city')->insert([
            'id' => 1166,
            'city_name' => 'Nort-sur-Erdre',
        ]);
        DB::table('city')->insert([
            'id' => 1167,
            'city_name' => 'Thaon-les-Vosges',
        ]);
        DB::table('city')->insert([
            'id' => 1168,
            'city_name' => 'Privas',
        ]);
        DB::table('city')->insert([
            'id' => 1169,
            'city_name' => 'Entraigues-sur-la-Sorgue',
        ]);
        DB::table('city')->insert([
            'id' => 1170,
            'city_name' => 'Linselles',
        ]);
        DB::table('city')->insert([
            'id' => 1171,
            'city_name' => 'Monistrol-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 1172,
            'city_name' => 'Trégueux',
        ]);
        DB::table('city')->insert([
            'id' => 1173,
            'city_name' => 'La Ricamarie',
        ]);
        DB::table('city')->insert([
            'id' => 1174,
            'city_name' => 'Peymeinade',
        ]);
        DB::table('city')->insert([
            'id' => 1175,
            'city_name' => 'Saint-Germain-lès-Corbeil',
        ]);
        DB::table('city')->insert([
            'id' => 1176,
            'city_name' => 'Crest',
        ]);
        DB::table('city')->insert([
            'id' => 1177,
            'city_name' => 'Domérat',
        ]);
        DB::table('city')->insert([
            'id' => 1178,
            'city_name' => 'Belleville',
        ]);
        DB::table('city')->insert([
            'id' => 1179,
            'city_name' => 'Sarlat-la-Canéda',
        ]);
        DB::table('city')->insert([
            'id' => 1180,
            'city_name' => 'Terville',
        ]);
        DB::table('city')->insert([
            'id' => 1181,
            'city_name' => 'Marguerittes',
        ]);
        DB::table('city')->insert([
            'id' => 1182,
            'city_name' => 'Noisy-le-Roi',
        ]);
        DB::table('city')->insert([
            'id' => 1183,
            'city_name' => 'Saint-Vallier',
        ]);
        DB::table('city')->insert([
            'id' => 1184,
            'city_name' => 'Borgo',
        ]);
        DB::table('city')->insert([
            'id' => 1185,
            'city_name' => 'Velaux',
        ]);
        DB::table('city')->insert([
            'id' => 1186,
            'city_name' => 'Châteaugiron',
        ]);
        DB::table('city')->insert([
            'id' => 1187,
            'city_name' => 'Neuville-sur-Saône',
        ]);
        DB::table('city')->insert([
            'id' => 1188,
            'city_name' => 'Sautron',
        ]);
        DB::table('city')->insert([
            'id' => 1189,
            'city_name' => 'Jouy-en-Josas',
        ]);
        DB::table('city')->insert([
            'id' => 1190,
            'city_name' => 'Saint-Chamas',
        ]);
        DB::table('city')->insert([
            'id' => 1191,
            'city_name' => 'Vif',
        ]);
        DB::table('city')->insert([
            'id' => 1192,
            'city_name' => 'Vaujours',
        ]);
        DB::table('city')->insert([
            'id' => 1193,
            'city_name' => 'Guichen',
        ]);
        DB::table('city')->insert([
            'id' => 1194,
            'city_name' => 'Pibrac',
        ]);
        DB::table('city')->insert([
            'id' => 1195,
            'city_name' => 'Crolles',
        ]);
        DB::table('city')->insert([
            'id' => 1196,
            'city_name' => 'Coutras',
        ]);
        DB::table('city')->insert([
            'id' => 1197,
            'city_name' => 'Barlin',
        ]);
        DB::table('city')->insert([
            'id' => 1198,
            'city_name' => 'Chartres-de-Bretagne',
        ]);
        DB::table('city')->insert([
            'id' => 1199,
            'city_name' => 'Poisy',
        ]);
        DB::table('city')->insert([
            'id' => 1200,
            'city_name' => 'Mazingarbe',
        ]);
        DB::table('city')->insert([
            'id' => 1201,
            'city_name' => 'Venelles',
        ]);
        DB::table('city')->insert([
            'id' => 1202,
            'city_name' => 'Saint-Jean-de-Monts',
        ]);
        DB::table('city')->insert([
            'id' => 1203,
            'city_name' => 'Saint-Marcellin',
        ]);
        DB::table('city')->insert([
            'id' => 1204,
            'city_name' => 'Jacou',
        ]);
        DB::table('city')->insert([
            'id' => 1205,
            'city_name' => 'Les Angles',
        ]);
        DB::table('city')->insert([
            'id' => 1206,
            'city_name' => 'Jarny',
        ]);
        DB::table('city')->insert([
            'id' => 1207,
            'city_name' => 'Falaise',
        ]);
        DB::table('city')->insert([
            'id' => 1208,
            'city_name' => 'Pont-l’Abbé',
        ]);
        DB::table('city')->insert([
            'id' => 1209,
            'city_name' => 'Seyssins',
        ]);
        DB::table('city')->insert([
            'id' => 1210,
            'city_name' => 'Uzès',
        ]);
        DB::table('city')->insert([
            'id' => 1211,
            'city_name' => 'Saint-Jean-d’Illac',
        ]);
        DB::table('city')->insert([
            'id' => 1212,
            'city_name' => 'Saint-Renan',
        ]);
        DB::table('city')->insert([
            'id' => 1213,
            'city_name' => 'Paray-Vieille-Poste',
        ]);
        DB::table('city')->insert([
            'id' => 1214,
            'city_name' => 'Chamonix-Mont-Blanc',
        ]);
        DB::table('city')->insert([
            'id' => 1215,
            'city_name' => 'Baillargues',
        ]);
        DB::table('city')->insert([
            'id' => 1216,
            'city_name' => 'Bessancourt',
        ]);
        DB::table('city')->insert([
            'id' => 1217,
            'city_name' => 'Pégomas',
        ]);
        DB::table('city')->insert([
            'id' => 1218,
            'city_name' => 'La Colle-sur-Loup',
        ]);
        DB::table('city')->insert([
            'id' => 1219,
            'city_name' => 'Aureilhan',
        ]);
        DB::table('city')->insert([
            'id' => 1220,
            'city_name' => 'Marcoussis',
        ]);
        DB::table('city')->insert([
            'id' => 1221,
            'city_name' => 'Le Poiré-sur-Vie',
        ]);
        DB::table('city')->insert([
            'id' => 1222,
            'city_name' => 'Plabennec',
        ]);
        DB::table('city')->insert([
            'id' => 1223,
            'city_name' => 'Langueux',
        ]);
        DB::table('city')->insert([
            'id' => 1224,
            'city_name' => 'Sarzeau',
        ]);
        DB::table('city')->insert([
            'id' => 1225,
            'city_name' => 'Saint-Rémy-lès-Chevreuse',
        ]);
        DB::table('city')->insert([
            'id' => 1226,
            'city_name' => 'Le Grau-du-Roi',
        ]);
        DB::table('city')->insert([
            'id' => 1227,
            'city_name' => 'Mauléon',
        ]);
        DB::table('city')->insert([
            'id' => 1228,
            'city_name' => 'Aigues-Mortes',
        ]);
        DB::table('city')->insert([
            'id' => 1229,
            'city_name' => 'Bompas',
        ]);
        DB::table('city')->insert([
            'id' => 1230,
            'city_name' => 'Feurs',
        ]);
        DB::table('city')->insert([
            'id' => 1231,
            'city_name' => 'Saint-Maixent-l’École',
        ]);
        DB::table('city')->insert([
            'id' => 1232,
            'city_name' => 'Port-Saint-Louis-du-Rhône',
        ]);
        DB::table('city')->insert([
            'id' => 1233,
            'city_name' => 'Janzé',
        ]);
        DB::table('city')->insert([
            'id' => 1234,
            'city_name' => 'Ergué-Gabéric',
        ]);
        DB::table('city')->insert([
            'id' => 1235,
            'city_name' => 'Saint-Gilles-Croix-de-Vie',
        ]);
        DB::table('city')->insert([
            'id' => 1236,
            'city_name' => 'Le Loroux-Bottereau',
        ]);
        DB::table('city')->insert([
            'id' => 1237,
            'city_name' => 'Le Soler',
        ]);
        DB::table('city')->insert([
            'id' => 1238,
            'city_name' => 'Sorbiers',
        ]);
        DB::table('city')->insert([
            'id' => 1239,
            'city_name' => 'Bouaye',
        ]);
        DB::table('city')->insert([
            'id' => 1240,
            'city_name' => 'Trignac',
        ]);
        DB::table('city')->insert([
            'id' => 1241,
            'city_name' => 'Carnoux-en-Provence',
        ]);
        DB::table('city')->insert([
            'id' => 1242,
            'city_name' => 'Lure',
        ]);
        DB::table('city')->insert([
            'id' => 1243,
            'city_name' => 'L’Aigle',
        ]);
        DB::table('city')->insert([
            'id' => 1244,
            'city_name' => 'Lège-Cap-Ferret',
        ]);
        DB::table('city')->insert([
            'id' => 1245,
            'city_name' => 'Moyeuvre-Grande',
        ]);
        DB::table('city')->insert([
            'id' => 1246,
            'city_name' => 'Vern-sur-Seiche',
        ]);
        DB::table('city')->insert([
            'id' => 1247,
            'city_name' => 'Houplines',
        ]);
        DB::table('city')->insert([
            'id' => 1248,
            'city_name' => 'Chantonnay',
        ]);
        DB::table('city')->insert([
            'id' => 1249,
            'city_name' => 'Audenge',
        ]);
        DB::table('city')->insert([
            'id' => 1250,
            'city_name' => 'Noyelles-sous-Lens',
        ]);
        DB::table('city')->insert([
            'id' => 1251,
            'city_name' => 'Pézenas',
        ]);
        DB::table('city')->insert([
            'id' => 1252,
            'city_name' => 'Meximieux',
        ]);
        DB::table('city')->insert([
            'id' => 1253,
            'city_name' => 'Liancourt',
        ]);
        DB::table('city')->insert([
            'id' => 1254,
            'city_name' => 'Guilers',
        ]);
        DB::table('city')->insert([
            'id' => 1255,
            'city_name' => 'La Verpillière',
        ]);
        DB::table('city')->insert([
            'id' => 1256,
            'city_name' => 'Villard-Bonnot',
        ]);
        DB::table('city')->insert([
            'id' => 1257,
            'city_name' => 'Leforest',
        ]);
        DB::table('city')->insert([
            'id' => 1258,
            'city_name' => 'La Bassée',
        ]);
        DB::table('city')->insert([
            'id' => 1259,
            'city_name' => 'Champagnole',
        ]);
        DB::table('city')->insert([
            'id' => 1260,
            'city_name' => 'Châteauneuf-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 1261,
            'city_name' => 'Saint-Nicolas-de-Port',
        ]);
        DB::table('city')->insert([
            'id' => 1262,
            'city_name' => 'Louveciennes',
        ]);
        DB::table('city')->insert([
            'id' => 1263,
            'city_name' => 'Puget-sur-Argens',
        ]);
        DB::table('city')->insert([
            'id' => 1264,
            'city_name' => 'Vert-Saint-Denis',
        ]);
        DB::table('city')->insert([
            'id' => 1265,
            'city_name' => 'Ballan-Miré',
        ]);
        DB::table('city')->insert([
            'id' => 1266,
            'city_name' => 'Gargenville',
        ]);
        DB::table('city')->insert([
            'id' => 1267,
            'city_name' => 'Chinon',
        ]);
        DB::table('city')->insert([
            'id' => 1268,
            'city_name' => 'Reignier',
        ]);
        DB::table('city')->insert([
            'id' => 1269,
            'city_name' => 'Saint-Jean-de-Maurienne',
        ]);
        DB::table('city')->insert([
            'id' => 1270,
            'city_name' => 'Thann',
        ]);
        DB::table('city')->insert([
            'id' => 1271,
            'city_name' => 'Bailly-Romainvilliers',
        ]);
        DB::table('city')->insert([
            'id' => 1272,
            'city_name' => 'L’Arbresle',
        ]);
        DB::table('city')->insert([
            'id' => 1273,
            'city_name' => 'Saint-Apollinaire',
        ]);
        DB::table('city')->insert([
            'id' => 1274,
            'city_name' => 'Houdain',
        ]);
        DB::table('city')->insert([
            'id' => 1275,
            'city_name' => 'Bormes-les-Mimosas',
        ]);
        DB::table('city')->insert([
            'id' => 1276,
            'city_name' => 'Le Teich',
        ]);
        DB::table('city')->insert([
            'id' => 1277,
            'city_name' => 'Eckbolsheim',
        ]);
        DB::table('city')->insert([
            'id' => 1278,
            'city_name' => 'Wavrin',
        ]);
        DB::table('city')->insert([
            'id' => 1279,
            'city_name' => 'Les Andelys',
        ]);
        DB::table('city')->insert([
            'id' => 1280,
            'city_name' => 'Le Coteau',
        ]);
        DB::table('city')->insert([
            'id' => 1281,
            'city_name' => 'Tonnay-Charente',
        ]);
        DB::table('city')->insert([
            'id' => 1282,
            'city_name' => 'Auby',
        ]);
        DB::table('city')->insert([
            'id' => 1283,
            'city_name' => 'Sausset-les-Pins',
        ]);
        DB::table('city')->insert([
            'id' => 1284,
            'city_name' => 'Ballancourt',
        ]);
        DB::table('city')->insert([
            'id' => 1285,
            'city_name' => 'Courtry',
        ]);
        DB::table('city')->insert([
            'id' => 1286,
            'city_name' => 'Biguglia',
        ]);
        DB::table('city')->insert([
            'id' => 1287,
            'city_name' => 'La Penne-sur-Huveaune',
        ]);
        DB::table('city')->insert([
            'id' => 1288,
            'city_name' => 'Romagnat',
        ]);
        DB::table('city')->insert([
            'id' => 1289,
            'city_name' => 'Claix',
        ]);
        DB::table('city')->insert([
            'id' => 1290,
            'city_name' => 'Le Mesnil-le-Roi',
        ]);
        DB::table('city')->insert([
            'id' => 1291,
            'city_name' => 'Guénange',
        ]);
        DB::table('city')->insert([
            'id' => 1292,
            'city_name' => 'Donges',
        ]);
        DB::table('city')->insert([
            'id' => 1293,
            'city_name' => 'Vineuil',
        ]);
        DB::table('city')->insert([
            'id' => 1294,
            'city_name' => 'Éguilles',
        ]);
        DB::table('city')->insert([
            'id' => 1295,
            'city_name' => 'Beauzelle',
        ]);
        DB::table('city')->insert([
            'id' => 1296,
            'city_name' => 'Gleizé',
        ]);
        DB::table('city')->insert([
            'id' => 1297,
            'city_name' => 'Thuir',
        ]);
        DB::table('city')->insert([
            'id' => 1298,
            'city_name' => 'Luisant',
        ]);
        DB::table('city')->insert([
            'id' => 1299,
            'city_name' => 'Fresnes-sur-Escaut',
        ]);
        DB::table('city')->insert([
            'id' => 1300,
            'city_name' => 'Isle',
        ]);
        DB::table('city')->insert([
            'id' => 1301,
            'city_name' => 'Hettange-Grande',
        ]);
        DB::table('city')->insert([
            'id' => 1302,
            'city_name' => 'Charnay-lès-Mâcon',
        ]);
        DB::table('city')->insert([
            'id' => 1303,
            'city_name' => 'Neuves-Maisons',
        ]);
        DB::table('city')->insert([
            'id' => 1304,
            'city_name' => 'Bonsecours',
        ]);
        DB::table('city')->insert([
            'id' => 1305,
            'city_name' => 'Soustons',
        ]);
        DB::table('city')->insert([
            'id' => 1306,
            'city_name' => 'Péronne',
        ]);
        DB::table('city')->insert([
            'id' => 1307,
            'city_name' => 'Bassens',
        ]);
        DB::table('city')->insert([
            'id' => 1308,
            'city_name' => 'Monts',
        ]);
        DB::table('city')->insert([
            'id' => 1309,
            'city_name' => 'Remiremont',
        ]);
        DB::table('city')->insert([
            'id' => 1310,
            'city_name' => 'Saint-Affrique',
        ]);
        DB::table('city')->insert([
            'id' => 1311,
            'city_name' => 'Notre-Dame-de-Bondeville',
        ]);
        DB::table('city')->insert([
            'id' => 1312,
            'city_name' => 'Wissous',
        ]);
        DB::table('city')->insert([
            'id' => 1313,
            'city_name' => 'Saint-Julien-les-Villas',
        ]);
        DB::table('city')->insert([
            'id' => 1314,
            'city_name' => 'Trévoux',
        ]);
        DB::table('city')->insert([
            'id' => 1315,
            'city_name' => 'Écouen',
        ]);
        DB::table('city')->insert([
            'id' => 1316,
            'city_name' => 'Languidic',
        ]);
        DB::table('city')->insert([
            'id' => 1317,
            'city_name' => 'Soisy-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 1318,
            'city_name' => 'Publier',
        ]);
        DB::table('city')->insert([
            'id' => 1319,
            'city_name' => 'Saint-Priest-en-Jarez',
        ]);
        DB::table('city')->insert([
            'id' => 1320,
            'city_name' => 'Montreuil-Juigné',
        ]);
        DB::table('city')->insert([
            'id' => 1321,
            'city_name' => 'Beynes',
        ]);
        DB::table('city')->insert([
            'id' => 1322,
            'city_name' => 'Moirans',
        ]);
        DB::table('city')->insert([
            'id' => 1323,
            'city_name' => 'Uckange',
        ]);
        DB::table('city')->insert([
            'id' => 1324,
            'city_name' => 'Lisses',
        ]);
        DB::table('city')->insert([
            'id' => 1325,
            'city_name' => 'Clisson',
        ]);
        DB::table('city')->insert([
            'id' => 1326,
            'city_name' => 'Wintzenheim',
        ]);
        DB::table('city')->insert([
            'id' => 1327,
            'city_name' => 'Langres',
        ]);
        DB::table('city')->insert([
            'id' => 1328,
            'city_name' => 'Saint-Victoret',
        ]);
        DB::table('city')->insert([
            'id' => 1329,
            'city_name' => 'Saint-Vincent-de-Tyrosse',
        ]);
        DB::table('city')->insert([
            'id' => 1330,
            'city_name' => 'La Couronne',
        ]);
        DB::table('city')->insert([
            'id' => 1331,
            'city_name' => 'Céret',
        ]);
        DB::table('city')->insert([
            'id' => 1332,
            'city_name' => 'Saint-Prix',
        ]);
        DB::table('city')->insert([
            'id' => 1333,
            'city_name' => 'Lesneven',
        ]);
        DB::table('city')->insert([
            'id' => 1334,
            'city_name' => 'Lagord',
        ]);
        DB::table('city')->insert([
            'id' => 1335,
            'city_name' => 'Digoin',
        ]);
        DB::table('city')->insert([
            'id' => 1336,
            'city_name' => 'Vizille',
        ]);
        DB::table('city')->insert([
            'id' => 1337,
            'city_name' => 'Tullins',
        ]);
        DB::table('city')->insert([
            'id' => 1338,
            'city_name' => 'Saint-Denis-en-Val',
        ]);
        DB::table('city')->insert([
            'id' => 1339,
            'city_name' => 'La Montagne',
        ]);
        DB::table('city')->insert([
            'id' => 1340,
            'city_name' => 'Domène',
        ]);
        DB::table('city')->insert([
            'id' => 1341,
            'city_name' => 'Gières',
        ]);
        DB::table('city')->insert([
            'id' => 1342,
            'city_name' => 'Geispolsheim',
        ]);
        DB::table('city')->insert([
            'id' => 1343,
            'city_name' => 'Cavalaire-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1344,
            'city_name' => 'Fouquières-lès-Lens',
        ]);
        DB::table('city')->insert([
            'id' => 1345,
            'city_name' => 'Gérardmer',
        ]);
        DB::table('city')->insert([
            'id' => 1346,
            'city_name' => 'Tignieu',
        ]);
        DB::table('city')->insert([
            'id' => 1347,
            'city_name' => 'Saint-Péray',
        ]);
        DB::table('city')->insert([
            'id' => 1348,
            'city_name' => 'Marseillan',
        ]);
        DB::table('city')->insert([
            'id' => 1349,
            'city_name' => 'Anse',
        ]);
        DB::table('city')->insert([
            'id' => 1350,
            'city_name' => 'Malemort-sur-Corrèze',
        ]);
        DB::table('city')->insert([
            'id' => 1351,
            'city_name' => 'Rethel',
        ]);
        DB::table('city')->insert([
            'id' => 1352,
            'city_name' => 'Ruelle-sur-Touvre',
        ]);
        DB::table('city')->insert([
            'id' => 1353,
            'city_name' => 'Colombelles',
        ]);
        DB::table('city')->insert([
            'id' => 1354,
            'city_name' => 'Nieppe',
        ]);
        DB::table('city')->insert([
            'id' => 1355,
            'city_name' => 'Langon',
        ]);
        DB::table('city')->insert([
            'id' => 1356,
            'city_name' => 'Toulouges',
        ]);
        DB::table('city')->insert([
            'id' => 1357,
            'city_name' => 'Doué-la-Fontaine',
        ]);
        DB::table('city')->insert([
            'id' => 1358,
            'city_name' => 'Cormontreuil',
        ]);
        DB::table('city')->insert([
            'id' => 1359,
            'city_name' => 'Ancenis',
        ]);
        DB::table('city')->insert([
            'id' => 1360,
            'city_name' => 'Liffré',
        ]);
        DB::table('city')->insert([
            'id' => 1361,
            'city_name' => 'Bouffémont',
        ]);
        DB::table('city')->insert([
            'id' => 1362,
            'city_name' => 'Mably',
        ]);
        DB::table('city')->insert([
            'id' => 1363,
            'city_name' => 'Lésigny',
        ]);
        DB::table('city')->insert([
            'id' => 1364,
            'city_name' => 'Pontcharra',
        ]);
        DB::table('city')->insert([
            'id' => 1365,
            'city_name' => 'Courdimanche',
        ]);
        DB::table('city')->insert([
            'id' => 1366,
            'city_name' => 'La Talaudière',
        ]);
        DB::table('city')->insert([
            'id' => 1367,
            'city_name' => 'Questembert',
        ]);
        DB::table('city')->insert([
            'id' => 1368,
            'city_name' => 'Talmont-Saint-Hilaire',
        ]);
        DB::table('city')->insert([
            'id' => 1369,
            'city_name' => 'Saint-Yrieix-sur-Charente',
        ]);
        DB::table('city')->insert([
            'id' => 1370,
            'city_name' => 'Contes',
        ]);
        DB::table('city')->insert([
            'id' => 1371,
            'city_name' => 'Coulounieix',
        ]);
        DB::table('city')->insert([
            'id' => 1372,
            'city_name' => 'Saint-Benoît',
        ]);
        DB::table('city')->insert([
            'id' => 1373,
            'city_name' => 'Déols',
        ]);
        DB::table('city')->insert([
            'id' => 1374,
            'city_name' => 'Rochefort-du-Gard',
        ]);
        DB::table('city')->insert([
            'id' => 1375,
            'city_name' => 'Auxonne',
        ]);
        DB::table('city')->insert([
            'id' => 1376,
            'city_name' => 'Behren-lès-Forbach',
        ]);
        DB::table('city')->insert([
            'id' => 1377,
            'city_name' => 'Saint-Didier-au-Mont-d’Or',
        ]);
        DB::table('city')->insert([
            'id' => 1378,
            'city_name' => 'Martignas-sur-Jalle',
        ]);
        DB::table('city')->insert([
            'id' => 1379,
            'city_name' => 'Escalquens',
        ]);
        DB::table('city')->insert([
            'id' => 1380,
            'city_name' => 'Lodève',
        ]);
        DB::table('city')->insert([
            'id' => 1381,
            'city_name' => 'Beaugency',
        ]);
        DB::table('city')->insert([
            'id' => 1382,
            'city_name' => 'Rosporden',
        ]);
        DB::table('city')->insert([
            'id' => 1383,
            'city_name' => 'Saint-Thibault-des-Vignes',
        ]);
        DB::table('city')->insert([
            'id' => 1384,
            'city_name' => 'Villers-Saint-Paul',
        ]);
        DB::table('city')->insert([
            'id' => 1385,
            'city_name' => 'Sisteron',
        ]);
        DB::table('city')->insert([
            'id' => 1386,
            'city_name' => 'Ensisheim',
        ]);
        DB::table('city')->insert([
            'id' => 1387,
            'city_name' => 'Pluvigner',
        ]);
        DB::table('city')->insert([
            'id' => 1388,
            'city_name' => 'Linas',
        ]);
        DB::table('city')->insert([
            'id' => 1389,
            'city_name' => 'Aussonne',
        ]);
        DB::table('city')->insert([
            'id' => 1390,
            'city_name' => 'Quiévrechain',
        ]);
        DB::table('city')->insert([
            'id' => 1391,
            'city_name' => 'Pignan',
        ]);
        DB::table('city')->insert([
            'id' => 1392,
            'city_name' => 'Migennes',
        ]);
        DB::table('city')->insert([
            'id' => 1393,
            'city_name' => 'Jassans-Riottier',
        ]);
        DB::table('city')->insert([
            'id' => 1394,
            'city_name' => 'Wissembourg',
        ]);
        DB::table('city')->insert([
            'id' => 1395,
            'city_name' => 'Cognin',
        ]);
        DB::table('city')->insert([
            'id' => 1396,
            'city_name' => 'Boulazac',
        ]);
        DB::table('city')->insert([
            'id' => 1397,
            'city_name' => 'Honfleur',
        ]);
        DB::table('city')->insert([
            'id' => 1398,
            'city_name' => 'Balaruc-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 1399,
            'city_name' => 'Beaupréau',
        ]);
        DB::table('city')->insert([
            'id' => 1400,
            'city_name' => 'Homécourt',
        ]);
        DB::table('city')->insert([
            'id' => 1401,
            'city_name' => 'Égly',
        ]);
        DB::table('city')->insert([
            'id' => 1402,
            'city_name' => 'Saint-Alban',
        ]);
        DB::table('city')->insert([
            'id' => 1403,
            'city_name' => 'Saint-Aubin-de-Médoc',
        ]);
        DB::table('city')->insert([
            'id' => 1404,
            'city_name' => 'La Tronche',
        ]);
        DB::table('city')->insert([
            'id' => 1405,
            'city_name' => 'Divion',
        ]);
        DB::table('city')->insert([
            'id' => 1406,
            'city_name' => 'Mordelles',
        ]);
        DB::table('city')->insert([
            'id' => 1407,
            'city_name' => 'Saint-Berthevin',
        ]);
        DB::table('city')->insert([
            'id' => 1408,
            'city_name' => 'Le Mesnil-Saint-Denis',
        ]);
        DB::table('city')->insert([
            'id' => 1409,
            'city_name' => 'Petite-Rosselle',
        ]);
        DB::table('city')->insert([
            'id' => 1410,
            'city_name' => 'Barr',
        ]);
        DB::table('city')->insert([
            'id' => 1411,
            'city_name' => 'Gaillon',
        ]);
        DB::table('city')->insert([
            'id' => 1412,
            'city_name' => 'Perros-Guirec',
        ]);
        DB::table('city')->insert([
            'id' => 1413,
            'city_name' => 'Saujon',
        ]);
        DB::table('city')->insert([
            'id' => 1414,
            'city_name' => 'Magnanville',
        ]);
        DB::table('city')->insert([
            'id' => 1415,
            'city_name' => 'Chauray',
        ]);
        DB::table('city')->insert([
            'id' => 1416,
            'city_name' => 'Saint-André-de-la-Roche',
        ]);
        DB::table('city')->insert([
            'id' => 1417,
            'city_name' => 'La Ferté-Saint-Aubin',
        ]);
        DB::table('city')->insert([
            'id' => 1418,
            'city_name' => 'Longpont-sur-Orge',
        ]);
        DB::table('city')->insert([
            'id' => 1419,
            'city_name' => 'Corte',
        ]);
        DB::table('city')->insert([
            'id' => 1420,
            'city_name' => 'Saintry-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 1421,
            'city_name' => 'Crozon',
        ]);
        DB::table('city')->insert([
            'id' => 1422,
            'city_name' => 'Saint-Ismier',
        ]);
        DB::table('city')->insert([
            'id' => 1423,
            'city_name' => 'Saint-Juéry',
        ]);
        DB::table('city')->insert([
            'id' => 1424,
            'city_name' => 'Châteaubourg',
        ]);
        DB::table('city')->insert([
            'id' => 1425,
            'city_name' => 'Louvroil',
        ]);
        DB::table('city')->insert([
            'id' => 1426,
            'city_name' => 'Paimpol',
        ]);
        DB::table('city')->insert([
            'id' => 1427,
            'city_name' => 'Le Péage-de-Roussillon',
        ]);
        DB::table('city')->insert([
            'id' => 1428,
            'city_name' => 'Jurançon',
        ]);
        DB::table('city')->insert([
            'id' => 1429,
            'city_name' => 'Bidart',
        ]);
        DB::table('city')->insert([
            'id' => 1430,
            'city_name' => 'Bain-de-Bretagne',
        ]);
        DB::table('city')->insert([
            'id' => 1431,
            'city_name' => 'Pordic',
        ]);
        DB::table('city')->insert([
            'id' => 1432,
            'city_name' => 'Carhaix-Plouguer',
        ]);
        DB::table('city')->insert([
            'id' => 1433,
            'city_name' => 'Lagnieu',
        ]);
        DB::table('city')->insert([
            'id' => 1434,
            'city_name' => 'Bellegarde',
        ]);
        DB::table('city')->insert([
            'id' => 1435,
            'city_name' => 'Audun-le-Tiche',
        ]);
        DB::table('city')->insert([
            'id' => 1436,
            'city_name' => 'Saint-Étienne-de-Montluc',
        ]);
        DB::table('city')->insert([
            'id' => 1437,
            'city_name' => 'Cranves-Sales',
        ]);
        DB::table('city')->insert([
            'id' => 1438,
            'city_name' => 'Auvers-sur-Oise',
        ]);
        DB::table('city')->insert([
            'id' => 1439,
            'city_name' => 'Tain-l’Hermitage',
        ]);
        DB::table('city')->insert([
            'id' => 1440,
            'city_name' => 'Loos-en-Gohelle',
        ]);
        DB::table('city')->insert([
            'id' => 1441,
            'city_name' => 'Bétheny',
        ]);
        DB::table('city')->insert([
            'id' => 1442,
            'city_name' => 'Saint-Christol-lez-Alès',
        ]);
        DB::table('city')->insert([
            'id' => 1443,
            'city_name' => 'Morteau',
        ]);
        DB::table('city')->insert([
            'id' => 1444,
            'city_name' => 'Segré',
        ]);
        DB::table('city')->insert([
            'id' => 1445,
            'city_name' => 'Fabrègues',
        ]);
        DB::table('city')->insert([
            'id' => 1446,
            'city_name' => 'Longueau',
        ]);
        DB::table('city')->insert([
            'id' => 1447,
            'city_name' => 'Villemandeur',
        ]);
        DB::table('city')->insert([
            'id' => 1448,
            'city_name' => 'Bourbourg',
        ]);
        DB::table('city')->insert([
            'id' => 1449,
            'city_name' => 'Saint-Pierre',
        ]);
        DB::table('city')->insert([
            'id' => 1450,
            'city_name' => 'Lallaing',
        ]);
        DB::table('city')->insert([
            'id' => 1451,
            'city_name' => 'Saint-Julien-de-Concelles',
        ]);
        DB::table('city')->insert([
            'id' => 1452,
            'city_name' => 'Chemillé',
        ]);
        DB::table('city')->insert([
            'id' => 1453,
            'city_name' => 'Montoir-de-Bretagne',
        ]);
        DB::table('city')->insert([
            'id' => 1454,
            'city_name' => 'Mourenx',
        ]);
        DB::table('city')->insert([
            'id' => 1455,
            'city_name' => 'Cuincy',
        ]);
        DB::table('city')->insert([
            'id' => 1456,
            'city_name' => 'La Gaude',
        ]);
        DB::table('city')->insert([
            'id' => 1457,
            'city_name' => 'Yssingeaux',
        ]);
        DB::table('city')->insert([
            'id' => 1458,
            'city_name' => 'Bourg-Saint-Andéol',
        ]);
        DB::table('city')->insert([
            'id' => 1459,
            'city_name' => 'Menucourt',
        ]);
        DB::table('city')->insert([
            'id' => 1460,
            'city_name' => 'Sérignan',
        ]);
        DB::table('city')->insert([
            'id' => 1461,
            'city_name' => 'Téteghem',
        ]);
        DB::table('city')->insert([
            'id' => 1462,
            'city_name' => 'Soultz-Haut-Rhin',
        ]);
        DB::table('city')->insert([
            'id' => 1463,
            'city_name' => 'Saint-Bonnet-de-Mure',
        ]);
        DB::table('city')->insert([
            'id' => 1464,
            'city_name' => 'Bourg-Saint-Maurice',
        ]);
        DB::table('city')->insert([
            'id' => 1465,
            'city_name' => 'Cassis',
        ]);
        DB::table('city')->insert([
            'id' => 1466,
            'city_name' => 'Quesnoy-sur-Deûle',
        ]);
        DB::table('city')->insert([
            'id' => 1467,
            'city_name' => 'Saint-Macaire-en-Mauges',
        ]);
        DB::table('city')->insert([
            'id' => 1468,
            'city_name' => 'Salles',
        ]);
        DB::table('city')->insert([
            'id' => 1469,
            'city_name' => 'Hasparren',
        ]);
        DB::table('city')->insert([
            'id' => 1470,
            'city_name' => 'Valognes',
        ]);
        DB::table('city')->insert([
            'id' => 1471,
            'city_name' => 'Sucé-sur-Erdre',
        ]);
        DB::table('city')->insert([
            'id' => 1472,
            'city_name' => 'Othis',
        ]);
        DB::table('city')->insert([
            'id' => 1473,
            'city_name' => 'Saint-Rémy',
        ]);
        DB::table('city')->insert([
            'id' => 1474,
            'city_name' => 'Saint-Jean-d’Angély',
        ]);
        DB::table('city')->insert([
            'id' => 1475,
            'city_name' => 'Saint-Laurent-Blangy',
        ]);
        DB::table('city')->insert([
            'id' => 1476,
            'city_name' => 'Saint-Just-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 1477,
            'city_name' => 'Saint-Pathus',
        ]);
        DB::table('city')->insert([
            'id' => 1478,
            'city_name' => 'Cornebarrieu',
        ]);
        DB::table('city')->insert([
            'id' => 1479,
            'city_name' => 'Feignies',
        ]);
        DB::table('city')->insert([
            'id' => 1480,
            'city_name' => 'Faverges',
        ]);
        DB::table('city')->insert([
            'id' => 1481,
            'city_name' => 'Rives',
        ]);
        DB::table('city')->insert([
            'id' => 1482,
            'city_name' => 'Ugine',
        ]);
        DB::table('city')->insert([
            'id' => 1483,
            'city_name' => 'Mimizan',
        ]);
        DB::table('city')->insert([
            'id' => 1484,
            'city_name' => 'Saint-Jean-Bonnefonds',
        ]);
        DB::table('city')->insert([
            'id' => 1485,
            'city_name' => 'Gueugnon',
        ]);
        DB::table('city')->insert([
            'id' => 1486,
            'city_name' => 'Wimereux',
        ]);
        DB::table('city')->insert([
            'id' => 1487,
            'city_name' => 'Trégunc',
        ]);
        DB::table('city')->insert([
            'id' => 1488,
            'city_name' => 'Puilboreau',
        ]);
        DB::table('city')->insert([
            'id' => 1489,
            'city_name' => 'Brioude',
        ]);
        DB::table('city')->insert([
            'id' => 1490,
            'city_name' => 'Montfort-sur-Meu',
        ]);
        DB::table('city')->insert([
            'id' => 1491,
            'city_name' => 'Les Arcs',
        ]);
        DB::table('city')->insert([
            'id' => 1492,
            'city_name' => 'Bagnères-de-Bigorre',
        ]);
        DB::table('city')->insert([
            'id' => 1493,
            'city_name' => 'Sénas',
        ]);
        DB::table('city')->insert([
            'id' => 1494,
            'city_name' => 'Champagne-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 1495,
            'city_name' => 'Lanton',
        ]);
        DB::table('city')->insert([
            'id' => 1496,
            'city_name' => 'Le Perray-en-Yvelines',
        ]);
        DB::table('city')->insert([
            'id' => 1497,
            'city_name' => 'Eu',
        ]);
        DB::table('city')->insert([
            'id' => 1498,
            'city_name' => 'Saint-Mandrier-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1499,
            'city_name' => 'Pleurtuit',
        ]);
        DB::table('city')->insert([
            'id' => 1500,
            'city_name' => 'Sains-en-Gohelle',
        ]);
        DB::table('city')->insert([
            'id' => 1501,
            'city_name' => 'Bouchemaine',
        ]);
        DB::table('city')->insert([
            'id' => 1502,
            'city_name' => 'Saint-Rambert-d’Albon',
        ]);
        DB::table('city')->insert([
            'id' => 1503,
            'city_name' => 'Manduel',
        ]);
        DB::table('city')->insert([
            'id' => 1504,
            'city_name' => 'Trélissac',
        ]);
        DB::table('city')->insert([
            'id' => 1505,
            'city_name' => 'Chauvigny',
        ]);
        DB::table('city')->insert([
            'id' => 1506,
            'city_name' => 'Étréchy',
        ]);
        DB::table('city')->insert([
            'id' => 1507,
            'city_name' => 'Montluel',
        ]);
        DB::table('city')->insert([
            'id' => 1508,
            'city_name' => 'Theix',
        ]);
        DB::table('city')->insert([
            'id' => 1509,
            'city_name' => 'Trith-Saint-Léger',
        ]);
        DB::table('city')->insert([
            'id' => 1510,
            'city_name' => 'Ceyrat',
        ]);
        DB::table('city')->insert([
            'id' => 1511,
            'city_name' => 'Itteville',
        ]);
        DB::table('city')->insert([
            'id' => 1512,
            'city_name' => 'Frouard',
        ]);
        DB::table('city')->insert([
            'id' => 1513,
            'city_name' => 'Nyons',
        ]);
        DB::table('city')->insert([
            'id' => 1514,
            'city_name' => 'Brunstatt',
        ]);
        DB::table('city')->insert([
            'id' => 1515,
            'city_name' => 'Rungis',
        ]);
        DB::table('city')->insert([
            'id' => 1516,
            'city_name' => 'Laneuveville-devant-Nancy',
        ]);
        DB::table('city')->insert([
            'id' => 1517,
            'city_name' => 'Ciboure',
        ]);
        DB::table('city')->insert([
            'id' => 1518,
            'city_name' => 'Saulx-les-Chartreux',
        ]);
        DB::table('city')->insert([
            'id' => 1519,
            'city_name' => 'Sainte-Pazanne',
        ]);
        DB::table('city')->insert([
            'id' => 1520,
            'city_name' => 'Caudan',
        ]);
        DB::table('city')->insert([
            'id' => 1521,
            'city_name' => 'Acigné',
        ]);
        DB::table('city')->insert([
            'id' => 1522,
            'city_name' => 'Chabeuil',
        ]);
        DB::table('city')->insert([
            'id' => 1523,
            'city_name' => 'Mondelange',
        ]);
        DB::table('city')->insert([
            'id' => 1524,
            'city_name' => 'Les Essarts-le-Roi',
        ]);
        DB::table('city')->insert([
            'id' => 1525,
            'city_name' => 'Nanteuil-lès-Meaux',
        ]);
        DB::table('city')->insert([
            'id' => 1526,
            'city_name' => 'Surgères',
        ]);
        DB::table('city')->insert([
            'id' => 1527,
            'city_name' => 'Algrange',
        ]);
        DB::table('city')->insert([
            'id' => 1528,
            'city_name' => 'Herbignac',
        ]);
        DB::table('city')->insert([
            'id' => 1529,
            'city_name' => 'Eyguières',
        ]);
        DB::table('city')->insert([
            'id' => 1530,
            'city_name' => 'Ustaritz',
        ]);
        DB::table('city')->insert([
            'id' => 1531,
            'city_name' => 'Limours',
        ]);
        DB::table('city')->insert([
            'id' => 1532,
            'city_name' => 'Grand-Charmont',
        ]);
        DB::table('city')->insert([
            'id' => 1533,
            'city_name' => 'Melesse',
        ]);
        DB::table('city')->insert([
            'id' => 1534,
            'city_name' => 'Lutterbach',
        ]);
        DB::table('city')->insert([
            'id' => 1535,
            'city_name' => 'Épône',
        ]);
        DB::table('city')->insert([
            'id' => 1536,
            'city_name' => 'Chessy',
        ]);
        DB::table('city')->insert([
            'id' => 1537,
            'city_name' => 'Rosny-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 1538,
            'city_name' => 'Luxeuil-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 1539,
            'city_name' => 'Saint-Pée-sur-Nivelle',
        ]);
        DB::table('city')->insert([
            'id' => 1540,
            'city_name' => 'Labenne',
        ]);
        DB::table('city')->insert([
            'id' => 1541,
            'city_name' => 'Champigneulles',
        ]);
        DB::table('city')->insert([
            'id' => 1542,
            'city_name' => 'Vendargues',
        ]);
        DB::table('city')->insert([
            'id' => 1543,
            'city_name' => 'Caussade',
        ]);
        DB::table('city')->insert([
            'id' => 1544,
            'city_name' => 'Heillecourt',
        ]);
        DB::table('city')->insert([
            'id' => 1545,
            'city_name' => 'Givet',
        ]);
        DB::table('city')->insert([
            'id' => 1546,
            'city_name' => 'Le Pian-Médoc',
        ]);
        DB::table('city')->insert([
            'id' => 1547,
            'city_name' => 'Nérac',
        ]);
        DB::table('city')->insert([
            'id' => 1548,
            'city_name' => 'Plédran',
        ]);
        DB::table('city')->insert([
            'id' => 1549,
            'city_name' => 'Roost-Warendin',
        ]);
        DB::table('city')->insert([
            'id' => 1550,
            'city_name' => 'Thyez',
        ]);
        DB::table('city')->insert([
            'id' => 1551,
            'city_name' => 'Ploeren',
        ]);
        DB::table('city')->insert([
            'id' => 1552,
            'city_name' => 'Canohès',
        ]);
        DB::table('city')->insert([
            'id' => 1553,
            'city_name' => 'Neufchâteau',
        ]);
        DB::table('city')->insert([
            'id' => 1554,
            'city_name' => 'Estaires',
        ]);
        DB::table('city')->insert([
            'id' => 1555,
            'city_name' => 'Moëlan-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1556,
            'city_name' => 'Cambo-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 1557,
            'city_name' => 'Chasse-sur-Rhône',
        ]);
        DB::table('city')->insert([
            'id' => 1558,
            'city_name' => 'Orgeval',
        ]);
        DB::table('city')->insert([
            'id' => 1559,
            'city_name' => 'Nandy',
        ]);
        DB::table('city')->insert([
            'id' => 1560,
            'city_name' => 'Noyelles-Godault',
        ]);
        DB::table('city')->insert([
            'id' => 1561,
            'city_name' => 'Loison-sous-Lens',
        ]);
        DB::table('city')->insert([
            'id' => 1562,
            'city_name' => 'Loudun',
        ]);
        DB::table('city')->insert([
            'id' => 1563,
            'city_name' => 'Sury-le-Comtal',
        ]);
        DB::table('city')->insert([
            'id' => 1564,
            'city_name' => 'Saint-Pol-de-Léon',
        ]);
        DB::table('city')->insert([
            'id' => 1565,
            'city_name' => 'Ludres',
        ]);
        DB::table('city')->insert([
            'id' => 1566,
            'city_name' => 'Péronnas',
        ]);
        DB::table('city')->insert([
            'id' => 1567,
            'city_name' => 'Saint-Alban-Leysse',
        ]);
        DB::table('city')->insert([
            'id' => 1568,
            'city_name' => 'Labarthe-sur-Lèze',
        ]);
        DB::table('city')->insert([
            'id' => 1569,
            'city_name' => 'Brindas',
        ]);
        DB::table('city')->insert([
            'id' => 1570,
            'city_name' => 'Beaufort-en-Vallée',
        ]);
        DB::table('city')->insert([
            'id' => 1571,
            'city_name' => 'Montaigu',
        ]);
        DB::table('city')->insert([
            'id' => 1572,
            'city_name' => 'Saint-Pierre-d’Oléron',
        ]);
        DB::table('city')->insert([
            'id' => 1573,
            'city_name' => 'Meung-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 1574,
            'city_name' => 'Mehun-sur-Yèvre',
        ]);
        DB::table('city')->insert([
            'id' => 1575,
            'city_name' => 'Gigean',
        ]);
        DB::table('city')->insert([
            'id' => 1576,
            'city_name' => 'Loriol-sur-Drôme',
        ]);
        DB::table('city')->insert([
            'id' => 1577,
            'city_name' => 'Annezin',
        ]);
        DB::table('city')->insert([
            'id' => 1578,
            'city_name' => 'Saint-André-des-Eaux',
        ]);
        DB::table('city')->insert([
            'id' => 1579,
            'city_name' => 'Oberhausbergen',
        ]);
        DB::table('city')->insert([
            'id' => 1580,
            'city_name' => 'Verneuil-sur-Avre',
        ]);
        DB::table('city')->insert([
            'id' => 1581,
            'city_name' => 'Mutzig',
        ]);
        DB::table('city')->insert([
            'id' => 1582,
            'city_name' => 'Saint-Yrieix-la-Perche',
        ]);
        DB::table('city')->insert([
            'id' => 1583,
            'city_name' => 'Brech',
        ]);
        DB::table('city')->insert([
            'id' => 1584,
            'city_name' => 'Kervignac',
        ]);
        DB::table('city')->insert([
            'id' => 1585,
            'city_name' => 'Malaunay',
        ]);
        DB::table('city')->insert([
            'id' => 1586,
            'city_name' => 'Le Cendre',
        ]);
        DB::table('city')->insert([
            'id' => 1587,
            'city_name' => 'Hersin-Coupigny',
        ]);
        DB::table('city')->insert([
            'id' => 1588,
            'city_name' => 'Hombourg-Haut',
        ]);
        DB::table('city')->insert([
            'id' => 1589,
            'city_name' => 'Marles-les-Mines',
        ]);
        DB::table('city')->insert([
            'id' => 1590,
            'city_name' => 'Blainville-sur-Orne',
        ]);
        DB::table('city')->insert([
            'id' => 1591,
            'city_name' => 'Plouguerneau',
        ]);
        DB::table('city')->insert([
            'id' => 1592,
            'city_name' => 'Châtelaillon-Plage',
        ]);
        DB::table('city')->insert([
            'id' => 1593,
            'city_name' => 'Grand-Fort-Philippe',
        ]);
        DB::table('city')->insert([
            'id' => 1594,
            'city_name' => 'Avallon',
        ]);
        DB::table('city')->insert([
            'id' => 1595,
            'city_name' => 'Gémenos',
        ]);
        DB::table('city')->insert([
            'id' => 1596,
            'city_name' => 'La Bouilladisse',
        ]);
        DB::table('city')->insert([
            'id' => 1597,
            'city_name' => 'Vezin-le-Coquet',
        ]);
        DB::table('city')->insert([
            'id' => 1598,
            'city_name' => 'Horbourg',
        ]);
        DB::table('city')->insert([
            'id' => 1599,
            'city_name' => 'Saint-Florent-sur-Cher',
        ]);
        DB::table('city')->insert([
            'id' => 1600,
            'city_name' => 'Ambert',
        ]);
        DB::table('city')->insert([
            'id' => 1601,
            'city_name' => 'Saint-Girons',
        ]);
        DB::table('city')->insert([
            'id' => 1602,
            'city_name' => 'Changé',
        ]);
        DB::table('city')->insert([
            'id' => 1603,
            'city_name' => 'Marange-Silvange',
        ]);
        DB::table('city')->insert([
            'id' => 1604,
            'city_name' => 'Bois-le-Roi',
        ]);
        DB::table('city')->insert([
            'id' => 1605,
            'city_name' => 'Marignier',
        ]);
        DB::table('city')->insert([
            'id' => 1606,
            'city_name' => 'Thônes',
        ]);
        DB::table('city')->insert([
            'id' => 1607,
            'city_name' => 'Saint-Marcel-lès-Valence',
        ]);
        DB::table('city')->insert([
            'id' => 1608,
            'city_name' => 'Calonne-Ricouart',
        ]);
        DB::table('city')->insert([
            'id' => 1609,
            'city_name' => 'Saint-Marcel',
        ]);
        DB::table('city')->insert([
            'id' => 1610,
            'city_name' => 'Bouillargues',
        ]);
        DB::table('city')->insert([
            'id' => 1611,
            'city_name' => 'Pavilly',
        ]);
        DB::table('city')->insert([
            'id' => 1612,
            'city_name' => 'Viriat',
        ]);
        DB::table('city')->insert([
            'id' => 1613,
            'city_name' => 'Castelnau-d’Estrétefonds',
        ]);
        DB::table('city')->insert([
            'id' => 1614,
            'city_name' => 'Chalonnes-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 1615,
            'city_name' => 'Villabé',
        ]);
        DB::table('city')->insert([
            'id' => 1616,
            'city_name' => 'Corbie',
        ]);
        DB::table('city')->insert([
            'id' => 1617,
            'city_name' => 'Louhans',
        ]);
        DB::table('city')->insert([
            'id' => 1618,
            'city_name' => 'Pecquencourt',
        ]);
        DB::table('city')->insert([
            'id' => 1619,
            'city_name' => 'Gouesnou',
        ]);
        DB::table('city')->insert([
            'id' => 1620,
            'city_name' => 'Saint-Maurice-l’Exil',
        ]);
        DB::table('city')->insert([
            'id' => 1621,
            'city_name' => 'Montauroux',
        ]);
        DB::table('city')->insert([
            'id' => 1622,
            'city_name' => 'Sainte-Livrade-sur-Lot',
        ]);
        DB::table('city')->insert([
            'id' => 1623,
            'city_name' => 'Montdidier',
        ]);
        DB::table('city')->insert([
            'id' => 1624,
            'city_name' => 'Fegersheim',
        ]);
        DB::table('city')->insert([
            'id' => 1625,
            'city_name' => 'Douvaine',
        ]);
        DB::table('city')->insert([
            'id' => 1626,
            'city_name' => 'Eaunes',
        ]);
        DB::table('city')->insert([
            'id' => 1627,
            'city_name' => 'Saint-Genest-Lerpt',
        ]);
        DB::table('city')->insert([
            'id' => 1628,
            'city_name' => 'Châtenoy-le-Royal',
        ]);
        DB::table('city')->insert([
            'id' => 1629,
            'city_name' => 'Châtel-Guyon',
        ]);
        DB::table('city')->insert([
            'id' => 1630,
            'city_name' => 'Flers-en-Escrebieux',
        ]);
        DB::table('city')->insert([
            'id' => 1631,
            'city_name' => 'Gournay-en-Bray',
        ]);
        DB::table('city')->insert([
            'id' => 1632,
            'city_name' => 'Le Palais-sur-Vienne',
        ]);
        DB::table('city')->insert([
            'id' => 1633,
            'city_name' => 'Cadaujac',
        ]);
        DB::table('city')->insert([
            'id' => 1634,
            'city_name' => 'Grézieu-la-Varenne',
        ]);
        DB::table('city')->insert([
            'id' => 1635,
            'city_name' => 'Prades',
        ]);
        DB::table('city')->insert([
            'id' => 1636,
            'city_name' => 'L’Hôpital',
        ]);
        DB::table('city')->insert([
            'id' => 1637,
            'city_name' => 'Veigné',
        ]);
        DB::table('city')->insert([
            'id' => 1638,
            'city_name' => 'Labruguière',
        ]);
        DB::table('city')->insert([
            'id' => 1639,
            'city_name' => 'Saint-Pryvé-Saint-Mesmin',
        ]);
        DB::table('city')->insert([
            'id' => 1640,
            'city_name' => 'Saint-Flour',
        ]);
        DB::table('city')->insert([
            'id' => 1641,
            'city_name' => 'Templeuve',
        ]);
        DB::table('city')->insert([
            'id' => 1642,
            'city_name' => 'Lavelanet',
        ]);
        DB::table('city')->insert([
            'id' => 1643,
            'city_name' => 'Buc',
        ]);
        DB::table('city')->insert([
            'id' => 1644,
            'city_name' => 'Condom',
        ]);
        DB::table('city')->insert([
            'id' => 1645,
            'city_name' => 'Challes-les-Eaux',
        ]);
        DB::table('city')->insert([
            'id' => 1646,
            'city_name' => 'Ploudalmézeau',
        ]);
        DB::table('city')->insert([
            'id' => 1647,
            'city_name' => 'Raon-l’Étape',
        ]);
        DB::table('city')->insert([
            'id' => 1648,
            'city_name' => 'Crégy-lès-Meaux',
        ]);
        DB::table('city')->insert([
            'id' => 1649,
            'city_name' => 'Gignac',
        ]);
        DB::table('city')->insert([
            'id' => 1650,
            'city_name' => 'Bruguières',
        ]);
        DB::table('city')->insert([
            'id' => 1651,
            'city_name' => 'Montech',
        ]);
        DB::table('city')->insert([
            'id' => 1652,
            'city_name' => 'L’Isle-d’Espagnac',
        ]);
        DB::table('city')->insert([
            'id' => 1653,
            'city_name' => 'Beaurains',
        ]);
        DB::table('city')->insert([
            'id' => 1654,
            'city_name' => 'Parentis-en-Born',
        ]);
        DB::table('city')->insert([
            'id' => 1655,
            'city_name' => 'Castries',
        ]);
        DB::table('city')->insert([
            'id' => 1656,
            'city_name' => 'Lèves',
        ]);
        DB::table('city')->insert([
            'id' => 1657,
            'city_name' => 'Jaunay-Clan',
        ]);
        DB::table('city')->insert([
            'id' => 1658,
            'city_name' => 'Saint-Cyr-au-Mont-d’Or',
        ]);
        DB::table('city')->insert([
            'id' => 1659,
            'city_name' => 'Dourges',
        ]);
        DB::table('city')->insert([
            'id' => 1660,
            'city_name' => 'Laudun-l’Ardoise',
        ]);
        DB::table('city')->insert([
            'id' => 1661,
            'city_name' => 'Benfeld',
        ]);
        DB::table('city')->insert([
            'id' => 1662,
            'city_name' => 'Sciez',
        ]);
        DB::table('city')->insert([
            'id' => 1663,
            'city_name' => 'Cournonterral',
        ]);
        DB::table('city')->insert([
            'id' => 1664,
            'city_name' => 'Saint-Jean-de-Boiseau',
        ]);
        DB::table('city')->insert([
            'id' => 1665,
            'city_name' => 'Jonage',
        ]);
        DB::table('city')->insert([
            'id' => 1666,
            'city_name' => 'Bon-Encontre',
        ]);
        DB::table('city')->insert([
            'id' => 1667,
            'city_name' => 'Arès',
        ]);
        DB::table('city')->insert([
            'id' => 1668,
            'city_name' => 'Pont-Saint-Martin',
        ]);
        DB::table('city')->insert([
            'id' => 1669,
            'city_name' => 'Lentilly',
        ]);
        DB::table('city')->insert([
            'id' => 1670,
            'city_name' => 'Marsillargues',
        ]);
        DB::table('city')->insert([
            'id' => 1671,
            'city_name' => 'Seloncourt',
        ]);
        DB::table('city')->insert([
            'id' => 1672,
            'city_name' => 'Bauvin',
        ]);
        DB::table('city')->insert([
            'id' => 1673,
            'city_name' => 'Loches',
        ]);
        DB::table('city')->insert([
            'id' => 1674,
            'city_name' => 'Épernon',
        ]);
        DB::table('city')->insert([
            'id' => 1675,
            'city_name' => 'Pont-Sainte-Marie',
        ]);
        DB::table('city')->insert([
            'id' => 1676,
            'city_name' => 'Commentry',
        ]);
        DB::table('city')->insert([
            'id' => 1677,
            'city_name' => 'Marolles-en-Hurepoix',
        ]);
        DB::table('city')->insert([
            'id' => 1678,
            'city_name' => 'Bréal-sous-Montfort',
        ]);
        DB::table('city')->insert([
            'id' => 1679,
            'city_name' => 'Saint-Just-en-Chaussée',
        ]);
        DB::table('city')->insert([
            'id' => 1680,
            'city_name' => 'La Grand-Croix',
        ]);
        DB::table('city')->insert([
            'id' => 1681,
            'city_name' => 'Wervicq-Sud',
        ]);
        DB::table('city')->insert([
            'id' => 1682,
            'city_name' => 'Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1683,
            'city_name' => 'Malesherbes',
        ]);
        DB::table('city')->insert([
            'id' => 1684,
            'city_name' => 'Mornant',
        ]);
        DB::table('city')->insert([
            'id' => 1685,
            'city_name' => 'Machecoul',
        ]);
        DB::table('city')->insert([
            'id' => 1686,
            'city_name' => 'Le Blanc',
        ]);
        DB::table('city')->insert([
            'id' => 1687,
            'city_name' => 'Aussillon',
        ]);
        DB::table('city')->insert([
            'id' => 1688,
            'city_name' => 'Santes',
        ]);
        DB::table('city')->insert([
            'id' => 1689,
            'city_name' => 'Embrun',
        ]);
        DB::table('city')->insert([
            'id' => 1690,
            'city_name' => 'Lezoux',
        ]);
        DB::table('city')->insert([
            'id' => 1691,
            'city_name' => 'Aurec-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 1692,
            'city_name' => 'La Glacerie',
        ]);
        DB::table('city')->insert([
            'id' => 1693,
            'city_name' => 'Bethoncourt',
        ]);
        DB::table('city')->insert([
            'id' => 1694,
            'city_name' => 'Terrasson-Lavilledieu',
        ]);
        DB::table('city')->insert([
            'id' => 1695,
            'city_name' => 'Fenain',
        ]);
        DB::table('city')->insert([
            'id' => 1696,
            'city_name' => 'Le Barcarès',
        ]);
        DB::table('city')->insert([
            'id' => 1697,
            'city_name' => 'Valdoie',
        ]);
        DB::table('city')->insert([
            'id' => 1698,
            'city_name' => 'Saint-Genis-les-Ollières',
        ]);
        DB::table('city')->insert([
            'id' => 1699,
            'city_name' => 'Saint-Arnoult-en-Yvelines',
        ]);
        DB::table('city')->insert([
            'id' => 1700,
            'city_name' => 'Villennes-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 1701,
            'city_name' => 'Baud',
        ]);
        DB::table('city')->insert([
            'id' => 1702,
            'city_name' => 'Arpajon-sur-Cère',
        ]);
        DB::table('city')->insert([
            'id' => 1703,
            'city_name' => 'Saint-Martin-le-Vinoux',
        ]);
        DB::table('city')->insert([
            'id' => 1704,
            'city_name' => 'Saint-André-de-Sangonis',
        ]);
        DB::table('city')->insert([
            'id' => 1705,
            'city_name' => 'Grandchamps-des-Fontaines',
        ]);
        DB::table('city')->insert([
            'id' => 1706,
            'city_name' => 'Feytiat',
        ]);
        DB::table('city')->insert([
            'id' => 1707,
            'city_name' => 'Pulnoy',
        ]);
        DB::table('city')->insert([
            'id' => 1708,
            'city_name' => 'Charbonnières-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 1709,
            'city_name' => 'Saint-Quentin-Fallavier',
        ]);
        DB::table('city')->insert([
            'id' => 1710,
            'city_name' => 'Canéjan',
        ]);
        DB::table('city')->insert([
            'id' => 1711,
            'city_name' => 'Migné',
        ]);
        DB::table('city')->insert([
            'id' => 1712,
            'city_name' => 'Carry-le-Rouet',
        ]);
        DB::table('city')->insert([
            'id' => 1713,
            'city_name' => 'Chambourcy',
        ]);
        DB::table('city')->insert([
            'id' => 1714,
            'city_name' => 'Marly-la-Ville',
        ]);
        DB::table('city')->insert([
            'id' => 1715,
            'city_name' => 'Loon-Plage',
        ]);
        DB::table('city')->insert([
            'id' => 1716,
            'city_name' => 'Farébersviller',
        ]);
        DB::table('city')->insert([
            'id' => 1717,
            'city_name' => 'Saint-Denis-lès-Bourg',
        ]);
        DB::table('city')->insert([
            'id' => 1718,
            'city_name' => 'Bonchamp-lès-Laval',
        ]);
        DB::table('city')->insert([
            'id' => 1719,
            'city_name' => 'Jouars-Pontchartrain',
        ]);
        DB::table('city')->insert([
            'id' => 1720,
            'city_name' => 'Changé',
        ]);
        DB::table('city')->insert([
            'id' => 1721,
            'city_name' => 'Fronton',
        ]);
        DB::table('city')->insert([
            'id' => 1722,
            'city_name' => 'Mallemort',
        ]);
        DB::table('city')->insert([
            'id' => 1723,
            'city_name' => 'Altkirch',
        ]);
        DB::table('city')->insert([
            'id' => 1724,
            'city_name' => 'Delle',
        ]);
        DB::table('city')->insert([
            'id' => 1725,
            'city_name' => 'Mazan',
        ]);
        DB::table('city')->insert([
            'id' => 1726,
            'city_name' => 'Nouzonville',
        ]);
        DB::table('city')->insert([
            'id' => 1727,
            'city_name' => 'Nogent-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 1728,
            'city_name' => 'Octeville-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1729,
            'city_name' => 'Mortagne-sur-Sèvre',
        ]);
        DB::table('city')->insert([
            'id' => 1730,
            'city_name' => 'Plonéour-Lanvern',
        ]);
        DB::table('city')->insert([
            'id' => 1731,
            'city_name' => 'Saleilles',
        ]);
        DB::table('city')->insert([
            'id' => 1732,
            'city_name' => 'Elven',
        ]);
        DB::table('city')->insert([
            'id' => 1733,
            'city_name' => 'Noyal-sur-Vilaine',
        ]);
        DB::table('city')->insert([
            'id' => 1734,
            'city_name' => 'Mamers',
        ]);
        DB::table('city')->insert([
            'id' => 1735,
            'city_name' => 'Guer',
        ]);
        DB::table('city')->insert([
            'id' => 1736,
            'city_name' => 'Plescop',
        ]);
        DB::table('city')->insert([
            'id' => 1737,
            'city_name' => 'Izon',
        ]);
        DB::table('city')->insert([
            'id' => 1738,
            'city_name' => 'Héric',
        ]);
        DB::table('city')->insert([
            'id' => 1739,
            'city_name' => 'Sainghin-en-Weppes',
        ]);
        DB::table('city')->insert([
            'id' => 1740,
            'city_name' => 'Sarrians',
        ]);
        DB::table('city')->insert([
            'id' => 1741,
            'city_name' => 'Blanzy',
        ]);
        DB::table('city')->insert([
            'id' => 1742,
            'city_name' => 'Dives-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1743,
            'city_name' => 'Nieul-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1744,
            'city_name' => 'Vernaison',
        ]);
        DB::table('city')->insert([
            'id' => 1745,
            'city_name' => 'La Roquette-sur-Siagne',
        ]);
        DB::table('city')->insert([
            'id' => 1746,
            'city_name' => 'La Ville-aux-Dames',
        ]);
        DB::table('city')->insert([
            'id' => 1747,
            'city_name' => 'Marnaz',
        ]);
        DB::table('city')->insert([
            'id' => 1748,
            'city_name' => 'Carentan',
        ]);
        DB::table('city')->insert([
            'id' => 1749,
            'city_name' => 'Lardy',
        ]);
        DB::table('city')->insert([
            'id' => 1750,
            'city_name' => 'Esvres',
        ]);
        DB::table('city')->insert([
            'id' => 1751,
            'city_name' => 'Aire-sur-l’Adour',
        ]);
        DB::table('city')->insert([
            'id' => 1752,
            'city_name' => 'Trans-en-Provence',
        ]);
        DB::table('city')->insert([
            'id' => 1753,
            'city_name' => 'Maule',
        ]);
        DB::table('city')->insert([
            'id' => 1754,
            'city_name' => 'Saint-Zacharie',
        ]);
        DB::table('city')->insert([
            'id' => 1755,
            'city_name' => 'Liverdun',
        ]);
        DB::table('city')->insert([
            'id' => 1756,
            'city_name' => 'Saint-Symphorien-d’Ozon',
        ]);
        DB::table('city')->insert([
            'id' => 1757,
            'city_name' => 'Saint-Jory',
        ]);
        DB::table('city')->insert([
            'id' => 1758,
            'city_name' => 'La Primaube',
        ]);
        DB::table('city')->insert([
            'id' => 1759,
            'city_name' => 'Saint-Sébastien-de-Morsent',
        ]);
        DB::table('city')->insert([
            'id' => 1760,
            'city_name' => 'Prades-le-Lez',
        ]);
        DB::table('city')->insert([
            'id' => 1761,
            'city_name' => 'Vigneux-de-Bretagne',
        ]);
        DB::table('city')->insert([
            'id' => 1762,
            'city_name' => 'Vouneuil-sous-Biard',
        ]);
        DB::table('city')->insert([
            'id' => 1763,
            'city_name' => 'Fontenilles',
        ]);
        DB::table('city')->insert([
            'id' => 1764,
            'city_name' => 'Seichamps',
        ]);
        DB::table('city')->insert([
            'id' => 1765,
            'city_name' => 'Ternay',
        ]);
        DB::table('city')->insert([
            'id' => 1766,
            'city_name' => 'Revin',
        ]);
        DB::table('city')->insert([
            'id' => 1767,
            'city_name' => 'Thoiry',
        ]);
        DB::table('city')->insert([
            'id' => 1768,
            'city_name' => 'Vendenheim',
        ]);
        DB::table('city')->insert([
            'id' => 1769,
            'city_name' => 'Le Lavandou',
        ]);
        DB::table('city')->insert([
            'id' => 1770,
            'city_name' => 'Poussan',
        ]);
        DB::table('city')->insert([
            'id' => 1771,
            'city_name' => 'Parmain',
        ]);
        DB::table('city')->insert([
            'id' => 1772,
            'city_name' => 'Doullens',
        ]);
        DB::table('city')->insert([
            'id' => 1773,
            'city_name' => 'Vaison-la-Romaine',
        ]);
        DB::table('city')->insert([
            'id' => 1774,
            'city_name' => 'Dainville',
        ]);
        DB::table('city')->insert([
            'id' => 1775,
            'city_name' => 'Pierrefeu-du-Var',
        ]);
        DB::table('city')->insert([
            'id' => 1776,
            'city_name' => 'Magny-en-Vexin',
        ]);
        DB::table('city')->insert([
            'id' => 1777,
            'city_name' => 'Sainte-Sigolène',
        ]);
        DB::table('city')->insert([
            'id' => 1778,
            'city_name' => 'Naintré',
        ]);
        DB::table('city')->insert([
            'id' => 1779,
            'city_name' => 'Saint-Jorioz',
        ]);
        DB::table('city')->insert([
            'id' => 1780,
            'city_name' => 'Montbonnot-Saint-Martin',
        ]);
        DB::table('city')->insert([
            'id' => 1781,
            'city_name' => 'Clapiers',
        ]);
        DB::table('city')->insert([
            'id' => 1782,
            'city_name' => 'Riantec',
        ]);
        DB::table('city')->insert([
            'id' => 1783,
            'city_name' => 'Douvrin',
        ]);
        DB::table('city')->insert([
            'id' => 1784,
            'city_name' => 'Fleurance',
        ]);
        DB::table('city')->insert([
            'id' => 1785,
            'city_name' => 'Lannemezan',
        ]);
        DB::table('city')->insert([
            'id' => 1786,
            'city_name' => 'Haute-Goulaine',
        ]);
        DB::table('city')->insert([
            'id' => 1787,
            'city_name' => 'Coursan',
        ]);
        DB::table('city')->insert([
            'id' => 1788,
            'city_name' => 'Villefranche-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1789,
            'city_name' => 'Gauchy',
        ]);
        DB::table('city')->insert([
            'id' => 1790,
            'city_name' => 'Lucciana',
        ]);
        DB::table('city')->insert([
            'id' => 1791,
            'city_name' => 'Villemur-sur-Tarn',
        ]);
        DB::table('city')->insert([
            'id' => 1792,
            'city_name' => 'Mériel',
        ]);
        DB::table('city')->insert([
            'id' => 1793,
            'city_name' => 'Roquefort-la-Bédoule',
        ]);
        DB::table('city')->insert([
            'id' => 1794,
            'city_name' => 'Meyreuil',
        ]);
        DB::table('city')->insert([
            'id' => 1795,
            'city_name' => 'Aubignan',
        ]);
        DB::table('city')->insert([
            'id' => 1796,
            'city_name' => 'Dol-de-Bretagne',
        ]);
        DB::table('city')->insert([
            'id' => 1797,
            'city_name' => 'Montauban-de-Bretagne',
        ]);
        DB::table('city')->insert([
            'id' => 1798,
            'city_name' => 'Noves',
        ]);
        DB::table('city')->insert([
            'id' => 1799,
            'city_name' => 'Roye',
        ]);
        DB::table('city')->insert([
            'id' => 1800,
            'city_name' => 'Saint-Mitre-les-Remparts',
        ]);
        DB::table('city')->insert([
            'id' => 1801,
            'city_name' => 'Aixe-sur-Vienne',
        ]);
        DB::table('city')->insert([
            'id' => 1802,
            'city_name' => 'Ostricourt',
        ]);
        DB::table('city')->insert([
            'id' => 1803,
            'city_name' => 'Merville',
        ]);
        DB::table('city')->insert([
            'id' => 1804,
            'city_name' => 'La Wantzenau',
        ]);
        DB::table('city')->insert([
            'id' => 1805,
            'city_name' => 'Chevreuse',
        ]);
        DB::table('city')->insert([
            'id' => 1806,
            'city_name' => 'Saint-Georges-d’Orques',
        ]);
        DB::table('city')->insert([
            'id' => 1807,
            'city_name' => 'Donzère',
        ]);
        DB::table('city')->insert([
            'id' => 1808,
            'city_name' => 'Oraison',
        ]);
        DB::table('city')->insert([
            'id' => 1809,
            'city_name' => 'Combourg',
        ]);
        DB::table('city')->insert([
            'id' => 1810,
            'city_name' => 'Wasselonne',
        ]);
        DB::table('city')->insert([
            'id' => 1811,
            'city_name' => 'Calvisson',
        ]);
        DB::table('city')->insert([
            'id' => 1812,
            'city_name' => 'Saint-Galmier',
        ]);
        DB::table('city')->insert([
            'id' => 1813,
            'city_name' => 'Milhaud',
        ]);
        DB::table('city')->insert([
            'id' => 1814,
            'city_name' => 'Beaucourt',
        ]);
        DB::table('city')->insert([
            'id' => 1815,
            'city_name' => 'La Ferté-Macé',
        ]);
        DB::table('city')->insert([
            'id' => 1816,
            'city_name' => 'Pluneret',
        ]);
        DB::table('city')->insert([
            'id' => 1817,
            'city_name' => 'Montmorillon',
        ]);
        DB::table('city')->insert([
            'id' => 1818,
            'city_name' => 'Querqueville',
        ]);
        DB::table('city')->insert([
            'id' => 1819,
            'city_name' => 'La Gorgue',
        ]);
        DB::table('city')->insert([
            'id' => 1820,
            'city_name' => 'Bons-en-Chablais',
        ]);
        DB::table('city')->insert([
            'id' => 1821,
            'city_name' => 'Coulogne',
        ]);
        DB::table('city')->insert([
            'id' => 1822,
            'city_name' => 'Gannat',
        ]);
        DB::table('city')->insert([
            'id' => 1823,
            'city_name' => 'Bédarieux',
        ]);
        DB::table('city')->insert([
            'id' => 1824,
            'city_name' => 'Fayence',
        ]);
        DB::table('city')->insert([
            'id' => 1825,
            'city_name' => 'Carbonne',
        ]);
        DB::table('city')->insert([
            'id' => 1826,
            'city_name' => 'Mûrs-Erigné',
        ]);
        DB::table('city')->insert([
            'id' => 1827,
            'city_name' => 'Quincy-Voisins',
        ]);
        DB::table('city')->insert([
            'id' => 1828,
            'city_name' => 'Peypin',
        ]);
        DB::table('city')->insert([
            'id' => 1829,
            'city_name' => 'Lesparre-Médoc',
        ]);
        DB::table('city')->insert([
            'id' => 1830,
            'city_name' => 'Le Poinçonnet',
        ]);
        DB::table('city')->insert([
            'id' => 1831,
            'city_name' => 'La Crèche',
        ]);
        DB::table('city')->insert([
            'id' => 1832,
            'city_name' => 'Déchy',
        ]);
        DB::table('city')->insert([
            'id' => 1833,
            'city_name' => 'Fontenay-Trésigny',
        ]);
        DB::table('city')->insert([
            'id' => 1834,
            'city_name' => 'Furiani',
        ]);
        DB::table('city')->insert([
            'id' => 1835,
            'city_name' => 'Boé',
        ]);
        DB::table('city')->insert([
            'id' => 1836,
            'city_name' => 'Marennes',
        ]);
        DB::table('city')->insert([
            'id' => 1837,
            'city_name' => 'Vias',
        ]);
        DB::table('city')->insert([
            'id' => 1838,
            'city_name' => 'Le Valdahon',
        ]);
        DB::table('city')->insert([
            'id' => 1839,
            'city_name' => 'Trèbes',
        ]);
        DB::table('city')->insert([
            'id' => 1840,
            'city_name' => 'Saint-Memmie',
        ]);
        DB::table('city')->insert([
            'id' => 1841,
            'city_name' => 'Tournus',
        ]);
        DB::table('city')->insert([
            'id' => 1842,
            'city_name' => 'Courthézon',
        ]);
        DB::table('city')->insert([
            'id' => 1843,
            'city_name' => 'Aimargues',
        ]);
        DB::table('city')->insert([
            'id' => 1844,
            'city_name' => 'Fismes',
        ]);
        DB::table('city')->insert([
            'id' => 1845,
            'city_name' => 'Lannilis',
        ]);
        DB::table('city')->insert([
            'id' => 1846,
            'city_name' => 'Simiane-Collongue',
        ]);
        DB::table('city')->insert([
            'id' => 1847,
            'city_name' => 'Mouroux',
        ]);
        DB::table('city')->insert([
            'id' => 1848,
            'city_name' => 'Flines-lès-Raches',
        ]);
        DB::table('city')->insert([
            'id' => 1849,
            'city_name' => 'Solliès-Toucas',
        ]);
        DB::table('city')->insert([
            'id' => 1850,
            'city_name' => 'Port-la-Nouvelle',
        ]);
        DB::table('city')->insert([
            'id' => 1851,
            'city_name' => 'Briey',
        ]);
        DB::table('city')->insert([
            'id' => 1852,
            'city_name' => 'Erquinghem-Lys',
        ]);
        DB::table('city')->insert([
            'id' => 1853,
            'city_name' => 'Boulay-Moselle',
        ]);
        DB::table('city')->insert([
            'id' => 1854,
            'city_name' => 'Vaugneray',
        ]);
        DB::table('city')->insert([
            'id' => 1855,
            'city_name' => 'Wormhout',
        ]);
        DB::table('city')->insert([
            'id' => 1856,
            'city_name' => 'Ernée',
        ]);
        DB::table('city')->insert([
            'id' => 1857,
            'city_name' => 'Le Puy-Sainte-Réparade',
        ]);
        DB::table('city')->insert([
            'id' => 1858,
            'city_name' => 'Dompierre-sur-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1859,
            'city_name' => 'La Chevrolière',
        ]);
        DB::table('city')->insert([
            'id' => 1860,
            'city_name' => 'Saint-Denis-de-Pile',
        ]);
        DB::table('city')->insert([
            'id' => 1861,
            'city_name' => 'Viarmes',
        ]);
        DB::table('city')->insert([
            'id' => 1862,
            'city_name' => 'La Chapelle-Basse-Mer',
        ]);
        DB::table('city')->insert([
            'id' => 1863,
            'city_name' => 'Bohain-en-Vermandois',
        ]);
        DB::table('city')->insert([
            'id' => 1864,
            'city_name' => 'Arnage',
        ]);
        DB::table('city')->insert([
            'id' => 1865,
            'city_name' => 'Calvi',
        ]);
        DB::table('city')->insert([
            'id' => 1866,
            'city_name' => 'Saint-Georges-de-Didonne',
        ]);
        DB::table('city')->insert([
            'id' => 1867,
            'city_name' => 'Saint-Pierre-d’Irube',
        ]);
        DB::table('city')->insert([
            'id' => 1868,
            'city_name' => 'Wallers',
        ]);
        DB::table('city')->insert([
            'id' => 1869,
            'city_name' => 'Sauvian',
        ]);
        DB::table('city')->insert([
            'id' => 1870,
            'city_name' => 'Saint-Cannat',
        ]);
        DB::table('city')->insert([
            'id' => 1871,
            'city_name' => 'Guînes',
        ]);
        DB::table('city')->insert([
            'id' => 1872,
            'city_name' => 'Les Avenières',
        ]);
        DB::table('city')->insert([
            'id' => 1873,
            'city_name' => 'Chagny',
        ]);
        DB::table('city')->insert([
            'id' => 1874,
            'city_name' => 'Fenouillet',
        ]);
        DB::table('city')->insert([
            'id' => 1875,
            'city_name' => 'Eschau',
        ]);
        DB::table('city')->insert([
            'id' => 1876,
            'city_name' => 'Ferrière-la-Grande',
        ]);
        DB::table('city')->insert([
            'id' => 1877,
            'city_name' => 'Audruicq',
        ]);
        DB::table('city')->insert([
            'id' => 1878,
            'city_name' => 'Chatuzange-le-Goubet',
        ]);
        DB::table('city')->insert([
            'id' => 1879,
            'city_name' => 'Gray',
        ]);
        DB::table('city')->insert([
            'id' => 1880,
            'city_name' => 'Sausheim',
        ]);
        DB::table('city')->insert([
            'id' => 1881,
            'city_name' => 'Montrond-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 1882,
            'city_name' => 'Plouay',
        ]);
        DB::table('city')->insert([
            'id' => 1883,
            'city_name' => 'Pont-Évêque',
        ]);
        DB::table('city')->insert([
            'id' => 1884,
            'city_name' => 'Séméac',
        ]);
        DB::table('city')->insert([
            'id' => 1885,
            'city_name' => 'Mouy',
        ]);
        DB::table('city')->insert([
            'id' => 1886,
            'city_name' => 'Le Boulou',
        ]);
        DB::table('city')->insert([
            'id' => 1887,
            'city_name' => 'Vergèze',
        ]);
        DB::table('city')->insert([
            'id' => 1888,
            'city_name' => 'Nègrepelisse',
        ]);
        DB::table('city')->insert([
            'id' => 1889,
            'city_name' => 'Saint-Martin-de-Seignanx',
        ]);
        DB::table('city')->insert([
            'id' => 1890,
            'city_name' => 'Rabastens',
        ]);
        DB::table('city')->insert([
            'id' => 1891,
            'city_name' => 'Marsannay-la-Côte',
        ]);
        DB::table('city')->insert([
            'id' => 1892,
            'city_name' => 'Ensuès-la-Redonne',
        ]);
        DB::table('city')->insert([
            'id' => 1893,
            'city_name' => 'Coublevie',
        ]);
        DB::table('city')->insert([
            'id' => 1894,
            'city_name' => 'Decazeville',
        ]);
        DB::table('city')->insert([
            'id' => 1895,
            'city_name' => 'Bannalec',
        ]);
        DB::table('city')->insert([
            'id' => 1896,
            'city_name' => 'Moulins-lès-Metz',
        ]);
        DB::table('city')->insert([
            'id' => 1897,
            'city_name' => 'Roquemaure',
        ]);
        DB::table('city')->insert([
            'id' => 1898,
            'city_name' => 'Ambazac',
        ]);
        DB::table('city')->insert([
            'id' => 1899,
            'city_name' => 'Montpon-Ménestérol',
        ]);
        DB::table('city')->insert([
            'id' => 1900,
            'city_name' => 'Briec',
        ]);
        DB::table('city')->insert([
            'id' => 1901,
            'city_name' => 'La Cadière-d’Azur',
        ]);
        DB::table('city')->insert([
            'id' => 1902,
            'city_name' => 'Ondres',
        ]);
        DB::table('city')->insert([
            'id' => 1903,
            'city_name' => 'Sillingy',
        ]);
        DB::table('city')->insert([
            'id' => 1904,
            'city_name' => 'Genlis',
        ]);
        DB::table('city')->insert([
            'id' => 1905,
            'city_name' => 'Saint-Laurent-de-Mure',
        ]);
        DB::table('city')->insert([
            'id' => 1906,
            'city_name' => 'Gan',
        ]);
        DB::table('city')->insert([
            'id' => 1907,
            'city_name' => 'Reichshoffen',
        ]);
        DB::table('city')->insert([
            'id' => 1908,
            'city_name' => 'Kembs',
        ]);
        DB::table('city')->insert([
            'id' => 1909,
            'city_name' => 'Pouzauges',
        ]);
        DB::table('city')->insert([
            'id' => 1910,
            'city_name' => 'Saint-Pierre-lès-Nemours',
        ]);
        DB::table('city')->insert([
            'id' => 1911,
            'city_name' => 'Sigean',
        ]);
        DB::table('city')->insert([
            'id' => 1912,
            'city_name' => 'Nuits-Saint-Georges',
        ]);
        DB::table('city')->insert([
            'id' => 1913,
            'city_name' => 'Les Essarts',
        ]);
        DB::table('city')->insert([
            'id' => 1914,
            'city_name' => 'Saint-Gervais-les-Bains',
        ]);
        DB::table('city')->insert([
            'id' => 1915,
            'city_name' => 'Bordères-sur-l’Échez',
        ]);
        DB::table('city')->insert([
            'id' => 1916,
            'city_name' => 'Belin-Béliet',
        ]);
        DB::table('city')->insert([
            'id' => 1917,
            'city_name' => 'Arradon',
        ]);
        DB::table('city')->insert([
            'id' => 1918,
            'city_name' => 'Saint-Martin-d’Uriage',
        ]);
        DB::table('city')->insert([
            'id' => 1919,
            'city_name' => 'Jonquières',
        ]);
        DB::table('city')->insert([
            'id' => 1920,
            'city_name' => 'La Roque-d’Anthéron',
        ]);
        DB::table('city')->insert([
            'id' => 1921,
            'city_name' => 'Garéoult',
        ]);
        DB::table('city')->insert([
            'id' => 1922,
            'city_name' => 'Lambres-lès-Douai',
        ]);
        DB::table('city')->insert([
            'id' => 1923,
            'city_name' => 'Aiffres',
        ]);
        DB::table('city')->insert([
            'id' => 1924,
            'city_name' => 'Oye-Plage',
        ]);
        DB::table('city')->insert([
            'id' => 1925,
            'city_name' => 'Ventabren',
        ]);
        DB::table('city')->insert([
            'id' => 1926,
            'city_name' => 'Étoile-sur-Rhône',
        ]);
        DB::table('city')->insert([
            'id' => 1927,
            'city_name' => 'Chazelles-sur-Lyon',
        ]);
        DB::table('city')->insert([
            'id' => 1928,
            'city_name' => 'Neuville-de-Poitou',
        ]);
        DB::table('city')->insert([
            'id' => 1929,
            'city_name' => 'Le Barp',
        ]);
        DB::table('city')->insert([
            'id' => 1930,
            'city_name' => 'Ille-sur-Têt',
        ]);
        DB::table('city')->insert([
            'id' => 1931,
            'city_name' => 'Gévezé',
        ]);
        DB::table('city')->insert([
            'id' => 1932,
            'city_name' => 'Valence',
        ]);
        DB::table('city')->insert([
            'id' => 1933,
            'city_name' => 'Saint-Chéron',
        ]);
        DB::table('city')->insert([
            'id' => 1934,
            'city_name' => 'Souppes-sur-Loing',
        ]);
        DB::table('city')->insert([
            'id' => 1935,
            'city_name' => 'Saint-Astier',
        ]);
        DB::table('city')->insert([
            'id' => 1936,
            'city_name' => 'Mulsanne',
        ]);
        DB::table('city')->insert([
            'id' => 1937,
            'city_name' => 'Beaucouzé',
        ]);
        DB::table('city')->insert([
            'id' => 1938,
            'city_name' => 'Nueil-les-Aubiers',
        ]);
        DB::table('city')->insert([
            'id' => 1939,
            'city_name' => 'Aubigny-sur-Nère',
        ]);
        DB::table('city')->insert([
            'id' => 1940,
            'city_name' => 'Ploumagoar',
        ]);
        DB::table('city')->insert([
            'id' => 1941,
            'city_name' => 'Champagne-sur-Oise',
        ]);
        DB::table('city')->insert([
            'id' => 1942,
            'city_name' => 'Cancale',
        ]);
        DB::table('city')->insert([
            'id' => 1943,
            'city_name' => 'Brébières',
        ]);
        DB::table('city')->insert([
            'id' => 1944,
            'city_name' => 'Commercy',
        ]);
        DB::table('city')->insert([
            'id' => 1945,
            'city_name' => 'Saint-Privat-des-Vieux',
        ]);
        DB::table('city')->insert([
            'id' => 1946,
            'city_name' => 'Drusenheim',
        ]);
        DB::table('city')->insert([
            'id' => 1947,
            'city_name' => 'Grand-Champ',
        ]);
        DB::table('city')->insert([
            'id' => 1948,
            'city_name' => 'Piolenc',
        ]);
        DB::table('city')->insert([
            'id' => 1949,
            'city_name' => 'Trilport',
        ]);
        DB::table('city')->insert([
            'id' => 1950,
            'city_name' => 'Plouhinec',
        ]);
        DB::table('city')->insert([
            'id' => 1951,
            'city_name' => 'Châtillon-sur-Seine',
        ]);
        DB::table('city')->insert([
            'id' => 1952,
            'city_name' => 'Faulquemont',
        ]);
        DB::table('city')->insert([
            'id' => 1953,
            'city_name' => 'Viry',
        ]);
        DB::table('city')->insert([
            'id' => 1954,
            'city_name' => 'Mirecourt',
        ]);
        DB::table('city')->insert([
            'id' => 1955,
            'city_name' => 'Saint-Étienne-au-Mont',
        ]);
        DB::table('city')->insert([
            'id' => 1956,
            'city_name' => 'Cucq',
        ]);
        DB::table('city')->insert([
            'id' => 1957,
            'city_name' => 'Vic-le-Comte',
        ]);
        DB::table('city')->insert([
            'id' => 1958,
            'city_name' => 'Condat-sur-Vienne',
        ]);
        DB::table('city')->insert([
            'id' => 1959,
            'city_name' => 'Missillac',
        ]);
        DB::table('city')->insert([
            'id' => 1960,
            'city_name' => 'Penmarch',
        ]);
        DB::table('city')->insert([
            'id' => 1961,
            'city_name' => 'Bédarrides',
        ]);
        DB::table('city')->insert([
            'id' => 1962,
            'city_name' => 'Longuyon',
        ]);
        DB::table('city')->insert([
            'id' => 1963,
            'city_name' => 'Marquise',
        ]);
        DB::table('city')->insert([
            'id' => 1964,
            'city_name' => 'La Grand-Combe',
        ]);
        DB::table('city')->insert([
            'id' => 1965,
            'city_name' => 'Châteaulin',
        ]);
        DB::table('city')->insert([
            'id' => 1966,
            'city_name' => 'Mouguerre',
        ]);
        DB::table('city')->insert([
            'id' => 1967,
            'city_name' => 'Bléré',
        ]);
        DB::table('city')->insert([
            'id' => 1968,
            'city_name' => 'Sully-sur-Loire',
        ]);
        DB::table('city')->insert([
            'id' => 1969,
            'city_name' => 'Rosheim',
        ]);
        DB::table('city')->insert([
            'id' => 1970,
            'city_name' => 'Château-Arnoux-Saint-Auban',
        ]);
        DB::table('city')->insert([
            'id' => 1971,
            'city_name' => 'La Ferrière',
        ]);
        DB::table('city')->insert([
            'id' => 1972,
            'city_name' => 'Rocbaron',
        ]);
        DB::table('city')->insert([
            'id' => 1973,
            'city_name' => 'Scaër',
        ]);
        DB::table('city')->insert([
            'id' => 1974,
            'city_name' => 'Rambervillers',
        ]);
        DB::table('city')->insert([
            'id' => 1975,
            'city_name' => 'Saint-Michel-Chef-Chef',
        ]);
        DB::table('city')->insert([
            'id' => 1976,
            'city_name' => 'Decize',
        ]);
        DB::table('city')->insert([
            'id' => 1977,
            'city_name' => 'Le Rove',
        ]);
        DB::table('city')->insert([
            'id' => 1978,
            'city_name' => 'Ligné',
        ]);
        DB::table('city')->insert([
            'id' => 1979,
            'city_name' => 'Saint-Gilles',
        ]);
        DB::table('city')->insert([
            'id' => 1980,
            'city_name' => 'La Balme-de-Sillingy',
        ]);
        DB::table('city')->insert([
            'id' => 1981,
            'city_name' => 'Mazé',
        ]);
        DB::table('city')->insert([
            'id' => 1982,
            'city_name' => 'Saint-Pourçain-sur-Sioule',
        ]);
        DB::table('city')->insert([
            'id' => 1983,
            'city_name' => 'Mourmelon-le-Grand',
        ]);
        DB::table('city')->insert([
            'id' => 1984,
            'city_name' => 'Briare',
        ]);
        DB::table('city')->insert([
            'id' => 1985,
            'city_name' => 'Le Pellerin',
        ]);
        DB::table('city')->insert([
            'id' => 1986,
            'city_name' => 'Saint-Germain-du-Puy',
        ]);
        DB::table('city')->insert([
            'id' => 1987,
            'city_name' => 'Locmaria-Plouzané',
        ]);
        DB::table('city')->insert([
            'id' => 1988,
            'city_name' => 'Villeneuve-sur-Yonne',
        ]);
        DB::table('city')->insert([
            'id' => 1989,
            'city_name' => 'Plessé',
        ]);
        DB::table('city')->insert([
            'id' => 1990,
            'city_name' => 'Grans',
        ]);
        DB::table('city')->insert([
            'id' => 1991,
            'city_name' => 'Bessan',
        ]);
        DB::table('city')->insert([
            'id' => 1992,
            'city_name' => 'Conches-en-Ouche',
        ]);
        DB::table('city')->insert([
            'id' => 1993,
            'city_name' => 'Cuges-les-Pins',
        ]);
        DB::table('city')->insert([
            'id' => 1994,
            'city_name' => 'Peyrolles-en-Provence',
        ]);
        DB::table('city')->insert([
            'id' => 1995,
            'city_name' => 'Pourrières',
        ]);
        DB::table('city')->insert([
            'id' => 1996,
            'city_name' => 'Le Bourget-du-Lac',
        ]);
        DB::table('city')->insert([
            'id' => 1997,
            'city_name' => 'Champniers',
        ]);
        DB::table('city')->insert([
            'id' => 1998,
            'city_name' => 'Villers-le-Lac',
        ]);
        DB::table('city')->insert([
            'id' => 1999,
            'city_name' => 'Guémené-Penfao',
        ]);
        DB::table('city')->insert([
            'id' => 2000,
            'city_name' => 'Villette-d’Anthon',
        ]);
        DB::table('city')->insert([
            'id' => 2001,
            'city_name' => 'Parigné-l’Évêque',
        ]);
        DB::table('city')->insert([
            'id' => 2002,
            'city_name' => 'Servian',
        ]);
        DB::table('city')->insert([
            'id' => 2003,
            'city_name' => 'Luynes',
        ]);
        DB::table('city')->insert([
            'id' => 2004,
            'city_name' => 'La Souterraine',
        ]);
        DB::table('city')->insert([
            'id' => 2005,
            'city_name' => 'Laillé',
        ]);
        DB::table('city')->insert([
            'id' => 2006,
            'city_name' => 'Florensac',
        ]);
        DB::table('city')->insert([
            'id' => 2007,
            'city_name' => 'Forcalquier',
        ]);
        DB::table('city')->insert([
            'id' => 2008,
            'city_name' => 'Sainte-Marie-aux-Mines',
        ]);
        DB::table('city')->insert([
            'id' => 2009,
            'city_name' => 'Saint-Mars-du-Désert',
        ]);
        DB::table('city')->insert([
            'id' => 2010,
            'city_name' => 'Muzillac',
        ]);
        DB::table('city')->insert([
            'id' => 2011,
            'city_name' => 'La Garnache',
        ]);
        DB::table('city')->insert([
            'id' => 2012,
            'city_name' => 'Gruissan',
        ]);
        DB::table('city')->insert([
            'id' => 2013,
            'city_name' => 'Cazouls-lès-Béziers',
        ]);
        DB::table('city')->insert([
            'id' => 2014,
            'city_name' => 'Bitche',
        ]);
        DB::table('city')->insert([
            'id' => 2015,
            'city_name' => 'Tourves',
        ]);
        DB::table('city')->insert([
            'id' => 2016,
            'city_name' => 'Montbard',
        ]);
        DB::table('city')->insert([
            'id' => 2017,
            'city_name' => 'Salbris',
        ]);
        DB::table('city')->insert([
            'id' => 2018,
            'city_name' => 'Lacanau',
        ]);
        DB::table('city')->insert([
            'id' => 2019,
            'city_name' => 'Évron',
        ]);




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city');
    }
}
