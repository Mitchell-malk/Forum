@extends('layout.common')
@section('content')
@foreach($list as $user)
    {{-- 文章主题部分开始 --}}
    <div class="row">
        <div class="col-md-8">
            {{-- 文章标题开始 --}}
            <p class="h2 text-center text-primary "><a href="#" class="nav-link">{{$user->title}}</a>
            <footer class="blockquote-footer text-center">时间：
                <cite title="Source Title">{{$user->created_at}}</cite>
                <cite title="Source Title">作者：</cite>
                <cite title="Source Title">记得填</cite>
            </footer>
            </p>
            {{-- 文章标题结束 --}}


            {{-- 文章主体 --}}
            <blockquote class="blockquote text-left">
                <p class="mb-0">&nbsp; &nbsp;&nbsp; &nbsp; {{$user->content}}</p>
            </blockquote>
        </div>
        {{-- 文章主体结束 --}}

        {{-- 文章主体右部分 --}}
        <div class="col-md-4">
            {{-- <div class="alert alert-success alert-info" role="alert">
                <span class="font-weight-bold font-italic text-success">欢迎！</span>
                <span class="text-primary">来到某某论坛！！！</span>
            </div> --}}
            <div class="alert alert-secondary">
                <div class="text-break">尽情写作吧!</div>
                <span class="text-break">分享到：</span>
                <a href="#"><i class="fa fa-qq fa-fw"></i></a>
                <a href="#"><i class="fa fa-weixin fa-fw"></i></a>
                <a href="#"><i class="fa fa-weibo fa-fw"></i></a>
                <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                <a href="#"><i class="fa fa-facebook-f fa-fw"></i></a>
            </div>
        </div>
        {{-- 文章主体右部分结束 --}}
    </div>
    {{-- 文章主体部分结束 --}}

@endforeach
<div class="page-header">
    {{--分页按钮--}}
    {{$list->links()}}
    {{-- 分页按钮结束 --}}
</div>
@endsection
