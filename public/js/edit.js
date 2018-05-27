jQuery(document).ready(function($) {





    $story = new Object();

    $story.lstSlides = [];
    $story.title = "";
    $story.synopsis = "";
    $story.difficulte = 0;


    $currentSlide = null;


    function newSlide() {
        $mySlide = new Object();
        $mySlide.number = $story.lstSlides.length +1;
        $mySlide.elements = [];
        $mySlide.localisation = "";
        $mySlide.title = "New Slide";
        $mySlide.targets = [];
        return $mySlide;
    }



    function refreshEdit(){
        $('.slideLst').empty();
        $story.lstSlides.forEach(function(x){
            // $c = $('<div></div>');
            // $c.data = x.number;
            // $c.className = "slideItem";
            // $c.textContent = x.title;
            $c = $('<div class="slideItem">'+x.title+'</div>');

            $('.slideLst').append($c);
        });

        $('.elementLst').empty();

        if($currentSlide !== null){
        $currentSlide.elements.forEach(function(x){
            $c = ' <div class="row elementItem"><div class="col-md-12"> #Element ### </div></div>';
            $('.elementLst').append($c);
        })
        }
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


    $('.elementItem').click(function($e){
        alert($e.target.data);


    });


    $('.btnAddSlide').on('click',(function($e){

        $newSlide = newSlide();
        $story.lstSlides.push($newSlide);
        refreshEdit();

    }));

    $('document').on('click','.slideItem', function(){
        alert("e");

    });




        $('.yolo').click(function($e) {

            $e.preventDefault();


        });




});



