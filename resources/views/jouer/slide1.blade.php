@extends('template.index')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <section class="col-md-6">
                <div class="row bulle">
                    <div class="col-12 text-center p-3">
                        <h3>Une statue pas si Américaine</h3>
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
@endsection
