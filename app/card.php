<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    protected $guarded = [
        'id'
    ];
    public function user()
    {

        return $this->belongsTo(card::class);
    }
    public function comments()
    {

        return $this->hasMany(comment::class);
    }

}
