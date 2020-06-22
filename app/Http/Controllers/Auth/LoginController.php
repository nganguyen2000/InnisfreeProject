<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){

        return view("auth.login");
    }
    function login(Request $request){
        $username = $request->username;
        $password = $request->password;
        if(Auth::attempt(["username"=> $username,"password"=>$password])){
            $user = Auth:: user();
          //  echo $user;
            if($user->role =="admin"){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route("auth.login",["error"=>"Invallid username or password"]);
        }
    }
    function logout(){
        Auth::logout();
        return redirect('home');
    }


        // $username = $request->username;
        // $password = $request->password;

        // $user = DB :: table("users")->where(
        //     [
        //         'username'=> $username
        //        ])->first();
                
        // //echo json_encode($user);
        // if($user){
        //     $existingHashFromDB = $user->password;
        //     if(Hash::check($password, $existingHashFromDB)){
        //         // login thành công
        //         if($user->role=="admin"){
        //             return redirect()->route("admin.dashboard");
        //         }else if($user->role=="user"){
        //             return redirect()->route("home");
        //         }
        //     }
        
        // }else{
        //     //login that bai
        //     return redirect()->route("auth.login", ["error"=>"invalid username or password"]);
        // }


    
    
}
