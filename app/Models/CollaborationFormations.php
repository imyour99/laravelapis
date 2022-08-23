<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationFormations extends Model
{
    use HasFactory;
    protected $table = 'llx_collaboration_formations';

    protected $fillable = [
        'collaboration_id',
        'formation_name',
        'date_obtention',
        'end_date',
        'permis_b',
        'permis_eb',
        'permis_c',
        'permis_ec',
        'img1',
        'img1_name',
        'img2',
        'img2_name',
        'img3',
        'img3_name',
        'img4',
        'img4_name',

    ];
}
