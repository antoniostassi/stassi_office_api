<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outgoing extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'amount'
    ];

    public function category() : belongsTo 
    {
        return $this->belongsTo(Category::class); // Return specific category related to Outgoing.
    }
}
