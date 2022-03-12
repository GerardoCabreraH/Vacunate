<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--Google Fonts Lato-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!--Normalize CSS-->
    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--Estilo CSS-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
</head>
<body class="@yield('class')">
    @yield('content')
    <!--JQuery-->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <!--Bootstrap JS-->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--Script-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/admin.js')}}"></script>
</body>
</html>
