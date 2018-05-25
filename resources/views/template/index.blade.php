@extends('layouts.master')

        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    @section('head')

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'game_project') }}</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Scripts -->
        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>

         <!-- API Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoeePbpgNTyJTYdXFAyxhDgzi1PoI8k8I&callback=initMap" async defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Map JS -->
        <script src="{{asset('js/map.js')}}"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Ubuntu:400,500,700" rel="stylesheet">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">

    @endsection
</head>

<body>

    @section('header')
        <nav class="nav justify-content-center navbar navbar-expand-lg navbar-dark navbar-default shadow" style="background-color:#005d6e;">
            <a class="navbar-brand" href="#">MAKONTO</a>
            <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Classements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Récompenses</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Réglages</a>
                        </li>
                </ul>
            </div>
        </nav>


    @endsection


    @section('content')



    @endsection


    @section('footer')
        <footer>
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="copyright">
                        © 2015, MAKONTO, All rights reserved
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="design">
                        <a href="#">Conditions d'utilisation </a> |
                        <a href="#">Politique de confidentialité</a>
                    </div>
                </div>
            </div>
        </footer>

    @endsection

    @section('script-footer')
    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    @endsection

</body>
</html>

