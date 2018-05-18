 @extends('layouts.index')
 
  @section('content')

  <div class="p-0" id="editor-tab">
    <div class="container-fluid">
      <div class="row w-100" id="tabs">
        <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 col-3" id="story">
          <div class="align-items-center justify-content-center">story</div>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 col-3" id="character">
          <div class="align-items-center justify-content-center">character</div>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 col-3" id="slides">
          <div class="align-items-center justify-content-center">slides</div>
        </div>
        <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 col-3" id="preview">
          <div class="align-items-center justify-content-center">preview</div>
        </div>
      </div>
    </div>
  </div>
  <div class="" id="editor">
    <div class="container-fluid m-2">
      <div class="row m-1">

        <div class="flex-column h-100 col-sm-2 col-md-2 col-2" id="thumbnails">
          <div class="m-1 align-items-center align-self-center" id="thumbnail">thumbnail</div>
          <div class="m-1 align-items-center align-self-center" id="thumbnail">thumbnail</div>
          <div class="m-1 align-items-center align-self-center" id="thumbnail">thumbnail</div>
          <div class="m-1 align-items-center align-self-center" id="thumbnail">thumbnail</div>
        </div>
        <div class="col-md-4 flex-column col-sm-4 col-4" id="tools">
          <div class="row h-50 my-1">tools</div>
          <div class="row h-50 my-1">tools</div>
        </div>
        <div class="col-md-6 flex-column align-self-center" id="previews" >
          <div class="row h-75 align-items-center align-self-center"></div>


        <div class="col-md-10 my-1">
          <div class="row my-1"></div>
          <div class="row my-1"></div>
          <div class="row">
            <div class="col-md-4 h-100 flex-column">
              <div class="div h-50 m-1"></div>
              <div class="div h-50 m-1"></div>
            </div>
            <div class="col-md-8 p-2"></div>
          </div>

        </div>
      </div>
    </div>
  </div>

    @endsection
  