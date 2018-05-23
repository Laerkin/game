jQuery(document).ready(function ($) {


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
    console.log($this);

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
        if ($content.id !== 'basic') {
            $(this).css('visibility', 'hidden');

        }


    });


});