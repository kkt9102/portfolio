
 
 function main_slider() {
    $('.main-banner > .main-slider > .dots-box > .dot').click(function () {
        var $active = $('.main-banner > .main-slider > ul').find('> .active');
        var $slider = $('.main-banner > .main-slider > ul > li');
        var $next = $active.next();
        var $activeBtn = $('.main-banner > .main-slider > .dots-box').find('> .active');
        var $nextBtn = $activeBtn.next();
        var index = $(this).index();


        if ($next.length == 0 ) {
            $next = $('.main-banner > .main-slider > ul').find('> :first-child');
        } 

        if ($nextBtn.length == 0 ) {
            $nextBtn = $('.main-banner > .main-slider > .dots-box').find('> :first-child');
        }   

        
        $activeBtn.removeClass('active');
        $(this).addClass('active');
        $active.removeClass('active');
        $slider.eq(index).addClass('active');
    })
}

setInterval(function(){
    var $activeBtn = $('.main-banner > .main-slider > .dots-box').find('> .active');
    var $nextBtn = $activeBtn.next();

    if ($nextBtn.length == 0 ) {
        $nextBtn = $('.main-banner > .main-slider > .dots-box').find('> :first-child');
    }
    $nextBtn.click();  
},8000);

function side_quick_menu() {
    $(document).ready(function () {
        $(window).scroll(function () {
            var windowscroll = $(window).scrollTop();
            var $info_menu_bar =$('.info-page-menu-bar');
            if (windowscroll > 1) {
                $('.side-quick-menu').css('top', '0');
            } else {
                $('.side-quick-menu').css('top', '298.359px');
            }
            if (windowscroll > 100) {
                $info_menu_bar.css('margin-top','0');
            }
            else {
                $info_menu_bar.css('margin-top','298.359px');
            }
        })
    })

    $('.side-quick-menu > nav > ul > .title').click(function () {
        var $quick = $('.side-quick-menu > nav > ul');

        if ($quick.hasClass('active')) {
            $quick.removeClass('active');
        } else {
            $quick.addClass('active');
        }
    })
}

function tap_menu() {
    var $notice = $('.notice-section > .notice-section-box > .tap-menu-item > .notice-tap');
    var $arts_news = $('.notice-section > .notice-section-box > .tap-menu-item > .arts-news-tap');
    var $work_from_home_faq = $('.notice-section > .notice-section-box > .tap-menu-item > .work-from-home-faq-tap')
    var $covid_19_notice = $('.notice-section > .notice-section-box > .tap-menu-item > .covid-19-notice-tap');



    $('.notice-section > .notice-section-box > .tap-menu > ul > li').click(function () {
        var $click_index = $(this).index();
        var $active_menu = $('.notice-section > .notice-section-box > .tap-menu-item').find('> .active');
        $('.notice-section > .notice-section-box > .tap-menu > ul').find('>.active').removeClass('active');
        $(this).addClass('active');

        if ($click_index == 0) {
            $active_menu.removeClass('active');
            $notice.addClass('active');
        }
        if ($click_index == 1) {
            $active_menu.removeClass('active');
            $arts_news.addClass('active');
        }
        if ($click_index == 2) {
            $active_menu.removeClass('active');
            $work_from_home_faq.addClass('active');
        }
        if ($click_index == 3) {
            $active_menu.removeClass('active');
            $covid_19_notice.addClass('active');
        }
        console.log($click_index);

    })
}

function drop_menu() {

    $('.top-bar-2 > .top-bar-2-box > .menu-box-2 ul .drop-down-menu').each(function (index, el) {
        $(this).parent().data('origin-height', $(this).height());
        $(this).css('height', 0);
      });
    
      $('.top-bar-2 > .top-bar-2-box > .menu-box-2 > ul > li').mouseenter(function () {
        $(this).addClass('selected');
        $(this).siblings('.selected').removeClass('selected');
        var originHeight = $(this).data('origin-height');
        $('.top-bar-2 > .top-bar-2-box > .menu-box-2 ul .drop-down-menu').css('height', originHeight + 60);
      });
    
      $('.top-bar-2 > .top-bar-2-box > .menu-box-2 ul .drop-down-menu').mouseleave(function () {
        $('.top-bar-2 > .top-bar-2-box > .menu-box-2 ul .drop-down-menu').css('height', 0);
      });
      
      
}




/*
function menu_box_hover(){
    var $line = $('.bottom-line > .line');
   

    $('.top-bar-2 > .top-bar-2-box > .menu-box-2 > ul > li:not(:last-child)').mouseenter(function(){
        var index = $(this).index();
        var $left = $(this).offset().left;
        var $left_0 = $('.top-bar-2 > .top-bar-2-box > .menu-box-2 > ul > li:first-child').offset().left;

       $line.css('left',$left - $left_0);
       console.log($left);
    })
    $('.top-bar-2 > .top-bar-2-box > .menu-box-2 > ul > li:not(:last-child)').mouseleave(function(){
        $line.css('left','-1000%');
    })
}
*/

function slick() {
    $('.slider-div').slick({
        slide: 'div',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 1000,
        arrows: true,
        dots: true,
        autoplay: true,
        autoplaySpeed: 10000,
        pauseOnHover: true,
        vertical: false,
        dotsClass: "slick-dots",
        draggable: true,
        centerMode: true,
        variableWidth: true,
        prevArrow: '.arrow-btn > .prev-btn',
        nextArrow: '.arrow-btn > .next-btn',
    });
}

function alerted(){
	$('.alerted > .alert-box > .close-btn > .close-text').click(function(){
		$('.alerted').removeClass('active');
	})
}

$(function () {
    main_slider();
    side_quick_menu();
    tap_menu();
    drop_menu();
    slick();
    alerted();
})