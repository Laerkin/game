

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

<!--    --><?php
//    // Le fichier
//    $filename = 'test.jpg';
//
//    // Définition de la largeur et de la hauteur maximale
//    $width = 200;
//    $height = 200;
//
//    // Content type
//    header('Content-Type: image/jpeg');
//
//    // Cacul des nouvelles dimensions
//    list($width_orig, $height_orig) = getimagesize($filename);
//
//    $ratio_orig = $width_orig/$height_orig;
//
//    if ($width/$height > $ratio_orig) {
//        $width = $height*$ratio_orig;
//    } else {
//        $height = $width/$ratio_orig;
//    }
//
//    // Redimensionnement
//    $image_p = imagecreatetruecolor($width, $height);
//    $image = imagecreatefromjpeg($filename);
//    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
//
//    // Affichage
//    imagejpeg($image_p, null, 100);
//    ?>
<!---->


@endsection
