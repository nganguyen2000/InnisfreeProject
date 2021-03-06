<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo("App\Category","id","category_id");
    }
    public function products(){
        return $this->hashMany("App\Product","category_id","id");
    }
    public function detail(){
        return $this->hasOne("App\Detail","id","product_id");
    }
    public function getDisplayPrice(){
        $formatedPrice = number_format($this->price,0,',','.');
        return $formatedPrice."đ";
    }
    public function getDisplayOldPrice(){
        $formatedPrice = number_format($this->oldPrice,0,',','.');
        return $formatedPrice."đ";
       }
}
