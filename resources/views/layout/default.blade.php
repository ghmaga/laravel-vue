<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,minmum-scale=1,maxmum-scale=1,user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel-@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}css/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}css/front.css" />
  </head>
  <body>
    <div class="app" id="app">
      <header-box></header-box>
      <router-view></router-view>
      <footer-box></footer-box>
    </div>
    <script src="{{ URL::asset('/') }}js/application.js"></script>
  </body>
</html>