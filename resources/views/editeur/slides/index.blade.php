<div class="container">
    <div class="row justify-content-between no-gutters">
        <aside class="col-md-3 p-0 mb-3">
            <div class="pos-f-t p-0">
                <nav class="navbar justify-content-center navbar-dark shadow"
                     style="background-color:#a4912f; border-radius: 4px;">
                    <button class="navbar-toggler d-flex " type="button" data-toggle="collapse"
                            data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <h4>Slides</h4>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <div class="collapse mt-3 shadow" id="navbarToggleExternalContent">
                    <div class="bg-default p-4" style="background-color:#d8c15e; border-radius: 4px;">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-default btn-block shadow mb-3 btnAddSlide"
                                    aria-label="Left Align">
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
                            <div class="toolFont toolItem text-center col-2 p-2">
                                <i class="fas fa-font"></i>
                            </div>
                            <div class="toolImage toolItem text-center col-2 p-2">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="toolAudio toolItem text-center col-2 p-2">
                                <i class="fas fa-file-audio"></i>
                            </div>
                            <div class="toolVideo toolItem text-center col-2 p-2">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="toolPersonnage toolItem text-center col-2 p-2">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row title1">
                        <div class="col-md-12">
                            Liste des éléments
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 mb-2 elementLst">

                        </div>
                    </div>
                    <div class="row title1">
                        <div class="col-md-12">
                            Options
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 elementOptions">
                            <div id="toolFontContent">
                                <div class="form-group">
                                    <label for="txtContentTool">Entrez votre texte :</label>
                                    <textarea name="txtContentTool" class="txtContentTool"></textarea>
                                </div>
                            </div>

                            <div id="toolImageContent">

                                <h5>Choisir une image :</h5>
                                <div class="form-group">
                                    <input  name="radioImageSource" checked type="radio"/>
                                    <label for="txtContentTool">URL :</label>
                                    <input type="text" name="txtImageUrl" class="txtImageUrl"/>
                                </div>

                                <div class="form-group">
                                    <input name="radioImageSource" type="radio"/>
                                    <label for="txtContentTool">Fichier :</label>
                                    <input type="file" name="txtImageUrl" class="txtImageUrl"/>
                                </div>
                                <div class="form-group">

                                    <label for="imgSize">Taille :</label>
                                    <div>0% - 100%</div>
                                    <input type="range" class="custom-range" min="0" max="100" id="imgSize" name="imgSize" onchange="rangeImgSize.value=value">
                                    <output id="rangeImgSize" class="output-range">50</output>%
                                </div>
                                <div class="form-group">

                                    <label for="imgX">X :</label>
                                    <div>0% - 100%</div>
                                    <input type="range" class="custom-range" min="0" max="100" id="imgX" name="imgX" onchange="rangeImgX.value=value">
                                    <output id="rangeImgX" class="output-range">50</output>%
                                </div>
                                <div class="form-group">

                                    <label for="imgY">Y :</label>
                                    <div>0% - 100%</div>
                                    <input type="range" class="custom-range" min="0" max="100" id="imgY" name="imgY" onchange="rangeImgY.value=value">
                                    <output id="rangeImgY" class="output-range">50</output>%
                                </div>

                            </div>
                            <div id="toolSonContent">

                                <h5>Choisir un son :</h5>
                                <div class="form-group">
                                    <input  name="radioSonSource" checked type="radio"/>
                                    <label for="txtSonFile">URL (youtube) :</label>
                                    <input type="text" name="txtSonUrl" class="txtSonUrl"/>
                                </div>

                                <div class="form-group">
                                    <input name="radioSonSource" type="radio"/>
                                    <label for="txtSonFile">Fichier :</label>
                                    <input type="file" name="txtSonFile" class="txtSonUrl"/>
                                </div>
                                <div class="form-group">

                                    <label for="sonRead">Lecture après :</label>
                                    <input type="text" name="sonRead" value="0" class="txtSonRead"/> secondes
                                </div>


                            </div>
                            <div id="toolVideoContent">

                                <h5>Choisir une video :</h5>
                                <div class="form-group">
                                    <input  name="radioVideoSource" checked type="radio"/>
                                    <label for="txtVideoUrl">URL (youtube) :</label>
                                    <input type="text" name="txtVideoUrl" class="txtVideoUrl"/>
                                </div>

                                <div class="form-group">
                                    <input name="radioVideoSource" type="radio"/>
                                    <label for="txtVideoFile">Fichier :</label>
                                    <input type="file" name="txtVideoFile" class="txtVideoFile"/>
                                </div>
                                <div class="form-group">

                                    <label for="videoRead">Lecture après :</label>
                                    <input type="text" name="videoRead" value="0" class="txtVideoRead"/> secondes
                                </div>
                                <div class="form-group">

                                    <label for="videoSize">Taille :</label>
                                    <div>0% - 100%</div>
                                    <input type="range" class="custom-range" min="0" max="100" id="videoSize" name="videoSize" onchange="rangeVideoSize.value=value">
                                    <output id="rangeVideoSize" class="output-range">50</output>%
                                </div>
                                <div class="form-group">

                                    <label for="videoX">X :</label>
                                    <div>0% - 100%</div>
                                    <input type="range" class="custom-range" min="0" max="100" id="videoX" name="videoX" onchange="rangeVideoX.value=value">
                                    <output id="rangeVideoX" class="output-range">50</output>%
                                </div>
                                <div class="form-group">

                                    <label for="videoY">Y :</label>
                                    <div>0% - 100%</div>
                                    <input type="range" class="custom-range" min="0" max="100" id="videoY" name="videoY" onchange="rangevideoY.value=value">
                                    <output id="rangeImgY" class="output-range">50</output>%
                                </div>

                            </div>
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
                                    <button type="button" class="btn btn-default btn-lg btn-addLoc"
                                            aria-label="Left Align">
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



