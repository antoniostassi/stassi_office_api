<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    //

    protected $fillable = [
        'description',
        'amount',
        'received',
        'project_id',
        'enterprise_id',
        'creation_date'
    ];

    protected $with = [
        'enterprise',
        'project'
    ];

    public function project() : BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function enterprise() : BelongsTo
    {
        return $this->belongsTo(Enterprise::class);
    }
}
