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

                    <div class="lecteur col-md-12">
                        <div class="hideun">
                            <h3> <-- diapo 1 --></h3>
                            <button type="button" id="fakeun" class="btn btn-primary active"> Envoyez la note !</button>
                        </div>

                        <div class="hidedeux" style="display: none;">
                            <h3> <-- diapo 2 --> </h3>
                            <button type="button" id="fakedeux" class="btn btn-primary active"> Envoyez la note !</button>
                        </div>

                        <div class="hidetrois" style="display: none;">
                            <h3> <-- diapo 3 --> </h3>
                            <button type="button" id="faketrois" class="btn btn-primary active"> Envoyez la note !</button>
                        </div>

                        <div class="hidequatre" style="display: none;">
                            <h3><-- diapo 4 --></h3>
                            <button type="button" id="fakequatre" class="btn btn-primary active"> Envoyez la note !</button>
                        </div>

                        <div class="hidecinq" style="display: none;">
                            <h3> <-- diapo 5 --> </h3>
                            <button type="button" id="fakecinq" class="btn btn-primary active"> Envoyez la note !</button>
                        </div>



                        <div class="row">
                            <div class="objects col-md-6">
                               <--    liste des objets / inventaire     -->
                            </div>

                            <br/><br/>

                            <div class="pages offset-2 col-md-4">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">Revenir</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">Etape suivante</a>
                                        </li>
                                    </ul>
                                </nav>
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