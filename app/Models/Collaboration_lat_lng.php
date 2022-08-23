<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration_lat_lng extends Model
{
    use HasFactory;
    protected $table = 'llx_collaboration_lat_lng';

    protected $fillable = [
        'collaboration_id',
        'lat',
        'lng',
    ];


    public function collaboration()
    {
        return $this->belongsTo(Collaboration::class,'collaboration_id');
    }
}
