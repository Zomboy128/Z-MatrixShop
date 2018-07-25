<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brands()
    {
    	return $this->belongsTo('App\Brand','brand_id');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
