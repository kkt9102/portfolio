function hasClass__init(){
    $('#header .bars-btn').click(function(){
        var $menuBox_1 = $('#header > .menu-box-1');

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $menuBox_1.removeClass('active');
        } else {
            $(this).addClass('active');
            $menuBox_1.addClass('active');
        }
    });
    $('.extraction-list ul li').click(function(){
       var $popup_win = $('.extraction-list .popup-list  li');
       var index = $(this).index();

       $popup_win.eq(index).addClass('active');
    //    alert(index + 1 + '번째 입니다.');
    });
}
$(function(){
    hasClass__init();
});
