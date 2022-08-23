<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketsAssigne extends Model
{
    use HasFactory;

    protected $table = 'markets_assigne';

    protected $fillable = [
        'collaboration_id',
        'markets',
        'agency_id'

    ];
}
