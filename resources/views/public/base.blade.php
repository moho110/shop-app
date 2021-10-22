<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="static/home/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    @include('public.head_css')

    @include('public.head_js')
</head>
<body>
    <div>
        <!-- 顶部 -->
        @section('header')
        @include('public.header')
        @show

        <!-- 菜单 -->
        @section('menu')
        @include('public.menu')
        @show

        <!-- 导航 -->
        @section('nav')
        @include('public.nav')
        @show
        
        <!-- 侧边栏 -->
        @section('sidebar')
        @include('public.sidebar')
        @show

        <!-- 内容 -->
        @section('content')
        @include('public.content')
        @show

        <!-- 底部 -->
        @section('footer')
        @include('public.footer')
        @show

        @section('quick')
        @include('public.quick')
        @show


    </div>

</body>
</html>