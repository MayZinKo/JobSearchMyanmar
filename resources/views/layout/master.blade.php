<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Life and Place (Sule Diary)">
    
    @yield("title_meta")
    <title>  Life and Place</title>
    @include('layout.header')
    @yield('css')
    <link href="{{ URL::asset("public\custom\menu-2.css") }}" rel="stylesheet">
   </head>
    <body style="padding-bottom: 0px;">


   
    <!-- Nav -->


    <!-- Current Page Blade-->
    @yield('content')

    
    <!-- FOR JS -->
    @yield('script')

</body>
    
</html>