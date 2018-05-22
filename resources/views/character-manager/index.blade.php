@extends('template.index')
 
  @section('content')

    <div class="">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="create"> <h1> Creer un personnage </h1> </div>
              <div class="row my-1 h-25" id="characterCreatorForm">
                <form></form>
              </div>
          </div>
          <div class="col-md-6">
            <div class="edit"> <h1> Editer un personnage </h1> </div>
              <div class="row my-1 h-25" id="characterEditorForm">
                <form></form>
              </div>
          </div>
        </div>
      </div>
    </div>

  @endsection