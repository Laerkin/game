@extends('template.index')
 
  @section('content')

    <div class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="create"> <h1> Creer un personnage </h1> </div>

              <div class="row my-1 h-25" id="characterCreatorForm">

                <form action="character-manager" id="personnage" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="name"> Nom/prenom </label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="character-image"> image </label>
                  <input type="file" id="character-image" class="form-control">
                </div>
                <div class="form-group">
                  <label for="bio"> biographie/présentation </label>
                  <input type="text" id="bio" class="form-control">
                </div>
                <button class="btn btn-primary"></button>
              </form>

              </div>
          </div>
          <div class="col-md-6">

            <div class="edit"> <h1> Editer un personnage </h1> </div>

              <div class="row my-1 h-25" id="characterEditorForm">

                <!-- formulaire d'edition -->

              </div>
          </div>
        </div>
      </div>
    </div>

  @endsection