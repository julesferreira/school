<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //
	protected $fillable = ['name', 'phone', 'ownership_type_id'];

	public function ownershipType()
	{
		return $this->hasOne('OwnershipType');
	}
	
}
