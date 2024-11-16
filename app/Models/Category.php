<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'title',
        'description'
    ];

    public function outgoings() : hasMany
    {
        return $this->hasMany(Outgoing::class); // Returns all outgoings related to category
    }
}
