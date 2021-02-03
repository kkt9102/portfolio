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
}
$(function(){
    hasClass__init();
});
