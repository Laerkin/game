 @extends('template.index')
 
  @section('content')

    <div class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="titre"> <h1> {{ $story->titre }} </h1> </div>
            <!-- Affichera une erreur "Trying to get property 'titre' of non-object" si il ne trouve pas d'id correspondant au numero dans l'url "fiche-<numero>" dans la BDD  -->
          </div>
          <div class="col-md-6">
            <a class="btn btn-block btn-success border border-primary" href="#">Start !</a>
          </div>
        </div>
        <div class="row my-1 h-25" id="synopsis">
          <p> {{ $story->synopsis }} </p>
        </div>
        <div class="row my-1">
          <div class="col-md-6"> <p>difficultée =  {{ $story->difficulte }} </p> </div>
          <div class="col-md-6"> <p>Genre : {{ $story->genre }} </p> </div>
        </div>

        <div class="row" id="commentaires">

          @if(! empty( $story->commentaires() ) )
          <div class="col-md-12">
             @foreach( $story->commentaires() as $commentaire )
            <h4>commentaire  de l'utilisateur :  {{ $commentaire->user()->name }} </h4>
              <p>COMMENTAIRE : {{ $commentaire->text }}</p>
              
            @endforeach
          </div>
          @endif
            <div class="col-md-3">
            <from>

              <h4>Laissez un commentaire !</h4>

              <div class="form-group">
                <label class="control-label" for="commentaire">commentaire</label>
                <div>
                  <textarea class="form-control" id="commentaire" name="commentaire">laissez votre commentaire ici !</textarea>
                </div>
              </div>
                <div>
                  <button id="submit" name="submit" class="btn btn-primary">envoyer !</button>
                </div>

            </from>
            </div>
        </div>
      </div>
    </div>

  @endsection