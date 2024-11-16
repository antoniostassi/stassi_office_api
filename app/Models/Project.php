<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'type',
        'completed'
    ];


    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class); // Returns all invoices related to project
    }
}
