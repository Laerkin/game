@extends('layouts.master')

@section('content')
    <div class="container">
        <section>
            <div class="row">
                <form action="" class="col-md-4">
                    <div class="form-group">
                        <label for="slides">{{ trans('create_map.form.slides')}}</label>
                        <select class="custom-select" id="slides" name="slides">
                            <option selected>{{ trans('create_map.form.choice')}}...</option>
                            <option value="5">Chapitre 5 : Les Pyramides De Kuko</option>
                            <option value="6">Chapitre 6 : Le tunnel aux scarabées</option>
                            <option value="7">Chapitre 7 : Le tombeau</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="titre">{{ trans('create_map.form.title')}}</label>
                        <input type="text" class="form-control" id="titre" name="titre">
                    </div>
                    <div id="style-selector-control" class="form-group">
                        <label for="style">{{ trans('create_map.form.style')}}</label>
                        <select id="style-selector" class="custom-select">
                            <option value="default">Default</option>
                            <option value="silver">Silver</option>
                            <option value="night">Night mode</option>
                            <option value="retro" selected="selected">Retro</option>
                            <option value="hiding">Hide features</option>
                        </select>
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="longitude">{{ trans('create_map.form.longitude')}}</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" value="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="latitude">{{ trans('create_map.form.latitude')}}</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" value="">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="adresse">{{ trans('create_map.form.adress')}}</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="">
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-block shadow">{{ trans('create_story.form.save')}}</button>
                </form>
                <div id="map" class="col-md-8">
                    {{-- Implantation de la carte --}}
                </div>
            </div>
        </section>
    </div>





    <div class="container">
        {{-- <div id="style-selector-control"  class="map-control">
            <select id="style-selector" class="custom-select">
                <option value="default">Default</option>
                <option value="silver">Silver</option>
                <option value="night">Night mode</option>
                <option value="retro" selected="selected">Retro</option>
                <option value="hiding">Hide features</option>
            </select>
        </div> --}}


        <form method="POST" action="/authors" target="" enctype="multipart/form-data">
            <input type="hidden" name="longitude" value="" />
            <input type="hidden" name="latitude" value="" />
        </form>
    </div>








@endsection
