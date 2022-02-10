<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Auth;
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
            'title' => 'required|min:4|max:30',
            'content' => 'required|min:100|max:10000|'
        ]);
//        逻辑处理
        $user_id = Auth::user()->id;
        $data = request(['title','content']);
//        合并数组
        $data1 = array_merge(compact('user_id'),$data);
        Article::create($data1);
//        页面渲染重定向
        return redirect('/');
    }

//    文章编辑页
    public function edit(Article $article){
        return view('article.edit',compact('article'));
    }

    /**
     * 文章编辑页逻辑处理
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Article $article){
//      验证
        request() -> validate([
            'title' => 'required|min:4|max:30',
            'content' => 'required|min:100|max:10000|'
        ]);
//        策略
        $this->authorize('update',$article);
//        逻辑处理
        $article -> title = request('title');
        $article -> content = request('content');
        $article -> save();
//        页面渲染重定向
        return redirect("/$article->id");
    }

    /**
     * 文章删除
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function delete(Article $article){
//        策略
        $this->authorize('delete',$article);
//        逻辑处理
        $article -> delete();
//        页面渲染重定向
        return redirect('/');
    }


//    上传图片
/*    public function imageUpload(Request $request){
        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        $url = asset('storage/'.$path);
        return json_encode(array(
            "errno" => 0,
            "url" => $url
        ));
    }

//    上传视频
    public function videoUpload(Request $request){
        $path = $request -> file('videofileName') -> storePublicly(md5(time()));
        $url = asset('storage/'.$path);
        return json_encode(array(
            "errno" => 0,
            "url" => $url
        ));
    }*/
}
