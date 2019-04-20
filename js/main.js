$(document).ready(function(){
    lastScroll = 0;
    $(window).on('scroll',function() {    
        var scroll = $(window).scrollTop();
        if(lastScroll - scroll > 0) {
            $("nav").addClass("fixedHeader");
        } else {
            $("nav").removeClass("fixedHeader");
        }
        if(scroll==0){
            $("nav").removeClass("fixedHeader");
        }
        lastScroll = scroll;

        if(scroll>200){
            $(".cover .caption").css("opacity", 1-scroll/400);
        }else{
            $(".cover .caption").css("opacity", 1);
        }
        $("main").css("background-color", "rgba(239, 239, 239, " + (scroll/1000)*2 + ")");
        $(".cover img").css("margin-top", 0-scroll/10);
    });
    var initialScroll = $(window).scrollTop();
    $(".cover .caption").css("opacity", 1-initialScroll/400);
    $("main").css("background-color", "rgba(239, 239, 239, " + (initialScroll/1000)*2 + ")");
});