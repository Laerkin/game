@extends('template.index')

@section('content')

    <div style="padding: 2%;" class="container-fluid">
        <div class="row">
        <div class="img col-md-6">

        </div>
        <div class="gg col-md-6">

            <h1>BRAVO !</h1>

                 <h2> Vous avez terminé cette aventure !</h2>
                 <br/>
                 <h2>Vous obtenez un trophée "Votre première Aventure " !</h2>
                 <br/>
                 <h2>Vous gagnez aussi 1 point ! encore 4 pour la prochaine récompense !</h2>
                 <br/>

                 <h3> Donnez une note à cette histoire ! </h3>
                <label class="radio-inline"><input type="radio" name="optradio"> 1 </label>
                <label class="radio-inline"><input type="radio" name="optradio"> 2 </label>
                <label class="radio-inline"><input type="radio" name="optradio"> 3 </label>
                <label class="radio-inline"><input type="radio" name="optradio"> 4 </label>
                <label class="radio-inline"><input type="radio" name="optradio"> 5 </label>
                <button type="button" id="fake" class="btn btn-primary active"> Envoyez la note !</button>
            <div class="success" style="display:none;"> Note envoyée ! merci pour votre soutien !</div>


        </div>
        </div>
    </div>


    <script src="{{ asset('js/endStory.js') }}" defer></script>
    <link href="{{ asset('css/endStory.css') }}" rel="stylesheet">

@endsection