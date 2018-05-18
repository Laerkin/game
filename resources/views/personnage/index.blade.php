

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



<!--
Arrêtez de mme laisser dans la merde les gars !!!!
Je suis performant dans certains domaines mais on les laisse à d'autres ("tu feras la landinding page de chez toi pour la proposée, moi je la fais en journée de boulot (si je suis là la journée ou si je sui à l'heure...), je te laisse dans la merde et je prends ton boulot où tu es compétent et feras gagner du temps au projet !"
C'est comme les lois et le côté juridique: "tout le monde s'en fout à part toi" c'est "inutile, on s'en fout" ! BAH NON !!! C'est la base pour pas se faire convoqué devant le barreau et protéger aussi les utilisateurs...
<!---->


@endsection
