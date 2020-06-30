<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;
use App\Detail;
class ManageProductController extends Controller
{
   function index(){
       $products = Product::all()->orderBy('price', 'asc');;
       $categories = Category::all();
       $details = Detail::all();
       return view("admin.product.index",["details"=>$details,"categories"=>$categories,"products"=>$products]);

   }
   function create(){
      $categories = Category::all();
       return view("admin.product.create",['categories'=>$categories]);
   }

   function store(Request $request){
    $name = $request->name;
    $price = $request->price;
    $oldPrice = $request->oldPrice;
    $cate = $request->category;
    $file =$request->file('image')->store("public");
    $capacity = $request->capacity;
    $origin = $request->origin;
    $quantity = $request->quantity;
    $content = $request->content;



    
    $product = new Product;
    $product->name =$name;
    $product->category_id =$cate;
    $product->image =$file;
    $product->price =$price;
    $product->oldPrice=$oldPrice;
    $product->save();

    $Product_id = $product->id;

    $detail = new Detail;
    $detail->product_id=$Product_id;
    $detail->quantity=$quantity;
    $detail->capacity=$capacity;
    $detail->origin=$origin;
    $detail->content=$content;
    $detail->save();




    return redirect("admin/product/index");
   }

   

    // $name = $request->input("name");
    // $price = $request->input("price");
    // $oldPrice = $request->input("oldPrice");
    // $detail = $request->input("detail");
    // $file = $request->file("image")->store("public");
    // DB::table('products')->insert(["name"=>$name,"price"=>$price,"oldPrice"=>$oldPrice,"detail"=>$detail,"image"=>$file]);
    //
    //}
    
    function delete($id){
        Detail::where('product_id',$id)->delete();
        Product::find($id)->delete();
      //  DB:: table('products')->where('id','=',$id)->delete();
        return redirect()->route('admin.product.index'); 
    }
    function edit($id){
       // $products = DB::table('products')->find($id);
        $categories = Category::all();
        $products =  Product::find($id);
        $details = Detail::where('product_id',$id)->first();

        return view("admin.product.edit",['categories'=>$categories,'product'=>$products,'detail' => $details]);
    }
    function update($id, Request $request){
        $product = Product::find($id);
        $name = $request->name;
        $price = $request->price;
        $oldPrice = $request->oldPrice;
        $cate = $request->category;
        $file =$request->file('image')->store("public");
        $capacity = $request->capacity;
        $origin = $request->origin;
        $quantity = $request->quantity;
        $content = $request->content;

        $product->name =$name;
        $product->category_id =$cate;
        $product->image =$file;
        $product->price =$price;
        $product->oldPrice=$oldPrice;
        $product->save();

        $Product_id = $product->id;
        $detail = Detail::where('product_id',$id)->first();
        $detail->product_id=$Product_id;
        $detail->quantity=$quantity;
        $detail->capacity=$capacity;
        $detail->origin=$origin;
        $detail->content=$content;
        $detail->save();

       // DB::table("products")->where("id",$id)->update(["name"=>$name,"price"=>$price,"oldPrice"=>$oldPrice,"image"=>$file]);
        return redirect()->route('admin.product.index');
    }
}

      

