<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnershipType extends Model
{
    //
	protected $fillable = ['type'];

	public function school()
	{
		return $this->belongsTo('School');
	}
}
