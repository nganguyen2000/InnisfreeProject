<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Product;
use App\Detail;
use App\Category;
use App\Cart;
use App\User;
use App\Order;

class OrderController extends Controller
{
    function show(){
        $id=Auth::user()->id;
        $carts = Cart::where('user_id',$id)->get();
        foreach($carts as $cart){
            $cart->products;  
        }
        //echo $total;
       
        // echo"<pre>". json_encode($carts[0]->products, JSON_PRETTY_PRINT)."</pre>";
        return view('user.order',['carts'=>$carts]);
    }
    function order(Request $request){
        $name = $request ->fullName;
        $phone = $request->phone;
        $address = $request->address;
        $array =[];
        $listarray = [];
        $id = Auth::user()->id;
        $carts = Cart::where('user_id',$id)->get();

        foreach($carts as $cart){
            $cart->products;  
        }

        
        foreach($carts as $item){
            foreach($item->products as $product){
                $array = array(  
                    'id'=>$product->id,
                    'name'=>$product->name,  
                    'price'=>  $product->price
                );  
                array_push($listarray, $array);
            }
        }

        $products = json_encode($listarray);

        $order = new Order;
        $order ->user_id = $id;
        $order->name = $name;
        $order->phone = $phone;
        $order->address = $address;
        $order->product = $products;
        $order->quantity = $item->quantity;
        $order->save();   

    }
}
