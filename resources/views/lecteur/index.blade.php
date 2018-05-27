@extends('template.index')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="title col-md-12">
                <h3>
                     Vous êtes dans l'aventure ! <-- nom de l'histoire  -->
                </h3>

                <br/><br/>

                <div class="row container">
                    <div class="lecteur col-md-12">
                        METTRE LE ECTEUR ICI

                        <br/><br/>

                        <div class="row">
                            <div class="objects col-md-8">
                                liste des objets / inventaire
                            </div>

                            <br/><br/>

                            <div class="notes col-md-4">
                                notes
                            </div>
                        </div>
                        <div class="progress">
                            Progression dans l'histoire !
                            <div class="progress-bar w-75">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/lecteur.js') }}" defer></script>
    <link href="{{ asset('css/lecteur.css') }}" rel="stylesheet">



@endsection