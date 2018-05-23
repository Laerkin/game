@extends('layouts.master')

@section('content')
    <div class="container">
        <section>
            <div class="row align-items-center">
                <form action="" class="col-md-4">
                    @csrf
                    <div class="form-group">
                        <label class="{{ $errors->has('titre') ? 'has error' : '' }}" for="titre">{{ trans('create_map.form.title')}}</label>
                        <input type="text" class="form-control" id="titre" name="titre">
                        @if($errors->has('titre'))
                            <div class="invalid-feedback">
                                <ul>
                                    @foreach( $errors->get('titre') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div id="style-selector-control" class="map control form-group">
                        <label class="{{ $errors->has('style') ? 'has error' : '' }}" for="style">{{ trans('create_map.form.style')}}</label>
                        <select id="style-selector" name="style" class="custom-select">
                            <option value="normal" selected="selected">Normal</option>
                            <option value="silver">Silver</option>
                            <option value="night">Night</option>
                            <option value="retro">Retro</option>
                            <option value="zombie">Zombie Attack</option>
                        </select>
                        @if($errors->has('style'))
                            <div class="invalid-feedback">
                                <ul>
                                    @foreach( $errors->get('style') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="{{ $errors->has('latitude') ? 'has error' : '' }}" for="latitude">{{ trans('create_map.form.latitude')}}</label>
                            <input type="text" class="form-control" id="latitude" name="latitude" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="{{ $errors->has('longitude') ? 'has error' : '' }}" for="longitude">{{ trans('create_map.form.longitude')}}</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="">
                        </div>
                        @if($errors->has('latitude'))
                            <div class="invalid-feedback">
                                <ul>
                                    @foreach( $errors->get('latitude') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if($errors->has('longitude'))
                            <div class="invalid-feedback">
                                <ul>
                                    @foreach( $errors->get('longitude') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="{{ $errors->has('adresse') ? 'has error' : '' }}" for="adresse">{{ trans('create_map.form.adress')}}</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="">
                        @if($errors->has('adresse'))
                            <div class="invalid-feedback">
                                <ul>
                                    @foreach( $errors->get('adresse') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-block shadow mb-3">{{ trans('create_story.form.save')}}</button>
                </form>
                <div id="map" class="col-md-8">
                    {{-- Implantation de la carte --}}
                </div>
            </div>
        </section>
    </div>
@endsection
