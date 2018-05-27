@extends('template.index')

@section('content')


    <div class="all container-fluid">
        <div class="row">
            <div class="title col-md-12">
                <h3>
                     Vous êtes dans l'aventure : <-- nom de l'histoire  -->
                </h3>

                <br/><br/>

                <div class="row">
                    <div class="lecteur col-md-12">
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>



                        <--      METTRE LE ECTEUR ICI    -->



                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>


                        <div class="row">
                            <div class="objects col-md-6">
                               <--    liste des objets / inventaire     -->
                            </div>

                            <br/><br/>

                            <div class="pages offset-2 col-md-4">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">Revenir</a>
                                        </li>

                                        <li class="page-item">
                                            <a class="page-link" href="#">Etape suivante</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <br/>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/lecteur.js') }}" defer></script>
    <link href="{{ asset('css/lecteur.css') }}" rel="stylesheet">



@endsection