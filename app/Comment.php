<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['cmBody', 'cmName', 'cmEmail'];

    protected $guarded = [
        'id'
    ];
    
    public function card()
    {
        return $this->belongsTo(\App\Card::class);
    }
}
