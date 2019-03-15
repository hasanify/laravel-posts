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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    body{
        padding-bottom: 20px;
        background-image: linear-gradient(to bottom right, skyblue, pink);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 2px black; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background-color: #FFCC00;
  opacity: .6; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  opacity: 1; 
}
a{
  text-decoration: none !important;
}
</style>
</head>
<body onload="scrollWin()">
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
