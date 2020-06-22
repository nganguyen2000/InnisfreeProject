<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageUserController extends Controller
{
    function index(){
        $users = DB::table('users')->get();
        return view("admin.user.index",["users"=>$users]);
    }
    function delete($id){
        DB:: table('users')->where('id','=',$id)->delete();
        return redirect()->route('admin.user.index');
    }
    function edit($id){
        //echo $id;
        $users = DB::table("users")->find($id);
        //echo json_encode($pet); in gia tri ra
        return view("admin.user.edit",['user'=>$users]);
    }
    function update($id, Request $request){
        $username = $request->username;
        $password = $request->password;
        $name = $request->name;
        $role = $request->role;
        DB::table("users")->where("id",$id)->update(["username"=>$username,"password"=>$password,"name"=>$name,"role"=>$role]);
        return redirect()->route('admin.user.index');
    }

}

 