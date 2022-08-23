<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationDonneesPersonelles extends Model
{
    use HasFactory;

    protected $table = 'llx_collaboration_donnees';

    protected $fillable = [
        'collaboration_id',
        'social_security_number',
        'groupe_sanguin',
        'nom',
        'prenom',
        'contact',
        'mutuelle_status',
        'adults_insurance',
        'children_insurance',
        'antecedent_medicaux',
        'taille_tShirt',
        'taille_pantalon',
        'taille_chaussures',
        'taille_veste',
        'taille_parka',
        'taille_casque'

    ];
}
