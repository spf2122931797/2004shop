<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Login;
use Illuminate\Http\Request;

class LoginController extends Controller{
    public function login(){
        return view('login/login');
    }

    public function logindo(Request $request){
        $data = $request->except("_token");
        $res = Login::where(['user_name'=>$data['user_name']])->first();
        if(($res->password)!=$data['password']){
            return redirect('/login/login')->with('msg','密码错误');
        }
        return redirect("/admin");
    }
}

?>