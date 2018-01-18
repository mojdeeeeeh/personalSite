<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = ['cmBody', 'cmName', 'cmEmail'];

    protected $guarded = [
        'id'
    ];
    public function card()
    {

        return $this->belongsTo(Card::class);
    }
}
