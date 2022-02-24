{{--导航栏开始--}}
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">某某论坛</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">首页<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/create">写文章</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">通知</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">关注我</a>
            </li>
        </ul>
        <form class="form-inline mx-auto">
            <input class="form-control mr-sm-2" type="search" placeholder="搜索文章" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fa fa-search fa-fw"></i>
            </button>
        </form>
        {{-- 导航右侧部分 --}}
        <ul class="navbar-nav">
            @if (Session::has('status'))
                {{-- 下拉菜单开始 --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{Auth::user()->avatar}}" class="rounded-circle" width="30px" height="30px">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/user/{{Auth::user()->id}}">个人中心</a>
                        <a class="dropdown-item" href="/user/me/setting">设置</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">退出</a>
                    </div>
                </li>
                {{-- 下拉菜单结束 --}}
            @else
                {{-- 登录注册功能开始 --}}
                <li class="nav-item active">
                    <a class="nav-link" href="/login">登录</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/register">注册</a>
                </li>
                {{-- 登录注册功能结束 --}}
            @endif
        </ul>
       {{-- 导航右侧部分结束 --}}
    </div>
</nav>
{{--导航栏结束--}}
