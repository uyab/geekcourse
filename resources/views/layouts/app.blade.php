<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GeekCourse</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >

    @stack('head')
</head>
<body>

@stack('begin')

@include('layouts.header')
@include('layouts.alert')

<div class="p-5">
    @yield('content')
</div>

@include('layouts.footer')

<script src={{ asset('js/jquery.min.js') }}></script>
@stack('end')

</body>
</html>
