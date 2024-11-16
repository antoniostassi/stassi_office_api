<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    //
    protected $fillable = [
        'title',
        'description'
    ];

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class); // Returns all invoices related to enterprise
    }
}
