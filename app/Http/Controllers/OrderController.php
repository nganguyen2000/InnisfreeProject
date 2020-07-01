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
use App\Discount;

class OrderController extends Controller
{
    function show(){
        $id=Auth::user()->id;
        $carts = Cart::where('user_id',$id)->get();
        foreach($carts as $cart){
            $cart->products;  
        }
        $code = 'no';
        $sales = Discount::where('code',$code)->get();
        //echo $total;
       
        // echo"<pre>". json_encode($carts[0]->products, JSON_PRETTY_PRINT)."</pre>";
        return view('user.order',['carts'=>$carts,'sales'=>$sales]);
    }
    function order(Request $request){
        $total = $request->total;
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
                    'price'=>  $product->price,
                    'image'=>$product->image,
                    'quantity'=>$item->quantity,
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
        $order->save(); 

        Cart::where('user_id',$id)->delete();
        
       
        return view('user.done');
    }

    function listOrder(){
        $orders = Order::all();
        $array=[];
        foreach($orders as $order){
            $item = $order->product;
            
        }
        $array = json_decode($item);
         //echo"<pre>". json_encode($array, JSON_PRETTY_PRINT)."</pre>";
        return view('admin.order',['orders'=>$orders,'products'=>$array]);
    }

    function sale(Request $request){
        $id=Auth::user()->id;
        $carts = Cart::where('user_id',$id)->get();
        foreach($carts as $cart){
            $cart->products;  
        }
        $code = $request->code;
        $sales = Discount::where('code',$code)->get();
        return view('user.order',['carts'=>$carts,'sales'=>$sales]);
    }
}
