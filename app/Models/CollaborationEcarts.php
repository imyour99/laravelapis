<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationEcarts extends Model
{
    use HasFactory;
    protected $table = 'collaboration_ecarts';

    protected $fillable = [
        'collaboration_id',
        'motif',
        'repeter',
        'debut',
        'fin',
        'notifier',
        'recurrence',
        'description',
        'img1',
        'img1_name',
        'img2',
        'img2_name',
        'img3',
        'img3_name',
        'img4',
        'img4_name'

    ];
}
