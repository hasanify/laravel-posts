<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Laravel') }}</title>

 <!-- Scripts -->
 <link rel="shortcut icon" href="icon.ico">
 <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
 <script src="{{ asset('js/app.js') }}" defer></script>
 <!-- Fonts -->
 <link rel="dns-prefetch" href="//fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono|Srisakdi|Righteous" rel="stylesheet">
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <style>
 body{
  padding-bottom: 80px;
  background-image: linear-gradient(to bottom right, skyblue, pink);
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-height: cover;
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
<body style="height: 100%;">
 @include('inc.navbar')
 <div class="container">
  @include('inc.messages')
  @yield('content')
 </div>
</div>
@include('inc.footer')
</body>
</html>
