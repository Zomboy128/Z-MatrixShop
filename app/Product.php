<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function users();
	{
        return $this->belongsTo('App\User');
	}

    public function products()
    {
    	return $this->belongsTo('App\Brand')->withTimestamps();
    }

    public function brands()
    {
    	return $this->belongsTo('App\Category')->withTimestamps();
    }
}
