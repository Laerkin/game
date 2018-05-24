<!doctype html>

<html lang="{{ app()->getLocale() }}">




<head>

    @yield('scripts')

    <!-- Polices -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Neuton:400,700" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

</head>

<body>

@yield('header')

@yield('content')


@yield('footer')






</body>

</html>