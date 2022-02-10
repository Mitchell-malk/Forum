<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
//    注册页面
    public function index(){
        return view('register.index');
    }

//    注册行为
    public function register(Request $request){
        // 验证
        $request -> validate([
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|max:16|confirmed',
            'agree' => 'accepted'
        ]);
        // 逻辑
        $email = request('email');
        $password = bcrypt(request('password'));
        $user = User::create(compact('email','password'));
        // 渲染
        echo("<script>alert('注册成功！');location='/login';</script>");
    }
}
