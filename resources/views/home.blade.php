@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes connecté!
                    <a href="logout">Déconnecter</a>
                </div>
            </div>
        </div>
    </div>

    <div class="foreground"></div>

    <div class="midground">
        <div class="tuna"></div>
    </div>

    <div class="background">
    </div>
</div>


<!-- Polices -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Neuton:400,700" rel="stylesheet">
<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
<!-- JS -->
<script src="{{ asset('js/edit.js') }}" defer></script>

@endsection
