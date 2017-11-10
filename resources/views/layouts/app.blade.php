<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('/js/app.js') }}" rel="stylesheet">

        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

        @yield('header')
    </head>
    <body>

      @yield('content')
      @yield('footer')
  </body>
</html>
