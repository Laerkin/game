@extends('template.index')

@section('content')


    <div class="all container-fluid">
        <div class="row">
            <div class="title col-md-12">
                <h3>
                     Vous êtes dans l'aventure :
                </h3>

                <br/><br/>

                <div class="row">

                    <div class="lecteur container col-md-12">
                            <div class="row">
                        <div class="hideun">
                            <div class="dame col-md-8"></div>
                            <div class="hello col-md-4"></div>
                            <button type="button" id="fakeun" class="btn btn-primary active"> voyage suivant !</button>
                        </div>

                        <div class="hidedeux" style="display: none;">
                            <div class="col-md-12">

                            </div>

                            <button type="button" id="fakedeux" class="btn btn-primary active"> et c'est parti!</button>
                        </div>

                        <div class="hidetrois" style="display: none;">
                            <div class="col-md-12"></div>

                            <button type="button" id="faketrois" class="btn btn-primary active"> magnifique ?</button>
                        </div>

                        <div class="hidequatre" style="display: none;">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <button type="button" id="fakequatre" class="btn btn-primary active"> wow !</button>
                        </div>

                        <div class="hidecinq" style="display: none;">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <button type="button" id="fakecinq" class="btn btn-primary active"> c'était cool ! retour au bercail !</button>
                         </div>

                        </div>
                    </div>

                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/lecteur.js') }}" defer></script>
    <link href="{{ asset('css/lecteur.css') }}" rel="stylesheet">



@endsection