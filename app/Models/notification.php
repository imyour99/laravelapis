<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class notification extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasFactory;
    protected $table = 'llx_notification';
    protected $fillable = [
        'id',
        'client_id',
        'nature',
        'criticality',
        'collaborator',
        'description',
        'img1',
        'img2',
        'img3',
        'img4',
    ];
}
