
<div class="container">
    <div class="row justify-content-between no-gutters">
        <aside class="col-md-3 p-0 mb-3">
            <div class="pos-f-t p-0">
                <nav class="navbar justify-content-center navbar-dark shadow" style="background-color:#a4912f; border-radius: 4px;">
                    <button class="navbar-toggler d-flex " type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <h4>Slides</h4>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <div class="collapse mt-3 shadow" id="navbarToggleExternalContent">
                    <div class="bg-default p-4" style="background-color:#d8c15e; border-radius: 4px;">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-default btn-block shadow mb-3 btnAddSlide" aria-label="Left Align">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="row justify-content-center ">
                            <div class="slideLst ">
                                {{-- Ajout des nouvelles slides --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <section class="col-md-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between mb-2 p-0">
                            <div class="toolItem text-center col-2 p-2">
                                <i class="fas fa-font"></i>
                            </div>
                            <div class="toolItem text-center col-2 p-2">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="toolItem text-center col-2 p-2">
                                <i class="fas fa-file-audio"></i>
                            </div>
                            <div class="toolItem text-center col-2 p-2">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="toolItem text-center col-2 p-2">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row title1">
                        <div class="col-md-12">
                            Element list
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 mb-2 elementLst">
                            <div class="row elementItem">
                                <div class="col-md-12">
                                    #Element ###
                                </div>
                            </div>
                            <div class="row elementItem">
                                <div class="col-md-12">
                                    #Element ###
                                </div>
                            </div>
                            <div class="row elementItem">
                                <div class="col-md-12">
                                    #Element ###
                                </div>
                            </div>
                            <div class="row elementItem">
                                <div class="col-md-12">
                                    #Element ###
                                </div>
                            </div>
                            <div class="row elementItem">
                                <div class="col-md-12">
                                    #Element ###
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row title1">
                        <div class="col-md-12">
                            Element options
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 elementOptions">
                            elementOptions
                        </div>
                    </div>
                </div>
                <div class="col-md-7 offset-md-1">
                    <div class="row">
                        <div class="col-md-12 preview">
                            /* Preview */
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row title1">
                                <div class="col-md-12">
                                    Localisation slide :
                                </div>
                            </div>
                            <div class="row locItemSlide">
                                <div class="col-md-12 mt-2">
                                    <div class="row pt-1 ">
                                        <div class="col-8 pt-2">
                                            Bordeaux
                                        </div>
                                        <div class="col-3">
                                            <button type="button" class="btn btn-default btn-editLoc">
                                            <i class="fas fa-pencil-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-2 p-0 d-flex flex-column">
                                    <button type="button" class="btn btn-default btn-lg btn-addLoc" aria-label="Left Align">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7 offset-md-1">
                            <div class="row title1">
                                <div class="col-md-12">
                                    Localisations suivantes :
                                </div>
                            </div>
                            <div class="row locItem">
                                <div class="col-md-12 mt-2">
                                    <div class="row pt-1">
                                        <div class="col-7 pt-2">
                                            New-York City
                                        </div>
                                        <div class="col-5">
                                            <button type="button" class="btn btn-default btn-editLoc">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-default btn-deleteLoc">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row pt-1">
                                        <div class="col-7 pt-2">
                                            Melbourne
                                        </div>
                                        <div class="col-5">
                                            <button type="button" class="btn btn-default btn-editLoc">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button type="button" class="btn btn-default btn-deleteLoc">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>



