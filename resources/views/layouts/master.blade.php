
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

    <!--icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css')}}">
    
            @yield('styles')
</head>
<body>

    <!--header-->
      @include('partials.navigation')

    <div class="container">
            @yield('content')
    </div>
    <!-- Scripts -->
    <script type="text/javascript" src="{{ mix('/js/app.js')}}"></script>
           @yield('script')
</body>
</html>
