{{--资源视图--}}
@include('layout.resource')
{{--资源视图--}}
<body>
{{-- 流体布局 --}}
<div class="container">
    {{--导航栏开始--}}
    @include('layout.navbar')
    {{--导航栏结束--}}
    @yield('content')
</div>
{{-- 流体布局结束 --}}
{{-- 首页底部 --}}
@include('layout.bottom')
{{-- 首页底部结束 --}}
</body>
</html>

