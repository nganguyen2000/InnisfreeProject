<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;
class ManageProductController extends Controller
{
   function index(){
       $products = DB::table('products')->get();
       $categories = Category::all();
       return view("admin.product.index",["categories"=>$categories,"products"=>$products]);

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
    $detail=$request->detail;


    
    $product = new Product;
    $product->name =$name;
    $product->category_id =$cate;
    $product->image =$file;
    $product->price =$price;
    $product->oldPrice=$oldPrice;
    $product->detail=$detail;
    $product->save();

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
        DB:: table('products')->where('id','=',$id)->delete();
        return redirect()->route('admin.product.index'); 
    }
    function edit($id){
        $products = DB::table('products')->find($id);
        return view("admin.product.edit",['product'=>$products]);
    }
    function update($id, Request $request){
        $name = $request->name;
        $price = $request->price;
        $oldPrice = $request->oldPrice;
        $detail = $request->detail;
        $proImage = $request->image;
        $file = $request->file("image")->store("public");
        DB::table("products")->where("id",$id)->update(["name"=>$name,"price"=>$price,"oldPrice"=>$oldPrice,"detail"=>$detail,"image"=>$file]);
        return redirect()->route('admin.product.index');
    }
}
