<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Login;
use Illuminate\Http\Request;

class RegisterController extends Controller{
    public function register(){
        return view('login/register');
    }

    public function registerdo(Request $request)
    {
        $data = $request->except("_token");
        $res = Login::create($data);

        if($res){
            return redirect("login/login");
        }
    }



}

?>