<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationDotationVehicle extends Model
{
    use HasFactory;


    protected $table = 'llx_collaboration_dotation_vehicle';

    protected $fillable = [
        'collaboration_id',
        'type_vehicle',
        'obtained',
        'model',
        'number_plate',
        'img1',
        'img1_name',

    ];
}
