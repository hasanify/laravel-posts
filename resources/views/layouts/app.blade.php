<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="shortcut icon" href="http://www.iconarchive.com/download/i87032/graphicloads/colorful-long-shadow/Book.ico">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    @include('inc.navbar')
<div class="container">
	@include('inc.messages')
            @yield('content')
</div>
    </div>
<div style="display: hidden; margin:0 auto;position:fixed;bottom:20px;right:10px;">
<a href="#top" style=" color: #1f1f1f"><i class="fa fa-3x fa-chevron-circle-up"></i></a>
</div>
</body>
</html>
