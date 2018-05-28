<div class="container">
        <section>
          <div class="row justify-content-between mt-5">
            <form action="CharacterManagerController@storeCharacter" class=" needs-validation col-md-4 " id="personnage" method="POST" enctype="multipart/form-data" no-validate>
              @csrf
              <label>Creer un personnage</label>
              <div class="form-group">
                <label for="name"> Nom/prenom </label>
                <input type="text" id="name" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" >
                @if($errors->has('name'))
                  <div class="invalid-tooltip mt-2">
                    <ul>  
                      @foreach ( $errors->get('name') as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
              <div class="form-group">
                <label for="character-image"> image </label>
                <input type="file" id="character-image" name="character-image" class="form-control  @if($errors->has('character-image')) is-invalid @endif">
                @if($errors->has('character-image'))
                  <div class="invalid-tooltip mt-2">
                    <ul>  
                        @foreach ( $errors->get('character-image') as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
              <div class="form-group">
                <label for="bio"> biographie/présentation </label>
                <input type="text" id="bio" name="bio" class="form-control @if($errors->has('bio')) is-invalid @endif">
                @if($errors->has('bio'))
                  <div class="invalid-tooltip mt-2">
                    <ul>  
                      @foreach ( $errors->get('bio') as $error)
                        <li>{{$error}}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
              </div>
              <button class="btn btn-primary btn-block shadow mb-3">Envoyer</button>
            </form>
            <div class="col-md-5">
              <div class="row" id="preview">
                <div class="mx-auto m-5" id="display-character"> 
                  <h5> Votre personnage </h5> 
                  @if(!empty($path))
                    <img src="{{url($path)}}" class="rounded-circle" alt="Avatar envoyé"/>
                  <div class="alert alert-info mt-3" role="alert">
                    <p>{{ $successMessage }}</p>
                  </div>
                  <div class="alert alert-secondary mt-3"  role="alert">
                  <p>{{$bio}}</p>
                  </div>
                  @endif
                </div>
              </div>  
            </div>
            <table class="col-md-3">
              <thead>
                <tr>
                  <td>Liste des personnages</td>
                </tr>
              </thead>
              <tbody>
              @if(! empty ($personnages) )
                @foreach( $personnages as $personnage )
                <tr>
                  <td>{{ $personnage->name }}</td>
                </tr>
                @endforeach
              @endif
              </tbody>
            </table>
          </div>
        </section>
      </div>