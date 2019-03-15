
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'ePearl')</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    
    <!-- styles -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
