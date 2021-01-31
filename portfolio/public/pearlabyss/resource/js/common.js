
function sldier(){
    $('.main-slider > .owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:6500,
        mouseDrag:false,
        nav:true,
        navText:["<div class='main-slide-btn right-btn'></div>","<div class='main-slide-btn left-btn'></div>"],
        dot:true,
        dotsClass: 'owl-dots',
        autoWidth:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.mobile-board-menu-section > .owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoPlay:false,
        mouseDrag:true,
        nav:false,
        dot:true,
        dotsClass: 'owl-dots',
        items:2,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2
            },
            1024:{
                items:2
            }
        }
    });
    $('.new-slider  > .owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoPlay:false,
        mouseDrag:true,
        nav:false,
        dot:true,
        dotsClass: 'owl-dots',
        items:1,
    });
};
function has_class(){
    $('.top-menu-bar').mouseenter(function(){
        var drop_menu_bg = $('.hover-bg');

        drop_menu_bg.addClass('active');
    });
    
};
function scroll__init(){
    $(document).ready(function(){
        $(window).scroll(function(){
            var top = $(window).scrollTop();
            var $footer_section = $('.footer-coypright').offset().top;
            var $banner_section = $('.news-section').offset().top;
            var $notice_section = $('.banner-menu-section').offset().top;
            if( top > 0 ){
                $('.top-menu-bar').addClass('active');
            } else {
                $('.top-menu-bar').removeClass('active');
            }
            if( top > 0 ){
                $('.mobile-menu-bar').addClass('active');
            } else {
                $('.mobile-menu-bar').removeClass('active');
            }
            if ( top > 150 ){
                $('.top-move-btn').addClass('active');
            }
            else {
                $('.top-move-btn').removeClass('active');
            }
            if ( top > $banner_section - 550 ) {
                $('.banner-menu-section > nav > ul > li').addClass('active');
            }
            else {
                $('.banner-menu-section > nav > ul > li').removeClass('active');
            }
            if ( top > $notice_section + 50) {
                $('.board-menu-section > nav > ul > li').addClass('active');
            }
            else {
                $('.board-menu-section > nav > ul > li').removeClass('active');
            }
            if ( top > $footer_section -1000 ){
                $('.top-move-btn').css('bottom','10%');
            }
            else {
                $('.top-move-btn').css('bottom','5%');
            }
            
        });
    });
};
function move_btn(){
    $('.top-move-btn').click(function(){
        $('html,body').scrollTop('0');
    });
};

function hover_bg(){
    $('.top-menu-bar > .menu-box-1 > .hover-menu > li').mouseenter(function(){
        var width = $(this).find('> span').width();
        var left = $(this).find('> span').position().left;

        $('.top-menu-bar > .menu-box-1 > .hover-menu > .menu-bottom').animate({
            width: width + "px",
            left: left + "px",
        },300);
    });
    
}

/*
$(function(){
    $(window).on('mousewheel DOMMouseScroll', function(e) {
    		e.preventDefault();
        
        var E = e.originalEvent;
        delta = 0;
        if (E.detail) {
            delta = E.detail;
        }else{
            delta = E.wheelDelta;
        }
        
        if(delta < 0){
        	$('.top-menu-bar').addClass('active');
        } else {
        	$('.top-menu-bar').removeClass('active');
        }
    });
});
*/
/*

$(function(){
    $("html, body").on('mousewheel DOMMouseScroll', function(e) {
         // html, body 에 마우스 휠 이벤트와 돔마우스스크롤 이벤트를 걸었습니다.
        var E = e.originalEvent;
        	// 변수 E 에다가는 이벤트 객체의 속성으로 사용할 수 있는 속성 인 originalEvent 를 넣었습니다.
        delta = 0;
        	// 변수 delta 에다가는 숫자 자료형 0 을 넣어 두었습니다.
        if (E.detail) {
            // 이 조건에서는 e.originalEvent 의 속성으로 detail 가 있다면 입니다.
            // 익스, 크롬 등은 e.originalEvent 에 detail 의 속성이 없으나,
            // 파이어 폭스 일 경우엔 detail 속성이 있습니다.
            // 그래서 이 조건을 실행 시킵니다.
            delta = E.detail * -40;
            // 이렇게 해주는 이유는 detail 의 값이 익스와 크롬과는 다르게 3 이 찍힙니다.
            // 익스, 크롬은 120 이 찍히죠.
            // 익스, 크롬과 동일하게 해주기 위해서 이렇게 해줍니다.
            $('span').text(delta);
        }else{
            // 이곳에서는 익스, 크롬의 e.originalEvent 의 속성으로 wheelDelta 를 사용할 수 있습니다.
            delta = E.wheelDelta;
             $('span').text(delta);
        };
    });
});
http://jsfiddle.net/Davidan/rz3vd872/
*/

// mobile-section 
function mobile_menu(){
    $(document).ready(function(){
        var marginTop = $('.mobile-menu-bar').height();
        var $mobile_top_brop_menu = $('.mobile-menu-bar > .mobile-menu-box-1 > .bars-menu-box > ul');

        console.log(marginTop);
        $mobile_top_brop_menu.css('margin-top',marginTop + 25 );
    })
    $('.mobile-menu-bar > .mobile-menu-box-1 > .bars-btn').click(function(){
        var $mobile_btn = $('.mobile-menu-bar > .mobile-menu-box-1 > .bars-btn');
        var $mobile_top_brop_menu = $('.mobile-menu-bar > .mobile-menu-box-1 > .bars-menu-box');
        var $mobile_logo = $('.mobile-menu-bar > .mobile-menu-box-1 > .logo');
        var $mobile_lang = $('.mobile-menu-bar > .mobile-menu-box-1 > .lang-change');
        
        
        if ($mobile_btn.hasClass('active')){
            $mobile_btn.removeClass('active');
            $mobile_top_brop_menu.removeClass('active');
            $mobile_logo.removeClass('active');
            $mobile_lang.removeClass('active');
        }
        else {
            $mobile_btn.addClass('active');
            $mobile_top_brop_menu.addClass('active');
            $mobile_logo.addClass('active');
            $mobile_lang.addClass('active');
        }
    });
    
    $('.mobile-menu-bar > .mobile-menu-box-1 > .bars-menu-box > ul > li > ul').each(function (index,el) {
        $(this).parent().data('top-bar-origin-height', $(this).height());
        $(this).css('height', 0);
    });
    $('.mobile-menu-bar > .mobile-menu-box-1 > .bars-menu-box > ul > li').click(function(){
        var top_bar_originHeight = $(this).data('top-bar-origin-height');
        var $active = $('.mobile-menu-bar > .mobile-menu-box-1 > .bars-menu-box > ul').find('> .active');

        if ($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).find(' > ul').css('height',0);
        }
        else {
            $active.removeClass('active');
            $active.find(' > ul').css('height', 0);
            $(this).addClass('active');
            $(this).find('> ul').css('height', top_bar_originHeight );
        }
    });


    $('.mobile-footer-section > .mobile-menu-box-2 > ul > .drop-menu > ul ').each(function (index, el) {
        $(this).parent().data('bottom-origin-height', $(this).height());
        $(this).css('height', 0);
      });
    $('.mobile-footer-section > .mobile-menu-box-2 > ul > .drop-menu').click(function(){
        var bottom_originHeight = $(this).data('bottom-origin-height');
        var $active = $('.mobile-footer-section > .mobile-menu-box-2 > ul').find('> .active');
        if ($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).find(' > ul').css('height', 0);
        }
        else {
            $active.removeClass('active');
            $active.find(' > ul').css('height', 0);
            $(this).addClass('active');
            $(this).find('> ul').css('height', bottom_originHeight + 20 );
        }
    });
    $('.mobile-menu-bar > .mobile-menu-box-1 > .lang-change > .lang-icon').click(function(){
        var $lang_chang = $('.mobile-menu-bar> .mobile-menu-box-1 > .lang-change > .lang-list');
        var $lang_list = $('.mobile-menu-bar > .mobile-menu-box-1 > .lang-change > .lang-list > li');

        if ( $lang_chang.hasClass('active')){
            $lang_chang.removeClass('active');
            $lang_list.animate({
                opacity: 0,
            });
        }
        else {
            $lang_chang.addClass('active');
            $lang_list.animate({
                opacity: 1,
            },300);
        }
    });
    
};


$(function(){
    move_btn();
    sldier();
    has_class();
    scroll__init();
    hover_bg();
    mobile_menu();
});
