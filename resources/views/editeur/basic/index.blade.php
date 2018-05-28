
    <div class="container">
        <section>
            <div class="row">
                <form id="createStory" class="needs-validation col-md-4" novalidate method="POST" action="#">
                    @csrf
                    <div class="form-group">
                        <label class="mt-2" for="titre">{{ trans('create_story.form.title')}}</label>
                        <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="titre" name="titre">
                        @if ($errors->has('titre'))
                            <div class="invalid-tooltip mt-2">
                                <ul>
                                @foreach( $errors->get('titre') as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="synopsis">{{ trans('create_story.form.synopsis')}}</label>
                        <textarea class="form-control @if($errors->has('synopsis')) is-invalid @endif" id="synopsis" name="synopsis" rows="5"></textarea>
                        @if ($errors->has('synopsis'))
                            <div class="invalid-tooltip mt-2">
                                <ul>
                                @foreach( $errors->get('synopsis') as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="genre">{{ trans('create_story.form.type')}}</label>
                        <select class="custom-select @if($errors->has('synopsis')) is-invalid @endif" id="genre" name="genre">
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
                        @if ($errors->has('genre'))
                            <div class="invalid-tooltip mt-2">
                                <ul>
                                @foreach( $errors->get('genre') as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="difficulte">{{ trans('create_story.form.difficulty')}}</label>
                        <input type="range" class="custom-range @if($errors->has('synopsis')) is-invalid @endif" min="0" max="4" id="difficulte" name="difficulte" onchange="range.value=value">
                        <output id="range" class="output-range">2</output>
                        @if ($errors->has('difficulte'))
                            <div class="invalid-tooltip mt-2">
                                <ul>
                                @foreach( $errors->get('difficulte') as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <input id="publish" name="publish" type="hidden" value="0">

                </form>
            </div>
            <div id="basic-story" class="col-12 col-md-7">

                </div>

                <input id="publish" name="publish" type="hidden" value="0">

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




