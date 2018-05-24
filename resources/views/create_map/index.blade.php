@extends('layouts.master')

@section('content')
    <div class="container">
        <section>
            <div class="row">
                <form method="POST" action="" class="col-md-4">
                    @csrf
                    <div class="form-group">
                        <label for="intitule">{{ trans('create_map.form.title')}}</label>
                        <input type="text" class="form-control" id="intitule" name="intitule">
                        @if($errors->has('intitule'))
                            <div class="alert alert-danger mt-2">
                                <ul>
                                    @foreach( $errors->get('intitule') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div id="style-selector-control" class="map control form-group">
                        <label for="style">{{ trans('create_map.form.style')}}</label>
                        <select id="style-selector" name="style" class="custom-select">
                            <option value="normal" selected="selected">Normal</option>
                            <option value="silver">Silver</option>
                            <option value="night">Night</option>
                            <option value="retro">Retro</option>
                            <option value="zombie">Zombie Attack</option>
                        </select>
                        @if($errors->has('style'))
                            <div class="alert alert-danger mt-2">
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
                            <label for="latitude">{{ trans('create_map.form.latitude')}}</label>
                            <input type="text" class="form-control" id="latitude" name="latitude" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="longitude">{{ trans('create_map.form.longitude')}}</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="">
                        </div>
                        @if($errors->has('latitude'))
                            <div class="alert alert-danger mt-2">
                                <ul>
                                    @foreach( $errors->get('latitude') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if($errors->has('longitude'))
                            <div class="alert alert-danger mt-2">
                                <ul>
                                    @foreach( $errors->get('longitude') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="adresse">{{ trans('create_map.form.adress')}}</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" value="">
                        @if($errors->has('adresse'))
                            <div class="alert alert-danger mt-2">
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
            <div class="row">
                <div class="col-md-12">
                    @if ( !empty($successMessage) )
                        <div class="alert alert-success text-center shadow mt-3" role="alert">
                            {{ $successMessage }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
