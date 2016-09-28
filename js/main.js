$(document).ready(function(){

    // menu-mobile__btn
    $('.menu-mobile__btn').click(function(){
        $('.menu-mobile').slideDown();
    });
    $('.menu-mobile__btn-close').click(function(){
        $('.menu-mobile').slideUp();
    });

    //
    $('.section1-content__btn').click(function(){
        $('.content__application__popup1').css('visibility','visible');
    });
    $('.icon-close1').click(function(){
        $('.content__application__popup1').css('visibility','hidden');
    });
    //------------------------
    $('.section2-content__btn').click(function(){
        $('.content__application__popup2').css('visibility','visible');
    });
    $('.icon-close2').click(function(){
        $('.content__application__popup2').css('visibility','hidden');
    });
    //------------------------
    $('.section3-content__btn').click(function(){
        $('.content__application__popup3').css('visibility','visible');
    });
    $('.icon-close3').click(function(){
        $('.content__application__popup3').css('visibility','hidden');
    });

    //---------------project-----------------------------
    $('.project-content__btn').click(function(){
        $('.content__application__popup').css('visibility','visible');
    });
    $('.icon-close-project').click(function(){
        $('.content__application__popup').css('visibility','hidden');
    });


    //  project-slider
    var project = $('.project-slider');
    project.owlCarousel({
        items:1,
        loop:true,
        nav:false,
        dots:true,
        autoplay:500,
        touchDrag:false,
        mouseDrag:false
    });
    $('.nav-next-project').click(function() {
        project.trigger('next.owl.carousel', [300]);
    });
    $('.nav-prev-project').click(function() {
        project.trigger('prev.owl.carousel', [300]);
    });


//	section-slider
    var section = $('.section3-slider');
    section.owlCarousel({
        items:2,
        loop:true,
        dots:false,
        nav:false,
        touchDrag:false,
        mouseDrag:false
    });
    $('.nav-next').click(function() {
        section.trigger('next.owl.carousel', [300]);
    });
    $('.nav-prev').click(function() {
        section.trigger('prev.owl.carousel', [300]);
    });

// project-footer
    $(function() {
        if (!Modernizr.cssvhunit) {
            var windowH = $(window).height();
            var mainDiv = $('.main-project-content');
            var footerH = $('.down');
            var html = $('html');
            var body = $('body');
            if(windowH >=700){
                $(html).css({'height':($(window).height())+'px'});
                $(mainDiv).css({'height':($(window).height())+'px'});
                $(footerH).css({'bottom':0+'px'});
            }
            else{
                $(footerH).css('position','relative');
            }
        }
    });

});

