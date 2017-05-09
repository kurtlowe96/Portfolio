$(function() {
    //Scroll to skillContent
    $("#scrollBox").click(function(){
        $('html, body').animate({ scrollTop: $("#skillContent").offset().top}, 800);
    });
});