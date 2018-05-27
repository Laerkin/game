@extends('template.index')

@section('content')



    <div class="all container">
        <div class="row ">
            <div class="img col-md-6">
                {{-- Image --}}
            </div>
            <div class="gg col-md-6">
                <h1>BRAVO !</h1>
                <strong>Vous avez terminé cette aventure !</strong>
                <br/>
                <h2>Vous obtenez un trophée</h2>

                <strong>Votre première aventure !</strong><br>
                <button class="pulse-button"> <i class="fas fa-paper-plane"></i></button>
                <br/>
                <h2>Vous gagnez aussi 1 point ! encore 4 pour la prochaine récompense !</h2>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                        1/5
                    </div>
                </div>
                <br/>

               <div class="hide">
                   <h3> Donnez une note à cette histoire ! </h3>

                <label class="radio-inline"><input type="radio" name="optradio"> 1 </label>
                <label class="radio-inline"><input type="radio" name="optradio"> 2 </label>
                <label class="radio-inline"><input type="radio" name="optradio"> 3 </label>
                <label class="radio-inline"><input type="radio" name="optradio"> 4 </label>
                <label class="radio-inline"><input type="radio" name="optradio"> 5 </label>
                <button type="button" id="fake" class="btn btn-primary active"> Envoyez la note !</button>
               </div>
            <div class="success" style="display:none;"> Note envoyée ! merci pour votre soutien !</div>


        </div>
        </div>

    </div>


    <script src="{{ asset('js/endStory.js') }}" defer></script>
    <link href="{{ asset('css/endStory.css') }}" rel="stylesheet">

@endsection
