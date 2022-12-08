<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#ffffff">
  <meta name="msapplication-TileColor" content="#ffffff">
  
  @yield('head')
  
  <title>@yield('title')</title>
</head>
<body>
  @yield('nav')

  @yield('content')

  @yield('scripts')
</body>
</html>
