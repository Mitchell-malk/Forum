@extends('layout.common')
@section('content')
    {{-- 文章主题部分开始 --}}
    <div class="row">
        <div class="col-md-8">
            {{-- 文章标题开始 --}}
            <p class="h2 text-center text-primary">{{$article->title}}</p>
            <p class="text-center">
                @can('update',$article)
                    <a href="/{{$article->id}}/edit">
                        <i class="fa fa-pencil fa-fw"></i>
                    </a>
                @endcan
                @can('delete',$article)
                    <a href="/{{$article->id}}/delete">
                        <i class="fa fa-times fa-fw"></i>
                    </a>
                @endcan
            </p>
            <footer class="blockquote-footer text-center">时间：
                <cite title="Source Title">{{$article->created_at->toDatestring()}}</cite>
                <cite title="Source Title">作者：</cite>
                <cite title="Source Title">{{$article->gl_au->name}}</cite>
            </footer>
            {{-- 文章标题结束 --}}

            {{-- 文章内容 --}}
            <blockquote class="blockquote text-left">
                <p class="mb-0">{!! $article->content !!}</p>
            </blockquote>
            <ul class="nav justify-content-end">
                @if ($article->zan(Auth::id())->exists())
                    <li class="nav-item">
                        <a class="nav-link" href="{{$article->id}}/unzan">
                            <i class="fa fa-thumbs-up fa-fw"></i>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{$article->id}}/zan">
                            <i class="fa fa-thumbs-o-up fa-fw"></i>
                        </a>
                    </li>
                @endif
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                {{-- ajax --}}
                <script src="{{URL::asset(__JS__.'/zanajax.js')}}"></script>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-heart-o fa-fw"></i></a>
                </li>
            </ul>
        </div>
        {{-- 文章内容结束 --}}

        {{-- 文章主体右部分 --}}
        <div class="col-md-4">
            {{--<div class="alert alert-success alert-info" role="alert">--}}
            {{--<span class="font-weight-bold font-italic text-success">欢迎！</span>--}}
            {{--<span class="text-primary">来到某某论坛！！！</span>--}}
            {{--</div>--}}
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
    {{-- <div class="row">
        <div class="col-md-12">
            <nav id="navbar-example2" class="navbar navbar-light bg-light">
                <div class="navbar-brand col-md-12 ">评论:</div>
                @foreach($article->gl_ac as $comment)
                    <ul class="list-group col-md-12">
                        <li class="list-group-item list-group-item-action list-group-item-light d-flex justify-content-between">
                            <em class="col-md-9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$comment->comment}}</em>
                            <span
                                class="badge badge-pill col-md-3">时间：{{$comment->created_at->toDatestring()}}作者:{{$comment->gl_cu->name}}</span>
                        </li>
                    </ul>
                @endforeach
            </nav>
            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                <form class="form-group mt-3" action="/{{$article->id}}/comment" method="post">
                    <label for="exampleFormControlTextarea1" class="h5">发表评论:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="comment"
                              style="resize:none;"></textarea>
                    {{csrf_field()}}
                    @include('layout.error')
                    <div style="text-align:center">
                        <button class="btn btn-outline-success mt-2 btn-sm" type="submit">发表评论</button>
                        <input class="btn btn-outline-danger mt-2 btn-sm" type="reset" value="重置评论">
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <div id="gitalk-container"></div>
    <script>
        var gitalk = new Gitalk({
            clientID: 'aa2376e004f23b076920',
            clientSecret: '622cd8dfe7c03a8442796f6f50b6a0370d46109c',
            repo: 'luntan',
            owner: 'Mitchell-malk',
            admin: ['Mitchell-malk'],
            id: location.pathname,      // Ensure uniqueness and length less than 50
            distractionFreeMode: false  // Facebook-like distraction free mode
        })
        gitalk.render('gitalk-container')
    </script>
@endsection
