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
                        <div class="container mt-3">
                            <div class="row">
                                <section class="col-md-6">
                                    <div class="row bulle shadow">
                                        <div class="col-12 text-center p-3">
                                            <h3>Une statue pas si Américaine</h3>
                                            <hr/>
                                            <p>Vous connaissez surement la statue de la Liberté, mais saviez vous que en 1986,
                                                un sondage révèle que 2% seulement des Americains savaient que la statue
                                                de la Liberté avais été offerte par la France aux Etats-unis pour célébrer
                                                le centenaire de la Déclaration d'indépendance américaine.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mt-5 mb-5">
                                            <img class="personnage" src="{{ asset('img/avatar/woman_icon.png') }}" alt="Personnage">
                                        </div>
                                    </div>
                                </section>
                                <section class="col-md-6 text-center">
                                    <img class="img-visuel" src="{{ asset('img/photo/statue1.jpg') }}" alt="">
                                </section>
                            </div>
                        </div>
                            <button type="button" id="fakeun" class="btn btn-default active"> voyage suivant !</button>
                        </div>

                        <div class="hidedeux" style="display: none;">
                                <div class="container mt-3">
                                        <div class="row">
                                            <section class="col-md-6">
                                                <div class="row bulle shadow">
                                                    <div class="col-12 text-center p-3">
                                                        <h3>Faîtes entrer l'artiste</h3>
                                                        <hr/>
                                                        <p>De son vrai nom La Liberté éclairant le monde,
                                                            le monument est exécuté à Paris par le sculpteur Bartholdi
                                                            avec la collaboration de Gustave Eiffel pour la charpente métallique.
                                                            La statue est inaugurée le 28 octobre 1886.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mt-5 mb-5">
                                                        <img class="personnage" src="{{ asset('img/avatar/woman_icon.png') }}" alt="Personnage">
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="col-md-6 text-center">
                                                <img class="img-visuel" src="{{ asset('img/photo/bartholdi.jpg') }}" alt="">
                                            </section>
                                        </div>
                                    </div>
                            <button type="button" id="fakedeux" class="btn btn-primary active"> et c'est parti!</button>
                        </div>

                        <div class="hidetrois" style="display: none;">
                                <div class="container mt-3">
                                        <div class="row">
                                            <section class="col-md-6">
                                                <div class="row bulle shadow">
                                                    <div class="col-12 text-center p-3">
                                                        <h3>La Dame de Fer</h3>
                                                        <hr/>
                                                        <p>Quelques chiffres:
                                                                -Hauteur totale de la structure, socle compris : 92.99m,
                                                                -Hauteur de la tête: 4.40m,
                                                                -Longueur du plus grand rayon de la couronne:3.5m,
                                                                -Poids de la structure:225 tonnes, dont 125 d'acier et 31 de cuivre,
                                                                -Nombre de caisses pour transporter la statue démontée:210,
                                                                -Nombre de mois nécessaires pour l'assemblage de la structure:3.5,
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mt-5 mb-5">
                                                        <img class="personnage" src="{{ asset('img/avatar/woman_icon.png') }}" alt="Personnage">
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="col-md-6 text-center">
                                                <img class="img-visuel" src="{{ asset('img/photo/statue1.jpg') }}" alt="">
                                            </section>
                                        </div>
                                    </div>
                            <button type="button" id="faketrois" class="btn btn-primary active"> magnifique ?</button>
                        </div>

                        <div class="hidequatre" style="display: none;">
                                <div class="container mt-3">
                                        <div class="row">
                                            <section class="col-md-6">
                                                <div class="row bulle shadow">
                                                    <div class="col-12 text-center p-3">
                                                        <h3>Madame, où êtes vous?</h3>
                                                        <hr/>
                                                        <p>Saurez vous la replacer sur la map ?
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mt-5 mb-5">
                                                        <img class="personnage" src="{{ asset('img/avatar/woman_icon.png') }}" alt="Personnage">
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="col-md-6 text-center">
                                                <img class="img-visuel" src="{{ asset('img/photo/statue2.jpg') }}" alt="">
                                            </section>
                                        </div>
                                    </div>
                            <button type="button" id="fakequatre" class="btn btn-primary active"> wow !</button>
                        </div>

                        <div class="hidecinq" style="display: none;">
                                <div class="container mt-3">
                                        <div class="row">
                                            <section class="col-md-6">
                                                <div class="row bulle shadow">
                                                    <div class="col-12 text-center p-3">
                                                        <h3>Madame, où êtes vous?</h3>
                                                        <hr/>
                                                        <p>Saurez vous la replacer sur la map ?
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mt-5 mb-5">
                                                        <img class="personnage" src="{{ asset('img/avatar/woman_icon.png') }}" alt="Personnage">
                                                    </div>
                                                </div>
                                            </section>
                                            <section class="col-md-6 text-center">
                                                <div id></div>
                                            </section>
                                        </div>
                                    </div>
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
