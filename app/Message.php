<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $fillable = ['message'];

	public function user() {
		$this->belongsTo("User::class");
	}

	public function checkSelfMsg()
    {
        return $this->user_id === auth()->user()->id;
    }
}
