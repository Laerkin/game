@extends('layouts.master')

@section('content')

    <form method="post" enctype="multipart/form-data" style="text-align: center;">
    @csrf

        <div class="input-group mb-3">
            <label for="name">Nom du personnage :<br></label>
            <input type="text" class="form-control" id="name" placeholder="Nom du perso">
        </div>
    <br>
        <label for="img">Choisir un fichier pour le personnage (taille carré)<br></label>
            <input type="file" id="img" name="img" accept="image/*" onchange="loadFile(event)">
    <br>
    <br>
        <img id="output" style="width:150px;height: 150px;"/>
    <br>
        <span style="font-size: small;">(visualisation de l'image)</span>
    <br>
        <div>
            <br>
            <button type="submit" value="submit">Envoyer</button>
        </div>
    </form>

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>






@endsection
