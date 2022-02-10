<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;

class LoginController extends Controller
{
    // 登录页面
    public function index()
    {
        return view('login.index');
    }

    // 登录页逻辑
    public function login(Request $request)
    {
        // 验证
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:16',
            'is_remember' => 'integer'
        ]);
        // 逻辑
        $user = request(['email','password']);
        $remember = request('is_remember');
        if (\Auth::attempt($user,$remember)){
            $email = request('email');
            // 存储session变量及它的值
            $request->session()->put('status',$email);
            return redirect('/');
        }
        // 渲染
        return \Redirect::back()->withErrors('邮箱或密码不正确');
    }

    // 登出行为
    public function logout()
    {
        session()->flush();
        \Auth::logout();
        return redirect('/');
    }
}
