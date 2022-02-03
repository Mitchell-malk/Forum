<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
//    文章论坛首页
    public function index(){
//        文章分页数据
        $data = DB::table('articles')->paginate(3);
        return view('article.index',['list' => $data]);
    }
//    文章详情
    public function show(){
        return view('article.show');
    }

//    文章分页
    public function page(){

        return view('article.index');
    }
}
