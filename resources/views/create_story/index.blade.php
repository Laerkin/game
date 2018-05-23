@extends('layouts.master')


@section('content')

    <!--
    Feuille de style
    -->
    <style>

        body{
            background-color:#8ACBF7;
            color: #856D4D;
            font-family: 'Indie Flower', cursive;
            font-weight: bold;
        }
        label{
            font-size: 20px;
        }

        /** Responsive */
        @media all and (max-width: 900px)
        {
            label{
                font-size: 18px;
            }
            em{
                font-size: 16px;
            }
        }

    </style>



    <div class="container">
        <section>

            <br>

            <form method="POST" action="" id="createStory">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label class="{{ $errors->has('titre') ? 'has error' : '' }}" for="titre">{{ trans('create_story.form.title')}}</label>
                        <input type="text" class="form-control" id="titre" name="titre">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mt-2">
                        @if ($errors->has('titre'))
                            <div class="alert alert-danger shadow" role="alert">
                                <ul>
                                    @foreach( $errors->get('titre') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="synopsis">{{ trans('create_story.form.synopsis')}}</label>
                        <textarea class="form-control" id="synopsis" name="synopsis" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mt-2">
                        @if ($errors->has('synopsis'))
                            <div class="alert alert-danger shadow" role="alert">
                                <ul>
                                    @foreach( $errors->get('synopsis') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="genre">{{ trans('create_story.form.type')}}</label>
                        <select class="custom-select" id="genre" name="genre">
                            <option selected>{{ trans('create_story.form.choice')}}...</option>
                            <option value="1">Aventure</option>
                            <option value="2">Thriller</option>
                            <option value="3">Fantastique</option>
                            <option value="4">Romance</option>
                            <option value="5">Guerre</option>
                            <option value="6">Hero-Fantasy</option>
                            <option value="7">Science-Fiction</option>
                            <option value="8">Autres</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    @if ($errors->has('genre'))
                        <div class="alert alert-danger shadow" role="alert">
                            <ul>
                                @foreach( $errors->get('genre') as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="form-row">
                </div>


                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="difficulte">{{ trans('create_story.form.difficulty')}}</label>
                        <input type="range" class="custom-range" min="0" max="2" id="difficulte" name="difficulte" onchange="range.value=value">
                        <output id="range" class="text-center">1</output>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mt-2">
                        @if ($errors->has('difficulte'))
                            <div class="alert alert-danger shadow" role="alert">
                                <ul>
                                    @foreach( $errors->get('difficulte') as $error)
                                        <li>{{ $error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>


                <input id="publish" name="publish" type="hidden" value="0">
                <button type="submit" class="btn btn-outline-success btn-block">{{ trans('create_story.form.save')}}</button>
            </form>
            <div class="row">
                <div class="col-md-12">
                    @if ( !empty($successMessage) )
                        <div class="alert alert-success text-center shadow" role="alert">
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



<script>
    // Fondu close sur le message de validation
</script>