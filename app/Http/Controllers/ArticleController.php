<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
//    文章论坛首页
    public function index(){
//        文章分页数据
        $datas = Article::orderBy('created_at','desc')->paginate(4);
        return view('article.index',compact('datas'));
    }
//    文章详情
    public function show(Article $article){
        return view('article.show',compact('article'));
    }
//    文章创建页面
    public function create(){
        return view('article.create');
    }
//    文章创建页面数据处理
    public function store(Request $request){
//      验证
        $request -> validate([
            'title' => 'required|min:4|max:20',
            'content' => 'required|min:100|max:10000|'
        ]);
        $data = request(['title','content']);
        Article::create($data);
        return redirect('/');
    }
}
