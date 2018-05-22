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
          <div class="col-md-6"> <p> {{ $story->difficulte }} </p> </div>
          <div class="col-md-6"> <p> {{ $story->genre }} </p> </div>
        </div>

        <div class="row my-1" id="commentaires">
         


          @if(! empty( $story->commentaires() ) )
          <div class="col-12">
             @foreach( $story->commentaires() as $commentaire )
            <h4>UTILISATEUR :  {{ $commentaire->user()->email }} </h4>
              <p>COMMENTAIRE : {{ $commentaire->text }}</p>
              
            @endforeach
          </div>
           
          @endif
        </div>
      </div>
    </div>

  @endsection