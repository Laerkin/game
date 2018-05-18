 @extends('template.index')
 
  @section('content')

    <div class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="titre"> <h1> {{ $stories->titre }} </h1> </div>
          </div>
          <div class="col-md-6">
            <a class="btn btn-block btn-success border border-primary" href="#">Start !</a>
          </div>
        </div>
        <div class="row my-1 h-25" id="synopsis">
          <p> {{ $stories->synopsis }} </p>
        </div>
        <div class="row my-1">
          <div class="col-md-6"> <p> {{ $stories->difficulte }} </p> </div>
          <div class="col-md-6"> <p> {{ $stories->genre }} </p> </div>
        </div>
        <div class="row my-1" id="commentaires">
          @if(! empty ($commentaires) )
            @foreach( $commentaires as $commentaire )
            <h4> {{ $user_id }} </h4>
              <p>{{ $commentaire->text }}</p>
              
            @endforeach
          @endif
        </div>
      </div>
    </div>

  @endsection