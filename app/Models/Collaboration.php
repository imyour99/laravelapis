<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{

    use HasFactory;
    protected $table = 'llx_collaboration';

    protected $fillable = [
        'nom',
        'profile_img',
        'prenom',
        'login',
        'email',
        'mot_de_passe',
        'confirmer_mot_de_passe',
        'adresse',
        'complément_d_adresse',
        'code_postal',
        'ville',
        'telephone',
        'portable',
        'numero_de_securile_sociale'

    ];

    /**
     * Get the user collaboration data.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     * @author Ali Shaikh <ai.shaikh@itfaq.global>
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'collaboration_id');
    }

    /**
     * Get the collaboration contract for this collaboration.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function contract(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CollaborationContact::class, 'collaboration_id');
    }


}
