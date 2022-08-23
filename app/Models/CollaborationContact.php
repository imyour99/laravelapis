<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationContact extends Model
{
    use HasFactory;

    protected $table = 'llx_collaboration_contract';

    protected $fillable = [
        'collaboration_id',
        'poste',
        'contract_type',
        'sub_contract_type',
        'agence',
        'nni',
        'habilitation',
        'end_date_authorization',
        'gross_hourly_rate',
        'gross_monthly_salary',
        'construction_card',
        'benefits_kind',
        'situation_before_hiring',
        'diploma',
        'team_lead_id'

    ];

    public function agency()
    {
        return $this->belongsTo(Agency::class, 'id', 'id');
    }

    public function agence()
    {
        return $this->belongsTo(Agency::class, 'id', 'id');
    }

    /**
     * Get the collaboration that owns the contract.
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
     * Get the team lead for the technicien that is assigned to the contract.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     * @author Ali Shaikh <ali.shaikh@itfaq.global>
     */
    public function teamLeader()
    {
        return $this->hasOne(User::class, 'id', 'team_lead_id');
    }
}
