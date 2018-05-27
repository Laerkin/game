@extends('layouts.master')


    @section('scripts')

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'game_project') }}</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Scripts -->


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

    @section('header')
        <nav class="nav justify-content-center navbar navbar-expand-lg navbar-dark navbar-default shadow" style="background-color:#005d6e;">
            <a class="navbar-brand" href="#">Discover</a>
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
                            <a class="nav-link" href="#">Profil</a>
                        </li>
                </ul>
            </div>
        </nav>


    @endsection


    @section('content')


        <h2>content</h2>

    @endsection


    @section('footer')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<<<<<<< HEAD
=======

>>>>>>> ed7ecfe575d328fc39200a7d42513ce27581af3c
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <footer>
            <div class="container-fluid b">
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
            </div>
        </footer>

    @endsection





    @section('script-footer')
    <!-- Optional JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    @endsection






