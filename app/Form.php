<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	// Fillable example
		// protected $fillable = ['name', 'email', 'active'];

	// Guarded example
	protected $guarded = [];

	public function scopeActive($query)
	{
		return $query->where('active', 1);
	}

	public function scopeInactive($query)
	{
		return $query->where('active', 0);
	}

	public function training()
	{
		return $this->belongsTo(Form::class);
	}
}

