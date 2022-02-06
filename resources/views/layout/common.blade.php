<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章首页</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/wangEditor.min.css">
</head>
<body>
<div class="container">
    {{--导航栏开始--}}
    @include('layout.navbar')
    {{--导航栏结束--}}

    {{--轮播图开始--}}
    <div class="lb">
        <ul>
            <li>
                <img src="image/3.jpg"/>
            </li>
            <li>
                <img src="image/1.jpg"/>
            </li>
            <li>
                <img src="image/2.jpg" id="x"/>
            </li>
            <li>
                <img src="image/3.jpg"/>
            </li>
            <li>
                <img src="image/1.jpg"/>
            </li>
        </ul>
        <button class="l"><</button>
        <button class="r">></button>
    </div>
    {{-- 轮播图结束 --}}
    @yield('content')

</div>
{{-- 流体布局结束 --}}

{{-- 首页底部 --}}
<div class="container-fluid mt-5">
    <div class="bg-light ">
        <p class="text-center text-break">版权所有&copy; &nbsp; &nbsp;
            <span>ICP证：<a href="https://beian.miit.gov.cn/" target="_blank">冀ICP备2022000325号</a></span>
        </p>
        <p class="text-center"><a href="#">联系我们</a>
            <span class="mr-0">|<a href="#" class="ml-0">网站简介</a></span>
        </p>
    </div>
</div>
{{-- 首页底部结束 --}}

<script src="{{ URL::asset('/') }}js/jquery.js"></script>
<script src="{{ URL::asset('/') }}js/jquery.min1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>

