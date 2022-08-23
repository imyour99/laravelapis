<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyImage extends Model
{
    use HasFactory;
    protected $table = 'agency_images';
    protected $fillable = [
        'pic_name',
        'pic_url',
        'pic_pos',
        'agency_id',
    ];
}
