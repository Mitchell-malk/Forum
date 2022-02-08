<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--设置X-CSRF-TOKEN请求头来实现验证--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>文章首页</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
{{--    <link rel="stylesheet" href="css/wangEditor.min.css">--}}
    <script src="{{ URL::asset('/') }}js/jquery.js"></script>
    <script src="{{ URL::asset('/') }}js/jquery.min1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</head>
