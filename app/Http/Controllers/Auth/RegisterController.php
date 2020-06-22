<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function index(){
        return view("auth.register");
    }
    function register(Request $request){
        $username = $request->username;
        $password = $request->password;
        $name = $request->name;
        $role = $request->role;
        $email = $request->email;

        $hashPassword = Hash::make($password);
        DB::table('users')->insert(["username"=>$username,"email"=>$email,"password"=>$hashPassword,"name"=>$name,"role"=>$role]);
    }
}

