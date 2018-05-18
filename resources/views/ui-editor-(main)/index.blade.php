 @extends('template.index')
 
  @section('content')

    <div class="p-0" id="editor-tab">
    <div class="container-fluid">
      <div class="row w-100" id="tabs">
        <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 col-3" id="story">
          <div class="align-items-center justify-content-center"></div>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 col-3" id="character">
          <div class="align-items-center justify-content-center"></div>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 col-3" id="slides">
          <div class="align-items-center justify-content-center"></div>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 col-3" id="preview">
          <div class="align-items-center justify-content-center"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-0" id="editor-tab">
    <div class="container-fluid my-1">
      <div class="row w-100" id="outils"></div>
    </div>
  </div>
  <div class="p-0" id="editor-tab">
    <div class="container-fluid my-1">
      <div class="row w-100" id="current"></div>
    </div>
  </div>
  <div class="" id="editor">
    <div class="container-fluid m-2">
      <div class="row m-1">
        <div class="flex-column h-100 col-sm-2 col-md-2 col-2" id="thumbnails">
          <div class="m-1 align-items-center align-self-center" id="thumbnail"></div>
          <div class="m-1 align-items-center align-self-center" id="thumbnail"></div>
          <div class="m-1 align-items-center align-self-center" id="thumbnail"></div>
          <div class="m-1 align-items-center align-self-center" id="thumbnail"></div>
        </div>
        <div class="col-md-4 flex-column col-sm-4 col-4" id="tools">
          <div class="row h-50 my-1"></div>
          <div class="row h-50 my-1"></div>
        </div>
        <div class="col-md-6 flex-column align-self-center" id="previews" >
          <div class="row h-75 align-items-center align-self-center"></div>
        </div>
      </div>
    </div>
  </div>

    @endsection
  