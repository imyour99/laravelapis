<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class llx_agecy_comment extends Model
{
    use HasFactory;
    protected $table = 'llx_agency_comments';

    protected $fillable = [
        'topic',
        'description',
        'agency_id',
    ];
}
