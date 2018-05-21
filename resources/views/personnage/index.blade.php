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

<?php
    var_dump($_FILES);

    if(!empty($_FILES)){
        if($_FILES['img']['error'] == 0){
            // Vérif' de l'extension du fichier
            $fileInfo = pathinfo($_FILES['img']['name']);
            $extensions_autorisees = ['jpg', 'png', 'gif'];
            $extension = $fileInfo['extension'];
            if(in_array($fileInfo['extension'], $extensions_autorisees)){
                $newName = md5(uniqid(rand(), true));
                $newWidth = 200;
                $newHeight = 200;
                // on crée une copie de l'image
                if($extension == 'jpg' || $extension == 'jpeg'){
                    $newImage = imagecreatefromjpeg($_FILES['img']['tmp_name']);
                }
                elseif ($extension == 'png'){
                    $newImage = imagecreatefrompng($_FILES['img']['tmp_name']);
                }
                else{
                    $newImage = imagecreatefromgif($_FILES['img']['tmp_name']);
                }
                $imageWidth = imagesx($newImage);
                $imageHeight = imagesy($newImage);
                $miniature = imagecreatetruecolor($newWidth, $newHeight);
                imagecopyresampled($miniature, $newImage, 0, 0, 0, 0, $newWidth, $newHeight, $imageWidth, $imageHeight);
                // On enregistre miniature dans un nouveau dossier dans upload
                $thumbnailsFolder = '../img_personnage/thumbnails/';
                if($extension == 'jpg' || $extension == 'jpeg'){
                    imagejpeg($miniature, $thumbnailsFolder . $newName . '.' . $extension);
                }
                elseif($extension == 'png'){
                    imagepng($miniature, $thumbnailsFolder . $newName . '.' . $extension);
                }
                else{
                    imagegif($miniature, $thumbnailsFolder . $newName . '.' . $extension);
                }

                $imageWidth = imagesx($newImage); // largeur
                $imageHeight = imagesy($newImage); // longueur
                // On calcul la hauteur de la miniature pour garder les proportions
                $newHeight = ($imageHeight * $newWidth) / $imageWidth;
                // On crée la miniature (zone sans l'image)
                $miniature = imagecreatetruecolor($newWidth, $newHeight);
                // On remplit avec l'image envoyée
                imagecopyresampled($miniature, $newImage, 0, 0, 0, 0, $newWidth, $newHeight, $imageWidth, $imageHeight);

                // On enregistre miniature dans un nouveau dossier dans upload
                $thumbnailsFolder = '../img_persoonnage/thumbnails/';
                if($extension == 'jpg' || $extension == 'jpeg'){
                    imagejpeg($miniature, $thumbnailsFolder . $newName . '.' . $extension);
                }
                elseif($extension == 'png'){
                    imagepng($miniature, $thumbnailsFolder . $newName . '.' . $extension);
                }
                else{ // si gif
                    imagegif($miniature, $thumbnailsFolder . $newName . '.' . $extension);
                }



            }
        }
    }


?>





@endsection
