<div class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="create"> <h1> Creer un personnage </h1> </div>

                <div class="row my-1 h-25" id="characterCreatorForm">

                    <form action="/character-manager" id="personnage" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name"> Nom/prenom </label>
                            <input type="text" id="name" name="name" class="form-control">
                            @if($errors->has('name'))
                                <span class="help-block" style="color: red;">
                      <ul>  
                        @foreach ( $errors->get('name') as $error)
                              <li>{{$error}}</li>
                          @endforeach
                      </ul>
                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="character-image"> image </label>
                            <input type="file" id="character-image" name="character-image" class="form-control">
                            @if($errors->has('character-image'))
                                <span class="help-block" style="color: red;">
                      <ul>  
                        @foreach ( $errors->get('character-image') as $error)
                              <li>{{$error}}</li>
                          @endforeach
                      </ul>
                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="bio"> biographie/présentation </label>
                            <input type="text" id="bio" name="bio" class="form-control">
                            @if($errors->has('bio'))
                                <span class="help-block" style="color: red;">
                      <ul>  
                        @foreach ( $errors->get('bio') as $error)
                              <li>{{$error}}</li>
                          @endforeach
                      </ul>
                    </span>
                            @endif
                        </div>
                        <button class="btn btn-primary">Envoyer</button>
                    </form>

                </div>
            </div>
            <div class="col-md-6">
                <div class="create"> <h1> Votre personnage </h1> </div>
                <div class="row my-1 h-25" id="preview">
                    @if(!empty($path))
                        <img src="{{url($path)}}" alt="Image"/>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>