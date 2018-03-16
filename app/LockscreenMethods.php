<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

namespace Rangoo\Lockscreen\Traits;
use Rangoo\Lockscreen\Requests\LockscreenRequest;

class LockscreenMethods extends Model
{
    trait LockscreenMethods {
	public function lock() {
		session()->put('lockscreen', 1);
		$redirectUrl = '/lockscreen';
		if(request()->expectsJson())
			return response()->json([
				'locked' => true,
				'suggestUrl' => $redirectUrl
			]);
		return redirect($redirectUrl);
	}
	public function unlock(LockscreenRequest $request) {
		session()->put('lockscreen', 0);
		return redirect('/user');
	}
	public function showUnlockForm() {
		return view('lockscreen');
	}
}

}

