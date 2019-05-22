<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
	// Fillable example
	// protected $fillable = ['name', 'email', 'active'];

	// Guarded example
	protected $guarded = [];

    public function getActiveAtrribute($attribute)
    {
        return [
            0 => 'Inactive',
            1 => 'Active',

        ][$attribute];
    }

    public function scopeActive($query)
    {
    	return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
    	return $query->where('active', 0);
    }

    public function company()
    {
    	return $this->belongsTo(Company::class);
    }
}
