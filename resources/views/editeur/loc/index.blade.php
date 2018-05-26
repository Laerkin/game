<div class="container">
    <section>
        <div class="row justify-content-between ">
            <form id="frmAddLoc" class="needs-validation col-md-4" novalidate method="POST" action="">
                @csrf
                <div class="form-group">
                    <label class="mt-2" for="intitule">{{ trans('create_map.form.intitule')}}</label>
                    <input type="text" class="form-control @if($errors->has('intitule')) is-invalid @endif" id="intitule" name="intitule">
                    @if($errors->has('intitule'))
                        <div class="invalid-tooltip mt-2">
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
                    <select id="style-selector" name="style" class="custom-select @if($errors->has('style')) is-invalid @endif">
                        <option value="normal" selected="selected">Normal</option>
                        <option value="silver">Silver</option>
                        <option value="night">Night</option>
                        <option value="retro">Retro</option>
                        <option value="apocalypse">Apocalypse</option>
                    </select>
                    @if($errors->has('style'))
                        <div class="invalid-tooltip mt-2">
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
                        <input type="text" class="form-control @if($errors->has('latitude')) is-invalid @endif" id="latitude" name="latitude" value="">
                    </div>
                    @if($errors->has('latitude'))
                        <div class="invalid-tooltip mt-2">
                            <ul>
                                @foreach( $errors->get('latitude') as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group col-md-6">
                        <label for="longitude">{{ trans('create_map.form.longitude')}}</label>
                        <input type="text" class="form-control @if($errors->has('longitude')) is-invalid @endif" id="longitude" name="longitude" value="">
                    </div>
                    @if($errors->has('longitude'))
                        <div class="invalid-tooltip mt-2">
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
                    <input type="text" class="form-control @if($errors->has('adresse')) is-invalid @endif" id="adresse" name="adresse" value="">
                    @if($errors->has('adresse'))
                        <div class="invalid-tooltip mt-2">
                            <ul>
                                @foreach( $errors->get('adresse') as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <button type="submit" class="reload-form btn-form btn btn-default btn-block shadow mb-3">{{ trans('create_story.form.save')}}</button>
            </form>
            <div id="map" class="col-12 col-md-7">
                {{-- Vue de la carte --}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @if ( !empty($successMessage) )
                    <div class="hidden alert alert-info text-center shadow mt-3" role="alert">
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


<script>
    $(document).ready(function(){
        $('#frmAddLoc').submit(function(element){
            // On bloque l'envoi "standard" du formulaire
            element.preventDefault();

            //serialize permet de créer la chaîne de paramètres
            // console.log($('form').serialize());
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/saveloc',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',

                success: function(data) {
                   alert('OK');
                    // On fait apparaitre le message succes provenant du controleur
                    $('.alert-info').removeClass('hidden');
                },
                error: function(data) {
                   alert('ERROR');
                    // On fait apparaitre le(s) message(s) error provenant du controleur
                    $('.invalid-tooltip').removeClass('hidden');
                }
            });
        });
    });











    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
