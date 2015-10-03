$(document).ready (function(){
    var slider = $(".sprocket-features-img-list"),
    nav = $("#page-nav"),
    slides = slider.children(),
    navs = nav.children(),
    orgNumSlides = slides.length,
    numSlides = orgNumSlides,
    nextSlide = 0,
    current = 0,
    running = false;
    
    slides.each(function(){
        $(this).children().css({
            'position': 'absolute',
            'opacity': 0,
            'z-index': 1
        });
    });
    slides.eq(current).children().eq(0).css({
        'position': 'relative',
        'opacity': 1,
        'z-index': 2
    });
    slides.eq(current).children().eq(1).css({
        'position': 'absolute',
        'opacity': 1,
        'z-index': 2
    });
    navs.removeClass("active");
    navs.eq(current).addClass("active");
    navs.click(function(){
        nextSlide = $(this).index();
        play();
    });
    $(".next").click(function(){
        nextSlide ++;
        if (nextSlide == orgNumSlides) nextSlide = 0;
        play(); 
    });
    $(".prev").click(function(){
        nextSlide --;
        if (nextSlide < 0) nextSlide = orgNumSlides-1;
        play();
    });
    function play(){
        if (running) {
            return;
        }          
        running = true;
//        slides.css('z-index', 1).fadeOut(options.speed).eq(nextSlide).css('z-index', 2).fadeIn(options.speed, animationCallback);
        
        slides.each(function(index, element){
            if (index == nextSlide) {
                $(this).children().eq(0).css({'z-index': 2, 'position': 'relative'}).animate({'opacity':1}, 400);
                $(this).children().eq(1).css({'z-index': 2, 'position': 'absolute'}).animate({'opacity':1}, 400, animationCallback);        
            } else {
                $(this).children().css({'z-index': 1, 'position': 'absolute'}).animate({'opacity': 0}, 400);
            }
        });
        
        navs.removeClass("active");
        navs.eq(nextSlide).addClass("active");
    }
    
    function animationCallback() {
        current = nextSlide;
        running = false;                                                                     
    }
    
 
});