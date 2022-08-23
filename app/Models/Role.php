<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Return the users associated with the given role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }

}
