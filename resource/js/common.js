function popup__open() {
    var $popup_bg = $('.popup-win-list > .popup-bg');
    $('#section-3 .portfolio-menu > .btn-list > li').click(function(){
        var index = $(this).index();
        var $popup_Win = $('#section-3 .popup-win-list > .popup-list > li');
        var $win_Height = $(window).height();

            $popup_Win.eq(index).addClass('active').css({
                height: $win_Height - 100 + "px"
            });
            $popup_bg.addClass('active');
    })
}
function popup_close() {
    $('.popup-bg,.popup-close-btn').click(function(){
        $('.popup-bg').removeClass('active');
        $('.popup-close-btn').closest('li').removeClass('active').css('height','0');
    });
}
function Scroll__move(){
    $(document).ready(function(){
        $(window).scroll(function(){
            var $scroll__Position = $(window).scrollTop();

            console.log($scroll__Position);
        })
    })
}
$(function(){
    popup__open();
    popup_close();
    Scroll__move();
})