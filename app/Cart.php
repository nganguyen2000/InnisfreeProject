<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "carts";
    public function products(){
        return $this->hasMany("App\Product","id","product_id");
    }
    public function user()
    {
        return $this->hasMany('App\User');
    }
    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

}
