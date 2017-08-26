<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    //
    protected $table="bill_deltail";
    public function bills()
    {
    	return $this->belongsTo('App\bills','id_bill','id');
    }
    public function products()
    {
    	return $this->belongsTo('App\products','id_product','id');
    }
}
