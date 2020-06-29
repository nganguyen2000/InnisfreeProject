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
    function index(Request $request){
        $categories = Category::all();
        $page = $request->page;
        $products = Product::all()->skip($page * 5)->take(5);
        if($products->isEmpty()){ //Nếu photo lớn hơn số lượng trong database sẽ trả về 0
            $products = Product::all()->take(5);
            return redirect('/home/?page=0');
        }else if($page<0){
            $totalPage = round(count(Product::all())/5)-1;
            return redirect('/home/?page='.$totalPage);
        }
       

        return view("user.home",["products"=>$products,"page" => $page,"category"=>$categories]);
    }
    function cate(){
        $categories = Category::all();
        return view("partials.header",["category"=>$categories]);
    }
    function detail($id, Request $request){
        $details = Detail::where('product_id',$id)->first();
        $products = Product::find($id);
        
        
        return view("user.detail",["product"=>$products,"detail"=>$details]);

    }
    function addtocart($id, Request $request){
        $products =Product::all();
        $cart = Cart::where('product_id',$id)->first();
        $id_user=Auth::user()->id;
        $quantity=1;
        if(!$cart){
            $cart = new Cart;
            $cart ->product_id = $id;
            $cart->user_id= $id_user;
            $cart->quantity = $quantity;
            $cart ->save();
        } else if ($cart->product_id == $id && $cart->user_id == $id_user){
            $cart->quantity = $quantity +1;
            $cart->save();
        }

        $page = $request->page;
        $products = Product::all()->skip($page * 5)->take(5);
        if($products->isEmpty()){ //Nếu photo lớn hơn số lượng trong database sẽ trả về 0
            $products = Product::all()->take(5);
            return redirect('/home/?page=0');
        }else if($page<0){
            $totalPage = round(count(Product::all())/5)-1;
            return redirect('/home/?page='.$totalPage);
        }
        
        return view("user.home",["products"=>$products,"page" => $page]);
    }


    function updateQuantity($id, Request $request){
        $quantity = $request->input("quantity");
        $id_user = Auth::user()->id;
        if (isset($_POST['plus'])){
            $quantity = $quantity + 1;
        }
        elseif (isset($_POST['minus'])){
            $quantity = $quantity - 1;
        }

        $cart = Cart::where('product_id','=',$id, 'and', 'user_id','=',$id_user)->first();
            $cart->quantity = $quantity;
            $cart->save();
        return redirect()->route('cart.index');
    }

    // $categories = Category::all();
    // $products =  Product::find($id);
    // $details = Detail::where('product_id',$id)->first();

    function showCart(){
        $id=Auth::user()->id;
        $categories = Category::all();
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
        return view('user.cart',['carts'=>$carts,"category"=>$categories]);
    }
    function destroyCart($id){
        Cart::where('product_id',$id)->delete();
      
        return redirect()->route('cart.index');
    }

    function showFollowCate($id, Request $request){

        $page = $request->page;
        $products = Product::all()->skip($page * 5)->take(5);
        if($products->isEmpty()){ //Nếu photo lớn hơn số lượng trong database sẽ trả về 0
            $products = Product::all()->take(5);
            return redirect('/home/?page=0');
        }else if($page<0){
            $totalPage = round(count(Product::all())/5)-1;
            return redirect('/home/?page='.$totalPage);
        }
        
        $categories = Category::all();
        $products = Product::where('id',$id)->get();
        return view('user.home',["products"=>$products,"category"=>$categories,"page" => $page]);
    }
    

   
  

}