<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function products(){
        return $this->hasMany("App\Product");
    }
   
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }
}
