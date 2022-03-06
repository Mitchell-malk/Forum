<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--设置X-CSRF-TOKEN请求头来实现验证--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>文章首页</title>
    <link rel="stylesheet" href="{{URL::asset(__CSS__.'/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset(__CSS__.'/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset(__CSS__.'/index.css')}}">
{{--    <link rel="stylesheet" href="css/wangEditor.min.css">--}}
    <script src="{{ URL::asset(__JS__.'/jquery.js') }}"></script>
    <script src="{{ URL::asset(__JS__.'/jquery.min1.js') }}"></script>
    <script src="{{ URL::asset(__JS__.'/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset(__JS__.'/index.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gitalk@1/dist/gitalk.css">
    <script src="https://cdn.jsdelivr.net/npm/gitalk@1/dist/gitalk.min.js"></script>
</head>
