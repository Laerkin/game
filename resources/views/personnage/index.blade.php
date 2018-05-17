<form method="post" enctype="multipart/form-data" style="text-align: center;">
    <div>
        <label for="image_uploads">Pour sélectionner une image d'avatar (PNG, JPG) <br>
            <span style="color: red;font-weight: bold; text-align: center;">Cliquez ici</span></label>
        <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple>
     </div>

    <br>

    <div class="input-group mb-3">
        <label for="name">Nom du personnage :<br></label>
        <input type="text" class="form-control" id="name" placeholder="Nom du perso">
    </div>

    <div class="preview">
        <p>Aucun fichier sélectionné pour le moment</p>
    </div>
    <div>
        <button type="submit" value="submit">Envoyer</button>
    </div>
</form>



<script>
    var input = document.querySelector('input');
    var preview = document.querySelector('.preview');

    input.style.opacity = 0;


    input.addEventListener('change', updateImageDisplay);

    function updateImageDisplay() {
        while(preview.firstChild) {
            preview.removeChild(preview.firstChild);
        }

        var curFiles = input.files;
        if(curFiles.length === 0) {
            var para = document.createElement('p');
            para.textContent = 'No files currently selected for upload';
            preview.appendChild(para);
        } else {
            var list = document.createElement('ol');
            preview.appendChild(list);
            for(var i = 0; i < curFiles.length; i++) {
                var listItem = document.createElement('li');
                var para = document.createElement('p');
                if(validFileType(curFiles[i])) {
                   para.textContent = /*'File name ' +*/ curFiles[i].name /*+ ', file size ' + returnFileSize(curFiles[i].size) + '.'*/;
                    var image = document.createElement('img');
                    image.src = window.URL.createObjectURL(curFiles[i]);

                    listItem.appendChild(image);
                    listItem.appendChild(para);

                } else {
                    para.textContent = 'File name ' + curFiles[i].name + ': Not a valid file type. Update your selection.';
                    listItem.appendChild(para);
                }

                list.appendChild(listItem);
            }
        }
    }



    var fileTypes = [
        'image/jpeg',
        'image/jpeg',
        'image/png',
        'image/gif'
    ];

    function validFileType(file) {
        for(var i = 0; i < fileTypes.length; i++) {
            if(file.type === fileTypes[i]) {
                return true;
            }
        }

        return false;
    }

/*
    function returnFileSize(number) {
        if(number < 1024) {
            return number + ' octets';
        } else if(number >= 1024 && number < 1048576) {
            return (number/1024).toFixed(1) + ' Ko';
        } else if(number >= 1048576) {
            return (number/1048576).toFixed(1) + ' Mo';
        }
    }
*/



</script>

