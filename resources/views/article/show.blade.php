<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章详情</title>
</head>
<body>
@extends('layout.common')
@section('content')
    {{-- 文章主题部分开始 --}}
    <div class="row">
        <div class="col-md-8">
            {{-- 文章标题开始 --}}
            <p class="h2 text-center text-primary ">{{$article->title}}
            <footer class="blockquote-footer text-center">时间：
                <cite title="Source Title">{{$article->created_at->toDatestring()}}</cite>
                <cite title="Source Title">作者：</cite>
                <cite title="Source Title">LY</cite>
            </footer>
            {{-- 文章标题结束 --}}

            {{-- 文章内容 --}}
            <blockquote class="blockquote text-left">
                <p class="mb-0">&nbsp; &nbsp;&nbsp; &nbsp; {!! $article->content !!}</p>
            </blockquote>
        </div>
        {{-- 文章内容结束 --}}

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

    {{-- 评论开始 --}}
    <div class="row">
        <div class="col-md-12">
            <nav id="navbar-example2" class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">评论:</a>
                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-thumbs-o-up fa-1x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-thumbs-o-down fa-1x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-heart-o fa-1x"></i></a>
                    </li>
                </ul>
            </nav>
            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                <form class="form-group mt-3">
                    <label for="exampleFormControlTextarea1" class="h5">发表评论:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style="resize:none;"></textarea>
                    <div style="text-align:center">
                        <button class="btn btn-outline-success mt-2 btn-sm" type="submit">发表评论</button>
                        <input class="btn btn-outline-danger mt-2 btn-sm" type="reset" value="重置评论">
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- 评论结束 --}}
@endsection
</body>
</html>
