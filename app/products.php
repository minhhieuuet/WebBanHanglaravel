<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
    protected $table="products";
    public function bill_detail()
    {
    	return $this->hasMany('App\bill_detail','id_product','id');
    }
    public function type_products()
    {
    	return $this->belongsTo('App\type_products','id_type','id');
    }
}
