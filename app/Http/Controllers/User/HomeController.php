<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    function index(){
        $products = DB::table('products')->get();
        return view("user.home",["products"=>$products]);
    }
}
