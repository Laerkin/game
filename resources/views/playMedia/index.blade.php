<!DOCTYPE html>
<html>
<head>

    <script type="text/javascript">
        function doSomething(){
            var fileContents = document.getElementById('idSong').value;
            document.getElementById('outputDiv').innerHTML = fileContents;
        }
        function doSomethingMore(){
            var fileContents = document.getElementById('idVideo').value;
            document.getElementById('outputDiv').innerHTML = fileContents;
        }

        var x = document.getElementById("idSong");

        function playAudio() {
            x.play();
        }

        function pauseAudio() {
            x.pause();
        }

        var y = document.getElementById("idVideo");

        function playVideo() {
            y.play();
        }

        function pauseVideo() {
            y.pause();
        }


    </script>

</head>
<body >

<form name = "form_input" method="post" action="#" enctype="multipart/form-data">
    <label for="idSong">musique </label>
    <input type="file" name="song" id="idSong" />
    <button type="button" onclick="doSomething()">Enter</button><br/>

    <label for="idVideo">URL de la video</label>
    <input type="url" name="video" id="idVideo" />
    <button type="button" onclick="doSomethingMore()">Enter</button>

    <br/>

    <button type="submit">submit !</button>

</form>

<div id="outputDiv"></div>


<p>Click the buttons to play or pause the audio or video.</p>

<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button><br/>

<button onclick="playVideo()" type="button">Play Video</button>
<button onclick="pauseVideo()" type="button">Pause Video</button>


</body>
</html>




