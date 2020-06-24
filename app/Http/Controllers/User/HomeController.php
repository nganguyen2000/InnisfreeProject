<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Detail;
use App\Category;

class HomeController extends Controller
{
    function index(){
        $products =Product::all();
        return view("user.home",["products"=>$products]);
    }
    function detail($id, Request $request){
        $details = Detail::where('product_id',$id)->first();
        $products = Product::find($id);
        
        
        return view("user.detail",["product"=>$products,"detail"=>$details]);

    }
}
