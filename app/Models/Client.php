<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    use HasFactory;
    protected $table = 'llx_client';

    protected $fillable = [
        'nom',
        'pdl',
        'telephone',

        'telephone_fixe',
        'telephone_pro',
        'telephone_portable2',
        'adress',
        'villa',
        'code',

        'code',
        'code',
        'code',
        'code',
        'code',
        'code',


        'status',
        'title',
        'prenom',
        'email',
        'status',
        'dev_typed',
        'dev_duree',
        'dev_maille',
        'dev_contrat',
        'dev_du',
        'dev_au',
        'dev_numero',
        'dev_r_voie',
        'dev_zdd',
        'dev_code',
        'dev_commune',
        'dev_note',
        'dev_l_voie',
        'tech_categorie',
        'tech_tarif',
        'tech_puissance_souscrite',
        'tech_organe_de_coupure',
        'tech_produkteur',
        'tech_type',
        'tech_matricule',
        'tech_nbfils',
        'tech_num_de_serie',
        'tech_nature',
        'tech_marque',
        'tech_intensite',
        'tech_plage',
        'latitude',
        'longitude',
        'status',

    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    //    protected $hidden = [
    //        'password',
    //        'remember_token',
    //    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    //    protected $casts = [
    //        'email_verified_at' => 'datetime',
    //    ];
}
