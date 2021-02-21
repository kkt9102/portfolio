function popup__open() {
    var $popup_bg = $('.popup-win-list > .popup-bg');
    $('#section-3 .portfolio-menu > .btn-list > li').click(function(){
        var index = $(this).index();
        var $popup_win = $('#section-3 .popup-win-list > .popup-list > li');

            $popup_win.eq(index).addClass('active');
            $popup_bg.addClass('active');
    })
}
function popup_close() {
    $('.popup-bg,.popup-close-btn').click(function(){
        $('.popup-bg').removeClass('active');
        $('.popup-close-btn')
    });
}

$(function(){
    popup__open();
    popup_close();
})