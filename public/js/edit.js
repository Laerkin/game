jQuery(document).ready(function($) {







    $story = new Object();

    $story.lstSlides = [];
    $story.title = "";
    $story.synopsis = "";
    $story.difficulte = 0;


    $currentSlide = null;

    $tFont = new Object();


    $('body').on('click', 'div.elementItem', function($e){
        $t = $(this).text().substring(4);
        switch($t){
            case "Texte":

                $('.elementOptions > div').each(function ($id, $content) {
                    // console.log($this);

                    if($(this).attr('id') === 'toolFontContent'){

                        $(this).css('visibility', 'visible');
                        $(this).css('position', 'relative');
                    }else{
                        $(this).css('visibility', 'hidden');
                        $(this).css('position', 'absolute');
                    }
                });





                break;
            case "Image":
                $('.elementOptions > div').each(function ($id, $content) {
                    // console.log($this);

                    if($(this).attr('id') === 'toolImageContent'){

                        $(this).css('visibility', 'visible');
                        $(this).css('position', 'relative');
                    }else{
                        $(this).css('visibility', 'hidden');
                        $(this).css('position', 'absolute');
                    }
                });
                break;
            case "Audio":
                $('.elementOptions > div').each(function ($id, $content) {
                    // console.log($this);

                    if($(this).attr('id') === 'toolSonContent'){

                        $(this).css('visibility', 'visible');
                        $(this).css('position', 'relative');
                    }else{
                        $(this).css('visibility', 'hidden');
                        $(this).css('position', 'absolute');
                    }
                });
                break;
            case "Video":
                $('.elementOptions > div').each(function ($id, $content) {
                    // console.log($this);

                    if($(this).attr('id') === 'toolVideoContent'){

                        $(this).css('visibility', 'visible');
                        $(this).css('position', 'relative');
                    }else{
                        $(this).css('visibility', 'hidden');
                        $(this).css('position', 'absolute');
                    }
                });
                break;
            case "Personnage":
                break;
        }
    });

    $('.toolFont').click(function($e){

        $element = new Object();
        $element.type = "Texte";
        $element.text = "";
        $story.lstSlides.forEach(function(x) {
            if($currentSlide.number == x.number) {

                x.elements.push($element);
            }
        });
        refreshEdit();

    });

    $('.toolImage').click(function($e){

        $element = new Object();
        $element.type = "Image";
        $element.image = "";
        $story.lstSlides.forEach(function(x) {
            if($currentSlide.number == x.number) {

                x.elements.push($element);
            }
        });
        refreshEdit();

    });

      $('.toolAudio').click(function($e){

        $element = new Object();
        $element.type = "Audio";
        $element.image = "";
        $story.lstSlides.forEach(function(x) {
            if($currentSlide.number == x.number) {

                x.elements.push($element);
            }
        });
        refreshEdit();

    });

    $('.toolVideo').click(function($e){

        $element = new Object();
        $element.type = "Video";
        $element.image = "";
        $story.lstSlides.forEach(function(x) {
            if($currentSlide.number == x.number) {

                x.elements.push($element);
            }
        });
        refreshEdit();

    });

    $('.toolPersonnage').click(function($e){

        $element = new Object();
        $element.type = "Personnage";
        $element.image = "";
        $story.lstSlides.forEach(function(x) {
            if($currentSlide.number == x.number) {

                x.elements.push($element);
            }
        });
        refreshEdit();

    });

    $('body').on('click','div.slideItem', function($e){

        $num = $(this).attr('number');
        $('div.slideItem').removeClass('slideItemSelect');
        $(this).addClass('slideItemSelect');

        $story.lstSlides.forEach(function(x) {
            if($num == x.number) {

                $currentSlide = x;
            }
        });
        refreshEdit();


    });

    function newSlide() {
        $mySlide = new Object();
        $mySlide.number = $story.lstSlides.length +1;
        $mySlide.elements = [];
        $mySlide.localisation = "";
        $mySlide.title = "New Slide " + $mySlide.number;
        $mySlide.targets = [];
        $currentSlide = $mySlide;
        return $mySlide;
    }



    function refreshEdit(){
        $('.slideLst').empty();
        $story.lstSlides.forEach(function(x){
            // $c = $('<div></div>');
            // $c.data = x.number;
            // $c.className = "slideItem";
            // $c.textContent = x.title;
            $class= "";
            if($currentSlide !== null) {
                if($currentSlide.number == x.number){
                    $class = " slideItemSelect";
                }
            }
            $c = $('<div class="slideItem'+$class+'" number="'+x.number+'">'+x.title+'</div>');
            //var $c = jQuery('<div class="slideItem" number="'.x.number.'">'+x.title+'</div>', { 'number': x.number });

            $('.slideLst').append($c);
        });

        $('.elementLst').empty();

        if($currentSlide !== null){
    $num = 1;
        $currentSlide.elements.forEach(function(x){

            $c = ' <div class="row elementItem"><div class="col-md-12">'+ $num +" - "+ x.type + '</div></div>';
            $num++;
            $('.elementLst').append($c);
        })
        }
        $('.elementOptions > div').each(function ($id, $content) {





            $(this).css('visibility', 'hidden');
            $(this).css('position', 'absolute');



        });
    }



    //console.log($story);



    $('.btnEditMenu').click(function ($e) {


        $this = $(this).val();
        $('#editMenu').find("button").each(function ($id, $content) {
            if ($this == $id) {
                $(this).css('background', 'lightblue');
            } else {
                $(this).css('background', 'lightgrey');
            }
        });

        $('#editContent > div').each(function ($id, $content) {
           // console.log($this);

            if ($id == $this) {

                $(this).css('visibility', 'visible');
                $(this).css('position', 'relative');
            } else {
                $(this).css('visibility', 'hidden');
                $(this).css('position', 'absolute');
            }


        });
    });

    $('#editContent > div').each(function ($id, $content) {



        if ($content.id !== 'loc') {

            $(this).css('visibility', 'hidden');
            $(this).css('position', 'absolute');
        }


    });

    $('.elementOptions > div').each(function ($id, $content) {





            $(this).css('visibility', 'hidden');
            $(this).css('position', 'absolute');



    });




    $('.elementItem').click(function($e){
        alert($e.target.data);


    });


    $('.btnAddSlide').on('click',(function($e){

        $newSlide = newSlide();
        $story.lstSlides.push($newSlide);
        refreshEdit();

    }));










});



