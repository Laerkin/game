@extends('layouts.app')

@section ('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">

                               {{$user->avatar}}

                            </div>
                            <div class="col-md-4">
                                <li>{{$user->name}}</li>
                                <li>{{$user->email}}</li>

                            </div>
                            <div class="col-md-">
                                <li>{{$user->localisation}}</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">

                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('auth.email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="loc" class="col-md-4 col-form-label text-md-right">{{ trans('auth.loc') }}</label>

                            <div class="col-md-6">
                                <input id="loc" type="text" class="form-control{{ $errors->has('loc') ? ' is-invalid' : '' }}" name="loc" value="{{ old('loc') }}" required autofocus>

                                @if ($errors->has('loc'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('loc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ trans('auth.submitRegister') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('js/profil.js') }}" defer></script>
<link href="{{ asset('css/profil.css') }}" rel="stylesheet">

    @endsection
