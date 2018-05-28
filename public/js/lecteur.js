$(document).ready(function(){
    $('#fakeun').click(function() {
        $('.hidedeux').toggle("slide");
        $('.hideun').hide("slide");
    });


    $('#fakedeux').click(function() {
        $('.hidetrois').toggle("slide");
        $('.hidedeux').hide("slide");
    });


    $('#faketrois').click(function() {
        $('.hidequatre').toggle("slide");
        $('.hidetrois').hide("slide");
    });


    $('#fakequatre').click(function() {
        $('.hidecinq').toggle("slide");
        $('.hidequatre').hide("slide");
    });

    $('#fakecinq').click(function() {
        window.location = "./endOfStory/"
    });
});
