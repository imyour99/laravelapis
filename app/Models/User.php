<?php

namespace App\Models;

use App\Notifications\ResetPasswordNotification;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telephone',
        'profile_img',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }


    public function sendPasswordResetNotification($token)
    {
        $email = $this->email;
        $url = url('api/v1/reset-password?' . $token . '&' .$email);
        $this->notify(new ResetPasswordNotification($url));
    }

    public function interventions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Interventions::class, 'assignee_id', 'id');
    }


    /**
     * Get the collaboration info for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function collaboration(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Collaboration::class, 'collaboration_id', 'id');
    }


    /**
     * Check if the current model is a team leader.
     *
     * @return bool
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function isTeamLeader(): bool
    {
        return $this->role_id == 5;
    }

    public static function teamMembers()
    {
        return (new static)->where('role_id', '=', 4)->get();
    }

}
