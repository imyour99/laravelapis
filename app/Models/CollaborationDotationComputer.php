<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationDotationComputer extends Model
{
    use HasFactory;


    protected $table = 'llx_collaboration_dotation_computer';

    protected $fillable = [
        'collaboration_id',
        'materiel_name',
        'obtained',
        'img1',
        'img1_name',
        'img2',
        'img2_name'

    ];
}
