@extends('layout.common')
@section('content')
    {{-- 欢迎框 --}}
    <div class="alert alert-success alert-info" role="alert">
        <span class="font-weight-bold font-italic text-success">欢迎！</span>
        <span class="text-primary">来到某某论坛！！！</span>
    </div>
    {{-- 欢迎框结束 --}}
    @foreach($datas as $data)
    {{-- 文章主体部分开始 --}}
    <div class="row">
        <div class="col-md-12">
            {{-- 文章标题开始 --}}
            <p class="h2 text-center"><a href="{{$data->id}}" class="nav-link text-success h3">{{$data->title}}</a></p>
            <footer class="blockquote-footer text-center">时间：
                <cite title="Source Title">{{$data->created_at -> toDatestring()}}</cite>
                <cite title="Source Title">作者：</cite>
                <cite title="Source Title">{{$data->gl_au->name}}</cite>
            </footer>
            {{-- 文章标题结束 --}}
            {{-- 文章内容 --}}
            <blockquote class="blockquote text-left h6">
                <p class="mb-0">{!! Str::limit($data->content,'100','......') !!}</p>
            </blockquote>
        </div>
        {{-- 文章内容结束 --}}
        <span class="text-center">赞：{{$data->zans_count}}<i class="ml-3"></i> 评论:{{$data->gl_ac_count}}</span>
    </div>
    {{-- 文章主体部分结束 --}}
   {{-- 文章主体右部分 --}}
 {{--  <div class="col-md-4">
    <div class="alert alert-secondary">
        <div class="text-break">尽情写作吧!</div>
        <span class="text-break">分享到：</span>
        <a href="#"><i class="fa fa-qq fa-fw"></i></a>
        <a href="#"><i class="fa fa-weixin fa-fw"></i></a>
        <a href="#"><i class="fa fa-weibo fa-fw"></i></a>
        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
        <a href="#"><i class="fa fa-facebook-f fa-fw"></i></a>
    </div>
</div> --}}
{{-- 文章主体右部分结束 --}}
@endforeach
    <div class="Page">
        {{--分页按钮--}}
        {{$datas->links()}}
        {{-- 分页按钮结束 --}}
    </div>
@endsection
