<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{asset('/assets/css/site.css')}}" rel=stylesheet>
        <link href="{{asset('/assets/css/tailwind.min.css')}}" rel=stylesheet>

    
    </head>
    <body>
        @yield('content')
    </body>
</html>
