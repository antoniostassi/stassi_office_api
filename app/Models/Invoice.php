<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //

    protected $fillable = [
        'enterprise',
        'description',
        'amount',
        'received',
        'project',
        'creation_date'
    ];


    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    public function enterprise(): BelongsTo
    {
        return $this->belongsTo(Enterprise::class);
    }
}
