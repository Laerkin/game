@extends('layouts.master')

@section('content')
    <!--
    Feuille de style
    -->
    <style>

        body{
            margin-top:150px;
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
        p{
            text-align: center;
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



    <div class="container-fluid">
        <form method="post" enctype="multipart/form-data" style="text-align: center;">
            @csrf
            <div class="form-group col-md-4 offset-md-4">
                <label for="name_personnage">Nom du personnage</label>
                <input type="text" class="form-control" id="name_personnage" name="name_personnage" placeholder="Nom du perso">
            </div>
        <br>
            <div class="form-group col-md-4 offset-md-4">
                <label for="img">Choisir une image pour le personnage <br> <em>(taille carré)</em></label>
            </div>

            <div class="form-group col-md-4 offset-md-4">
                <input type="file" id="img_personnage" name="img_personnage" accept="image/*" onchange="loadFile(event)">
            </div>

            <div class="appercu">
                <img id="output" style="width:150px;height: 150px;"/>
            </div>

            <span style="font-size: small;" ><em>(visualisation de l'image)</em></span>

            <div>
                <br>
                <button type="submit" value="submit">Envoyer</button>
            </div>
        </form>
    </div>
    <br>


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
            <p>{!! \Session::get('success') !!}</p>
        </div>
    @endif
    @if (\Session::has('error'))
        <div class="alert alert-danger">
            <p>{!! \Session::get('error') !!}</p>
        </div>
    @endif



@endsection