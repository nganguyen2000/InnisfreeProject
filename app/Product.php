<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo("App\Category","category_id","id");
    }
    public function products(){
        return $this->hashMany("App\Product","category_id","id");
    }
}
