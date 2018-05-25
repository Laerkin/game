<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"></meta>

        @yield('head')

    </head>
    <body>
        @yield('header')


        @yield('content')

        @yield('footer')

        @yield('script-footer')


    </body>
</html>
