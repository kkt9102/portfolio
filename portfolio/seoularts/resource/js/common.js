// hasClass
function hasClass__init(){
    $('#search_home .search').click(function(){
        var Search = $('#search_home .search + .input-box');
        if ($(this).hasClass('active')){
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }
    })
}
// qucik-menu
function Quick_Menu(){
    $(window).ready(function(){
        var Quick = $('.side-quick-menu');
        var Header = $('#header').height();

        Quick.animate({
            top : Header
        })
    });
}
$(function(){
    hasClass__init();
    Quick_Menu();
})