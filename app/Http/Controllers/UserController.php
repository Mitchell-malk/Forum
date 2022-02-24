<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function setting(){
        $me = Auth::user();
        return view('user.setting',compact('me'));
    }
//    个人设置操作
    public function settingStore(Request $request,User $user)
    {
        // 验证
        $request->validate([
            'name' => 'min:3|max:7',
            'phone' => 'min:11',
            'address' => 'min:3'
        ]);
        // 逻辑
        $name = \request('name');
        if ($name != $user->name){
            if (User::where('name',$name)->count() > 0){
                return back()->withErrors(array('message' => '用户名称已被注册'));
            }
            $user->name = \request('name');
        }
        $user->phone = \request('phone');
        $user->address = \request('address');
        if ($request->file('avatar')){
            $path = $request->file('avatar')->storePublicly(md5(Auth::id() . time()));
            $user->avatar = "/storage/" .$path;
        }
        $user->save();
        return back();
    }

    // 个人中心
    public function show(User $user){
        // 个人文章
        $articles = $user->articles()->orderBy('created_at','desc')->take(10)->paginate(5);
        // 个人关注、粉丝、文章
        $user = User::withCount(['stars','fans','articles'])->find($user->id);
        // 当前用户的粉丝，以及粉丝的 关注|粉丝|文章
        $fans = $user->fans()->get();
        $fusers = User::whereIn('id',$fans->pluck('fan_id'))->withCount(['stars','fans','articles'])->get();
        // 当前用户的明星及明星的 关注|粉丝|文章
        $stars = $user->fans()->get();
        $susers = User::whereIn('id',$stars->pluck('fan_id'))->withCount(['stars','fans','articles'])->get();
        return view('user.show',compact('user','articles','fans','stars','fusers','susers'));
    }
}
