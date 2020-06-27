<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Product;
use App\Detail;
use App\Category;
use App\Cart;
use App\User;


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
    function addtocart($id, Request $request){
        $cart = Cart::where('product_id',$id)->first();
        $id_user=Auth::user()->id;
        if(!$cart){
            $cart = new Cart;
            $cart ->product_id = $id;
            $cart->user_id= $id_user;
            $cart->quantity = 1;
            $cart ->save();
        } else if ($cart->product_id == $id && $cart->user_id == $id_user){
            $cart->quantity += 1;
            $cart->save();
        }
       
    }

    // $categories = Category::all();
    // $products =  Product::find($id);
    // $details = Detail::where('product_id',$id)->first();

    function showCart(){
        $id=Auth::user()->id;
        $carts = Cart::where('user_id',$id)->get();
        $total=0;
        foreach($carts as $cart){
            $cart->products;  
        }
        foreach($carts as $item){
            foreach($item->products as $product){
                $price = $product->price*$item->quantity;
                $total += $price;
            }
        }
        //echo $total;
       
        // echo"<pre>". json_encode($carts[0]->products, JSON_PRETTY_PRINT)."</pre>";

        // $products = Product::all();
        return view('user.cart',['carts'=>$carts]);
    }
    function destroyCart($id){
        Cart::where('product_id',$id)->delete();
      
        return redirect()->route('cart.index');
    }
  

}