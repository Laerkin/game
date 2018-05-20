@extends('layouts.master')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')

    <style>
        body{
            background-color: #12384C;
        }
        h1{
            font-size:50px;
            color: rgb(218, 179, 10);
        }
        h2{
            font-size:30px;
            color: rgb(218, 179, 10);
        }
        span{
            box-shadow: 2px 2px 2px lightgrey;
            border: 1px solid grey;
            border-radius:7px;
            padding: 2px;
        }
    </style>


<div class="container-fluid" style="text-align: center;">
    <div class="row">
        <div class="col-md-12">
            <h1>ENIG'MAP</h1>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <img src="{{ URL::to('images/12.gif') }}" style="width: 500px; height: 500px;">
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 hidden">
            <h2><span> CONNEXION </span></h2>
        </div>
        <div class="col-md-6">
            <h2><span> INSCRIPTION </span></h2>
        </div>
    </div>
</div>

    @endsection

