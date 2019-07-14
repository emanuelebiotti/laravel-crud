<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titolo_pagina')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    @include('navbar')
    <div class="container">
      @yield('content')
    </div>
    @include('footer')
  </body>
</html>
