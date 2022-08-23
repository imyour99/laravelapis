<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agency extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    use HasFactory;
    protected $table = 'llx_agency';

    protected $fillable = [
        'agencenom',
        'agenceaddress',
        'agencebat',
        'agencecity',
        'postal_code',
        'responsible',
        'telagency',
        'telServiceclient',
        'emailagence',
        'telresponsible',
        'emailesponsible',
        'status',
    ];


    public function agencyevents(): HasMany
    {
        return $this->hasMany(llx_agency_events::class, 'agency_id', 'id');
    }
    public function agencyPhoto(): HasMany
    {
        return $this->hasMany(AgencyImage::class, 'agency_id', 'id');
    }
    public function agencycomments(): HasMany
    {
        return $this->hasMany(llx_agecy_comment::class, 'agency_id', 'id');
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    //    protected $hidden = [
    //        'password',
    //        'remember_token',
    //    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    //    protected $casts = [
    //        'email_verified_at' => 'datetime',
    //    ];
}
