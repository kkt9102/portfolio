function click_drop_menu(){
$('.info-page-menu-bar > nav > ul > li').click(function(){
    var $drop_menu = $(this);

    if ( $drop_menu.hasClass('active')){
        $drop_menu.removeClass('active');

    }
    else {
        $drop_menu.addClass('active');
    }
})


}

$(function(){
    click_drop_menu();
})