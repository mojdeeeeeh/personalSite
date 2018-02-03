<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $guarded = [];
    public $timestamps = false;

    public function cards()
    {
    	return $this->belongsToMany(\App\Card::class);
    }

    /**
     * Serach for a tag or create a new record
     */
    public static function readOrInsert ($value)
    {
    	$tag = \App\Tag::where('value', $value)
						->first();

		if(is_null ($tag))
		{
			$tag = \App\Tag::create([
				'value' => $value
			]);
		}

		return $tag;
    }
}
