@extends('layouts.master')

@section('content')
    <!--
    Feuille de style
    -->
    <style>

        body{
            background-color:#8ACBF7;
            color: #856D4D;
            font-family: 'Indie Flower', cursive;
            font-weight: bold;
        }
        label{
            font-size: 20px;
        }
        em{
            font-size: 18px;
        }

        /** Responsive */
        @media all and (max-width: 900px)
        {
            label{
                font-size: 18px;
            }
            em{
                font-size: 16px;
            }
        }


    </style>



    {{--<div class="container-fluid">--}}
        {{--<form>--}}
            {{--<div class="form-group">--}}
                {{--<label for="name">Nom du personnage</label>--}}
                {{--<input type="text" class="form-control" id="name" placeholder="Nom du perso">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<label for="img">Choisir une image pour le personnage <br> <em>(taille carré)</em><br></label>--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<input type="file" id="img" name="img_personnage" accept="image/*" onchange="loadFile(event)">--}}
            {{--</div>--}}
            {{--<div class="appercu">--}}
                {{--<img id="output" style="width:150px;height: 150px;"/>--}}
            {{--</div>--}}
            {{--<br>--}}
            {{--<span style="font-size: small;" ><em>(visualisation de l'image)</em></span>--}}
            {{--<br>--}}
            {{--<div>--}}

                {{--<br>--}}

                {{--<button type="submit" value="submit">Envoyer</button>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}



    <div class="container-fluid">
        <form method="post" enctype="multipart/form-data" style="text-align: center;">
            @csrf
            <div class="form-group">
                <label for="name">Nom du personnage</label>
                <input type="text" class="form-control" id="name" placeholder="Nom du perso">
            </div>

            <br>

            <div class="form-group">
                <label for="img">Choisir une image pour le personnage <br> <em>(taille carré)</em><br></label>
            </div>

            <br>

            <div class="form-group">
                <input type="file" id="img" name="img_personnage" accept="image/*" onchange="loadFile(event)">
            </div>

            <br>
            <br>

            <div class="appercu">
                <img id="output" style="width:150px;height: 150px;"/>
            </div>

            <br>

            <span style="font-size: small;" ><em>(visualisation de l'image)</em></span>

            <br>
            <div>

                <br>

                <div>

                    <br>

                    <button type="submit" value="submit">Envoyer</button>
                </div>

            </div>
        </form>
    </div>
    <br>
{{--<div class="container-fluid">--}}
    {{--<form method="post" enctype="multipart/form-data" style="text-align: center;">--}}
        {{--@csrf--}}
        {{--<div class="form-row">--}}
            {{--<div class="form-group col-md-3 col-md-offset-5">--}}
                {{--<div class="input-group mb-3">--}}
                    {{--<label for="name">Nom du personnage :<br></label>--}}
                {{--</div>--}}
                {{--<div class="form-group col-md-12">--}}
                    {{--<input type="text" class="form-control" id="name" placeholder="Nom du perso">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<br>--}}

        {{--<label for="img">Choisir une image pour le personnage <br> <em>(taille carré)</em><br></label>--}}
        {{--<br>--}}
        {{--<input type="file" id="img" name="img_personnage" accept="image/*" onchange="loadFile(event)">--}}
        {{--<br>--}}
        {{--<br>--}}
        {{--<div class="appercu">--}}
            {{--<img id="output" style="width:150px;height: 150px;"/>--}}
        {{--</div>--}}
        {{--<br>--}}
        {{--<span style="font-size: small;" ><em>(visualisation de l'image)</em></span>--}}
        {{--<br>--}}
        {{--<div>--}}

            {{--<br>--}}

            {{--<button type="submit" value="submit">Envoyer</button>--}}
        {{--</div>--}}
    {{--</form>--}}
{{--</div>--}}
    {{--<br>--}}

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            alert('L\'image doit être carré (elle sera redimensionnée) \n' +
                'L\'image doit être libre de droit (sans licence)');
        };
    </script>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p style="text-align: center;">{!! \Session::get('success') !!}</p>
        </div>
    @endif



@endsection