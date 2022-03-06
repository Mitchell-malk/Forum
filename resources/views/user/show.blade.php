@extends('layout.common')
@section('content')
    <div class="col-md-8">
        <blockquote>
            <p><img src="{{$user->avatar}}" alt="" class="img-rounded"
                    style="border-radius: 50px; width: 50px; height: 50px;"></p>
            {{$user->name}}
            <footer>关注：{{$user->stars_count}} | 粉丝：{{$user->fans_count}} | 文章：{{$user->articles_count}}</footer>
        </blockquote>
    </div>
    <div class="col-md-8">
        {{--导航分页--}}
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true">文章</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                   aria-controls="nav-profile" aria-selected="false">关注</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                   aria-controls="nav-contact" aria-selected="false">粉丝</a>
            </div>
        </nav>
        {{--文章内容--}}
        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                @foreach($articles as $article)
                    <div style="margin-top: 30px;">
                        <p>
                            <a href="">{{Auth::user()->name}}</a>
                            {{$article->created_at->diffForHumans()}}
                        </p>
                        <p><a href="">{{$article->title }} </a></p>
                        <p>{!! Str::limit($article->content,'100','......') !!}</p>
                    </div>
                @endforeach
                {{$articles->links()}}
            </div>
            {{--关注内容--}}
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                @foreach($susers as $suser)
                    <div style="margin-top: 30px;">
                        <p>
                            <a href="">{{$suser->name}}</a>
                        </p>
                        <p>关注：{{$suser->stars_count}} | 粉丝：{{$suser->fans_count}} | 文章：{{$suser->articles_count}}</p>
                    </div>
                    <a href="" class="btn btn-default">取消关注</a>
                @endforeach
            </div>
            {{--粉丝内容--}}
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                @foreach($fusers as $fuser)
                    <div style="margin-top: 30px;">
                        <p>
                            <a href="">{{$fuser->name}}</a>
                        </p>
                        <p>关注：{{$fuser->stars_count}} | 粉丝：{{$fuser->fans_count}} | 文章：{{$fuser->articles_count}}</p>
                    </div>
                    <a href="" class="btn btn-default">取消关注</a>
                @endforeach
            </div>
            {{--导航分页结束--}}
        </div>
    </div>
@endsection

