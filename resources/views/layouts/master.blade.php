<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>

    @yield('head')

</head>

<body>

@yield('header')

@yield('content')


@yield('footer')

@yield('foot')

</body>

</html>