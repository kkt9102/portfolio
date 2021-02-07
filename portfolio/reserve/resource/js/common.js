function hasClass__init() {
    $('#header .bars-btn').click(function () {
        var $menuBox_1 = $('#header > .menu-box-1');
        var $header = $('#header');

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $menuBox_1.removeClass('active');
            $header.removeClass('active');
        } else {
            $(this).addClass('active');
            $menuBox_1.addClass('active');
            $header.addClass('active');
        }
    });
    $('.extraction-list ul li .popup-img').click(function () {
        var $popup_win = $('.extraction-list .popup-list .popup-win');
        var index = $(this).parent().index();

        $popup_win.eq(index).addClass('active');

    });
    $('.extraction-list .popup-list > .popup-win > .con >.popup-win-header > .close-btn').click(function(){
        $(this).closest('li').removeClass('active');
    });
}
$(function () {
    hasClass__init();
});